<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Футбольный стадион Ак Барс Арена ");
?><div class="pageRight pageRight2">
	<ul>
		<li> <a class="bnone" href="/media/photo/"><img width="82" src="/bitrix/templates/ka/images/stadium2.png" height="54" alt=""></a> <a href="/media/photo/">Фото</a> </li>
		<li> <a class="bnone" href="/media/video/"><img width="85" src="/bitrix/templates/ka/images/videoico.png" height="61" alt=""></a> <a href="/media/video/">Видео</a> </li>
	</ul>
	<div class="clear">
	</div>
	<p>
 <br>
	</p>
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
<div class="h20">
</div>
<div class="advBens advContest">
	<h2>СТАДИОН в цифрах</h2>
	<div class="advBensText">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "numbers",
		"EDIT_TEMPLATE" => ""
	)
);?>
	</div>
</div>
<div class="w48 left">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "present",
		"EDIT_TEMPLATE" => ""
	)
);?>
</div>
<div class="w48 right">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "future",
		"EDIT_TEMPLATE" => ""
	)
);?>
</div>
<div class="clear h20">
</div>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "text2",
		"EDIT_TEMPLATE" => ""
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>