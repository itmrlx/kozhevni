<?php /*
template name: Отзывы
*/ ?>
<?php get_header(); ?>

	<!-- review -->
	<div class="container review-container">
		<div class="stroke-title"><span><?php the_title(); ?></span></div>
		<div class="review-slider">
			<?php $images = get_field_wpml('review_page'); if( $images ): ?>
				<?php foreach( $images as $image ): ?>
					<div class="slide">
						<a href="<?php echo $image['sizes']['large']; ?>" class="fancybox" data-fancybox-group="review"><img src="<?php echo $image['sizes']['doc']; ?>" alt="<?php echo $image['alt']; ?>"></a>
						<div class="desc"><?php echo $image['description']; ?></div>
					</div>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>

<?php get_footer(); ?>