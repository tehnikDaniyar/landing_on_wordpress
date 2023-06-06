<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link rel="stylesheet" href="css/style.min.css?_v=20230604165658"> -->
<?php  wp_head()?>

	<title>main</title>
</head>

<body>
	<div class="wrapper">
		<header class="header" id="header">
	<div class="header__container _container">
		<nav class="header__menu">
			<div class="header__logo"><a class="header__link" href="#"><?php the_field('label') ?></a></div>
			<ul class="header__list">
				<li class="header__item">
					<a href="#services" class="header__link">Услуги</a>
				</li>
				<li class="header__item">
					<a href="#prices" class="header__link">Расценки</a>
				</li>
				<li class="header__item">
					<a href="#gallery" class="header__link">Галлерея</a>
				</li>
				<li class="header__item">
					<a href="#feedback" class="header__link">Оставить заявку</a>
				</li>
				<li class="header__item">
					<a href="#footer" class="header__link">Контакты</a>
				</li>
			</ul>
		</nav>
		<div class="icon-menu">
			<span></span>
		</div>
	</div>
</header>