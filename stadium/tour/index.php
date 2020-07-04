<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Тур по стадиону");
?> <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "text",
		"EDIT_TEMPLATE" => ""
	)
);?> 
<div class="shBlock overflow"> 	 
  <div class="rightCol"> <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "rasp",
		"EDIT_TEMPLATE" => ""
	)
);?> </div>
 
  <div class="videoCol"> 	 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "video",
		"EDIT_TEMPLATE" => ""
	)
);?> </div>
 </div>
 
<div class="advBens advBensStand"> 	 	 
    <h2>тур по стадиону</h2>
    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        ".default",
        Array(
            "AREA_FILE_SHOW" => "page",
            "AREA_FILE_SUFFIX" => "standart",
            "EDIT_TEMPLATE" => ""
        )
    );?>
</div>

<?$APPLICATION->IncludeComponent(
    "gilyazov:tour.order",
    ".default",
    Array(

    )
);?>
 <? /*
<div class="advBens right"> 	
<h2>VIP-тур</h2>
<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
	"AREA_FILE_SHOW" => "page",
	"AREA_FILE_SUFFIX" => "vip",
	"EDIT_TEMPLATE" => ""
	),
	false
);?>
</div>
*/ ?> <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>