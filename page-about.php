<?php 
/**
** Template Name: About Template
**/
get_header(); 
get_template_part('page_title'); ?>



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
                        
                        <div class="w-60">
                            <a href="<?= get_option('codzilla_profile'); ?>" class="simple-btn1 custom-font mt-30 wow <?php if( ! is_rtl() ){echo 'data-splitting';}?>"><span><?php _e('Download Company Profile','codzilla'); ?></span></a>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="blc-img">
                        <div class=" wow">
                            <img class="lazyload" data-src="<?= CODZILLA_URL .'assets/img/hom_about.png'?>" width="570" height="380">
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End about ==================== -->



    <!-- ==================== Start Company Profile ==================== -->
<!--

    <section class="about-us call-action section-padding  bg-img" data-background="<?php //echo CODZILLA_URL .'assets/img/pattern.png' ; ?>">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-7">
                    <div class="content sm-mb30">
                        <h6 class="wow" data-splitting>Now</h6>
                        <h2 class="wow custom-font" data-splitting>You Can Download  <b>Company Profile</b>.</h2>
                    </div>
                </div>

                <div class="col-md-5 col-lg-5 valign">
                    <a href="<?php //echo get_option('codzilla_profile'); ?>" class="btn-curve btn-blc wow fadeInUp" data-wow-delay=".5s"><span>Download Company Profile</span></a>
                </div>

            </div>
        </div>
    </section>
-->

    <!-- ==================== End Company Profile ==================== -->


<!-- ==================== Start Minimal-Area ==================== -->

    <section class="min-area  sub-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="img ">
                        <img class="thumparallax-down" src="<?php echo CODZILLA_URL .'assets/img/codzilla-4.jpg' ; ?>" alt="">
                    </div> 
                </div>
                <div class="col-lg-6 valign">
                    <div class="content about-cont">
                        <h4 class="wow custom-font" <?php if( ! is_rtl() ){echo 'data-splitting';}?>><?php _e('We Are Codezilla.','codzilla'); ?></h4>
                           

                        <ul class="feat">
                            <li class="wow fadeInUp" data-wow-delay=".2s">
                                <p><?php _e('In Codezilla, Our Passionate team will guide  you through your digital journey Step by step taking your business to the next level.','codzilla'); ?></p>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay=".2s">
                                <p><?php _e('With Codezilla, you will lead your industry. Codezilla is  your business partner, who does care about your business success just as you do. We are in the same boat, heading towards a brighter future','codzilla'); ?></p>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay=".6s">
                                <p><?php _e('As Codezillians,  we will help you to grow your business , increase your revenue, and track every business aspect needed with the minimal effort. With Codezilla, it has never been that easy.','codzilla'); ?></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End Minimal-Area ==================== -->
        
    <!-- ==================== Start Services ==================== -->

        <section class="services pt-100 pb-100">
            <div class="container">
                
                <div class="row">
                    <div class="col-lg-3 col-md-6 item-box bg-img wow fadeInLeft" data-wow-delay=".3s"
                        data-background="<?php echo CODZILLA_URL ;?>assets/img/philosophy.jpg">
                        <h4 class="custom-font"><?php _e('Our','codzilla'); ?> <br> <?php _e('Philosophy','codzilla'); ?> </h4>
                    </div>
                    <div class="col-lg-3 col-md-6 item-box wow fadeInLeft" data-wow-delay=".5s">
                        <i class="icon fas fa-eye"></i>
                        <h6><?php _e('Vision','codzilla'); ?></h6>
                        <p><?php _e('Codezilla helps business to transfer into digital, achieving better growth and success. We unleash a creative software engineers minds to create business success stories.','codzilla'); ?></p>
                    </div>
                    <div class="col-lg-3 col-md-6 item-box wow fadeInLeft" data-wow-delay=".7s">
                        <i class="icon fas fa-bullseye"></i>
                        <h6><?php _e('Mission','codzilla'); ?></h6>
                        <p><?php _e('Our mission to help people to get succeeded in making others life easies, We are shaping a better and easier future.','codzilla'); ?></p>
                    </div>
                    <div class="col-lg-3 col-md-6 item-box wow fadeInLeft" data-wow-delay=".9s">
                        <i class="icon fas fa-chart-line"></i>
                        <h6><?php _e('Methodology','codzilla'); ?></h6>
                        <p><?php _e('Our methodology is to have a differentiated mindset and mindprint in each story we are involved in. We do it different. We do it optimal.','codzilla'); ?></p>
                    </div>
                </div>
            </div>
            <div class="half-bg bottom"></div>
        </section>

    <!-- ==================== End Services ==================== -->
    
