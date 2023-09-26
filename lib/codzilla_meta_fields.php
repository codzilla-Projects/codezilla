<?php 
/*********************************

Add Link Meta Box To Slider

**********************************/

function codzilla_add_slider_data_meta() {

    add_meta_box( "slider_extra_data", "Additional Data" , "codzilla_slider_data_callback", array('sliders'), "normal" );
}


add_action( 'add_meta_boxes', 'codzilla_add_slider_data_meta' );


/* Display the post meta box. */

function codzilla_slider_data_callback( $object, $box ) { 

    $codzilla_slider_link_text = esc_attr( get_post_meta( $object->ID, 'codzilla_slider_link_text', true ) );
    $codzilla_slider_link_url = esc_attr( get_post_meta( $object->ID, 'codzilla_slider_link_url', true ) );
    $codzilla_slider_txt_align = get_post_meta( $object->ID, 'codzilla_slider_txt_align', true );
    $codzilla_slider_img = get_post_meta( $object->ID, 'codzilla_slider_img', true );

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
    <div class="form-group row mt-3">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <label for="codzilla_slider_txt_align"><?php _e('Text Align: ','codzilla'); ?></label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <select name="codzilla_slider_txt_align" id="codzilla_slider_txt_align">
                        <?php if(empty($codzilla_slider_txt_align)) : ?>
                          <option disabled hidden><?php esc_attr_e( 'Please select' ); ?></option>
                        <?php endif; ?>
                      <option value="center" selected <?php selected( $codzilla_slider_txt_align, 'center' ); ?>>Center</option>
                      <option value="left" <?php selected( $codzilla_slider_txt_align, 'left' ); ?>>Left</option>
                      <option value="right" <?php selected( $codzilla_slider_txt_align, 'right' ); ?>>Right</option>
                    </select>
                    <br>
                </div>
            </div>
        </div>
    </div>
    
    <div class="form-group  row mt-3">
         <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <label for="codzilla_slider_img">Add Image</label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <input class="first_img_url codzilla_half" type="text" name="codzilla_slider_img" size="60" value="<?php echo $codzilla_slider_img; ?>">
                    <a href="#" class="first_img_upload btn btn-info">Choose </a>
                    <img  class="first_img rounded img-fluid" src="<?php echo $codzilla_slider_img; ?>" height="100" style="max-width:10%" />
                </div>
            </div>
        </div>
    </div>

    <div class="form-group row mt-3">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <label for="codzilla_slider_link_text"><?php _e('Link Text: ','codzilla'); ?></label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <input type="text"  name="codzilla_slider_link_text" class="form-control w-100" value="<?php echo $codzilla_slider_link_text; ?>"><br>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group row mt-3">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <label for="codzilla_slider_link_url"><?php _e('Link URL: ','codzilla'); ?></label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <input type="text"  name="codzilla_slider_link_url" class="form-control w-100" value="<?php echo $codzilla_slider_link_url; ?>"><br>
                </div>
            </div>
        </div>

    </div>
    
<?php

}


/*********************************

Add Link Meta Box To Teams

**********************************/

function codzilla_add_team_data_meta() {

    add_meta_box( "team_extra_data", "Additional Data" , "codzilla_team_data_callback", array('team'), "normal" );
}


add_action( 'add_meta_boxes', 'codzilla_add_team_data_meta' );


/* Display the post meta box. */

