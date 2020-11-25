<?php
$eventManager = \Bitrix\Main\EventManager::getInstance();
\Bitrix\Main\UI\Extension::load('gilyazov.pdfgenerator');
CModule::AddAutoloadClasses("gilyazov.core", []);


$eventManager->addEventHandler('iblock', 'OnAfterIBlockElementAdd', ['\Gilyazov\Core\EventHandlers\Iblock\Element', 'OnAfterIBlockElementAddHandler']);
$eventManager->addEventHandler('sale', 'OnSalePaymentEntitySaved', ['\Gilyazov\Core\EventHandlers\Sale\Payment', 'OnSalePaymentEntitySavedHandler']);
$eventManager->addEventHandler('sale', 'OnOrderPaySendEmail', ['\Gilyazov\Core\EventHandlers\Sale\Payment', 'OnOrderPaySendEmailHandler']);
$eventManager->addEventHandler('main', 'OnBeforeEventAdd', ['\Gilyazov\Core\EventHandlers\Sale\Payment', 'OnSaleOrderSendEmail']);
