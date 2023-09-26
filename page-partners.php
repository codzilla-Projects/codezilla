<?php 
/**
** Template Name: Partners Template
**/
get_header(); 
?>

 <!-- start page title section -->
        <section class="wow fadeIn parallax" data-stellar-background-ratio="0.5" style="background-image:url('<?= CODZILLA_URL .'assets/img/codzilla-4.jpg'?>');">
            <div class="opacity-medium bg-extra-dark-gray"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 d-flex flex-column justify-content-center text-center extra-small-screen page-title-large">
                        <!-- start page title -->
                        <h1 class="text-white-2 alt-font font-weight-600 letter-spacing-minus-1 margin-10px-bottom"><?php _e('Clients','codzilla'); ?></h1>
                        <!-- end page title -->
                        <!-- start sub title -->
                        <span class="text-white-2 opacity6 alt-font"><?php _e('Aliquam enim enim, pharetra in sodales at, interdum sit amet dui. ','codzilla'); ?></span>
                        <!-- end sub title -->
                    </div>
                </div>
            </div>
        </section>
<!-- end page title section -->

    <!-- start clients style 03 -->
        <section class="wow fadeIn bg-light-gray">
            <div class="container">
                <?php $partners = codzilla_get_partners(-1);
                if($partners->have_posts()) : ?>
                    <div class="row">
                        <?php while($partners->have_posts()) : $partners->the_post(); ?>
                            <div class="col-12 col-md-3 margin-three-bottom text-center wow fadeInRight">
                                <a href="javascript:void(0);"><img src="<?php the_post_thumbnail_url(); ?>" alt=""></a>
                            </div>
                                                    
                        <?php endwhile;?>
                         
                    </div>
                <?php wp_reset_query(); ?>
                <?php endif ?>
              
            </div>
        </section>
`        <!-- end clients style 03 -->    

<?php get_footer(); ?>