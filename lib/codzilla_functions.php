<?php 

function codzilla_get_sliders($no){
    $args = array(
        'post_type'       => 'sliders',
        'post_status'     => 'publish',
        'posts_per_page'  => $no,
        'orderby'         => 'date',
        'order'           => 'DESC',
    );
    return $sliders = new WP_Query( $args );    
}

function codzilla_get_team($no){
    $args = array(
        'post_type'       => 'team',
        'post_status'     => 'publish',
        'posts_per_page'  => $no,
        'orderby'         => 'date',
        'order'           => 'ASC',
    );
    return $teams = new WP_Query( $args );    
}
function codzilla_get_posts($no){
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $args = array(
        'post_type'       => 'post',
        'post_status'     => 'publish',
        'posts_per_page'  =>  $no,
        'paged'           =>  $paged,
        'orderby'         => 'date',
        'order'           => 'DESC'
    );
    return $members = new WP_Query( $args );    
}


function codzilla_get_portfolio($no){
    
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $args = array(
        'post_type'       => 'portfolio',
        'post_status'     => 'publish',
        'posts_per_page'  =>  $no,
        'paged'           =>  $paged,
        'orderby'         => 'date',
        'order'           => 'DESC'
    );
    return $portfolio = new WP_Query( $args );    
}

function codzilla_get_service($no){
    $args = array(
        'post_type'       => 'service',
        'post_status'     => 'publish',
        'posts_per_page'  => $no,
        'orderby'         => 'date',
        'order'           => 'DESC',
    );
    return $services = new WP_Query( $args );    
}

function codzilla_get_service_with_offset($no,$offset){
    $args = array(
        'post_type'       => 'service',
        'post_status'     => 'publish',
        'posts_per_page'  => $no,
        'orderby'         => 'date',
        'order'           => 'ASC',
        'offset'          => $offset ,
    );
    return $services = new WP_Query( $args );    
}

function codzilla_get_testimonials($no){
    $args = array(
        'post_type'       => 'testimonial',
        'post_status'     => 'publish',
        'posts_per_page'  => $no,
        'orderby'         => 'date',
        'order'           => 'DESC', 
    );
    return $testimonials = new WP_Query( $args );    
}

function codzilla_get_partners($no){
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $args = array(
        'post_type'       => 'partner',
        'post_status'     => 'publish',
        'posts_per_page'  =>  $no,
        'paged'           =>  $paged,
        'orderby'         => 'date',
        'order'           => 'DESC'
    );
    return $partners = new WP_Query( $args );    
}

function codzilla_get_home_clients($no){
    $args = array(
          'post_type'       => 'partner',
          'post_status'     => 'publish',
          'posts_per_page'  => $no,
          'orderby'         => 'meta_value_num',
          'meta_key'        => 'codzilla_clients_show',
          'order'           => 'DESC',
          'meta_query' => array(
            array(
                'key'     => 'codzilla_clients_show',
                'value'   => '1',
                'compare' => '=',
                 )
            )
    );
    return $partners = new WP_Query( $args );    
}

/*===========================================================*/

function get_search_results($no){

    $args = array(

        'post_type'       => array('product','service','portfolio','post'),

        'post_status'     => 'publish',

        'posts_per_page'  =>  $no,

        'orderby'         => 'date',

        'order'           => 'DESC'

    );

    return $posts = new WP_Query( $args );    

}

/*===========================================================*/

function mySearchFilter($articleQuery) {

    if ($articleQuery->is_search ) {

        $articleQuery->set('post_type', array('product','service','portfolio','post') );
        $articleQuery->set('posts_per_page', 9);
        $articleQuery->set('orderby', 'date' );
        $articleQuery->set('order', 'DESC' );
    };

    return $articleQuery;

};

add_filter('pre_get_posts','mySearchFilter');

function codzilla_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_option('codzilla_logo_dark'); ?>);
            width: 100%;
            height: 100px;
            background-size: contain;
            margin: 0 auto;
        }
        p#nav>a{
            display: none;
        }
        .login form{
            background: #081C3C!important;
        }
        .login label{
            font-weight: 600!important;
            color: #fff!important;
        }
        .wp-core-ui p .button {
            background: #5CA4EC;
            border-color: #5CA4EC;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'codzilla_login_logo' );

function remove_wp_logo($wp_admin_bar) {
  $wp_admin_bar->remove_node('wp-logo');
}
add_action('admin_bar_menu', 'remove_wp_logo', 999);

function change_footer_admin() {
  echo '<span id="footer-thankyou"><a href="#" target="_blank">Codzilla</a></span>';
}
add_filter('admin_footer_text', 'change_footer_admin');


function codzilla_clean($string){
    return trim(stripslashes(htmlspecialchars($string)));
}
