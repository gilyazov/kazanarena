<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
    die();
}

use \Bitrix\Main\Localization\Loc;
use \Bitrix\Main\Loader;
use \Bitrix\Sale\Delivery;
use \Bitrix\Sale\PaySystem;
use \Bitrix\Main\Engine\Contract\Controllerable;

class TourOrderComponent extends CBitrixComponent implements Controllerable
{
    // Обязательный метод
    public function configureActions()
    {
        // Сбрасываем фильтры по-умолчанию (ActionFilter\Authentication и ActionFilter\HttpMethod)
        // Предустановленные фильтры находятся в папке /bitrix/modules/main/lib/engine/actionfilter/
        return [
            'createOrder' => [ // Ajax-метод
                'prefilters' => [],
            ],
        ];
    }

    /**
     * @var \Bitrix\Sale\Order
     */
    public $order;

    protected $errors = [];

    function __construct($component = null)
    {
        parent::__construct($component);

        if(!Loader::includeModule('sale')){
            $this->errors[] = 'No sale module';
        }

        if(!Loader::includeModule('catalog')){
            $this->errors[] = 'No catalog module';
        }
    }

    protected function setBasket($siteId, $post)
    {
        /* basket */
        $basket = \Bitrix\Sale\Basket::create($siteId);
        $count = array_sum($post['count']);
        if ($count <= 5){
            // Групповой тур
            $item = $basket->createItem('catalog', 38034);
            $item->setFields(array(
                'QUANTITY' => 1,
                'CURRENCY' => 'RUB',
                'LID' => $siteId,
                'PRODUCT_PROVIDER_CLASS' => 'CCatalogProductProvider',
            ));
        }
        else{
            foreach ($post['count'] as $key => $count){
                $item = $basket->createItem('catalog', $key);
                $item->setFields(array(
                    'QUANTITY' => $count,
                    'CURRENCY' => 'RUB',
                    'LID' => $siteId,
                    'PRODUCT_PROVIDER_CLASS' => 'CCatalogProductProvider',
                ));
            }
        }

        $this->order->setBasket($basket);
    }

    protected function setShipment()
    {
        /* Shipment */
        $shipmentCollection = $this->order->getShipmentCollection();
        $shipment = $shipmentCollection->createItem();
        $service = Delivery\Services\Manager::getById(Delivery\Services\EmptyDeliveryService::getEmptyDeliveryServiceId());
        $shipment->setFields(array(
            'DELIVERY_ID' => $service['ID'],
            'DELIVERY_NAME' => $service['NAME'],
        ));
        $shipmentItemCollection = $shipment->getShipmentItemCollection();
        foreach ($this->order->getBasket() as $item)
        {
            $shipmentItem = $shipmentItemCollection->createItem($item);
            $shipmentItem->setQuantity($item->getQuantity());
        }
    }

    protected function setPayment()
    {
        /* Payment */
        $paymentCollection = $this->order->getPaymentCollection();
        $payment = $paymentCollection->createItem();
        $payment->setField('SUM', $this->order->getPrice());
        $paySystemService = PaySystem\Manager::getObjectById(3); // Uniteller

        $payment->setFields(array(
            'PAY_SYSTEM_ID' => $paySystemService->getField("PAY_SYSTEM_ID"),
            'PAY_SYSTEM_NAME' => $paySystemService->getField("NAME"),
        ));
    }

    protected function setProps($post)
    {
        $propertyCollection = $this->order->getPropertyCollection();
        $propertyCodeToId = array();

        foreach ($propertyCollection as $propertyValue) {
            $propertyCodeToId[$propertyValue->getField('CODE')] = $propertyValue->getField('ORDER_PROPS_ID');
        }

        $arProp = ['FIO', 'PHONE', 'EMAIL', 'DATE', 'TIME'];
        foreach ($arProp as $prop){
            $propertyValue = $propertyCollection->getItemByOrderPropertyId($propertyCodeToId[$prop]);
            $propertyValue->setValue($post[$prop]);
        }
    }

    protected function createVirtualOrder($post)
    {
        try {
            $siteId = \Bitrix\Main\Context::getCurrent()->getSite();
            $this->order = \Bitrix\Sale\Order::create($siteId, \CSaleUser::GetAnonymousUserID());
            $this->order->setPersonTypeId(1);

            $this->setBasket($siteId, $post);
            $this->setShipment();
            $this->setPayment();
            $this->setProps($post);

            $result = $this->order->save();
            if (!$result->isSuccess())
            {
                $this->errors[] = $result->getErrors();
            }
            else
                return $this->order->getId();

        } catch (\Exception $e) {
            $this->errors[] = $e->getMessage();
        }
    }

    public function createOrderAction($post)
    {
        if ($post['PHONE']){
            $orderId = $this->createVirtualOrder($post);

            $orderObj = \Bitrix\Sale\Order::load($orderId);
            $paymentCollection = $orderObj->getPaymentCollection();
            $payment = $paymentCollection[0];
            $service = PaySystem\Manager::getObjectById($payment->getPaymentSystemId());
            $context = \Bitrix\Main\Application::getInstance()->getContext();
            $initResult = $service->initiatePay($payment, $context->getRequest(), PaySystem\BaseServiceHandler::STRING);
            $buffered_output = $initResult->getTemplate();
        }
        return [
            'html' => $buffered_output
        ];
    }

    protected function getWeekendDays()
    {
        $arFilter = Array("IBLOCK_ID"=>39, "ACTIVE"=>"Y", '>=PROPERTY_DATE' => date( "Y-m-d" ));
        $res = CIBlockElement::GetList(Array(), $arFilter, false, false, ['ID', 'PROPERTY_DATE']);
        while($ob = $res->GetNextElement())
        {
            $arFields = $ob->GetFields();

            $weekDays[] = "'".$arFields['PROPERTY_DATE_VALUE']."'";
        }

        return $weekDays;
    }

    /**
     * Base executable method.
     * @return void
     */
    public function executeComponent()
    {
        $this->arResult['errors'] = $this->errors;
        $this->arResult['weekDays'] = $this->getWeekendDays();

        $this->includeComponentTemplate();
    }
}