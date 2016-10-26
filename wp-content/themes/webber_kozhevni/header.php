<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon.png" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">
	<?php wp_head(); ?>
</head>
<body>

	<header class="wrapper header-t">
		<div class="burger-menu">
			<span></span>
			<span></span>
			<span></span>
		</div>
		<div class="container menu-container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 col-md-10 col-xs-12 pro-menu-container">
					<?php 
						$args = array(
							'theme_location'  => 'main-menu',
							'container'       => '', 
							'menu_class'      => 'pro-menu', 
						);
						wp_nav_menu( $args );
					?>
				</div>
				<div class="col-lg-1 lng-container col-md-2 col-xs-12">
					<?php $lang_slutsk = icl_get_languages(); ?>
					<?php if($lang_slutsk[ru][active] == 1): ?>
						<a href="<?=$lang_slutsk[ru][url];?>" class="lng rus active">Рус</a>
						<a href="<?=$lang_slutsk[en][url];?>" class="lng eng">Eng</a>
					<?php elseif($lang_slutsk[en][active] == 1): ?>
						<a href="<?=$lang_slutsk[ru][url];?>" class="lng rus">Рус</a>
						<a href="<?=$lang_slutsk[en][url];?>" class="lng eng active">Eng</a>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="container logo">
			<?php the_field_wpml('sitename','option'); ?>
		</div>
	</header>