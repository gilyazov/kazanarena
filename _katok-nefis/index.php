<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Каток NEFIS");
?> 

<p style="font-size:18px;"><strong>Бери коньки и&nbsp;приходи!</strong></p>

<div class="rightCol rightCol3"> 

<figure class="shBlock"> 		 
<div class="mainNavItem2 shBlockText pink">
<h4>Контакты</h4>
<p>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "contact",
		"EDIT_TEMPLATE" => ""
	),
	false
);?>
</p>
</div>
</figure>


<figure class="shBlock"> 		 
<div class="mainNavItem2 shBlockText green">
<a target="_blank" class="picLeft" href="/upload/files/katok-scheme.png" ><img width="29" height="35" src="/bitrix/templates/ka/images/price.png" alt="" /></a>
<a target="_blank" href="/upload/files/katok-scheme.png">Посмотреть схему</a><br /> расположения катка
</div>
</figure>
 
    <div class="advBens advStart"> 	 	 
        <h2>Расписание</h2> 
		<p class="s14">будни</p>
        <div class="shBlock2 costItems raspTime">        
	        <figure><div>12:00 <small>до</small> 22:00</div></figure>
        </div>
		<p class="s14">в&nbsp;выходные<br /> и&nbsp;праздичные</p>
        <div class="shBlock2 costItems raspTime">        
	        <figure><div>10:00 <small>до</small> 22:00</div></figure>
        </div>
		<p class="s14">технический перерыв</p>
        <div class="shBlock2 costItems raspTime">        
	        <figure><div>15:00 <small>до</small> 17:00</div></figure>
        </div>
        
    </div>





<figure class="shBlock"> 		 
<div class="mainNavItem2 shBlockText green">
<a target="_blank" class="picLeft" href="/upload/files/katok-rules.png" ><img width="29" height="35" src="/bitrix/templates/ka/images/price.png" alt="" /></a>
<a target="_blank" href="/upload/files/katok-rules.png">Прочитать правила</a><br /> поведения на&nbsp;катке
</div>
</figure>


<figure class="shBlock"> 		 
<div class="mainNavItem shBlockText pink"> 				 
<h3>Как добраться</h3>
<ul> 				 
<li><img width="30" height="29" src="/bitrix/templates/ka/images/ico3.png" alt=""> <a href="/stadium/how-to-get/#car">На машине</a></li>
<li><img width="31" height="30" src="/bitrix/templates/ka/images/ico6.png" alt=""> <a href="/stadium/how-to-get/#bus">Общественным транспортом</a></li>
</ul>
</div>
</figure>
</div>



<div class="newsItem2">
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "text1",
		"EDIT_TEMPLATE" => ""
	),
	false
);?>

<div id="jsMore">
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "text2",
		"EDIT_TEMPLATE" => ""
	),
	false
);?>
</div>
<a href="#" class="btn" id="jsMoreLink"><span><em>читать далее</em></span></a>


<div class="catPics">

<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "pics",
		"EDIT_TEMPLATE" => ""
	),
	false
);?>
</div>

<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "text3",
		"EDIT_TEMPLATE" => ""
	),
	false
);?>
<br />

<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "cont1",
		"EDIT_TEMPLATE" => ""
	),
	false
);?>

<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "cont2",
		"EDIT_TEMPLATE" => ""
	),
	false
);?>

<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "cont3",
		"EDIT_TEMPLATE" => ""
	),
	false
);?>





</div>
<style>#article article{margin:0;}</style>
<script>
$(document).ready(function(){
	$("#jsMoreLink").click(function(){
		$(this).fadeOut(500);
		$("#jsMore").slideDown(500);
		return false;
	});
});
</script>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>