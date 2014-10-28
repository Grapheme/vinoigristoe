<footer>
	<div class="container" class="cf">
		<section class="cf">
			<div class="social-widget">
				<script type="text/javascript" src="http://userapi.com/js/api/openapi.js?49"></script>
				<div id="vk_groups"></div>
				<script type="text/javascript">
					VK.Widgets.Group("vk_groups", {mode : 0,width : "218",height : "215"}, 38970572);
				</script>
			</div>
			<div class="social-widget">
				<div id="fb-root"></div>
				<script>
					( function(d, s, id) {
						var js, fjs = d.getElementsByTagName(s)[0];
						if(d.getElementById(id)) return;
						js = d.createElement(s);
						js.id = id;
						js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1&appId=118650518205495";
						fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));
				</script>
				<div class="fb-like-box" data-href="http://www.facebook.com/pages/Tsimlyansk-Winery/486807938038127" data-width="218" data-height="215" data-show-faces="true" data-stream="false" data-header="false"></div>
			</div>
			<nav>
				<ul>
					<li><?=anchor('','Main page');?></li>
					<li><?=anchor('tradition','About');?></li>
					<li><?=anchor('events','Exhibitions and events');?></li>
					<li><?=anchor('production','Production');?></li>
					<li><?=anchor('contacts','Contacts');?></li>
				</ul>
				<p class="partners">
					Our partners: <a target="_blank" href="http://www.helikon.ru"><img src="<?= $baseurl ?>images/helikon.png" /></a>
				</p>
			</nav>
			<div class="copyright">
				<div class="stats">
					<?=anchor('','<img src="'.$baseurl.'images/logger.png" alt="" />');?>
					<?=anchor('','<img src="'.$baseurl.'images/rambler.png" alt="" />');?>
				</div>
				<p>© 1995–2012<br/>JSC «Tsimlyansk Wines»</p>
				<p>When copying materials from <br/>this site link is required</p> 
				<p>Developed by &laquo;<a class="copy" href="http://grphm.com">GRPHM</a>&raquo;</p>
			</div>
		</section>
	</div>
</footer>