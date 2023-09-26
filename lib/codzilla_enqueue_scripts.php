<?php 
function codzilla_scripts_styles() {
    
    wp_dequeue_style( 'js_composer_front' );
    wp_deregister_style( 'js_composer_front' );

         wp_enqueue_style( 'codzilla-bootsnav-css', CODZILLA_URL . 'assets/css/plugins.css');
        if(is_front_page()){
            wp_deregister_style( 'contact-form-7' );
            wp_dequeue_script('contact-form-7');
            wp_enqueue_style( 'codzilla-style', CODZILLA_URL . 'assets/css/main-style.min.css');
        }else{
            
            wp_enqueue_style( 'codzilla-style', CODZILLA_URL . 'assets/css/style.min.css');
        }
        if(is_rtl()){
            wp_enqueue_style( 'codzilla-rtl', CODZILLA_URL . 'assets/css/rtl-style.css');
        }
        if(wp_is_mobile()){
            wp_enqueue_style( 'codzilla-responsive', CODZILLA_URL . 'assets/css/responsive.min.css');
        }
    
         $primaryColor = get_option('codzilla_primaryColor');
         $secondaryColor = get_option('codzilla_secondaryColor');
         $custom_css = "
            :root {
                --primaryColor   : {$primaryColor};
                --secondaryColor : {$secondaryColor};
                 }"; 
         wp_add_inline_style( 'codzilla-style', $custom_css );

          wp_enqueue_script( 'jquery' );
          wp_enqueue_script( 'jquery-migrate' );

         wp_enqueue_script( 'codzilla-jquery', CODZILLA_URL .'assets/js/jquery-3.0.0.min.js', array() ,false, true );

         wp_enqueue_script( 'codzilla-migrate-js', CODZILLA_URL .'assets/js/jquery-migrate-3.0.0.min.js', array() ,false, true );

         wp_enqueue_script( 'codzilla-fancybox-js', CODZILLA_URL .'assets/js/jquery.fancybox.min.js', array() ,false, true );

//         wp_enqueue_script( 'codzilla-cubeportfolio-js', CODZILLA_URL .'assets/js/jquery.cubeportfolio.min.js', array() ,false, true );

//         wp_enqueue_script( 'codzilla-plugins-js', CODZILLA_URL .'assets/js/xplugin.min.js', array() ,false, true );

//         wp_enqueue_script( 'codzilla-scripts-js', CODZILLA_URL .'assets/js/xscript.min.js', array() ,false, true );

  
}
add_action( 'wp_enqueue_scripts', 'codzilla_scripts_styles' );



function codzilla_admin_scripts_styles($hook) {
    //var_dump($hook);
	$codzilla_pages =['link_page_codzilla_websites_links','admin_page_codzilla_websites_links','term.php','edit-tags.php','toplevel_page_content-area','codzilla-options_page_home-page-content','codzilla-options_page_about-page-content','codzilla-options_page_contact-page-content','edit-tags.php'];


	wp_enqueue_style( 'zilla-main', CODZILLA_URL . 'assets/admin/css/main-style.css');
	if( in_array($hook, $codzilla_pages) ) {
		wp_enqueue_style( 'zilla-bootsrtap', CODZILLA_URL . 'assets/admin/css/bootstrap.min.css');
		wp_enqueue_style( 'zilla-style', CODZILLA_URL . 'assets/admin/css/style.css');
        
		wp_enqueue_script( 'zilla-bootsrtap', CODZILLA_URL .'assets/admin/js/bootstrap.min.js', array() ,false, true );
        
        wp_enqueue_style( 'zilla-dataTables-css', CODZILLA_URL . 'assets/admin/datatables/css/jquery.dataTables.min.css');
		wp_enqueue_style( 'zilla-dataTables-buttons-css', CODZILLA_URL . 'assets/admin/datatables/css/buttons.dataTables.min.css');

        
		wp_enqueue_script( 'zilla-jquery-js', CODZILLA_URL .'assets/admin/datatables/js/jquery-3.5.1.js', array() ,false, true );
        wp_enqueue_script( 'zilla-datatables-js', CODZILLA_URL .'assets/admin/datatables/js/jquery.dataTables.min.js', array() ,false, true );
        wp_enqueue_script( 'zilla-dataTables-buttons-js', CODZILLA_URL .'assets/admin/datatables/js/dataTables.buttons.min.js', array() ,false, true );
        wp_enqueue_script( 'zilla-jszip-js', CODZILLA_URL .'assets/admin/datatables/js/jszip.min.js', array() ,false, true );
        wp_enqueue_script( 'zilla-pdfmake-js', CODZILLA_URL .'assets/admin/datatables/js/pdfmake.min.js', array() ,false, true );
        wp_enqueue_script( 'zilla-vfs_fonts-js', CODZILLA_URL .'assets/admin/datatables/js/vfs_fonts.js', array() ,false, true );
        wp_enqueue_script( 'zilla-buttons-html5-js', CODZILLA_URL .'assets/admin/datatables/js/buttons.html5.min.js', array() ,false, true );
        wp_enqueue_script( 'zilla-print-js', CODZILLA_URL .'assets/admin/datatables/js/print.min.js', array() ,false, true );
        wp_enqueue_script( 'zilla-links-table-js', CODZILLA_URL .'assets/admin/js/zilla-links-dt.js', array() ,false, true );
        
		if(function_exists( 'wp_enqueue_media' )){
			wp_enqueue_media();
		}else{
			wp_enqueue_style('thickbox');
			wp_enqueue_script('media-upload');
			wp_enqueue_script('thickbox');
		}
	}

		wp_enqueue_script( 'zilla-script', CODZILLA_URL .'assets/admin/js/script.js', array() ,false, true );
}
 
add_action('admin_enqueue_scripts', 'codzilla_admin_scripts_styles');


