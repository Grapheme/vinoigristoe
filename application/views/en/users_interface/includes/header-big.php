<header>
	<section id="navigation" class="cf">
		<aside id="translation">
			<ul>
				<li class="ru"><?=anchor('change-language/ru','Ru');?></li>
				<li class="en"><?=anchor('change-language/en','En');?></li>
			</ul>
		</aside>
		<nav role="main">
			<ul>
				<li class="home"><?=anchor('','Main');?></li>
				<li class="production"><?=anchor('production','Products');?></li>
				<li class="events"><?=anchor('events','Events');?></li>
				<li class="tradition"><?=anchor('tradition','Company');?></li>
				<li class="where"><?=anchor('where','Where to Buy');?></li>
				<li class="contacts"><?=anchor('contacts','Contacts');?></li>
			</ul>
		</nav>
	</section>
	<section id="promo-section" class="cf">
		<aside>
			<a id="logo">Tsimlyansky Wines</a>
			<p class="caption">Tsimlyanskoe</p>
			<div class="social cf" style="text-align: center;">
				<div class="spline top"></div>
				<div class="pres-cont"><!--Мы в социальных сетях:-->
					<div class="present-main">
						<div class="triangle"></div>
						Presentation (介紹)
					</div>
					<div class="present-down">
						<a href="http://vinoigristoe.ru/en_presentation.pdf" target="_blank" class="present-option">Presentation</a>
						<a href="http://vinoigristoe.ru/vinoigristoe_catalog.pdf" target="_blank" class="present-option">Презентация</a>
						<a href="http://vinoigristoe.ru/download/files/kit.pdf" target="_blank" class="present-option">下載演示</a>
					</div>
				</div>
				<ul>
					<li><?=anchor('http://vk.com/vinoigristoe','<span class="vk">&nbsp;</span>');?></li>
					<li><?=anchor('http://www.facebook.com/Tsimlyanskoe','<span class="fb">&nbsp;</span>');?></li>
					<li><?=anchor('https://www.linkedin.com/company/tsimlyansk-wines-%D1%86%D0%B8%D0%BC%D0%BB%D1%8F%D0%BD%D1%81%D0%BA%D0%B8%D0%B5-%D0%B2%D0%B8%D0%BD%D0%B0-','<span class="ln">&nbsp;</span>');?></li>
				</ul>
				<div class="spline bottom"></div>
			</div>
		</aside>
		<div class="promo-slide">
			<div class="promo-inside">
				<img src="<?$baseurl;?>images/main-promo.jpg" alt="" />
			</div>
		</div>
	</section>
</header>