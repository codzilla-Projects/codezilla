<?php 
/**
** Template Name: Services Template
**/
get_header(); 
?>
  <!-- start page title section -->
        <section class="wow fadeIn parallax" data-stellar-background-ratio="0.5" style="background-image:url('<?= CODZILLA_URL .'assets/images/codzilla-4.jpg'?>');">
            <div class="opacity-medium bg-extra-dark-gray"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 d-flex flex-column justify-content-center text-center extra-small-screen page-title-large">
                        <!-- start page title -->
                        <h1 class="text-white-2 alt-font font-weight-600 letter-spacing-minus-1 margin-10px-bottom"><?php _e('Services','codzilla'); ?></h1>
                        <!-- end page title -->
                        <!-- start sub title -->
                        <span class="text-white-2 opacity6 alt-font"><?php _e('Lorem Ipsum is simply dummy text printing','codzilla'); ?></span>
                        <!-- end sub title -->
                    </div>
                </div>
            </div>
        </section>
    <!-- end page title section -->

<?php get_footer(); ?>