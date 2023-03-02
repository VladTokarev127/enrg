<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo('charset'); ?>">

	<title><?php echo wp_get_document_title(); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<meta property="og:image" content="path/to/image.jpg">
	<link rel="shortcut icon" href="<?php the_field('favicon', 'options'); ?>" type="image/x-icon">
	<meta name="format-detection" content="telephone=no">
	<meta http-equiv="x-rim-auto-match" content="none">

	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#000">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#000">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#000">

	<style>body { opacity: 0; overflow-x: hidden; } html { background-color: #fff; }</style>
	<?php wp_head(); ?>
</head>

<?php
	$tel = get_field('tel', 'options');
	$result = preg_replace('/(?:\G|^)[+\d]*\K[^:+\d]/m', '', $tel);
?>

<body <?php body_class(); ?>>

<div class="wrapper">

	<header class="header">

		<div class="header__mobile">
			<div class="container">

				<div class="header__contacts">
					<div class="header__tel"><a href="tel:<?php echo $result; ?>"><?php echo $tel; ?></a></div>
					<div class="header__all">
						<a class="header__all-link">Все контакты</a>
						<ul class="header__all-list">
							<?php while( the_repeater_field('list_2', 'options') ): ?>
								<?php
									$tel = get_sub_field('tel');
									$result = preg_replace('/(?:\G|^)[+\d]*\K[^:+\d]/m', '', $tel);
								?>
								<li><a href="tel:<?php echo $result; ?>"><?php echo $tel; ?></a></li>
							<?php endwhile; ?>
						</ul>
					</div>
				</div>
				<form action="/" class="header__search">
					<input type="text" name="s" placeholder="Поиск по каталогу..." required>
					<button type="submit" class="header__search-btn"><img src="/wp-content/themes/enrg/img/loup.svg" alt=""></button>
				</form>
				<a href="<?php the_field('catalog_link', 'options'); ?>" class="header__btn btn">Каталог</a>
				<div class="header__nav">
					<nav>
						<?php 
							wp_nav_menu([
								'menu'            => 'header_menu',
								'container'       => false,
							]);
						?>
					</nav>
				</div>

			</div>
		</div>

		<div class="header__top">
			<div class="container">

				<a href="/" class="header__logo">
					<div class="header__logo-img"><img src="<?php the_field('logo', 'options'); ?>" alt="Энергетик"></div>
					<div class="header__logo-text"><?php the_field('logo_text', 'options'); ?></div>
				</a>

				<button class="header__menu"><span></span></button>

				<div class="header__info">
					<?php while( the_repeater_field('list_1', 'options') ): ?>
						<div class="header__info-item">
							<div class="header__info-icon"><img src="<?php the_sub_field('img'); ?>" alt=""></div>
							<div class="header__info-content">
								<div class="header__info-title"><?php the_sub_field('title'); ?></div>
								<div class="header__info-text"><?php the_sub_field('text'); ?></div>
							</div>
						</div>
					<?php endwhile; ?>
				</div>

				<div class="header__contacts">
					<div class="header__tel"><a href="tel:<?php echo $result; ?>"><?php echo $tel; ?></a></div>
					<div class="header__all">
						<a href="#" class="header__all-link">Все контакты</a>
						<ul class="header__all-list">
							<?php while( the_repeater_field('list_2', 'options') ): ?>
								<?php
									$tel = get_sub_field('tel');
									$result = preg_replace('/(?:\G|^)[+\d]*\K[^:+\d]/m', '', $tel);
								?>
								<li><a href="tel:<?php echo $result; ?>"><?php echo $tel; ?></a></li>
							<?php endwhile; ?>
						</ul>
					</div>
				</div>

			</div>
		</div>

		<div class="header__bottom">
			<div class="container">

				<a href="<?php the_field('catalog_link', 'options'); ?>" class="header__btn btn">Каталог</a>
				<div class="header__nav">
					<nav>
						<?php 
							wp_nav_menu([
								'menu'            => 'header_menu',
								'container'       => false,
							]);
						?>
					</nav>
				</div>
				<form action="/" class="header__search">
					<input type="text" name="s" placeholder="Поиск по каталогу..." required>
					<button type="submit" class="header__search-btn"><img src="/wp-content/themes/enrg/img/loup.svg" alt=""></button>
				</form>

			</div>
		</div>

	</header>

	<main class="main">