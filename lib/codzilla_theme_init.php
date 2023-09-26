<?php
add_theme_support('post-thumbnails');
add_action( 'init', 'codzilla_custom_post_types' );
/**********************
** create CPT Types
**********************/
function codzilla_custom_post_types() {
	
 $cpts = [
    array(
        'single'   => 'Sliders',
        'plural'   => 'Sliders',
        'cptname'  => 'sliders',
        'icon'     => 'dashicons-slides',
        'supports' => ["title","editor","thumbnail"],
        'show_in_menu'=> true,
        'position' => 5
        ),

    array(
        'single'   => 'Portfolio',
        'plural'   => 'Portfolio Items',
        'cptname'  => 'portfolio',
        'icon'     => 'dashicons-images-alt2',
        'supports' => ["title","editor","thumbnail","excerpt"],
        'show_in_menu'=> true,
        'position' => 6
        ),
     array(
        'single'   => 'Link',
        'plural'   => 'Links',
        'cptname'  => 'link',
        'icon'     => 'dashicons-admin-links',
        'supports' => ["title"],
        'show_in_menu'=> false,
        'position' => 6
        ),
    array(
        'single'   => 'Service',
        'plural'   => 'Services',
        'cptname'  => 'service',
        'icon'     => 'dashicons-admin-generic',
        'supports' => ["title","editor","thumbnail","excerpt"],
        'show_in_menu'=> true,
        'position' => 7
        ),
     array(
        'single'   => 'Product',
        'plural'   => 'Products',
        'cptname'  => 'product',
        'icon'     => 'dashicons-store',
        'supports' => ["title","editor","thumbnail","excerpt"],
        'show_in_menu'=> true,
        'position' => 7
        ),
    array(
        'single'   => 'Team Member',
        'plural'   => 'Teams Members',
        'cptname'  => 'team',
        'icon'     => 'dashicons-businessman',
        'supports' => ["title","editor","thumbnail","excerpt"],
        'show_in_menu'=> true,
        'position' => 8
        ),
      array(
        'single'   => 'Partner',
        'plural'   => 'Partners',
        'cptname'  => 'partner',
        'icon'     => 'dashicons-groups',
        'supports' => ["title","thumbnail"],
        'show_in_menu'=> true,
        'position' => 9
        ), 
       array(
        'single'   => 'Testimonial',
        'plural'   => 'Testimonials',
        'cptname'  => 'testimonial',
        'icon'     => 'dashicons-testimonial',
        'supports' => ["title","editor","thumbnail","excerpt"],
        'show_in_menu'=> true,
        'position' => 10
           
        ),
 ];
 foreach ($cpts as $cpt) {

     $labels = array(
        'name'                  => _x( $cpt['single'], 'Post Type General Name', 'codzilla' ),
        'singular_name'         => _x( $cpt['single'], 'Post Type Singular Name', 'codzilla' ),
        'menu_name'             => __( $cpt['plural'], 'codzilla' ),
        'all_items'             => __( 'All '.$cpt['plural'], 'codzilla' ),
        'add_new_item'          => __( 'Add New '.$cpt['single'] , 'codzilla' ),
        'add_new'               => __( 'Add New', 'codzilla' ),
        'new_item'              => __( 'New '.$cpt['single'], 'codzilla' ),
        'edit_item'             => __( 'Edit '.$cpt['single'], 'codzilla' ),
        'update_item'           => __( 'Update '.$cpt['single'], 'codzilla' ),
        'view_item'             => __( 'View '.$cpt['single'], 'codzilla' ),
        'search_items'          => __( 'Search '.$cpt['plural'], 'codzilla' ),
        'not_found'             => __( 'Not found', 'codzilla' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'codzilla' ),
        'featured_image'        => __( 'Featured Image', 'codzilla' ),
        'set_featured_image'    => __( 'Set featured image', 'codzilla' ),
        'remove_featured_image' => __( 'Remove featured image', 'codzilla' ),
        'use_featured_image'    => __( 'Use as featured image', 'codzilla' ),
      );
      $args = array(
        'label'                 => __( $cpt['plural'], 'codzilla' ),
        'description'           => __( $cpt['plural'].' Description', 'codzilla' ),
        'labels'                => $labels,
        'supports'              => $cpt['supports'],
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          =>$cpt['show_in_menu'],
        'menu_position'         => $cpt['position'],
        'menu_icon'             => $cpt['icon'],
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,    
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        
      );
    
    // Register Custom Post Type>
	register_post_type( $cpt['cptname'], $args );

    }   

}


