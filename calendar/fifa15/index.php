<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Турнир «Fifa 15»");
?> 
<div class="shBlock overflow"> 
  <div class="rightCol"> 
    <div style="height: 340px;" class="raspBlock yellow tCenter"> 
      <div class="f15logos"> 	<img src="/bitrix/templates/ka/images/f15-1.png" width="81" height="24"  /> 	<img src="/bitrix/templates/ka/images/f15-2.png" width="45" height="35"  /> </div>
     
      <div class="f15Date"> 	 
        <div class="iBlock"> 
          <h4>21 декабря</h4>
         
          <h5>Стоимость</h5>
         			 
          <div class="shBlock3 costItems"> 	<figure class="green"> <span>участник</span> <strong>200</strong> рублей </figure> <figure class="yellow"> <span>болельщик</span> <strong>100</strong>рублей</figure> 			</div>
         </div>
       </div>
     
      <div class="f15Btn"> 	 <a class="btn fancybox" href="#fifa15Form" ><span><em>я пойду</em></span></a> 	</div>
     </div>
   </div>
 
  <div class="videoCol"> 
    <div style="background-image: url(http://kazanarena.com/bitrix/templates/ka/images/fifa15.jpg);" class="iframe"></div>
   </div>
 </div>
 
<h3 class="w70" style="font-size: 21px; text-transform: none; padding: 0px 0px 20px;">На&nbsp;стадионе &laquo;Казань Арена&raquo; пройдет турнир по&nbsp;игре «FIFA&nbsp;15» на&nbsp;PlayStation</h3>
 
<div class="rightCol"> 
  <div class="shBlock"> 
    <div class="shBlockText green f15Win"> 
      <h4>Главный приз</h4>
     <img src="/bitrix/templates/ka/images/iphone6.png" width="58" height="74" alt="iphone 6"  /> 	 
      <div style="padding-top: 15px;">Именной 
        <br />
       iPhone 6&nbsp;Plus</div>
     	 
      <div class="clear">А&nbsp;также подарки 
        <br />
       от&nbsp;партнеров события</div>
     </div>
   </div>
 </div>
 
<div class="overflow"><?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "text",
		"EDIT_TEMPLATE" => ""
	)
);?> <? /*
<p><a id="bxid_773334" href="#" >Условия конкурса</a></p>

<div class="photoPreview photoPreview2 shBlock">
<a id="bxid_109960" href="http://www.youtube.com/embed/Zo1avlHhsK8" class="fancybox fancybox.iframe playbtn" >
	<img id="bxid_965742" src="/bitrix/templates/ka/images/f15video.jpg" alt="" width="700" height="450"  />
	<span class="btn"><span><small class="play"></small></span></span>
	<span class="playmask"></span>
</a>
</div>


</div>

<h3 style="text-transform:uppercase;">Спонсоры мероприятия</h3>
<p class="f15Friends">
<a id="bxid_420307" href="#" target="_blank" ><img id="bxid_27816" src="/bitrix/templates/ka/images/f15-3.png" width="111" height="35" alt=""  /></a>
<a id="bxid_233688" href="#" target="_blank" ><img id="bxid_286343" src="/bitrix/templates/ka/images/f15-4.png" width="89" height="51" alt=""  /></a>
</p>
*/?> <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "form",
		"EDIT_TEMPLATE" => ""
	)
);?> </div>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>