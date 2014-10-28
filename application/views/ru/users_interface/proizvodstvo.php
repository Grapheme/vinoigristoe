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
					<div class="where-to-buy">
						<img src="<?=$baseurl;?>images/where_to_buy.png" alt="Где купить Цимлянские вина?" />
						<h2><?=anchor('where','Где купить<br/> Цимлянские вина?');?></h2>
					</div>
					<div class="spline"></div>
					<div class="quote">
						<img src="<?=$baseurl;?>quote/viewimage/<?=$quote['id'];?>" alt="<?=$quote['name'];?>"/>
						<blockquote><?=$quote['text'];?></blockquote>
						<p class="author"><?=$quote['name'];?></p>
					</div>
				</aside>
				<div id="main" role="main" class="cf">
					<div class="wine-flag news-updates">
						Самое<br />свежее:<br />
						<?=anchor('http://vk.com/vinoigristoe','<img src="'.$baseurl.'images/vk-icon.png" alt="Вконтакте" />');?>
						<?=anchor('http://www.facebook.com/Tsimlyanskoe','<img src="'.$baseurl.'images/fb-icon.png" alt="Facebook" />');?>
						<?=anchor('https://www.linkedin.com/company/tsimlyansk-wines-%D1%86%D0%B8%D0%BC%D0%BB%D1%8F%D0%BD%D1%81%D0%BA%D0%B8%D0%B5-%D0%B2%D0%B8%D0%BD%D0%B0-','<img src="'.$baseurl.'images/ln-icon.png" alt="LinkedIn" />');?>
					</div>
					<div class="inside no-padding">
						<img src="<?=$baseurl;?>images/news_promo.png" alt="Каталог продукции" />
						<div class="news-header">
							<h1>Технологии в производстве</h1>
						</div>
						<div class="spline"></div>
						<div class="news-body">
							<p>
								Компания «Цимлянские вина» использует в производстве своей продукции совершенно разные технологии.
								В этом разделе сайта вы сможете с ними ознакомиться.
							</p>
							<h2>Бутылочная шампанизация</h2>
							<p>
								Ремюаж (фр. remuage) — способ избавления игристого вина от осадка при шампанизации в бутылках.
								Ремюор - человек, который проводит процедуру ремюажа.
							</p>
							<p>
								Бутылки с готовым вином устанавливают горлышком вниз в специальные станки - пюпитры, в которых прорезаны ячейки, 
								поддерживающие угол наклона, равный 45 градусам. Ежедневно каждую бутылку слегка поворачивают; это производится 
								по определенной схеме и крайне аккуратно, чтобы осадок перемещался на пробку, не оставаясь ни на стенках бутылки, 
								ни в самом вине. 
							</p>
							<p>
								<img src="<?=$baseurl;?>images/proizvodstvo-1.jpg" alt="" />
							</p>
							<p>
								Следующий шаг в процессе шампанизации - дегоржаж (франц. dеgorgeage, от gorge — горло).
								Дегоржирование, операция, применяемая в производстве бутылочного шампанского для выброса дрожжевого осадка. 
								Для уменьшения потерь углекислого газа и вина осадок в горлышке бутылки перед Д. замораживают. Мастер-дегоржер 
								быстро откупоривает бутылку, обращённую горлышком вниз, при этом осадок с пробкой выбрасывается давлением 
								углекислого газа, затем бутылка приводится в стоячее положение, доливается тем же вином или экспедиционным 
								ликером (смесь исходного вина и тростникового сахара) и укупоривается. Дегоржаж выполняется на специальном аппарате — герите.
							</p>
							<p>
								<img src="<?=$baseurl;?>images/proizvodstvo-2.jpg" alt="" />
							</p>
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
		</div>
	<?php $this->load->view($language."/users_interface/includes/footer");?>
	<?php $this->load->view($language."/users_interface/includes/scripts");?>
</body>
</html>