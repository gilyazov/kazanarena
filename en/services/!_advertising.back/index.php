<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Advertising at the Kazan Arena");
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
  <h2>Aadvantages of advertising at the Kazan Arena</h2>
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