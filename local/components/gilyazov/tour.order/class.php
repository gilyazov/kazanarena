<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
    die();
}

/*1. форма сбора контактной информации
2. подключение юнителлера
3. подключения каталога к клиенту*/

use \Bitrix\Main\Localization\Loc;
use \Bitrix\Main\Loader;
use \Bitrix\Sale\Delivery;
use \Bitrix\Sale\PaySystem;

class TourOrderComponent extends CBitrixComponent
{
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
        };

        if(!Loader::includeModule('catalog')){
            $this->errors[] = 'No catalog module';
        };
    }

    protected function setBasket($siteId)
    {
        /* basket */
        $basket = \Bitrix\Sale\Basket::create($siteId);
        $item = $basket->createItem('catalog', 34654);
        $item->setFields(array(
            'QUANTITY' => 1,
            'CURRENCY' => 'RUB',
            'LID' => $siteId,
            'PRODUCT_PROVIDER_CLASS' => 'CCatalogProductProvider',
        ));
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
        $paySystemService = PaySystem\Manager::getObjectById(2); //обычно 1 - это оплата наличными

        $payment->setFields(array(
            'PAY_SYSTEM_ID' => $paySystemService->getField("PAY_SYSTEM_ID"),
            'PAY_SYSTEM_NAME' => $paySystemService->getField("NAME"),
        ));
    }

    protected function createVirtualOrder()
    {
        global $USER;

        try {
            $siteId = \Bitrix\Main\Context::getCurrent()->getSite();
            $this->order = \Bitrix\Sale\Order::create($siteId, \CSaleUser::GetAnonymousUserID());
            $this->order->setPersonTypeId(1);

            $this->setBasket($siteId);
            $this->setShipment();
            $this->setPayment();

            $result = $this->order->save();
            if (!$result->isSuccess())
            {
                $this->errors[] = $result->getErrors();
            }
        } catch (\Exception $e) {
            $this->errors[] = $e->getMessage();
        }
    }

    /**
     * Base executable method.
     * @return void
     */
    public function executeComponent()
    {
        /*echo '<pre>';
        print_r($this->request);
        echo '</pre>';
        $this->arResult['errors'] = $this->errors;*/
        //$this->createVirtualOrder();

        $this->includeComponentTemplate();
    }
}