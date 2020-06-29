<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Реклама на стадионе");
?> 
<div class="overflow"> <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "text",
		"EDIT_TEMPLATE" => ""
	)
);?> </div>
 
<br />
 
<div class="advBens"> 	 
  <h2>Преимущества рекламы на стадионе &laquo;Казань Арена&raquo;</h2>
 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "ben",
		"EDIT_TEMPLATE" => ""
	)
);?> </div>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>