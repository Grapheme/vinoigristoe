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
						<img src="<?=$baseurl;?>images/news_promo.png" alt="Production catalog" />
						<div class="news-header">
							<h1>Technology in production</h1>
						</div>
						<div class="spline"></div>
						<div class="news-body">
							<p>
								The Tsimlyansky Wine company uses several diverse technologies to produces its wines. 
								You may learn about some of them here.
							</p>
							<h2>In-bottle Champagnization</h2>
							<p>
								Riddling or remuage is a process of removing sediment from sparkling wine during in-bottle 
								champagnization. Remuer is the person in charge of this complex operation.
 							</p>
							<p>
								 Bottles of wine are placed upside down 45 degree angle into special machines known as pupitres 
								 which maintain them in this position at all times. Daily each bottle is rotated ever so slightly 
								 with utmost care and precision enabling sediment to collect on the cap with no trace on the glass 
								 or within wine itself. 
							</p>
							<p>
								<img src="<?=$baseurl;?>images/proizvodstvo-1.jpg" alt="" />
							</p>
							<p>
								The next step of champagnization is called disgorging (French, degorgeage; from gorge - throat). 
								Disgorging removes sediment from bottles upon completion of the fermentation cycle. To reduce 
								loss of liquid and pressure, the sediment in the bottleneck is frozen prior to disgorging. 
							</p>
							<p>
								The specialist quickly uncaps the bottle facedown. The carbon dioxide pressure pushes the sediment out. 
								The bottle is then turned upright and topped off with the same wine or expediting liqueur (a mixture of 
								original wine and cane sugar), recorked and sealed. Disgorging maybe done manually or mechanically. 
							</p>
							<p>
								<img src="<?=$baseurl;?>images/proizvodstvo-2.jpg" alt="" />
							</p>
						</div>
						<div class="event-likes">
							<p>Tell your friends about our technology!</p>
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