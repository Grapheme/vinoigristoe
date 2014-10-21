<!DOCTYPE html>
<!-- /ht Paul Irish - http://front.ie/j5OMXi -->
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en"><!--<![endif]-->
	<?php $this->load->view($language."/users_interface/includes/head");?>
	
<body>
	<?php if(!$this->session->userdata('validation_age')):?>
	<?php $this->load->view($language."/users_interface/includes/validation-age");?>
	<?php endif;?>
	<div class="container" class="cf">
		<?php $this->load->view($language."/users_interface/includes/header-small");?>
			<article class="cf">
				<aside>
					<a class="aside-logo purple">Цимлянские вина</a>
					<div class="quote">
						<img src="<?=$baseurl;?>quote/viewimage/<?=$quote['id'];?>" alt="<?=$quote['name'];?>"/>
						<blockquote><?=$quote['text'];?></blockquote>
						<p class="author"><?=$quote['name'];?></p>
					</div>
					<h2 class="purple">События</h2>
				<?php for($i=0;$i<count($events);$i++):?>
					<div class="event">
						<img src="<?=$baseurl;?>events/viewimage/<?=$events[$i]['id'];?>" alt="" />
						<div class="date"><?=$events[$i]['date'];?> <?=$events[$i]['tptitle'];?></div>
						<div class="title"><?=anchor('events/'.$events[$i]['translit'],$events[$i]['title']);?></div>
					</div>
					<div class="spline"></div>
				<?php endfor;?>
				</aside>
				<div id="main" role="main" class="cf">
					<div class="wine-flag news-updates">
						Самое<br />свежее:<br />
						<?=anchor('#','<img src="'.$baseurl.'images/vk-icon.png" alt="Вконтакте" />');?>
						<?=anchor('#','<img src="'.$baseurl.'images/fb-icon.png" alt="Facebook" />');?>
					</div>
					<div class="inside no-padding">
						<img src="<?=$baseurl;?>images/news_promo.png" alt="Каталог продукции" />
						<div class="news-header">
							<h1><?=$news['title']?></h1>
							<div class="date">Опубликовано: <?=$news['date']?></div>
						</div>
						<div class="spline"></div>
						<div class="news-body">
							<?=$news['content']?>
							<p><img src="<?=$baseurl;?>events/viewimage/<?=$news['id'];?>" alt="" /></p>
						</div>
						<div class="event-likes">
							<p>Расскажите друзьям об этом!</p>
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
			<div class="additional cf">
				<h3>Читайте также:</h3>
				<div class="news cf">
				<?php for($i=0;$i<count($readnews);$i++):?>
					<div class="column">
						<div class="date"><?=$readnews[$i]['date'];?></div>
						<?=anchor('events/'.$readnews[$i]['translit'],$readnews[$i]['title']);?>
					</div>
				<?php endfor;?>
				</div>
			</div>			
		</div>
	<?php $this->load->view($language."/users_interface/includes/footer");?>
	<?php $this->load->view($language."/users_interface/includes/scripts");?>
</body>
</html>