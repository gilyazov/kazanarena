<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Tour around the stadium");
?> 
<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
	"AREA_FILE_SHOW" => "page",
	"AREA_FILE_SUFFIX" => "text",
	"EDIT_TEMPLATE" => ""
	),
	false
);?>

<div class="shBlock overflow"> 	
<div class="rightCol"> 
<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
	"AREA_FILE_SHOW" => "page",
	"AREA_FILE_SUFFIX" => "rasp",
	"EDIT_TEMPLATE" => ""
	),
	false
);?>
</div>
<div class="videoCol"> 	
<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
	"AREA_FILE_SHOW" => "page",
	"AREA_FILE_SUFFIX" => "video",
	"EDIT_TEMPLATE" => ""
	),
	false
);?>
</div>
</div>
<div class="advBens advBensStand"> 	 	
<h2>Standard Tour</h2>
<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
	"AREA_FILE_SHOW" => "page",
	"AREA_FILE_SUFFIX" => "standart",
	"EDIT_TEMPLATE" => ""
	),
	false
);?>
</div>
<? /*
<div class="advBens right"> 	
<h2>VIP-Tour</h2>
<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
	"AREA_FILE_SHOW" => "page",
	"AREA_FILE_SUFFIX" => "vip",
	"EDIT_TEMPLATE" => ""
	),
	false
);?>
</div>
*/?>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>