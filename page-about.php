<?php /*
template name: О предприятии
*/ ?>
<?php get_header(); ?>

<div class="container single-page">
	<h1 class="stroke-title"><span><?php the_title(); ?></span></h1>
	<?php the_field_wpml('about_content'); ?>
</div>

<?php $images = get_field_wpml('about_cert'); if( $images ): ?>
	<div class="container single-page">
		<div class="stroke-title"><span><?php the_field_wpml('certificates','option'); ?></span></div>
		<div class="row flex-centered certificates">
			<?php foreach( $images as $image ): ?>
				<div class="col-xs-12 col-md-6 col-lg-4">
					<a href="<?php echo $image['sizes']['large']; ?>" class="fancybox" data-fancybox-group="certificates"><img src="<?php echo $image['sizes']['doc']; ?>" alt="<?php echo $image['alt']; ?>"></a>
					<p><?php echo $image['description']; ?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
<?php endif; ?>

<div class="container single-page">
	<div class="stroke-title">&nbsp;</div>
	<?php the_field_wpml('about_content2'); ?>
</div>

<?php get_footer(); ?>
