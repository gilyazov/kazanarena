<h4>Адрес</h4>
<p>
 <span style="font-size: 11pt; font-family: Calibri, sans-serif;">г. Казань, пр. Ямашева, 115а</span>
</p>
 <script src="http://api-maps.yandex.ru/2.0-stable/?load=package.standard,package.geoObjects&lang=ru-RU" type="text/javascript"></script> <script type="text/javascript">
ymaps.ready(init);
var Map;
function init(){

	Map = new ymaps.Map ("ymap", {
		center: [55.820978,49.160785],
		zoom: 14,
	});
	Map.controls.add('mapTools');
	Map.controls.add('zoomControl');
	Map.controls.add('typeSelector');
	mark = new ymaps.Placemark([55.820978,49.160785], {
			balloonContentHeader: 'Kazan Arena'
		},
		{				iconImageHref:'/bitrix/templates/ka/images/logo_abb_arena.png',
			iconImageSize: [140,63],
			iconImageOffset:[-50,-64]
		}
	);
	Map.geoObjects.add(mark);
};
</script>
<div class="shBlock" id="ymap">
</div>
 <br>