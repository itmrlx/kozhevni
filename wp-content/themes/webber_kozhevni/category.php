<?php get_header(); ?>
	<div class="container news-container">
		<div class="stroke-title"><span><?php the_field_wpml('news','option'); ?></span></div>
		<div class="row">
			<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
				<div class="col-lg-4 col-md-6">
					<div class="news-item">
						<?php $newsimg = get_field_wpml('add_img'); ?>
						<div class="img"><img src="<?php echo $newsimg[sizes][news]; ?>" alt="<?php echo $newsimg[alt]; ?>"></div>
						<h2 class="title"><?php echo wp_trim_words(get_the_title(),'7','...'); ?></h2>
						<div class="desc">
							<?php echo wp_trim_words(get_the_content(),'28','...'); ?>
						</div>
						<div class="date"><?php echo get_the_date(); ?></div>
						<hr>
						<a href="<?php the_permalink(); ?>" class="btn btn-primary big"><?php the_field_wpml('more','option'); ?></a>
					</div>
				</div>
			<?php endwhile; ?>
			<div class="clearfix"></div>
			<div class="centered">
				<?php if(function_exists('proPagination')) { proPagination(); } ?>
			</div>
			<?php endif; ?>
		</div>
	</div>

<?php get_footer(); ?>