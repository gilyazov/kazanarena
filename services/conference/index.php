<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Конференц-услуги");
?>

<div class="rightCol rightCol3">
<figure class="shBlock"> 		 
<div class="shBlockText yellow"> 	
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "contact",
		"EDIT_TEMPLATE" => ""
	),
false
);?>			 
</div>
</figure>
</div>

<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "text",
		"EDIT_TEMPLATE" => ""
	),
false
);?>

<div class="h20"></div>
<div class="advBens advContest">
  <h2>Залы Sapphire Lounge и&nbsp;Ruby Bar</h2>
  <div class="advBensText">
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "text2",
		"EDIT_TEMPLATE" => ""
	),
false
);?>
    <div class="contPlaces contPlaces2">
      <div class="shBlock2 costItems">
        <figure class="pink">
          <div> <span>Фуршетный зал Sapphire Lounge&nbsp;на </span> <strong>200</strong> Персон </div>
        </figure>
      </div>
      <div class="shBlock2 costItems">
        <figure class="purple">
          <div> <span>Банкетный зал Ruby Bar уровня премиум&nbsp;на </span> <strong>120</strong> Гостей </div>
        </figure>
      </div>
      <div class="shBlock2 costItems">
        <figure>
          <div> <span>Возможность индивидуального оформления площадок для&nbsp;мероприятия</span> </div>
        </figure>
      </div>
    </div>
  </div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
