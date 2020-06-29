<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Arena study");
?>

<div class="rightCol rightCol3">
  <figure class="shBlock">
    <div class="shBlockText yellow">
      <?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "contacts",
		"EDIT_TEMPLATE" => ""
	),
	false
);?>
    </div>
  </figure>
  <figure class="shBlock">
    <div class="shBlockText green">
      <?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "file1",
		"EDIT_TEMPLATE" => ""
	),
	false
);?>
    </div>
  </figure>
  <? /*<figure class="shBlock">
    <div class="shBlockText pink">
      <?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "file2",
		"EDIT_TEMPLATE" => ""
	),
	false
);?>
    </div>
  </figure> */?>
</div>
<div class="overflow">
  <?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "top",
		"EDIT_TEMPLATE" => ""
	),
	false
);?>
</div>
<div class="h20"></div>
<div class="w100">
  <div class="advBens advContest">
    <h2>Работа СТЮАРДОМ/ХОСТЕС</h2>
    <div class="advBensText studyMain">
      <?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "center",
		"EDIT_TEMPLATE" => ""
	),
	false
);?>
      <div class="h20">
        <p></p>
      </div>
      <? /*<div class="w48 left">
        <figure class="shBlock shBlock2">
          <div class="shBlockText pink">
            <?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "center2",
		"EDIT_TEMPLATE" => ""
	),
	false
);?>
          </div>
        </figure>
      </div> */?>
      <div class="w100">
        <figure class="shBlock shBlock2">
          <div class="shBlockText pink purple">
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include", 
                ".default", 
                array(
                    "AREA_FILE_SHOW" => "page",
                    "AREA_FILE_SUFFIX" => "center3",
                    "EDIT_TEMPLATE" => ""
                ),
                false
            );?>
          </div>
        </figure>
      </div>
    </div>
  </div>
  <div class="h20"></div>
  
  <div class="w48 left">
  	<div class="advBens advContest studyBottomBlock">
    	<h2>Стюарды</h2>
        <div class="advBensText">
        <?$APPLICATION->IncludeComponent(
            "bitrix:main.include", 
            ".default", 
            array(
                "AREA_FILE_SHOW" => "page",
                "AREA_FILE_SUFFIX" => "bottom1",
                "EDIT_TEMPLATE" => ""
            ),
            false
        );?>
        </div>        
    </div>
  </div>
  
    <div class="w48 right">
  	<div class="advBens advContest studyBottomBlock">
    	<h2 class="pink">Хостес</h2>        
        <div class="advBensText">
        <?$APPLICATION->IncludeComponent(
            "bitrix:main.include", 
            ".default", 
            array(
                "AREA_FILE_SHOW" => "page",
                "AREA_FILE_SUFFIX" => "bottom2",
                "EDIT_TEMPLATE" => ""
            ),
            false
        );?>
        </div>                 
    </div>
  </div>
</div>

<div class="clear"></div>
<?$APPLICATION->IncludeComponent(
            "bitrix:main.include", 
            ".default", 
            array(
                "AREA_FILE_SHOW" => "page",
                "AREA_FILE_SUFFIX" => "bottomText",
                "EDIT_TEMPLATE" => ""
            ),
            false
        );?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
