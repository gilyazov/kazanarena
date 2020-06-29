<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Вакансии");
?> 
<div class="w48 left"><?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"vacancylist",
	Array(
		"IBLOCK_TYPE" => "vacancy",
		"IBLOCK_ID" => "25",
		"NEWS_COUNT" => "50",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"PROPERTY_CODE" => array(0=>"MONEY",1=>"RESPONS",2=>"REQUIR",3=>"CONDITIONS",4=>"",),
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
		"PAGER_TEMPLATE" => ".default",
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
	)
);?></div>
<div class="w48 right">
<div class="rightvacancyform ">
<h2>Стань частью команды</h2>
<p>Не нашли подходящей вакансии? Пришлите свое резюме, 
и мы свяжемся с вами чтобы обсудить возможности трудоустройства.</p>

<?$APPLICATION->IncludeComponent("bitrix:iblock.element.add.form", "vacancyform", Array(
	"IBLOCK_TYPE" => "vacancy",	// Тип инфоблока
	"IBLOCK_ID" => "27",	// Инфоблок
    "AJAX_MODE" => "Y",
	"AJAX_OPTION_SHADOW" => "N",
	"AJAX_OPTION_JUMP" => "N",
	"AJAX_OPTION_STYLE" => "Y",
	"AJAX_OPTION_HISTORY" => "N",
	"STATUS_NEW" => "N",	// Деактивировать элемент
	"LIST_URL" => "",	// Страница со списком своих элементов
	"USE_CAPTCHA" => "N",	// Использовать CAPTCHA
	"USER_MESSAGE_EDIT" => "Спасибо за заявку, мы скоро с вами свяжемся",
	"USER_MESSAGE_ADD" => "Спасибо за заявку, мы скоро с вами свяжемся",
	"DEFAULT_INPUT_SIZE" => "30",	// Размер полей ввода
	"RESIZE_IMAGES" => "N",	// Использовать настройки инфоблока для обработки изображений
	"PROPERTY_CODES" => array(	// Свойства, выводимые на редактирование
		0 => "NAME",
		1 => "105",
		2 => "106",
		3 => "107",
	),
	"PROPERTY_CODES_REQUIRED" => array(	// Свойства, обязательные для заполнения
		0 => "NAME",
		1 => "106",
	),
	"GROUPS" => array(	// Группы пользователей, имеющие право на добавление/редактирование
		0 => "2",
	),
	"STATUS" => "ANY",	// Редактирование возможно
	"ELEMENT_ASSOC" => "CREATED_BY",	// Привязка к пользователю
	"MAX_USER_ENTRIES" => "100000",	// Ограничить кол-во элементов для одного пользователя
	"MAX_LEVELS" => "100000",	// Ограничить кол-во рубрик, в которые можно добавлять элемент
	"LEVEL_LAST" => "Y",	// Разрешить добавление только на последний уровень рубрикатора
	"MAX_FILE_SIZE" => "0",	// Максимальный размер загружаемых файлов, байт (0 - не ограничивать)
	"PREVIEW_TEXT_USE_HTML_EDITOR" => "N",	// Использовать визуальный редактор для редактирования текста анонса
	"DETAIL_TEXT_USE_HTML_EDITOR" => "N",	// Использовать визуальный редактор для редактирования подробного текста
	"SEF_MODE" => "N",	// Включить поддержку ЧПУ
	"SEF_FOLDER" => "/jobs/form/",	// Каталог ЧПУ (относительно корня сайта)
	"CUSTOM_TITLE_NAME" => "Ваше имя",	// * наименование *
	"CUSTOM_TITLE_TAGS" => "",	// * теги *
	"CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",	// * дата начала *
	"CUSTOM_TITLE_DATE_ACTIVE_TO" => "",	// * дата завершения *
	"CUSTOM_TITLE_IBLOCK_SECTION" => "",	// * раздел инфоблока *
	"CUSTOM_TITLE_PREVIEW_TEXT" => "",	// * текст анонса *
	"CUSTOM_TITLE_PREVIEW_PICTURE" => "",	// * картинка анонса *
	"CUSTOM_TITLE_DETAIL_TEXT" => "",	// * подробный текст *
	"CUSTOM_TITLE_DETAIL_PICTURE" => "",	// * подробная картинка *
	),
	false
);?>
</div>

