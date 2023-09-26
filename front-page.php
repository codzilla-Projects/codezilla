<?php
get_header();

?>
 
    <!-- ==================== Start Slider ==================== -->

    <header class="slider slider-prlx fixed-slider text-center">
        <div class="swiper-container parallax-slider">
            
            <div class="swiper-wrapper">
                <?php
                    $no = 3;
                    $sliders = codzilla_get_sliders($no);
                    if($sliders->have_posts()) : 
                    $i = 0;
                    while($sliders->have_posts()) : $sliders->the_post(); 
                    $slider_url  = get_post_meta(get_the_ID(),'codzilla_slider_link_url',true);
                    $slider_text = get_post_meta(get_the_ID(),'codzilla_slider_link_text',true);
                    $text_align = get_post_meta(get_the_ID(),'codzilla_slider_txt_align',true);
                    $codzilla_slider_img = get_post_meta(get_the_ID(),'codzilla_slider_img',true);
                ?>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="<?php the_post_thumbnail_url(); ?>" >
                        <div class="container">
                            <div class="row justify-content-center d-block">
                                <div class="col-lg-10 col-md-10  <?php if($text_align == 'center'){echo "m-auto w-57 "; }else{  echo"pr-5 w-64  "; }?>" >
                                    <?php if(!empty($codzilla_slider_img)){?>
                                        <img src="<?= $codzilla_slider_img;?>" alt="<?php the_title(); ?>" class="codzilla_slider_img" width="196" height="184">
                                    <?php } ?>                                    
                                    <div class="caption <?=  $text_align;?> text-<?=  $text_align;?>">
                                        <?php if($i == 0):?>
                                            <h1 class="<?php if( ! is_rtl() ){echo 'data-splitting';}?>"><?php the_title(); ?></h1>
                                        <?php else :?>
                                            <h2 class="<?php if( ! is_rtl() ){echo 'data-splitting';}?>"><?php the_title(); ?></h2>
                                        <?php endif;?>
                                        <p><?php the_content(); ?></p>
                                        <?php
                                        if(!empty($slider_url)||($slider_text)):
                                        ?>
                                        <a href="<?= $slider_url; ?>" class="btn-curve btn-lit mt-30">
                                            <span><?= $slider_text; ?></span>
                                        </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $i++; endwhile; wp_reset_query(); endif ?>
            </div>

            <!-- slider setting -->
            <div class="setone setwo">
                <div class="swiper-button-next swiper-nav-ctrl next-ctrl cursor-pointer">
                    <i class="fas fa-chevron-right"></i>
                </div>
                <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl cursor-pointer">
                    <i class="fas fa-chevron-left"></i>
                </div>
            </div>
            <div class="swiper-pagination top botm custom-font"></div>

            <div class="social-icon">
                <?php $facebook = get_option('codzilla_fb');  
                if(!empty($facebook)) :
                ?>
                <a href="<?= $facebook; ?>"><i class="fab fa-facebook-f"></i></a>
                <?php endif; ?>
                <?php $twitter = get_option('codzilla_twitter');  
                    if(!empty($twitter)) :
                ?>
                <a href="<?= $twitter; ?>"><i class="fab fa-twitter"></i></a>
                <?php endif; ?>
                <?php $instagram = get_option('codzilla_insta');  
                    if(!empty($instagram)) :
                ?>
                <a href="<?= $instagram; ?>"><i class="fab fa-instagram"></i></a>
                <?php endif; ?>

                <?php $youtube = get_option('codzilla_youtube');  
                    if(!empty($youtube)) :
                ?>
                <a href="<?= $youtube; ?>"><i class="fab fa-youtube"></i></a>
                <?php endif; ?>
            </div>
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->


    <!-- ==================== Start about ==================== -->
    <div class="main-content">
    <section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 valign">
                    <div class="content">
                        <div class="sub-title">
                            <h6><?php _e('About Us','codzilla'); ?></h6>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <?php the_content();?>
                        <p style="display:none;">Digital Marketing Masters</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="blc-img">
                        <div class="wow ">
                            <img class="lazyload" data-src="<?= CODZILLA_URL .'assets/img/home_about_img.webp'?>" width="570" height="380" alt="Codezilla">
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End about ==================== -->



    <!-- ==================== Start Services ==================== -->

    <section class="services section-padding sub-bg">
        <div class="container">
            <div class="sec-head custom-font tr-head">
                <h6><?php _e('Codezilla','codzilla'); ?></h6>
                <h3><?php _e('Services.','codzilla'); ?></h3>
                <span class="tbg"><?php _e('Services','codzilla'); ?></span>
            </div>
            <div class="row">
                <?php
                    $no = 4;
                    $first_flag = .3;
                    $style = 1;
                    $services = codzilla_get_service($no);
                    if($services->have_posts()) : 
                    while($services->have_posts()) : $services->the_post(); 
                    $post_id = get_the_ID();
                    $icon    = get_post_meta($post_id,'codzilla_service_icon',true);
                ?>
                <div class="col-lg-3 wow fadeInUp" data-wow-delay="<?= $first_flag;?>s">
                    <div class="step-item x<?= $style;?>">
                        <i class="icon <?= $icon;?>"></i>
                        <span><?php the_title(); ?></span>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                </div>
                <?php $first_flag = $first_flag + .3; $style++; endwhile; wp_reset_query(); endif ?>
            </div>
            <div class="smore custom-font">
                <a class="effect effect-2" href="javascript:void(0)"><?php _e('Discover More','codzilla'); ?></a>
                
            </div>
        </div>
    </section>

    <!-- ==================== End Services ==================== -->


    <!-- ==================== Start works ==================== -->

    <section class="portfolio section-padding pb-70 zilla_home_portfolio">
        <div class="container">
            <div class="sec-head custom-font">
                <h6 class="works_subtitle"><?php _e('Let\'s hear from our work... it speaks for itself','codzilla'); ?></h6>
                <h3><?php _e('Our Works.','codzilla'); ?></h3>
                <span class="tbg text-right"><?php _e('Portfolio','codzilla'); ?></span>
            </div>
        </div>
        <div class="container">
            <div class="row">

                <!-- filter links -->
                <div class="filtering text-center col-12 project-filter post-filter has-dynamic-filters-counter">
                    <ul class="filter">
                        <li data-filter='.filter-item' class="active"><a class="filter-text"><?php _e('All Projects','codzilla'); ?></a></li>
                        <?php 
                            $terms          = get_terms( array( 
                            'taxonomy'      => 'classfications', 
                            'orderby'       => 'name',
                            'order'         => 'ASC',
                            'hide_empty'    => false, //can be 1, '1' too
                            
                            ) );
                            ?>
                        <?php
                         foreach ( $terms as $term ) {
                            if ($term->count != 0) :
                            ?>
                            <li data-filter='.<?php echo $term->slug;; ?>'><a class="filter-text" href="javascript:void(0);"><?php echo $term->name;?></a></li>
                        <?php endif; ?>
                        <?php }?> 
                    </ul>
                </div>


                <!-- gallery -->
                <div class="gallery full-width filter-layout ">
                    <?php
                         $args = array(
                            'post_type'       => 'portfolio',
                            'post_status'     => 'publish',
                            'posts_per_page'  => 6,
                            'orderby'         => 'date',
                            'order'           => 'ASC',
                            'meta_key'        => 'portfolio_showinhome',
                              'meta_query' => array(
                                array(
                                    'key'     => 'portfolio_showinhome',
                                    'value'   => '1',
                                    'compare' => '=',
                                     )
                                )
                        );
                    
                         $items = new WP_Query( $args ); 
                         if($items->have_posts()) {?> 
                            <?php while($items->have_posts()) : $items->the_post(); ?>
                                <?php $post_terms = get_the_terms(get_the_ID(),'classfications');
                                $portfolio_img = get_post_meta(get_the_ID(),'portfolio_home_image',true);?>
                                <!-- gallery item -->
                                <div class="col-lg-4 col-md-6 items <?php foreach($post_terms as $post_term){echo $post_term->slug. ' '; }?> filter-item wow fadeInUp" data-wow-delay=".4s">
                                    <div class="inner-box">
                                        <div class="image">
                                            <img class="lazyload" data-src="<?= $portfolio_img; ?>" width="380" height="309" alt="<?php the_title(); ?>" />
                                            <div class="overlay-box">
                                                <div class="options">
                                                    <a href="<?php the_permalink(); ?>" class="plus-icon"><i class="fas fa-link"></i></a>
                                                    <a href="<?= $portfolio_img; ?>" class="plus-icon lightbox-image" data-fancybox="gallery1"><i class="fas fa-plus"></i></a>
                                                </div>
                                                <div class="content clearfix">
                                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                                    <div><?php  foreach($post_terms as $post_term){ echo '<span class="category-slug"> <a herf='.esc_url( get_term_link($post_term)).'>' .$post_term->name. '</a></span>'; }?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile;?>
                        <?php wp_reset_query();
                     }?>
                    
                </div>

            </div>
            <div class="smore custom-font d-flex justify-content-center">
                <a class="effect effect-2" href="<?php bloginfo('url'); ?>/our-portfolio/"><?php _e('Discover More','codzilla'); ?></a>
            </div>
        </div>
    </section>

    <!-- ==================== End works ==================== -->


    <!-- ==================== Start clients Brands ==================== -->

    <section class="clients section-padding ">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 valign">
                    <div class="sec-head custom-font mb-0">
                        <h6><?php _e('Clients','codzilla'); ?></h6>
                        <h3><?php _e('Our','codzilla'); ?> <br> <?php _e('Clients.','codzilla'); ?></h3>
                    </div>
                </div>
                <div class="col-lg-8 slick-wrapper">
                    <div class="smore custom-font d-flex justify-content-end">
                        <a class="effect effect-2 rounded" href="<?php bloginfo('url'); ?>/our-clients/"><?php _e('Discover More','codzilla'); ?></a>
                    </div>
                    <div class="bord">
                        <div id="clients" class="row bord">
                            <?php
                                $no = 9;
                                $first_flag = .3;
                                $partners = codzilla_get_home_clients($no);
                                if($partners->have_posts()) : 
                                while($partners->have_posts()) : $partners->the_post(); 
                            ?>
                            <div class="col-md-4 col-6 brands">
                                <div class="item fadeIn" data-wow-delay="<?= $first_flag;?>s">
                                    <div class="img">
                                        <img class="lazyload" data-src="<?php the_post_thumbnail_url(); ?>" width="130" height="88" alt="<?php the_title(); ?>"/>
                                         <a href="javascript:void(0);" class="link <?php if( ! is_rtl() ){echo 'data-splitting';}?>"><?php the_title(); ?></a>
                                    </div>
                                </div>
                            </div>
                            <?php $first_flag = $first_flag + .3; endwhile; wp_reset_query(); endif ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End clients Brands ==================== -->


    <!-- ==================== Start testimonials ==================== -->

    <section class="testimonials section-padding bg-img parallaxie" data-background="<?php echo CODZILLA_URL .'assets/img/BG-testimonials.webp' ; ?>" data-overlay-dark="10">
        <div class="container position-re">
            <div class="sec-head custom-font text-center">
                <h6 class="wow fadeIn" data-wow-delay=".5s"><?php _e('What People Says?','codzilla'); ?></h6>
                <h3 class="wow <?php if( ! is_rtl() ){echo 'data-splitting';}?>"><?php _e('Testimonials.','codzilla'); ?></h3>
                <span class="tbg"><?php _e('Testimonials','codzilla'); ?></span>
            </div>
            <div class="row justify-content-center wow fadeInUp" data-wow-delay=".5s">
                <div class="col-lg-8">
                    <div class="slic-item">
                        <?php
                            $no = -1;
                            $testimonials = codzilla_get_testimonials($no);
                            if($testimonials->have_posts()) : 
                            while($testimonials->have_posts()) : $testimonials->the_post(); 
                            $location       = get_post_meta(get_the_ID(),'codzilla_testimonials_place',true);
                        ?>
                        <div class="item">
                            <p><?php the_content(); ?></p>
                            <div class="info">
                                <div class="cont">
                                    <div class="author">
                                       
                                        <div class="fxright">
                                            <span class="author-name custom-font"><?php the_title(); ?></span>
                                            <?php   
                                                if(!empty($location)) :
                                            ?>
                                            <span class="author-details"><?= $location ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; wp_reset_query(); endif ?>
                    </div>
                </div>
            </div>

            <div class="arrows">
                <div class="next cursor-pointer">
                    <i class="fas fa-chevron-right"></i>
                </div>
                <div class="prev cursor-pointer">
                   <i class="fas fa-chevron-left"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End testimonials ==================== -->


    
     <!-- ==================== Start call-to-action ==================== -->

    <section class="call-action section-padding sub-bg bg-img" data-background="img/pattern.png">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-9">
                    <div class="content sm-mb30">
                        <h6 class="wow <?php if( ! is_rtl() ){echo 'data-splitting';}?>"><?php _e('Let’s Talk','codzilla'); ?></h6>
                        <h2 class="wow custom-font <?php if( ! is_rtl() ){echo 'data-splitting';}?>"><?php _e('about your ','codzilla'); ?><b><?php _e('next project','codzilla'); ?></b>.</h2>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3 valign">
                    <a href="<?php bloginfo('url'); ?>/contact-us/" class="btn-curve btn-blc wow fadeInUp" data-wow-delay=".5s"><span><?php _e('Get In Touch','codzilla'); ?></span></a>
                </div>

            </div>
        </div>
    </section>

    <!-- ==================== End call-to-action ==================== -->

        
 <?php

get_footer();

?>