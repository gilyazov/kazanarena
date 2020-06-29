<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Vacancies");
?>


<div class="rightCol rightCol3">
	<figure class="shBlock"> 		 
		<div class="shBlockText pink"> 			 
			<h4>Департамент персонала</h4>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "jobphone",
		"EDIT_TEMPLATE" => ""
	),
false
);?>
		</div>
	</figure>
</div>


<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "jobtext",
		"EDIT_TEMPLATE" => ""
	),
false
);?>



<h3 class="clear">Job Application</h3>
<br>


<?$APPLICATION->IncludeComponent("bitrix:iblock.element.add.form", "job", array(
"AJAX_MODE" => "Y",  // режим AJAX
"AJAX_OPTION_SHADOW" => "N", // затемнять область
"AJAX_OPTION_JUMP" => "N", // скроллить страницу до компонента
"AJAX_OPTION_STYLE" => "Y", // подключать стили
"AJAX_OPTION_HISTORY" => "N",
	"IBLOCK_TYPE" => "messages",
	"IBLOCK_ID" => "23",
	"STATUS_NEW" => "N",
	"LIST_URL" => "",
	"USE_CAPTCHA" => "N",
	"USER_MESSAGE_EDIT" => "Thank you",
	"USER_MESSAGE_ADD" => "Thank you",
	"DEFAULT_INPUT_SIZE" => "30",
	"RESIZE_IMAGES" => "N",
	"PROPERTY_CODES" => array(
		0 => "NAME",
		1 => "69",
		2 => "70",
		3 => "71",
		4 => "72",
		5 => "73",
		6 => "74",
		7 => "75",
		8 => "76",
		9 => "77",
		10 => "78",
		11 => "79",
		12 => "80",
		13 => "81",
		14 => "82",
		15 => "83",
		16 => "84",
		17 => "85",
		18 => "86",
		19 => "87",
		20 => "88",
		21 => "89",
		22 => "90",
		23 => "91",
		24 => "92",
		25 => "93",
		26 => "95",
		27 => "96",
	),
	"PROPERTY_CODES_REQUIRED" => array(
		0 => "NAME",
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
	"SEF_FOLDER" => "/test/",
	"CUSTOM_TITLE_NAME" => "Your name",
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


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>