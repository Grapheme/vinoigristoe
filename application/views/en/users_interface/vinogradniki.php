<!DOCTYPE html>
<!-- /ht Paul Irish - http://front.ie/j5OMXi -->
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en"><!--<![endif]-->
	<?php $this->load->view($language."/users_interface/includes/head");?>
	
<body>
	<div class="container" class="cf">
		<?php $this->load->view($language."/users_interface/includes/header-small");?>
		
			<article class="cf">
				<aside>
					<a class="aside-logo purple">The Tsymlyansky Wines</a>
					<div class="where-to-buy">
						<img src="<?=$baseurl;?>images/where_to_buy.png" alt="Where to buy Tsymlyansky wines?" />
						<h2><?=anchor('where','Where to buy<br/> Tsymlyansky wines?');?></h2>
					</div>
				</aside>
				<div id="main" role="main" class="cf">
					<div class="wine-flag news-updates">
						The most<br />recent:<br />
						<?=anchor('http://vk.com/vinoigristoe','<img src="'.$baseurl.'images/vk-icon.png" alt="Вконтакте" />');?>
						<?=anchor('http://www.facebook.com/Tsimlyanskoe','<img src="'.$baseurl.'images/fb-icon.png" alt="Facebook" />');?>
						<?=anchor('https://www.linkedin.com/company/tsimlyansk-wines-%D1%86%D0%B8%D0%BC%D0%BB%D1%8F%D0%BD%D1%81%D0%BA%D0%B8%D0%B5-%D0%B2%D0%B8%D0%BD%D0%B0-','<img src="'.$baseurl.'images/ln-icon.png" alt="LinkedIn" />');?>
					</div>
					<div class="inside no-padding">
						<img src="<?=$baseurl;?>images/news_promo_new.png" alt="Каталог продукции" />
						<div class="news-header">
							<h1>Tsimlyanskaya winemaking area is one of the oldest in Russia</h1>
						</div>
						<div class="spline"></div>
						<div class="news-body">
							<p>
								Before the completion of the Reservoir, Tsimlyansk vineyards climbed the steep slopes 
								of the Don river up to the remains of the Sarkel fortress. To the boat and ferry passengers 
								gazing skywards, the vines appeared as a solid 40 meter emerald wall with scattered glistening 
								jewels of ripening grapes. 
							</p>
							<p>
								<img src="<?=$baseurl;?>images/vinogradniki-1.jpg" alt="" />
								<img src="<?=$baseurl;?>images/vinogradniki-2.jpg" alt="" />
							</p>
							<p>
								When the Tsimlyansk Reservoir began to be filled with water in 1952, 
								the Cossack vineyards happened to be in the flood zone. They were carefully replanted to higher 
								ground in order to save these varieties.
							</p>
							<p>
								<img src="<?=$baseurl;?>images/vinogradniki-4.jpg" alt="" />
								<img src="<?=$baseurl;?>images/vinogradniki-5.jpg" alt="" />
							</p>
							<p>
								Now our vineyards stretch over an area of 1,000 hectares (or nearly 2500 acres). Among the preserved and 
								cultivated varieties are Tsimlyansk Black, Plechistik and Krasnostopzolotovsky. They are indigenous to Don with 
								no genetic relationship to known European grape varieties.
							</p>
							<p>
								<img src="<?=$baseurl;?>images/vinogradniki-3.jpg" alt="" />
							</p>
							<p>
								Tsimlyansk vineyards mark the northernmost wine-growing frontier in Russia. Due to our geographical location 
								all the grown varieties are covered. Another unique aspect of soil and climate conditions is no need for chemical 
								treatment during ripening, which allows Tsimlyansk wines to be considered organic.
							</p>
							<p>
								<img src="<?=$baseurl;?>images/vinogradniki-6.jpg" alt="" />
							</p>
							<p>
								Our viticulture is concentrated on the right bank of the Don river. Annual rainfall is 350 to 450 mm. Topsoil is 
								rich black and dark brown, but just below, especially on the slopes, roots may hit limestone at little depth. 
								Vegetation period is sufficient for grapes to ripe, but early frost poses a certain danger occurring sporadically 
								over the years.
							</p>
							<p>
								<img src="<?=$baseurl;?>images/vinogradniki-7.jpg" alt="" />
								<img src="<?=$baseurl;?>images/vinogradniki-8.jpg" alt="" />
							</p>
						</div>
						<div class="event-likes">
							<p>Tell your friends about our vineyards!</p>
							<script type="text/javascript">(function() {
							  if (window.pluso)if (typeof window.pluso.start == "function") return;
							  if (window.ifpluso==undefined) { window.ifpluso = 1;
							    var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
							    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
							    s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
							    var h=d[g]('body')[0];
							    h.appendChild(s);
							  }})();</script>
							<div class="pluso" data-background="transparent" data-options="medium,round,line,horizontal,nocounter,theme=01" data-services="vkontakte,facebook,odnoklassniki,email" data-url="http://vinoigristoe.ru/" data-title="Цимлянские вина" data-description="ОАО «Цимлянские вина» является одним из крупнейших предприятий на Дону. Так же это постоянно развивающееся предприятие, на счету которого уже не один десяток наград за высокое качество производимой продукции. На заводе выпускается 51 наименование продукции, в число которых входят, игристые, шампанские и столовые вина."></div>
						</div>
					</div>
				</div>
			</article>
		</div>
	<?php $this->load->view($language."/users_interface/includes/footer");?>
	<?php $this->load->view($language."/users_interface/includes/scripts");?>
</body>
</html>