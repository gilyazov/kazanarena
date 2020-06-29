<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Медиафасад");
?><div class="rightCol rightCol3">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "right",
		"EDIT_TEMPLATE" => ""
	)
);?>
</div>
<div class="overflow">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "text",
		"EDIT_TEMPLATE" => ""
	)
);?>
</div>
 <br>
<div class="advBens">
	<h2>Преимущества медиафасада</h2>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "ben",
		"EDIT_TEMPLATE" => ""
	)
);?>
</div>
<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>