<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Страница не найдена");
?> 
<style>
#article article{margin-left:0;}
aside{display:none}
</style>
<div class="errorpage">
<p>К сожалению, запрашиваемой Вами страницы <br>
не существует на сайте нашей компании. </p>

<p>Вы можете перейти на <a href="#">главную</a> страницу сайта <br>воспользоваться  или посетить основные разделы сайта: </p>

<?$APPLICATION->IncludeComponent("bitrix:menu", "menu404", array(
	"ROOT_MENU_TYPE" => "top",
	"MENU_CACHE_TYPE" => "N",
	"MENU_CACHE_TIME" => "3600",
	"MENU_CACHE_USE_GROUPS" => "Y",
	"MENU_CACHE_GET_VARS" => array(
	),
	"MAX_LEVEL" => "1",
	"CHILD_MENU_TYPE" => "left",
	"USE_EXT" => "N",
	"DELAY" => "N",
	"ALLOW_MULTI_SELECT" => "N"
	),
	false
);?>
</div>

<img src="/bitrix/templates/ka/images/404ico.jpg" alt="error" width="978" height="433" class="errorpic">

 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>