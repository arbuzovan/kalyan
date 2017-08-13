				</div>
			</div>
		</div>


<!-- 
<div id="container" style="display:none">
	<div id="basic-template">
		<a class="ui-notify-cross ui-notify-close" href="#">x</a>
		<div>#{title}</div>
		<p>#{text}</p>
	</div>
	<div id="advanced-template"></div>
</div>
<div itemscope itemtype="http://schema.org/Organization" id="footer">
	<div class="footer_logos" style="display:none">
        <div>
            <img style="border: 1px solid #A44814; border-radius: 7px; margin-right: 10px;" width="120px;" src="/templates/shop/images/deliver.jpg" />
        </div>

	</div>

	<div class="footer_info">

	</div>
        <div class="footer_info" style="float: left;">
            <ul style="">
                <li>
                    <a href="/garantiya_i_vozvrat_tovara/">Гарантия и возврат</a>
                </li>
                <li>
                    <a href="/otzyvy/">Отзывы</a>
                </li>
                <li>
                    <a href="/sertifikaty/">Cертификаты</a>
                </li>
                <li>
                    <a href="/work/">Вакансии</a>
                </li>
                <li>
                    <a href="/kontakty/">Контакты</a>
                </li>
            </ul>
        </div>
</div>

<noindex>
	<div itemscope itemtype="http://schema.org/Organization" class="copyright s480" style="display:none">
		&copy; 2008-2017
		<span itemprop="name">«Кальян Хат»</span> - Интернет-магазин кальянов.
                <span itemprop="telephone" style="display:none">+7 (495) 210-17-79</span>
		<br />
		<span>Использование материалов без согласия правообладателей запрещено.</span><br />
		<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress" class="footer_adr">
			<span itemprop="postalCode">105203</span>,
			<span itemprop="addressLocality">Москва</span>,
			<span itemprop="streetAddress">ул. Нижняя Первомайская, д. 45</span>
		</div>
                <div class="soc_link_wrapper">
                    <a href="//vk.com/kalyanhut" class="soc_link"><i class="fa fa-vk fa-3x" aria-hidden="true"></i></a>
                    <a href="//www.facebook.com/kalyanhutvostok/" class="soc_link"><i class="fa fa-facebook-official fa-3x" aria-hidden="true"></i></a>
                    <a href="//www.youtube.com/c/kalyanhut" class="soc_link"><i class="fa fa-youtube fa-3x" aria-hidden="true"></i></a>
                    <a href="//www.instagram.com/kalyan_hut/" class="soc_link"><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></a>
                </div>
	</div>
</noindex>
-->

		<div class="container" itemscope itemtype="http://schema.org/Organization">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 minzdrav">
					МИНЗДРАВСОЦРАЗВИТИЯ РОССИИ ПРЕДУПРЕЖДАЕТ: КУРЕНИЕ ВРЕДИТ ВАШЕМУ ЗДОРОВЬЮ!
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					&copy; 2008-2017
					<span itemprop="name">«Кальян Хат»</span> - Интернет-магазин кальянов.
					<br />
					<span>Использование материалов без согласия правообладателей запрещено.</span><br />
					<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress" class="footer_adr">
						<span itemprop="postalCode">105203</span>,
						<span itemprop="addressLocality">Москва</span>,
						<span itemprop="streetAddress">ул. Нижняя Первомайская, д. 45</span>
					</div>
					<div class="soc_link_wrapper">
	                	<a href="//vk.com/kalyanhut" class="soc_link">
	                		<i class="fa fa-vk fa-2x" aria-hidden="true"></i>
                		</a>
						<a href="//www.facebook.com/kalyanhutvostok/" class="soc_link">
							<i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i>
						</a>
						<a href="//www.youtube.com/c/kalyanhut" class="soc_link">
							<i class="fa fa-youtube fa-2x" aria-hidden="true"></i>
						</a>
						<a href="//www.instagram.com/kalyan_hut/" class="soc_link">
							<i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
						</a>
					</div>
				</div>
				<div class="col-md-3">
					<div>
						<strong>E-mail:</strong><a itemprop="email" href='mailto: info@kalyan-hut.ru'>info@kalyan-hut.ru</a>
					</div>
					<div>
						<strong>Тел.:</strong><span itemprop="telephone">+7 (495) 210-17-79</span>
					</div>
					<time>
						<strong>Режим работы:</strong> <span>10:00-24:00+</span>
					</time>
					<div>
			            <a rel="nofollow" id="userCabinetLink" href="/users/login_do/">Личный кабинет</a>
					</div>
				</div>
				<div class="col-md-3">
					<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"bottom_menu", 
	array(
		"COMPONENT_TEMPLATE" => "bottom_menu",
		"ROOT_MENU_TYPE" => "bottom",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "1",
		"CHILD_MENU_TYPE" => "",
		"USE_EXT" => "Y",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N"
	),
	false
);?>
				</div>
				<div class="col-md-2">
					<div>Cпособы оплаты:</div>
					<img width="120px;" src="<?=SITE_TEMPLATE_PATH?>/images/sbrf.png" />
					<br>
					<img width="120px;" src="<?=SITE_TEMPLATE_PATH?>/images/yad.png" />
				</div>
			</div>
		</div>
		<?
		if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
			die();
		?>
	</body>
</html>