<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Live cam");
?>
 <div class="advBens advContest">
 <h2>Дворец водных видов спорта, ул. Сибгата Хакима</h2>
 <div class="advBensText camBlock">
 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "cam1",
		"EDIT_TEMPLATE" => ""
	),
false
);?>
</div>
</div>
 <div class="advBens advContest">
 <h2 class="pink">Пересечение улицы Чистопольская и&nbsp;пр-та Ямашева</h2>
  <div class="advBensText camBlock">
 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "cam2",
		"EDIT_TEMPLATE" => ""
	),
false
);?>
</div>
</div>
 <div class="advBens advContest">
 <h2 class="purple">Проспект Ямашева, мост через р.Казанка</h2>
  <div class="advBensText camBlock">
 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "cam3",
		"EDIT_TEMPLATE" => ""
	),
false
);?>
</div></div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>