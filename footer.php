	<!-- footer -->
	<div class="wrapper footer-b">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-xs-12 logo">
					<img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="logo">
					<?php the_field_wpml('sitename','option'); ?>
				</div>
				<div class="col-lg-3 col-xs-12">
					<div class="title"><?php the_field_wpml('contacts','option'); ?></div>
					<div class="clearfix"></div>
					<?php the_field_wpml('fooc','option'); ?>
				</div>
				<div class="col-lg-3 col-xs-12">
					<div class="title"><?php the_field_wpml('menu','option'); ?></div>
					<div class="clearfix"></div>
					<?php 
						$args = array(
							'theme_location'  => 'main-menu',
							'container'       => '', 
							'menu_class'      => '', 
						);
						wp_nav_menu( $args );
					?>
					<p class="webber">Разработка сайта<a href="http://webber.by"><img src="<?php bloginfo('template_url'); ?>/img/webber-gray.svg" alt="Webber создание сайтов">Webber Studio</a></p>
				</div>
			</div>
		</div>
	</div>

	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/global.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/dist/jquery.fancybox-dist.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/dist/navgoco-dist.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/dist/slick-dist.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/dist/script-dist.js"></script>
	<?php wp_footer(); ?>
</body>
</html>