function codzilla_team_data_callback( $object, $box ) { 

    $codzilla_team_fb = esc_attr( get_post_meta( $object->ID, 'codzilla_team_fb', true ) );
    $codzilla_team_tw = esc_attr( get_post_meta( $object->ID, 'codzilla_team_tw', true ) );
    $codzilla_team_insta = esc_attr( get_post_meta( $object->ID, 'codzilla_team_insta', true ) );
    $codzilla_team_linkedin = esc_attr( get_post_meta( $object->ID, 'codzilla_team_linkedin', true ) );
    $codzilla_team_whatsapp = esc_attr( get_post_meta( $object->ID, 'codzilla_team_whatsapp', true ) );

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <div class="form-group row mt-3">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <label for="codzilla_team_fb"><?php _e('Facebook: ','codzilla'); ?></label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <input type="text"  name="codzilla_team_fb" class="form-control w-100" value="<?php echo $codzilla_team_fb; ?>"><br>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group row mt-3">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <label for="codzilla_team_tw"><?php _e('Twitter: ','codzilla'); ?></label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <input type="text"  name="codzilla_team_tw" class="form-control w-100" value="<?php echo $codzilla_team_tw; ?>"><br>
                </div>
            </div>
        </div>

    </div>

    <div class="form-group row mt-3">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <label for="codzilla_team_insta"><?php _e('Instagram: ','codzilla'); ?></label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <input type="text"  name="codzilla_team_insta" class="form-control w-100" value="<?php echo $codzilla_team_insta; ?>"><br>
                </div>
            </div>
        </div>

    </div>

    <div class="form-group row mt-3">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <label for="codzilla_team_linkedin"><?php _e('Linkedin: ','codzilla'); ?></label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <input type="text"  name="codzilla_team_linkedin" class="form-control w-100" value="<?php echo $codzilla_team_linkedin; ?>"><br>
                </div>
            </div>
        </div>

    </div>

    <div class="form-group row mt-3">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <label for="codzilla_team_whatsapp"><?php _e('WhatsApp: ','codzilla'); ?></label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <input type="text"  name="codzilla_team_whatsapp" class="form-control w-100" value="<?php echo $codzilla_team_whatsapp; ?>"><br>
                </div>
            </div>
        </div>

    </div>
<?php

}


/*********************************

Add Link Meta Box To testimonialss

**********************************/

function codzilla_add_testimonials_data_meta() {

    add_meta_box( "testimonials_extra_data", "Additional Data" , "codzilla_testimonials_data_callback", array('testimonial'), "normal" );
}


add_action( 'add_meta_boxes', 'codzilla_add_testimonials_data_meta' );


/* Display the post meta box. */

function codzilla_testimonials_data_callback( $object, $box ) { 

    $codzilla_testimonials_place = esc_attr( get_post_meta( $object->ID, 'codzilla_testimonials_place', true ) );

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <div class="form-group row mt-3">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <label for="codzilla_testimonials_place"><?php _e('Location: ','codzilla'); ?></label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <input type="text"  name="codzilla_testimonials_place" class="form-control w-100" value="<?php echo $codzilla_testimonials_place; ?>"><br>
                </div>
            </div>
        </div>
    </div>

<?php

}


/*********************************

Add Link Meta Box To partners

**********************************/

function codzilla_add_clients_data_meta() {

    add_meta_box( "clients_extra_data", "Show in homepage" , "codzilla_clients_data_callback", array('partner'), "normal" );
}


add_action( 'add_meta_boxes', 'codzilla_add_clients_data_meta' );


/* Display the post meta box. */

function codzilla_clients_data_callback( $object, $box ) { 

    $codzilla_clients_show = get_post_meta( $object->ID, 'codzilla_clients_show', true );

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <div class="form-group row mt-3">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <label for="codzilla_clients_show"><?php _e('Show in homepage: ','codzilla'); ?></label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <input type="checkbox" name="codzilla_clients_show" value="1" <?= $codzilla_clients_show == '1' ?'checked': ''; ?> >
                    <br>
                </div>
            </div>
        </div>
    </div>

<?php

}

/*********************************

Add Meta Box To portfolio

**********************************/

function codzilla_add_portfolio_data_meta() {

    add_meta_box( "portfolio_extra_data", "Show in homepage" , "codzilla_portfolio_data_callback", array('portfolio'), "normal" );
    add_meta_box( "portfolio_home_image", "Homepage Image" , "codzilla_portfolio_homepage_callback", array('portfolio'), "normal" );
}


add_action( 'add_meta_boxes', 'codzilla_add_portfolio_data_meta' );


/* Display the post meta box. */

function codzilla_portfolio_data_callback( $object, $box ) { 

    $portfolio_showinhome = get_post_meta( $object->ID, 'portfolio_showinhome', true );

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <div class="form-group row mt-3">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <label for="portfolio_showinhome"><?php _e('Show in homepage: ','codzilla'); ?></label>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <input type="checkbox" name="portfolio_showinhome" value="1" <?= $portfolio_showinhome == '1' ?'checked': ''; ?> >
                    <br>
                </div>
            </div>
        </div>
    </div>

<?php

}
function codzilla_portfolio_homepage_callback( $object, $box ) { 

    $portfolio_home_image = get_post_meta( $object->ID, 'portfolio_home_image', true );

?>

     <div class="form-group  row mt-3">
         <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <label for="portfolio_home_image">Add Image</label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <input class="second_img_url codzilla_half" type="text" name="portfolio_home_image" size="60" value="<?php echo $portfolio_home_image; ?>">
                    <a href="#" class="second_img_upload btn btn-info">Choose </a>
                    <img  class="second_img rounded img-fluid" src="<?php echo $portfolio_home_image; ?>" height="100" style="max-width:10%" />
                </div>
            </div>
        </div>
    </div>

<?php

}

