<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Event organization");
?>
<div class="rightCol"> <?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
	"AREA_FILE_SHOW" => "page",
	"AREA_FILE_SUFFIX" => "right",
	"EDIT_TEMPLATE" => ""
	),
	false
);?>
</div>
<div class="overflow">
<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
	"AREA_FILE_SHOW" => "page",
	"AREA_FILE_SUFFIX" => "text",
	"EDIT_TEMPLATE" => ""
	),
	false
);?>
</div>
<br>
<div class="advBens"> 	
<h2>We offer</h2>
<div class="advBensText">
<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
	"AREA_FILE_SHOW" => "page",
	"AREA_FILE_SUFFIX" => "ben",
	"EDIT_TEMPLATE" => ""
	),
	false
);?>
</div>
</div> 

<? /*
<div class="orgItems">
<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
	"AREA_FILE_SHOW" => "page",
	"AREA_FILE_SUFFIX" => "orgs",
	"EDIT_TEMPLATE" => ""
	),
	false
);?>
</div>*/?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>