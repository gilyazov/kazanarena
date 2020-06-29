<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Навигация");
?> 

<div class="stNav">
	<div class="wsSwipe">
		<a class="btn" href="#tribune"><span><em>трибуны</em></span></a>
		<a class="btn" href="#parking"><span><em>парковка</em></span></a>
	</div>
	<ul class="stNavItems">
		<li>
		
		
			<div class="stVipHints">
				<strong><span class="vip1"></span> VIP-ложи 4 этаж</strong>
				<strong><span class="vip2"></span> VIP-ложи 5 этаж</strong>
                <strong><span class="vip3"></span> Ресторан Palladium</strong>               
			</div>
            
            
            <div class="navVideo">
                <a href="http://www.youtube.com/embed/cc4dso5qMQo" class="fancybox fancybox.iframe playbtn">
                    <img src="/upload/resize_cache/iblock/fcc/300_210_2/fcc136a755316139933da7745087a4b9.jpg" alt="Навигация на стадионе &quot;Казань Арена&quot;" width="210" height="147">
                    <span class="btn"><span><small class="play"></small></span></span>
                    <span class="playmask"></span>
                </a>
                </div>
                
                
<? /*	
			<div class="shBlock">
				<div class="w50">
					<div class="stNavTable"> 		
						<div class="stNavTableTd pink">
							<div class="stNavTableText">
							<h4>Трибуна A</h4>
							<ul>
								<li><a href="#">VIP-ложи</a></li>
								<li><a href="#">Руби бар</a></li>
								<li>Сапфир лаунж <span class="soon">скоро</span></li>
							</ul>
							</div>
						</div>
							
						<div class="stNavTableTd yellow"> 	
							<div class="stNavTableText">		
							<h4>Трибуна B</h4>
							<ul>
								<li><a href="#">Музей ФК Рубин</a></li>
								<li><a href="#">Туры по стадиону</a></li>
								<li><a href="#">Магазин атрибутики</a></li>							
								<li>Спортбар <span class="soon">скоро</span></li>
								<li>Музей ретро автомобилей <span class="soon">скоро</span></li>
							</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="w50">
					<div class="stNavTable">
						<div class="stNavTableTd green"> 	
							<div class="stNavTableText">		
							<h4>Трибуна C</h4>
							<ul>
								<li><a href="#">VIP-ложи</a></li>
								<li><a href="#">Палладиум ресторан и лаундж</a></li>
								<li><a href="#">Магазин атрибутики</a></li>							
								<li>Выставочный центр «Кристалл холл» <span class="soon">скоро</span></li>
								<li>Детский городок <span class="soon">скоро</span></li>
							</ul>
							</div>
						</div>
						<div class="stNavTableTd blue"> 
							<div class="stNavTableText">		
						  <h4>Трибуна D</h4>
							Фитнесс центр:<br> сквош, бассейн 
							</div>
						</div>
					</div>
				</div>
			</div>
	*/?>		
			
		</li>
		<li class="parkingitem">
			&nbsp;
		</li>
	</ul>


</div>
<script>
$(document).ready(function(){
	$(".wsSwipe").tabs(".stNavItems>li",{
		history:true,
		onClick: function(){
			i = this.getIndex();
			$("body").attr({"class":"bodystnav"+i});
		}
	});
	stnav = $(".wsSwipe a");
	$(stnav[0]).click(function(){
		$("body").attr({"class":"bodystnav0"});
	});
	$(stnav[1]).click(function(){
		$("body").attr({"class":"bodystnav1"});
	});
	
});
</script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>