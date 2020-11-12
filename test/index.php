<?require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule('sale');

$orderObj = \Bitrix\Sale\Order::load(104);
$paymentCollection = $orderObj->getPaymentCollection();
$payment = $paymentCollection[0];
$service = \Bitrix\Sale\PaySystem\Manager::getObjectById($payment->getPaymentSystemId());
$context = \Bitrix\Main\Application::getInstance()->getContext();
$service->initiatePay($payment, $context->getRequest());