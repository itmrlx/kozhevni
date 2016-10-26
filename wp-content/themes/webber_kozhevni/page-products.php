<?php /*
template name: Продукция
*/ ?>
<?php get_header(); ?>

<div class="container products-container">
	<div class="row">
		<div class="col-xs-12 col-lg-3 left-side">
			<!-- vmenu -->
			<?php 
				$args = array(
					'theme_location'  => 'side-menu',
					'container'       => '', 
					'menu_class'      => 'pro-vmenu', 
				);
				wp_nav_menu( $args );
			?>
			<!-- / vmenu -->
		</div>
		<div class="col-xs-12 col-md-9 fgallery">
			<?php the_content(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>