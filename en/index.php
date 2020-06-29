<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Kazan Arena");
?> 	 <? /*
<h2><span>Календарь событий <span><a id="bxid_922570" href="/calendar/" class="evLink" ><img id="bxid_548470" src="/bitrix/templates/ka/images/icocal.png" width="21" height="20"  />Все события</a></span></span></h2>
 <?$APPLICATION->IncludeComponent("bitrix:news.list", "events", Array(
	"DISPLAY_DATE" => "Y",	// Выводить дату элемента
	"DISPLAY_NAME" => "Y",	// Выводить название элемента
	"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
	"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
	"AJAX_MODE" => "N",	// Включить режим AJAX
	"IBLOCK_TYPE" => "events",	// Тип информационного блока (используется только для проверки)
	"IBLOCK_ID" => "2",	// Код информационного блока
	"NEWS_COUNT" => "16",	// Количество новостей на странице
	"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
	"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
	"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
	"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
	"FILTER_NAME" => "",	// Фильтр
	"FIELD_CODE" => "",	// Поля
	"PROPERTY_CODE" => array(	// Свойства
		0 => "DATE",
		1 => "ICON",
	),
	"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
	"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
	"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
	"SET_TITLE" => "N",	// Устанавливать заголовок страницы
	"SET_STATUS_404" => "N",	// Устанавливать статус 404, если не найдены элемент или раздел
	"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
	"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
	"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
	"PARENT_SECTION" => "",	// ID раздела
	"PARENT_SECTION_CODE" => "",	// Код раздела
	"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
	"CACHE_TYPE" => "A",	// Тип кеширования
	"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
	"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
	"CACHE_GROUPS" => "Y",	// Учитывать права доступа
	"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
	"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
	"PAGER_TITLE" => "Новости",	// Название категорий
	"PAGER_SHOW_ALWAYS" => "Y",	// Выводить всегда
	"PAGER_TEMPLATE" => "",	// Название шаблона
	"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
	"PAGER_SHOW_ALL" => "Y",	// Показывать ссылку "Все"
	"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
	"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
	"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
	),
	false
);?>	 	
*/?> 
<div class="shBlock"> 	 
  <div class="mainNavBlock"> 		 
    <div class="mainNavItem mainNavItem1"> 			 
      <h4>How to get to us</h4>
     		 			 
      <ul> 				 
        <li><img src="/bitrix/templates/ka/images/ico3.png" width="30" height="29" alt="" /> <a href="/en/stadium/how-to-get/#car" >By car</a></li>
       		 
        <li><img src="/bitrix/templates/ka/images/ico6.png" width="31" height="30" alt="" /> <a href="/en/stadium/how-to-get/#bus" >By public transport</a></li>
       				 <? /*        <li><img id="bxid_464321" src="/bitrix/templates/ka/images/ico5.png" width="32" height="30"  /> <a id="bxid_244689" href="#" >С ж/д вокзала</a></li>
       	<li><img id="bxid_693447" src="/bitrix/templates/ka/images/ico4.png" width="28" height="31"  /> <a id="bxid_829887" href="#" >Из аэропорта</a></li>			
        */ ?> 			</ul>
     		</div>
   		 
    <div class="mainNavItem mainNavItem2"> 			 
      <h4>Navigation</h4>
     	 			 
      <p><img src="/bitrix/templates/ka/images/ico7.png" width="61" height="67" alt="" /> Find your seats and take a <a href="/en/stadium/navigation/" >look around</a> the&nbsp;stadium</p>


     		</div>
   		 
    <div class="mainNavItem mainNavItem3"> 			 
      <h4>Online tour</h4>
     		 			 
      <ul> 				 				 
        <li><img src="/bitrix/templates/ka/images/ico9.png" width="27" height="25" alt="" /> <a href="/en/media/photo/" >Photo</a></li>
       
        <li><img src="/bitrix/templates/ka/images/ico10.png" width="27" height="26" alt="" /> <a href="/en/media/video/" >Video</a></li>
       				 <? /*
        <li><img id="bxid_348677" src="/bitrix/templates/ka/images/ico8.png" width="29" height="28"  /> <a id="bxid_602580" href="#" >Веб-камеры</a></li>       				
        <li><img id="bxid_893790" src="/bitrix/templates/ka/images/ico11.png" width="27" height="25"  /> <a id="bxid_91021" href="#" >3D-тур</a></li>
*/ ?> 			</ul>
     		</div>
   	</div>
 </div>
 	 
<h2 class="decor">City in the city</h2>
 	
	
 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "ent",
		"EDIT_TEMPLATE" => ""
	),
false
);?>
	
 	 	 	 
<h2 class="hdecor hdecor2">Our partners</h2>
 <?$APPLICATION->IncludeComponent("bitrix:news.list", "partners", array(
	"IBLOCK_TYPE" => "partners",
	"IBLOCK_ID" => "14",
	"NEWS_COUNT" => "20",
	"SORT_BY1" => "ACTIVE_FROM",
	"SORT_ORDER1" => "DESC",
	"SORT_BY2" => "SORT",
	"SORT_ORDER2" => "ASC",
	"FILTER_NAME" => "",
	"FIELD_CODE" => array(
		0 => "",
		1 => "",
	),
	"PROPERTY_CODE" => array(
		0 => "LINK",
		1 => "",
	),
	"CHECK_DATES" => "Y",
	"DETAIL_URL" => "",
	"AJAX_MODE" => "N",
	"AJAX_OPTION_JUMP" => "N",
	"AJAX_OPTION_STYLE" => "Y",
	"AJAX_OPTION_HISTORY" => "N",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"CACHE_FILTER" => "N",
	"CACHE_GROUPS" => "Y",
	"PREVIEW_TRUNCATE_LEN" => "",
	"ACTIVE_DATE_FORMAT" => "d.m.Y",
	"SET_TITLE" => "N",
	"SET_STATUS_404" => "N",
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
	"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?> <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>