<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Организация мероприятий на&nbsp;стадионе");
?><h4>Информация и&nbsp;заказ мероприятия по&nbsp;телефону:</h4>
 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "phone",
		"EDIT_TEMPLATE" => ""
	)
);?>
<div class="h20">
</div>
<div class="advBens">
	<h2 class="pink">МЫ предлагаеМ&nbsp;уникальную возможность комплексной организации Вашего события на&nbsp;любой event-площадкe стадиона</h2>
	<div class="advBensText">
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
</div>
<div class="advBens">
	<h2>Также для&nbsp;Вашего мероприятия мы&nbsp;можем предложить&nbsp;Вам</h2>
	<div class="advBensText">
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
</div>
<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>