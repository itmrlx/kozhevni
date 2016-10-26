<?php 
// wpml + acf
add_filter('acf/settings/default_language', 'my_acf_settings_default_language');
function my_acf_settings_default_language( $language ) {
    return 'ru';
}
add_filter('acf/settings/current_language', 'my_acf_settings_current_language');
function my_acf_settings_current_language( $language ) {
    return 'ru';
}

// wpml acf get the
function the_field_wpml($value, $option=null){
	$lang_slutsk = icl_get_languages();
	if($lang_slutsk[ru][active] == 1):
		if($option){ return the_field($value.'_ru',$option); }else{ return the_field($value.'_ru'); };
	elseif($lang_slutsk[en][active] == 1):
		if($option){ return the_field($value.'_en',$option); }else{ return the_field($value.'_en'); };
	endif;
}
function the_sub_field_wpml($value, $option=null){
	$lang_slutsk = icl_get_languages();
	if($lang_slutsk[ru][active] == 1):
		if($option){ return the_sub_field($value.'_ru',$option); }else{ return the_sub_field($value.'_ru'); };
	elseif($lang_slutsk[en][active] == 1):
		if($option){ return the_sub_field($value.'_en',$option); }else{ return the_sub_field($value.'_en'); };
	endif;
}
function get_field_wpml($value, $option=null){
	$lang_slutsk = icl_get_languages();
	if($lang_slutsk[ru][active] == 1):
		if($option){ return get_field($value.'_ru',$option); }else{ return get_field($value.'_ru'); };
	elseif($lang_slutsk[en][active] == 1):
		if($option){ return get_field($value.'_en',$option); }else{ return get_field($value.'_en'); };
	endif;
}
function get_sub_field_wpml($value, $option=null){
	$lang_slutsk = icl_get_languages();
	if($lang_slutsk[ru][active] == 1):
		if($option){ return get_sub_field($value.'_ru',$option); }else{ return get_sub_field($value.'_ru'); };
	elseif($lang_slutsk[en][active] == 1):
		if($option){ return get_sub_field($value.'_en',$option); }else{ return get_sub_field($value.'_en'); };
	endif;
}
function have_rows_wpml($value, $option=null) {
	$lang_slutsk = icl_get_languages();
	if($lang_slutsk[ru][active] == 1):
		if($option){ return have_rows($value.'_ru',$option); }else{ return have_rows($value.'_ru'); };
	elseif($lang_slutsk[en][active] == 1):
		if($option){ return have_rows($value.'_en',$option); }else{ return have_rows($value.'_en'); };
	endif;
}
 ?>