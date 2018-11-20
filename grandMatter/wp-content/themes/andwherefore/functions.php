<?php
	add_theme_support( 'post-thumbnails' );
?>
<?php
	function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
    )
  );
}
add_action( 'init', 'register_my_menus' );
?>
<?php
function wpdocs_excerpt_more( $more ) {
    return ' ➳';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
?>
<?php
function filter_ptags_on_images($content)
{
	return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}
add_filter('the_content', 'filter_ptags_on_images');
?>
