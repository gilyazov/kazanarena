<?php


namespace Gilyazov\Core\EventHandlers\Sale;


class Payment
{

    public function OnOrderPaySendEmailHandler($ID) {
        return false;
    }

    public function OnSalePaymentEntitySavedHandler(\Bitrix\Main\Event $event)
    {
        $oldValues = $event->getParameter("VALUES"); // Значения до изменения оплаты
        $payment = $event->getParameter("ENTITY");
        $order = $payment->getOrder(); // объект заказа
        $propertyCollection = $order->getPropertyCollection();

        if ($payment->getField('PAY_SYSTEM_ID') == 3) { // оплата от Uniteller

            if ($oldValues["PAID"] == 'N' && $payment->getField('PAID') == 'Y') {
                $configArr = \Bitrix\Main\Config\Configuration::getValue('tour');
                $basket = $order->getBasket();
                $basketItems = $basket->getBasketItems();
                $item = $basketItems[0];

                $url = 'http://kazanarena.com/stadium/tour/admin/?hash='.md5($configArr['hash'].$payment->getField('ORDER_ID')).'&ORDER_ID='.$payment->getField('ORDER_ID');

                $html = "
                    <style>
                        table{
                            padding-bottom: 30px;
                        }
                        th{
                            color: #ccc;
                            text-transform: uppercase;
                            width: 25%;
                            text-align: left;
                            padding-bottom: 10px;
                        }
                        td{
                            font-size: 1.3em;
                        }
                    </style>
                    <img src='http://kazanarena.com/bitrix/templates/ka/images/ab_newlogo.png'>
                    <h1>Тур по стадиону</h1>
                    
                    <table width='100%'>
                        <thead>
                            <tr>
                                <th>Номер заказа</th>
                                <th>Покупатель</th>
                                <th>Дата заказа</th>
                                <th>Цена</th>
                                <th>Тип билета</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>".$payment->getField('ORDER_ID')."</td>
                                <td>".$propertyCollection->getPayerName()->getViewHtml()."</td>
                                <td>".$order->getDateInsert()->toString()."</td>
                                <td>".$payment->getField('SUM')." руб.</td>
                                <td>".$item->getField('NAME')."</td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <div style='text-align: center'>
                        <barcode code=\"$url\" type=\"QR\" class=\"barcode\" size=\"1.8\" error=\"M\" disableborder=\"1\" />
                    </div>
                    
                    <p>
                        <small>По этому электронному билету можно посетить мероприятие один раз — на условиях, установленных организатором и администрацией площадки. Копировать и перепродавать билет запрещено. На сайте akbarsarena.com описаны условия, на которых организатор возвращает деньги за билет в случае отмены, замены или переноса мероприятия.</small>
                    </p>
                    <p>
                        <small>Не выкладывайте фото билета в соцсети! Злоумышленники могут скопировать штрих-код и попасть в зал вместо вас.</small>
                    </p>
                ";

                $mpdf = new \Mpdf\Mpdf();
                try {
                    $mpdf->WriteHTML($html);
                } catch (\Mpdf\MpdfException $e) {
                    die ($e->getMessage());
                }
                $content = $mpdf->Output('', 'S');
                $fileId = \CFile::SaveFile(
                    array(
                        "name" => "report.pdf",           // имя файла, как оно будет в письме
                        // "size" => filesize($filePath),   // работает и без указания размера
                        // "tmp_name" => $filePath,            // собственно файл
                        "type" => "application/pdf",                    // тип, не ясно зачем
                        "old_file" => "0",                  // ID "старого" файла
                        "del" => "N",                       // удалять прошлый?
                        "MODULE_ID" => "",                  // имя модуля, работает и так
                        "description" => "",                // описание
                        "content" => $content
                    ),
                    'mails',  // относительный путь от upload, где будут храниться файлы
                    false,    // ForceMD5
                    false     // SkipExt
                );

                $mailId = \Bitrix\Main\Mail\Event::sendImmediate(array(
                    "EVENT_NAME" => "FEEDBACK_FORM",
                    "LANGUAGE_ID" => "ru",
                    "MESSAGE_ID" => 55,
                    "LID" => "s1",
                    "DUPLICATE" => "N",
                    "C_FIELDS" => [
                        "EMAIL"	=> $propertyCollection->getUserEmail()->getValue(),
                        "ORDER_ID" => $payment->getField('ORDER_ID'),
                        "ORDER_SUM"	=> $payment->getField('SUM'),
                    ],
                    "FILE" => [
                        $fileId
                    ]
                ));

                if ($fileId)
                    \CFile::Delete($fileId); // удаляем файл
            }
        }
    }

    public function OnSaleOrderSendEmail(&$event, &$lid, &$arFields, &$message_id)
    {
        if ($event === "SALE_NEW_ORDER") {
            if ($arFields['ORDER_ID'] > 0) {
                \Bitrix\Main\Loader::includeModule('sale');

                $order = \Bitrix\Sale\Order::load($arFields['ORDER_ID']);
                $propertyCollection = $order->getPropertyCollection();

                $arFields['PAYER_NAME'] = $propertyCollection->getPayerName()->getValue();
                $arFields['PAYER_PHONE'] = $propertyCollection->getPhone()->getValue();
                $arFields['PAYER_EMAIL'] = $propertyCollection->getUserEmail()->getValue();
            }
        }
    }
}