/*********************************

Add Link Meta Box To service

**********************************/

function codzilla_add_service_data_meta() {

    add_meta_box( "service_extra_data", "Additional Data" , "codzilla_service_data_callback", array('service'), "normal" );
}


add_action( 'add_meta_boxes', 'codzilla_add_service_data_meta' );


/* Display the post meta box. */

function codzilla_service_data_callback( $object, $box ) { 

    $codzilla_service_icon = esc_attr( get_post_meta( $object->ID, 'codzilla_service_icon', true ) );

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <div class="form-group row mt-3">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <label for="codzilla_service_icon"><?php _e('Service Icon code: ','codzilla'); ?></label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <input type="text"  name="codzilla_service_icon" class="form-control w-100" value="<?php echo $codzilla_service_icon; ?>"><br>
                </div>
            </div>
        </div>
    </div>

<?php

}


add_action( 'save_post', 'codzilla_save_custom_meta', 10, 2 );


function codzilla_save_custom_meta($post_id){

    
    if( isset($_POST['codzilla_slider_img']) ){

        update_post_meta($post_id, 'codzilla_slider_img', $_POST['codzilla_slider_img']);

    }

    else

        delete_post_meta($post_id,'codzilla_slider_img');

  
    if( isset($_POST['codzilla_slider_link_text']) ){

        update_post_meta($post_id, 'codzilla_slider_link_text', $_POST['codzilla_slider_link_text']);

    }

    else

        delete_post_meta($post_id,'codzilla_slider_link_text');


    if( isset($_POST['codzilla_slider_link_url']) ){

        update_post_meta($post_id, 'codzilla_slider_link_url', $_POST['codzilla_slider_link_url']);

    }

    else

        delete_post_meta($post_id,'codzilla_slider_link_url');

    if( isset($_POST['codzilla_slider_txt_align']) ){

        update_post_meta($post_id, 'codzilla_slider_txt_align', $_POST['codzilla_slider_txt_align']);

    }

    else

        delete_post_meta($post_id,'codzilla_slider_txt_align');


    if( isset($_POST['codzilla_team_fb']) ){

        update_post_meta($post_id, 'codzilla_team_fb', $_POST['codzilla_team_fb']);

    }

    else

        delete_post_meta($post_id,'codzilla_team_fb');


    if( isset($_POST['codzilla_team_tw']) ){

        update_post_meta($post_id, 'codzilla_team_tw', $_POST['codzilla_team_tw']);

    }

    else

        delete_post_meta($post_id,'codzilla_team_tw');


    if( isset($_POST['codzilla_team_insta']) ){

        update_post_meta($post_id, 'codzilla_team_insta', $_POST['codzilla_team_insta']);

    }

    else

        delete_post_meta($post_id,'codzilla_team_insta');


    if( isset($_POST['codzilla_team_linkedin']) ){

        update_post_meta($post_id, 'codzilla_team_linkedin', $_POST['codzilla_team_linkedin']);

    }

    else

        delete_post_meta($post_id,'codzilla_team_linkedin');


    if( isset($_POST['codzilla_team_whatsapp']) ){

        update_post_meta($post_id, 'codzilla_team_whatsapp', $_POST['codzilla_team_whatsapp']);

    }

    else

        delete_post_meta($post_id,'codzilla_team_whatsapp');


    if( isset($_POST['codzilla_testimonials_place']) ){

        update_post_meta($post_id, 'codzilla_testimonials_place', $_POST['codzilla_testimonials_place']);

    }

    else

        delete_post_meta($post_id,'codzilla_testimonials_place');


    if( isset($_POST['codzilla_service_icon']) ){

        update_post_meta($post_id, 'codzilla_service_icon', $_POST['codzilla_service_icon']);

    }

    else

        delete_post_meta($post_id,'codzilla_service_icon');


    if( isset($_POST['codzilla_clients_show']) ){ 

        update_post_meta($post_id, 'codzilla_clients_show', $_POST['codzilla_clients_show']);

    }

    else

        delete_post_meta($post_id,'codzilla_clients_show');
     

    if( isset($_POST['portfolio_showinhome']) ){ 

        update_post_meta($post_id, 'portfolio_showinhome', $_POST['portfolio_showinhome']);

    }

    else

        delete_post_meta($post_id,'portfolio_showinhome');
     

    if( isset($_POST['portfolio_home_image']) ){ 

        update_post_meta($post_id, 'portfolio_home_image', $_POST['portfolio_home_image']);

    }

    else

        delete_post_meta($post_id,'portfolio_home_image');

}
/*********************************

Add Link Meta Box To Link

**********************************/