register_nav_menus(
    array(
    'top-menu'                => __( 'Top Menu' ),
    'main-menu'               => __( 'Main Menu' ),
    'footer-menu'             => __( 'Footer Menu' ),
   
    )
);

function codzilla_menu() {

wp_nav_menu( array(

    'menu'              => 'Main Menu',

    'container'         => '',

    'theme_location'    => 'navigation-menu',

    'menu_class'        => 'navbar-nav ml-auto',

    'depth'             => 3
  )

 );

}

function codzilla_footer_menu() {

wp_nav_menu( array(

    'menu'              => 'Footer Menu',

    'container'         => '',

    'theme_location'    => 'navigation-menu',

    'menu_class'        => 'footer-nav',

    'depth'             => 3
  )

 );

}

add_filter( 'rwmb_meta_boxes', 'codzilla_add_projects_gallery' );
function codzilla_add_projects_gallery( $meta_boxes ) {
    $meta_boxes[] = array(
        'title'      => __( 'Gallery Images', 'karma' ),
        'post_types' => array('portfolio'),
        'fields'     => array(
            array(
                'name' => esc_html__( 'Image Upload'),
                'id'   => "thumbnail_ids",
                'type' => 'image_advanced',
            ),
        ),
    );

    return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'codzilla_add_product_gallery' );
function codzilla_add_product_gallery( $meta_boxes ) {
    $meta_boxes[] = array(
        'title'      => __( 'Gallery Images', 'codzilla' ),
        'post_types' => array('product'),
        'fields'     => array(
            array(
                'name' => esc_html__( 'Image Upload'),
                'id'   => "thumbnail_ids",
                'type' => 'image_advanced',
            ),
        ),
    );

    return $meta_boxes;
}

function codzilla_register_custom_menu_pages() {

    add_menu_page(

        'website options',

        'Codzilla Options',

        'manage_options',

        'content-area',

        'main_content_area_callback',

        CODZILLA_URL.'assets/img/favicon.png',

        2

    );   

    add_submenu_page(

        'content-area',

        'Home options',

        'Home Page Options',

        'manage_options',

        'home-page-content',

        'home_page_content_callback'

    );   
     add_submenu_page(

        'content-area',

        'Contact options',

        'Contact Page Options',

        'manage_options',

        'contact-page-content',

        'contact_page_content_callback'

    );
    add_submenu_page(

        'content-area',

        'About options',

        'About Page Options',

        'manage_options',

        'about-page-content',

        'about_page_content_callback'

    ); 
    add_submenu_page(
        'edit.php?post_type=link',
        __( 'Codzillz Links', 'codzilla' ),
        __( 'Codzilla Links', 'codzilla' ),
        'manage_options',
        'codzilla_websites_links',
        'codzilla_websites_links_callback_fn'
    );
   
}

add_action( 'admin_menu', 'codzilla_register_custom_menu_pages' );

require_once ( CODZILLA_ROOT . 'codzilla_options/codzilla_option.php');
require_once ( CODZILLA_ROOT . 'codzilla_options/home_page_option.php');
require_once ( CODZILLA_ROOT . 'codzilla_options/about_page_option.php');
require_once ( CODZILLA_ROOT . 'codzilla_options/contact_page_option.php');
require_once ( CODZILLA_ROOT . 'codzilla_options/codzilla_websites.php');