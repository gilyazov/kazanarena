<?
define("NEED_AUTH", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Администрирование");
$configArr = \Bitrix\Main\Config\Configuration::getValue('tour');
use Bitrix\Sale;
use Bitrix\Main\Loader;
Loader::includeModule("sale");
?>

<?
    if (
        ($orderId = $_REQUEST['ORDER_ID']) && ($_REQUEST['hash'] === md5($configArr['hash'] . $_REQUEST['ORDER_ID']))
    ) {
        $order = \Bitrix\Sale\Order::load($orderId);
        if ($order->isPaid()) {
            $propertyCollection = $order->getPropertyCollection();
            $controlProp = $propertyCollection->getItemByOrderPropertyId(4);
            if ($controlProp->getValue() === 'N') {
                $controlProp->setValue("Y");
                $controlProp->save();
            } else {
                $error = 'Тур уже был пройден';
            }
        } else {
            $error = 'Заказ не оплачен';
        }
    } else {
        $error = 'Неправильный ключ шифрования';
    }
?>

<?
    if (!empty($error)){
        echo '<div class="advBens"><h2 style="background: #cc004f">'.$error.'</h2></div>';
    }
    else
        echo '<div class="advBens"><h2>Верификация пройдена</h2></div>';
?>
    <style>
        .advBens h2{
            margin: 0;
        }
    </style>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>