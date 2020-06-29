<div class="advBens formCol"> 	
<h2>Заявка на выездное обслуживание</h2>
<div class="advBensText">
<?$APPLICATION->IncludeComponent("bitrix:iblock.element.add.form", "form", Array(
"AJAX_MODE" => "Y",  // режим AJAX
"AJAX_OPTION_SHADOW" => "N", // затемнять область
"AJAX_OPTION_JUMP" => "N", // скроллить страницу до компонента
"AJAX_OPTION_STYLE" => "Y", // подключать стили
"AJAX_OPTION_HISTORY" => "N",
	"IBLOCK_TYPE" => "messages",	// Тип инфоблока
	"IBLOCK_ID" => "4",	// Инфоблок
	"STATUS_NEW" => "N",	// Деактивировать элемент
	"LIST_URL" => "",	// Страница со списком своих элементов
	"USE_CAPTCHA" => "N",	// Использовать CAPTCHA
	"USER_MESSAGE_EDIT" => "Ваша заявка отправлена",	// Сообщение об успешном сохранении
	"USER_MESSAGE_ADD" => "Ваша заявка отправлена",	// Сообщение об успешном добавлении
	"DEFAULT_INPUT_SIZE" => "30",	// Размер полей ввода
	"RESIZE_IMAGES" => "N",	// Использовать настройки инфоблока для обработки изображений
	"PROPERTY_CODES" => array(	// Свойства, выводимые на редактирование
		0 => "NAME",
		1 => "12",
		2 => "13",
	),
	"PROPERTY_CODES_REQUIRED" => array(	// Свойства, обязательные для заполнения
		0 => "NAME",
		1 => "12",
		2 => "13",
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
	"SEF_FOLDER" => "/services/catering/",	// Каталог ЧПУ (относительно корня сайта)
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
</div>