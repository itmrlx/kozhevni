<?php /*
template name: Контакты
*/ ?>
<?php get_header(); ?>

<div class="container contacts-container">
	<h1 class="stroke-title"><span><?php the_field_wpml('our_contacts','option'); ?></span></h1>
	<div class="row">
		<div class="col-xs-12 col-md-5 col-lg-4">
			<form id="form-id" class="form-contacts">
				<div class="form-group">
					<input class="form-control" name="name" type="text" placeholder="<?php the_field_wpml('your_name','option'); ?>" />
				</div>
				<div class="form-group">
					<input class="form-control" name="tel" type="tel" placeholder="<?php the_field_wpml('phone_number','option'); ?>" required />
				</div>
				<div class="form-group">
					<textarea class="form-control" name="comment" cols="30" rows="9" placeholder="<?php the_field_wpml('message','option'); ?>" required></textarea>
				</div>
				<div class="form-group for-robots" style="display: none;">
					<input class="form-control" type="text" name="email" />
					<input class="form-control modal-form-value" type="text"  name="title" value="Страница контактов" />
				</div>
				<div class="centered">
					<button type="submit" class="btn btn-primary big"><?php the_field_wpml('send','option'); ?></button>
				</div>
			</form>
		</div>
		<div class="col-xs-12 col-md-7 col-lg-8">
			<?php the_content(); ?>
		</div>
	</div>
</div>

<div class="wrapper map">
	<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=U_Uzh6rMFwVSBHmSwRMYKIJKcIwUAwur&amp;width=100%&amp;height=450&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=false"></script>
</div>

<?php get_footer(); ?>