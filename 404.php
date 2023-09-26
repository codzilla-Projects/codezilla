<?php 
get_header('inner');
?>

    <!-- ==================== Start header ==================== -->

    <section class="works-header fixed-slider valign four_o_four"  style="background-image:url('<?= CODZILLA_URL .'assets/img/404.webp'?>');" data-overlay-dark="5">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-9 col-md-11 ">
                    <div class="custom-font valign">
                       <span class="full-width text-center ">404</span>
                    </div>
                </div>
                <div class="col-lg-9 col-md-11 text-center">
                    <h2 class="custom-font text-center"><?php _e('Page Not Found','codzilla'); ?></h2>
                    <p class="text-center"><?php _e('The page you were looking for could not be found.','codzilla'); ?></p>
                    <a href="https://codzilla.net/" class="btn-curve btn-blc text-center mt-20"><span>Back to Home</span></a>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End header ==================== -->

<?php get_footer(); ?>