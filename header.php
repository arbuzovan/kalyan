<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?$APPLICATION->ShowTitle();?></title>
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
		<?$APPLICATION->ShowHead();?>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>
	<body>
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<a href="/" class="logo_link">
							<img src="<?=SITE_TEMPLATE_PATH?>/images/logo.png" alt="" />
						</a>
						<a href="//shop.kalyan-hut.ru/rules/" id="licence_doc" rel="">Пользовательское соглашение</a>
					</div>
					<div class="col-md-6">
							<div class="row">
								<div class="md-12">
									<span class="header_phone">+7 (495) 210-17-79</span>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">Первомайская</div>
								<div class="col-md-6">Багратионовская</div>
							</div>
							<div class="row">
								<div class="col-md-6">Савеловская</div>
								<div class="col-md-6">Водный стадион</div>
							</div>
					</div>
					<div class="col-md-3">
						<div class="row">
							<div class="col-md-6">
								Ежедневно<br>
								10:00-24:00
							</div>
							<div class="col-md-6">
								<a href="#" class="head_mail_link">Ваша корзина <span class="count">(0)</span></a>
								<a href="mailto:info@kalyan-hut.ru" class="headerMailLink">info@kalyan-hut.ru</a>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								Доставка по всей территории РФ
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<?$APPLICATION->ShowPanel();?>

		<nav class="navbar navbar-default">
		  <!-- Контейнер (определяет ширину Navbar) -->
		  <div class="container">
		    <!-- Заголовок -->
		    <div class="navbar-header">
		      <!-- Кнопка «Гамбургер» отображается только в мобильном виде (предназначена для открытия основного содержимого Navbar) -->
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-main">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div>
		    <!-- Основная часть меню (может содержать ссылки, формы и другие элементы) -->
		    <div class="collapse navbar-collapse" id="navbar-main">


								<?$APPLICATION->IncludeComponent("bitrix:menu", "top_menu", Array(
									"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
										"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
										"DELAY" => "N",	// Откладывать выполнение шаблона меню
										"MAX_LEVEL" => "1",	// Уровень вложенности меню
										"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
											0 => "",
										),
										"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
										"MENU_CACHE_TYPE" => "N",	// Тип кеширования
										"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
										"ROOT_MENU_TYPE" => "left",	// Тип меню для первого уровня
										"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
									),
									false
								);?>


		    </div>
		  </div>
		</nav>
		<div class="container">
			<div class="row">
				<div class="col-md-2 categories-menu">
					Тут будет меню категорий
				</div>
				<div class="col-md-10 content">