function codzilla_add_links_data_meta() {

    add_meta_box( "links_extra_data", "Additional Data" , "codzilla_links_data_callback", array('link'), "normal" );
}


add_action( 'add_meta_boxes', 'codzilla_add_links_data_meta' );


/* Call Back and Save Meta Boxes
 -- websites_link_callback and save
 */

function codzilla_links_data_callback( $link ) {
    // Display code/markup goes here. Don't forget to include nonces!
    wp_nonce_field(basename(__FILE__),'wp_owt_cpt_nonce');
    ?>
 <label>Link</label>
           
 <?php
 $link_url= get_post_meta($link->ID,'codzilla_link_url_box',true);
 ?>
<input  name="codzilla_link_url_box" type="text" value="<?php echo $link_url; ?>"  />
<br><br><br>
<label>Username</label>
           
<?php
$link_username= get_post_meta($link->ID,'codzilla_link_username_box',true);
?>
<input  name="codzilla_link_username_box" type="text" value="<?php echo $link_username; ?>"  />
<br><br><br>
<label>Password</label>
           
<?php
$link_password= get_post_meta($link->ID,'codzilla_link_password_box',true);
?>
<input  name="codzilla_link_password_box" type="text" value="<?php echo $link_password; ?>"  /><br><Br>

<?php $link_type = get_post_meta($link->ID, 'codzilla_link_type', true); 
    ?> 

    <label>Choose Link Type :  </label>

    <select name="codzilla_link_type" id="codzilla_link_type">
        <?php if(empty($link_type)) : ?>
          <option selected disabled hidden><?php esc_attr_e( 'Please select' ); ?></option>
        <?php endif; ?>
      <option value="cpanel" <?php selected( $link_type, 'cpanel' ); ?>>Cpanel</option>
      <option value="website" <?php selected( $link_type, 'website' ); ?>>Website</option>
    </select>
   



<?php
}

/**
 * Save meta box content.
 *
 * @param int $post_id Post ID
 */
function save_codzilla_link_url_box( $post_id,$post ) {
    // Save logic goes here. Don't forget to include nonce checks!
    //verifying the nonce
    if ( ! isset( $_POST['wp_owt_cpt_nonce'] )|| ! wp_verify_nonce( $_POST['wp_owt_cpt_nonce'] , basename(__FILE__) ) ) {
        return $post_id ;
    }
    //verifying post type
    $post_slug='link';
    if( $post_slug != $post->post_type){
        return;
    }
    if(isset($_POST['codzilla_link_url_box'])){
         $date=sanitize_text_field($_POST['codzilla_link_url_box']);
        update_post_meta($post_id,'codzilla_link_url_box',$date);
    }else
        delete_post_meta($post_id,'codzilla_link_url_box');
    
     if(isset($_POST['codzilla_link_username_box'])){
         $date=sanitize_text_field($_POST['codzilla_link_username_box']);
        update_post_meta($post_id,'codzilla_link_username_box',$date);
    }else
        delete_post_meta($post_id,'codzilla_link_username_box');
     
       if(isset($_POST['codzilla_link_password_box'])){
         $date=sanitize_text_field($_POST['codzilla_link_password_box']);
        update_post_meta($post_id,'codzilla_link_password_box',$date);
    }else
        delete_post_meta($post_id,'codzilla_link_password_box');
    
     if(isset($_POST['codzilla_link_type'])){
         $date=sanitize_text_field($_POST['codzilla_link_type']);
        update_post_meta($post_id,'codzilla_link_type',$date);
    }else
        delete_post_meta($post_id,'codzilla_link_type');
    
     
    
     
}
add_action( 'save_post', 'save_codzilla_link_url_box',10,2 );