<div class="bottominfo">
    <h2>анкета соискателя</h2>
    <p>Если у вас нет готового резюме, вы можете </p>
    <h3><a href="/jobs/form/">Заполнить нашу анкету</a></h3>

</div></div>

 
<div id="vacancymodal"> 
  <h2>Стань частью команды</h2>
 <?$APPLICATION->IncludeComponent(
	"bitrix:iblock.element.add.form",
	"modalform",
	Array(
		"IBLOCK_TYPE" => "vacancy",
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_SHADOW" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"IBLOCK_ID" => "26",
		"STATUS_NEW" => "N",
		"LIST_URL" => "",
		"USE_CAPTCHA" => "N",
		"USER_MESSAGE_EDIT" => "Спасибо за заявку, мы скоро с вами свяжемся",
		"USER_MESSAGE_ADD" => "Спасибо за заявку, мы скоро с вами свяжемся",
		"DEFAULT_INPUT_SIZE" => "30",
		"RESIZE_IMAGES" => "N",
		"PROPERTY_CODES" => array(0=>"NAME",1=>"101",2=>"104",3=>"102",4=>"103",),
		"PROPERTY_CODES_REQUIRED" => array(0=>"NAME",1=>"102",),
		"GROUPS" => array(0=>"2",),
		"STATUS" => "ANY",
		"ELEMENT_ASSOC" => "CREATED_BY",
		"MAX_USER_ENTRIES" => "100000",
		"MAX_LEVELS" => "100000",
		"LEVEL_LAST" => "Y",
		"MAX_FILE_SIZE" => "0",
		"PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
		"DETAIL_TEXT_USE_HTML_EDITOR" => "N",
		"SEF_MODE" => "N",
		"CUSTOM_TITLE_NAME" => "Ваше имя",
		"CUSTOM_TITLE_TAGS" => "",
		"CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
		"CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
		"CUSTOM_TITLE_IBLOCK_SECTION" => "",
		"CUSTOM_TITLE_PREVIEW_TEXT" => "",
		"CUSTOM_TITLE_PREVIEW_PICTURE" => "",
		"CUSTOM_TITLE_DETAIL_TEXT" => "",
		"CUSTOM_TITLE_DETAIL_PICTURE" => ""
	)
);?> 
  <div class="bottominfo"> 
    <p>Если у вас нет готового резюме, вы можете </p>
   
    <h3><a href="/jobs/form/" >Заполнить нашу анкету</a></h3>
   </div>
 </div>
 
<script>
$('.vacancylist h3').click(function (e) {
   if ($(this).next('.hiddeninfo').is(":visible")) {
      $(this).next('.hiddeninfo').slideUp();
   }
   else {
      $('.vacancylist .hiddeninfo').slideUp();
      $(this).next('.hiddeninfo').slideDown();
   }
});

$(".vacancylist .btn").click(function () {
   name = $(this).attr("data-name");
   $("#input104").attr({
      "value": name
   });
});
$(document).ready(function () {

   $("#vacancymodal form").validate(
   {rules: {
         PROPERTY_FILE_103_0: {
            extension: "docx|doc|rtf|pdf"
         }
      },
      messages: {
         PROPERTY_FILE_103_0: {
            extension: "Только .docx, .doc, .rtf, .pdf."
         }
	  }
   }
   
   );
   $(".rightvacancyform  form").validate({
   
   rules: {
         PROPERTY_FILE_107_0: {
            extension: "docx|doc|rtf|pdf"
         }
      },
      messages: {
         PROPERTY_FILE_107_0: {
            extension: "Только .docx, .doc, .rtf, .pdf."
         }
	  }
   }
   
   );
   $('#vacancymodal .file').styler({
      fileBrowse: "Прикрепить файл"
   });
   $('.rightvacancyform .file').styler({
      fileBrowse: "Прикрепить файл"
   });
   
   $("#input106").mask("+9 (999) 999-99-99");
   $("#input102").mask("+9 (999) 999-99-99");
});
</script>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>