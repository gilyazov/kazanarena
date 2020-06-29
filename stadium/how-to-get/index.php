<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Как добраться");
?>
<div class="rightCol"> 
 <?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
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


<script src="http://api-maps.yandex.ru/2.0-stable/?load=package.standard,package.geoObjects&lang=ru-RU" type="text/javascript"></script>
<script type="text/javascript">
ymaps.ready(init);
var Map;
function init(){

	Map = new ymaps.Map ("mapmodal", {
		center: [55.820978,49.160785],
		zoom: 14,
	});
	Map.controls.add('mapTools');
	Map.controls.add('zoomControl');
	Map.controls.add('typeSelector');
	mark = new ymaps.Placemark([55.820978,49.160785], {
			balloonContentHeader: 'Kazan Arena'
		},
		{				iconImageHref:'/bitrix/templates/ka/images/mapbul.png',
			iconImageSize: [140,64],
			iconImageOffset:[-50,-64]
		}
	);
	Map.geoObjects.add(mark);
};
</script>

<div id="mapmodal"></div>

 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>