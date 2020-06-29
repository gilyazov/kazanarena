<div class="contRight contRight2">
<div class="advBens"> 	
<h2>Задать вопрос</h2>
<div class="advBensText">
<?$APPLICATION->IncludeComponent("bitrix:iblock.element.add.form", "form", array(
"AJAX_MODE" => "Y",  // режим AJAX
"AJAX_OPTION_SHADOW" => "N", // затемнять область
"AJAX_OPTION_JUMP" => "N", // скроллить страницу до компонента
"AJAX_OPTION_STYLE" => "Y", // подключать стили
"AJAX_OPTION_HISTORY" => "N",
	"IBLOCK_TYPE" => "messages",
	"IBLOCK_ID" => "11",
	"STATUS_NEW" => "N",
	"LIST_URL" => "",
	"USE_CAPTCHA" => "N",
	"USER_MESSAGE_EDIT" => "Ваш вопрос отправлен",
	"USER_MESSAGE_ADD" => "Ваш вопрос отправлен",
	"DEFAULT_INPUT_SIZE" => "30",
	"RESIZE_IMAGES" => "N",
	"PROPERTY_CODES" => array(
		0 => "NAME",
		1 => "24",
		2 => "23",
	),
	"PROPERTY_CODES_REQUIRED" => array(
		0 => "NAME",
		1 => "24",
		2 => "23",
	),
	"GROUPS" => array(
		0 => "2",
	),
	"STATUS" => "ANY",
	"ELEMENT_ASSOC" => "CREATED_BY",
	"MAX_USER_ENTRIES" => "100000",
	"MAX_LEVELS" => "100000",
	"LEVEL_LAST" => "Y",
	"MAX_FILE_SIZE" => "0",
	"PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
	"DETAIL_TEXT_USE_HTML_EDITOR" => "N",
	"SEF_MODE" => "N",
	"SEF_FOLDER" => "/services/catering/",
	"CUSTOM_TITLE_NAME" => "Ваше имя",
	"CUSTOM_TITLE_TAGS" => "",
	"CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
	"CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
	"CUSTOM_TITLE_IBLOCK_SECTION" => "",
	"CUSTOM_TITLE_PREVIEW_TEXT" => "",
	"CUSTOM_TITLE_PREVIEW_PICTURE" => "",
	"CUSTOM_TITLE_DETAIL_TEXT" => "",
	"CUSTOM_TITLE_DETAIL_PICTURE" => ""
	),
	false
);?>
</div>
</div>
</div>