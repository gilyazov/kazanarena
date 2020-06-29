<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Казань Арена");
?><div class="h20">
</div>
<h2><span>Новости <a class="evLink" href="/media/news/"><img width="21" height="20" src="/bitrix/templates/ka/images/icocal.png">Все новости</a></span></h2>
 <?
global $arFilter; 
$arFilter = Array(
   ">PROPERTY_DATE" => ConvertDateTime(date("d.m.Y"), "YYYY-MM-DD")." 23:59:59",
);

$APPLICATION->IncludeComponent("bitrix:news.list", "news", Array(
	"IBLOCK_TYPE" => "news",	// Тип информационного блока (используется только для проверки)
		"IBLOCK_ID" => "6",	// Код информационного блока
		"NEWS_COUNT" => "9",	// Количество новостей на странице
		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		"FILTER_NAME" => "arFilter",	// Фильтр
		"FIELD_CODE" => array(	// Поля
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "",
		),
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"CACHE_TYPE" => "N",	// Тип кеширования
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"SET_STATUS_404" => "N",	// Устанавливать статус 404, если не найдены элемент или раздел
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
		"PAGER_TEMPLATE" => "",	// Шаблон постраничной навигации
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
		"PAGER_TITLE" => "Новости",	// Название категорий
		"PAGER_SHOW_ALWAYS" => "Y",	// Выводить всегда
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "Y",	// Показывать ссылку "Все"
		"DISPLAY_DATE" => "Y",	// Выводить дату элемента
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
		"SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
		"SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
	),
	false
);?>
<h2><span>Календарь событий <a class="evLink" href="/calendar/"><img width="21" height="20" src="/bitrix/templates/ka/images/icocal.png">Все события</a></span></h2>
 <?
global $arFilter; 
/*$arFilter = Array(
   ">PROPERTY_DATE" => ConvertDateTime(date("d.m.Y"), "YYYY-MM-DD")." 00:00:00",
  // ">=PROPERTY_DATE2" => ConvertDateTime(date("d.m.Y"), "YYYY-MM-DD")." 00:00:00",
);*/


$arFilter = array(
    array(
        "LOGIC" => "OR",
        array(">PROPERTY_DATE" => ConvertDateTime(date("d.m.Y"), "YYYY-MM-DD")." 00:00:00"),
        array(">=PROPERTY_DATE2" => ConvertDateTime(date("d.m.Y"), "YYYY-MM-DD")." 00:00:00"),
    ),
);

$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"events", 
	array(
		"IBLOCK_TYPE" => "calendar",
		"IBLOCK_ID" => "28",
		"NEWS_COUNT" => "16",
		"SORT_BY1" => "PROPERTY_DATE",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "arFilter",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "DATE",
			1 => "DATE2",
			2 => "ICON",
			3 => "LOGOS",
			4 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"PAGER_TEMPLATE" => "",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_META_DESCRIPTION" => "Y"
	),
	false
);?> <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"vip",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "29",
		"IBLOCK_TYPE" => "vip",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"NEWS_COUNT" => "3",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "Y",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"CAPTION",1=>"SERVICES",2=>"COLOR",3=>"LINK",4=>"TARGET",5=>"COST",6=>"",),
		"SET_BROWSER_TITLE" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC"
	)
);?> <? /*
<div class="advBens adaptiveBanner">
<h2>Август 2014</h2>

<div class="advBensText clearfix">
<div class="date">
<strong>23</strong>
августа
<img src="/bitrix/templates/ka/images/footballico@2x.png" width="19" height="19" alt="footbalico" />
</div>

<h5>Матч - Рубин - ЦСКА</h5>
<a href="/match23aug/" class="btn"><span><em>Подробнее</em></span></a>

</div>
</div>
*/?>
<div class="shBlock">
	<div class="mainNavBlock">
		<div class="mainNavItem mainNavItem1">
			<h4>Как добраться</h4>
			<ul>
				<li><img width="30" height="29" alt="" src="/bitrix/templates/ka/images/ico3.png"> <a href="/stadium/how-to-get/#car">На машине</a></li>
				<li><img width="31" height="30" alt="" src="/bitrix/templates/ka/images/ico6.png"> <a href="/stadium/how-to-get/#bus">Общественным транспортом</a></li>
				 <? /*        <li><img id="bxid_464321" src="/bitrix/templates/ka/images/ico5.png" width="32" height="30"  /> <a id="bxid_244689" href="#" >С ж/д вокзала</a></li>
       	<li><img id="bxid_693447" src="/bitrix/templates/ka/images/ico4.png" width="28" height="31"  /> <a id="bxid_829887" href="#" >Из аэропорта</a></li>			
        */ ?>
			</ul>
		</div>
		<div class="mainNavItem mainNavItem2">
			<h4>Навигация</h4>
			<p>
				<img width="61" height="67" alt="" src="/bitrix/templates/ka/images/ico7.png"> Найдите свое место на&nbsp;трибунах и&nbsp;узнайте, <a href="/stadium/navigation/">как ориентироваться</a> на&nbsp;стадионе
			</p>
		</div>
		<div class="mainNavItem mainNavItem3">
			<h4>Онлайн-экскурсия</h4>
			<ul class="w48 left">
				<li><img width="27" height="25" alt="" src="/bitrix/templates/ka/images/ico9.png"> <a href="/media/photo/">Фото</a></li>
				<li><img width="27" height="26" alt="" src="/bitrix/templates/ka/images/ico10.png"> <a href="/media/video/">Видео</a></li>
				 <? /*
        <li><img id="bxid_348677" src="/bitrix/templates/ka/images/ico8.png" width="29" height="28"  /> <a id="bxid_602580" href="#" >Веб-камеры</a></li>       				
        <li><img id="bxid_893790" src="/bitrix/templates/ka/images/ico11.png" width="27" height="25"  /> <a id="bxid_91021" href="#" >3D-тур</a></li>
*/ ?>
			</ul>
			<ul class="w48 right">
				<li><img width="28" height="24" alt="" src="/bitrix/templates/ka/images/icophotoday.png"> <a href="/media/photo-of-the-day/">Фото дня</a></li>
				<li><img width="28" height="27" alt="" src="/bitrix/templates/ka/images/ico13.png"> <a href="/media/live-tv/">Live TV</a></li>
			</ul>
		</div>
	</div>
</div>
<h2 class="decor">Город в городе</h2>
 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "ent",
		"EDIT_TEMPLATE" => ""
	)
);?>
<h2 class="hdecor hdecor2">Наши партнеры</h2>
 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"partners",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => "",
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "partners",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"NEWS_COUNT" => "20",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "Y",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"LINK",),
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	)
);?> 
<? /* $APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
	"AREA_FILE_SHOW" => "page",
	"AREA_FILE_SUFFIX" => "mainadv",
	"EDIT_TEMPLATE" => ""
	),
	false
); */ ?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>