<!-- ==================== Start Minimal-Area ==================== -->

    <section class="min-area  our_values pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="img">
                        <img class="thumparallax-down" src="<?php echo CODZILLA_URL .'assets/img/values.jpg' ; ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-6 valign">
                    <div class="content ">
                        <h4 class="wow custom-font" <?php if( ! is_rtl() ){echo 'data-splitting';}?>><?php _e('Our Values','codzilla'); ?></h4>
                        <?php _e('Our values reflect the company culture and what we as a company stand for.','codzilla'); ?>
                        
                        <ul class="feat">
                            <li class="wow fadeInUp" data-wow-delay=".2s">
                                <h6><span>1</span> <?php _e('Quality','codzilla'); ?></h6>
                                <p><?php _e('In Codezilla, Our Passionate team will guide  you through your digital journey Step by step taking your business to the next level.','codzilla'); ?></p>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay=".4s">
                                <h6><span>2</span> <?php _e('Desire to change','codzilla'); ?></h6>
                                <p><?php _e('Each one of us wants to leave his/her mind print in his/her work, we love to develop, we love to change.','codzilla'); ?></p>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay=".6s">
                                <h6><span>3</span> <?php _e('A Will to challenge & win ','codzilla'); ?></h6>
                                <p><?php _e('We have a strong will to get challenged and won in marketplaces, in business, and in every aspect of our life.','codzilla'); ?></p>
                            </li> 
                            <li class="wow fadeInUp" data-wow-delay=".8s">
                                <h6><span>4</span> <?php _e('Personal accountability','codzilla'); ?></h6>
                                <p><?php _e('We are personally committed and accountable in delivering our own committees.','codzilla'); ?></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End Minimal-Area ==================== -->

     
        <!-- ==================== Start Services ==================== -->

        <section class="services section-padding sub-bg">
            <div class="container">
                <div class="sec-head custom-font text-center">
                    <h6 class="wow fadeIn" data-wow-delay=".5s"><?php _e('Codezilla','codzilla'); ?></h6>
                    <h3 class="wow" <?php if( ! is_rtl() ){echo 'data-splitting';}?>><?php _e('Services.','codzilla'); ?></h3>
                    <span class="tbg"><?php _e('Services','codzilla'); ?></span>
                </div>
                <div class="row">
                <?php
                $no = 4;
                $first_flag = .3;
                $services = codzilla_get_service($no);
                if($services->have_posts()) : 
                    while($services->have_posts()) : $services->the_post(); 
                        $post_id = get_the_ID();
                        $icon    = get_post_meta($post_id,'codzilla_service_icon',true);
                ?>
                     <div class="col-lg-3">
                        <div class="item md-mb50 wow fadeInUp" data-wow-delay="<?= $first_flag;?>s">
                            <span class="icon <?= $icon;?>"></span>
                            <h6><?php the_title(); ?></h6>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                
                <?php $first_flag = $first_flag + .3; endwhile; wp_reset_query(); endif ?>
                  
                </div>
            </div>
        </section>

        <!-- ==================== End Services ==================== -->


       <!-- ==================== Start testimonials ==================== -->

        <section class="testimonials section-padding bg-img" data-background="img/pattern.png">
            <div class="container position-re">
                <div class="sec-head custom-font text-center">
                    <h6 class="wow fadeIn" data-wow-delay=".5s"><?php _e('What People Says?','codzilla'); ?></h6>
                    <h3 class="wow" <?php if( ! is_rtl() ){echo 'data-splitting';}?>><?php _e('Testimonials.','codzilla'); ?></h3>
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
                                            <h6 class="author-name custom-font"><?php the_title(); ?></h6>
                                            <?php   
                                                if(!empty($location)) :
                                            ?>
                                            <span class="author-details"><?= $location ?></span>
                                            <?php endif; ?>
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

<!--
    <section class="call-action section-padding sub-bg bg-img" data-background="img/pattern.png">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="content sm-mb30">
                        <h6 class="wow" data-splitting>Let’s Talk</h6>
                        <h2 class="wow custom-font" data-splitting>about your <b>next project</b>.</h2>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3 valign">
                    <a href="contact.html" class="btn-curve btn-blc wow fadeInUp" data-wow-delay=".5s"><span>Get In
                            Touch</span></a>
                </div>

            </div>
        </div>
    </section>
-->

    <!-- ==================== End call-to-action ==================== -->
<?php get_footer(); ?>