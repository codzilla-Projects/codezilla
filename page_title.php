  <!-- ==================== Start Slider ==================== -->

    <header class="pages-header bg-img valign parallaxie" data-background="<?php $page_image = get_the_post_thumbnail_url(); if(empty($page_image)){ echo CODZILLA_URL .'assets/img/codzilla-4.jpg' ;} else{ echo $page_image;}?>" data-overlay-dark="5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cont text-center">
                        <h1><?php the_title(); ?></h1>
                        <div class="path">
                            <a href="<?php bloginfo('url'); ?>"><?php _e('Home','codzilla'); ?></a><span>/</span><h4 class="active"><?php the_title(); ?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->