<?php get_header(); ?>

	<!-- slider -->
	<div class="wrapper slider-top">
		<?php if( have_rows_wpml('slide','option') ):while ( have_rows_wpml('slide','option') ) : the_row(); ?>
			<?php $slide_img = get_sub_field_wpml('slide_img'); ?>
			<div class="slide" style="background-image: url(<?php echo $slide_img[url]; ?>);">
				<div class="container">
					<div class="title"><?php the_sub_field_wpml('slide_title'); ?></div>
					<div class="desc"><?php the_sub_field_wpml('slide_text'); ?></div>
					<?php if(get_sub_field_wpml('slide_link')): ?>
						<a href="<?php the_sub_field_wpml('slide_link'); ?>" class="btn btn-primary big"><?php the_field_wpml('more','option'); ?></a>
					<?php endif; ?>
				</div>
			</div>
		<?php endwhile;endif; ?>
	</div>

	<!-- advantages -->
	<div class="container advantages-container">
		<div class="stroke-title"><span><?php the_field_wpml('advantages','option'); ?></span></div>
		<div class="row">
			<div class="col-md-4">
				<img src="<?php the_field_wpml('adv_img1','option'); ?>" alt="advantage">
				<div class="title"><?php the_field_wpml('adv_text1','option'); ?></div>
			</div>
			<div class="col-md-4">
				<img src="<?php the_field_wpml('adv_img2','option'); ?>" alt="advantage">
				<div class="title"><?php the_field_wpml('adv_text2','option'); ?></div>
			</div>
			<div class="col-md-4">
				<img src="<?php the_field_wpml('adv_img2','option'); ?>" alt="advantage">
				<div class="title"><?php the_field_wpml('adv_text3','option'); ?></div>
			</div>
		</div>
	</div>

	<!-- last news -->
	<div class="container news-container">
		<div class="stroke-title"><span><?php the_field_wpml('news','option'); ?></span></div>
		<div class="row">
			<?php $idnews = icl_object_id(6, 'category', false,ICL_LANGUAGE_CODE); ?>
			<?php $query_my = new WP_Query('cat='.$idnews.'&showposts=3'); ?>
			<?php if($query_my->have_posts()) : ?>
				<?php while($query_my->have_posts()) : $query_my->the_post(); ?>
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
			<?php endif; ?>
		</div>
		<div class="centered">
			<?php $lang_slutsk = icl_get_languages(); ?>
			<?php if($lang_slutsk[ru][active] == 1): ?>
				<a href="/category/news" class="btn btn-primary big">Смотреть больше</a>
			<?php elseif($lang_slutsk[en][active] == 1): ?>
				<a href="/en/category/news-en" class="btn btn-primary big">See more</a>
			<?php endif; ?>
		</div>
	</div>

	<!-- review -->
	<div class="container review-container">
		<div class="stroke-title"><span><?php the_field_wpml('review','option'); ?></span></div>
		<div class="review-slider">
			<?php $id = icl_object_id(29, 'page', false,ICL_LANGUAGE_CODE); ?>
			<?php $images = get_field_wpml('review_page', $id); if( $images ): ?>
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