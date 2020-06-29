<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?> 
<div class="contLeft">
<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
	"AREA_FILE_SHOW" => "page",
	"AREA_FILE_SUFFIX" => "phones",
	"EDIT_TEMPLATE" => ""
	),
	false
);?>
</div>
<div class="contCenter">
<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
	"AREA_FILE_SHOW" => "page",
	"AREA_FILE_SUFFIX" => "map",
	"EDIT_TEMPLATE" => ""
	),
	false
);?>

<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
	"AREA_FILE_SHOW" => "page",
	"AREA_FILE_SUFFIX" => "howtoget",
	"EDIT_TEMPLATE" => ""
	),
	false
);?>

</div>
<div class="contRight">

<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "form",
		"EDIT_TEMPLATE" => ""
	)
);?>


</div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>