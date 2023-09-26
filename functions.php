<?php 
error_reporting(1);
define('CODZILLA_ROOT', get_template_directory() . '/');
define('CODZILLA_URL', get_template_directory_uri() . '/');
define('CODZILLA_ADMIN', admin_url());
define('CODZILLA_LANG', get_locale());

add_theme_support( 'post-thumbnails' );
add_image_size( 'portfolio-size', 800, 650,array('center','center') ); 
add_image_size( 'blog-size', 900, 630, true ); 
add_image_size( 'partner-size', 200, 67, false ); 
add_image_size( 'product-feature-size', 370, 355, true ); 
add_image_size( 'product-feature-bigsize', 760, 772, true ); 

require_once ( CODZILLA_ROOT . 'lib/codzilla_theme_init.php');
require_once ( CODZILLA_ROOT . 'lib/codzilla_enqueue_scripts.php');
require_once ( CODZILLA_ROOT . 'lib/ajax_functions.php');
require_once ( CODZILLA_ROOT . 'lib/codzilla_functions.php');
require_once ( CODZILLA_ROOT . 'lib/codzilla_taxonomy_terms.php');
require_once ( CODZILLA_ROOT . 'lib/codzilla_meta_fields.php');

function ha_load_theme_textdomain() {
    load_theme_textdomain( 'codzilla', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'ha_load_theme_textdomain' );


/**
 * Enables the Excerpt meta box in Page edit screen.
 */
function wpcodex_add_excerpt_support_for_pages() {
	add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', 'wpcodex_add_excerpt_support_for_pages' );




  // Add Order Column to poirtfolio cpt
  add_filter('manage_portfolio_posts_columns', 'sh_add_order_column');
  function sh_add_order_column($cpt_columns) {
    $cpt_columns['showinhome'] = 'Show In Home';
    return $cpt_columns;
  }

  add_action( 'manage_portfolio_posts_custom_column' , 'sh_portfolio_order_column', 10, 2 );
  function sh_portfolio_order_column( $column, $post_id ) {
      switch ( $column ) {
        case 'showinhome' :
          echo get_post_meta( $post_id , 'portfolio_showinhome' , true )==='1' ?'&#10003;': ''; 
        break;

      }
  }
// Allow SVG
add_filter('wp_check_filetype_and_ext', function ($data, $file, $filename, $mimes) {

    if (!$data['type']) {
        $wp_filetype = wp_check_filetype($filename, $mimes);
        $ext = $wp_filetype['ext'];
        $type = $wp_filetype['type'];
        $proper_filename = $filename;
        if ($type && 0 === strpos($type, 'image/') && $ext !== 'svg') {
            $ext = $type = false;
        }
        $data['ext'] = $ext;
        $data['type'] = $type;
        $data['proper_filename'] = $proper_filename;
    }
    return $data;


}, 10, 4);


add_filter('upload_mimes', function ($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
});


add_action('admin_head', function () {
    echo '';
});
//** * Enable preview / thumbnail for svg image files.*/
function svg_is_displayable($result, $path) {
    if ($result === false) {
        $displayable_image_types = array( IMAGETYPE_svg );
        $info = @getimagesize( $path );

        if (empty($info)) {
            $result = false;
        } elseif (!in_array($info[2], $displayable_image_types)) {
            $result = false;
        } else {
            $result = true;
        }
    }

    return $result;
}
add_filter('file_is_displayable_image', 'svg_is_displayable', 10, 2);

//** *Enable upload for webp image files.*/
function webp_upload_mimes($existing_mimes) {
    $existing_mimes['webp'] = 'image/webp';
    return $existing_mimes;
}
add_filter('mime_types', 'webp_upload_mimes');

//** * Enable preview / thumbnail for webp image files.*/
function webp_is_displayable($result, $path) {
    if ($result === false) {
        $displayable_image_types = array( IMAGETYPE_WEBP );
        $info = @getimagesize( $path );

        if (empty($info)) {
            $result = false;
        } elseif (!in_array($info[2], $displayable_image_types)) {
            $result = false;
        } else {
            $result = true;
        }
    }

    return $result;
}
add_filter('file_is_displayable_image', 'webp_is_displayable', 10, 2);


// Prevent WP from adding <p> tags on all post types
function disable_wp_auto_p( $content ) {
  remove_filter( 'the_content', 'wpautop' );
  remove_filter( 'the_excerpt', 'wpautop' );
  return $content;
}
add_filter( 'the_content', 'disable_wp_auto_p', 0 );
@ini_set('upload_max_size' , '512M');
@ini_set('post_max_size', '512M');
@ini_set('max_execution_time', '300');


/**
 * Disable the emoji's
 */
function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );	
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );	
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	
	// Remove from TinyMCE
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'disable_emojis' );

/**
 * Filter out the tinymce emoji plugin.
 */
function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}
// Remove jQuery Migrate Script from header and Load jQuery from Google API
function crunchify_stop_loading_wp_embed_and_jquery() {
	if (!is_admin()) {
		wp_deregister_script('wp-embed');
	}
}
add_action('init', 'crunchify_stop_loading_wp_embed_and_jquery');


function wp_dereg_script_comment_reply(){wp_deregister_script( 'comment-reply' );}