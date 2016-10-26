<?php get_header(); ?>

<div class="container single-page">
	<h1 class="stroke-title"><span><?php the_title(); ?></span></h1>
	<?php the_content(); ?>
</div>

<?php $file = get_field_wpml('file'); ?>
<?php if($file): ?>
	<div class="container cost-container gallery">
		<div class="file">
			<a href="<?php echo $file[url]; ?>"><img src="<?php bloginfo('template_url'); ?>/img/file.png" alt="file"></a>
			<?php echo $file[filename]; ?><br>
			<?php echo $file[date]; ?>
		</div>
		<div class="centered">
			<a href="<?php echo $file[url]; ?>" class="btn btn-primary big"><?php the_field_wpml('download','option'); ?></a>
		</div>
	</div>
<?php endif; ?>

<?php get_footer(); ?>