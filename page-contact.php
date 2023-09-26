<?php 
/**
** Template Name: Contact Template
**/
get_header(); 
get_template_part('page_title'); ?>
 
<!-- ==================== Start main-content ==================== -->

<div class="main-content">

    <!-- ==================== Start Contact ==================== -->

    <section class="contact section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class=" md-mb50">

                        <h4 class="extra-title mb-50"><?php _e('Get In Touch.','codzilla'); ?></h4>
                        <?php if( is_rtl() ){echo do_shortcode('[contact-form-7 id="612" title="contact us_ar"]');}else{ echo do_shortcode('[contact-form-7 id="420" title="contact us"]');}?>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="cont-info">
                        <h4 class="extra-title mb-50"><?php _e('Contact Info.','codzilla'); ?></h4>
                        <h3 class="custom-font wow" data-splitting><?php _e('Let\'s Talk.','codzilla'); ?>
                        </h3>
                           
                        <div class="item mb-40">
                            <h5><i class="far fa-envelope"></i> <a href="mailto:info@codzilla.net">info@codzilla.net</a></h5>
                            <h5><i class="fas fa-mobile-alt"></i> <a href="tel:+201000565608">+201000565608</a></h5>
                        </div>
                        <h3 class="custom-font wow" data-splitting><?php _e('Visit Us.','codzilla'); ?>
                        </h3>
                        <div class="item">
                             <h6><i aria-hidden="true" class="fas fa-map-marker-alt"></i> <?php _e('Alex-Cairo agriculture road,  
                                <br>Gardenia Buildings. No (C). 6th floor','codzilla'); ?></h6>
                        </div>
                        <div class="social mt-50">
                            <?php $facebook = get_option('codzilla_fb');  
                                if(!empty($facebook)) :
                                ?>
                                    <a href="<?= $facebook; ?>" class="icon">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                <?php endif; ?>
                                <?php $twitter = get_option('codzilla_twitter');  
                                if(!empty($twitter)) :
                                ?>
                                    <a href="<?= $twitter; ?>" class="icon">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                <?php endif; ?>
                                <?php $instagram = get_option('codzilla_insta');  
                                    if(!empty($instagram)) :
                                ?>
                                    <a href="<?= $instagram; ?>" class="icon"><i class="fab fa-instagram"></i></a>
                                <?php endif; ?>

                                <?php $youtube = get_option('codzilla_youtube');  
                                if(!empty($youtube)) :
                                ?>
                                    <a href="<?= $youtube; ?>" class="icon"><i class="fab fa-youtube"></i></a>
                                <?php endif; ?>
                                <?php $whatsapp = get_option('codzilla_whatsapp');  
                                if(!empty($whatsapp)) :
                                ?>
                                    <a href="https://api.whatsapp.com/send/?phone=<?= $whatsapp; ?>&text=I want to inquire about" class="icon"><i class="fab fa-whatsapp"></i></a>
                                <?php endif; ?>
                            
                           
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End Contact ==================== -->


    <!-- ==================== Start Map ==================== -->

    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d856.8480065477365!2d30.97345337623525!3d30.791638809852714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7cbbb3d1bd065%3A0xf70a05ccf8639937!2z2LnZhdin2LHYp9iqINis2LHYr9mK2YbZitin!5e0!3m2!1sen!2sus!4v1640461351550!5m2!1sen!2sus" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div></div>

    <!-- ==================== End Map ==================== -->

<?php get_footer(); ?>