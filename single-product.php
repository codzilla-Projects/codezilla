<?php 
get_header(); 
get_template_part('page_title');
?>
    
<?php
 if ( have_posts() ) : while ( have_posts() ) : the_post(); $post_id = get_the_ID(); 
    $post_title = get_the_title();
?>
        
<div class="main-content">
    <section class="about section-padding aboutus">
        <div class="container">
            <?php the_content(); ?>
        </div>
    </section>


    <section id="features">
        <div class="container">
            <div class="sec-head custom-font text-center">
                <h6 class="fadeIn" data-wow-delay=".5s"><?php _e('Product','codzilla'); ?>
                <?php _e('Features','codzilla'); ?></h6>
                <h3 class="wow" data-splitting><?php _e('Product','codzilla'); ?>
                <?php _e('Features','codzilla'); ?>.</h3>
                <span class="tbg"><?php _e('Product','codzilla'); ?>
                <?php _e('Features','codzilla'); ?></span>
            </div>

            <div class="row mt-4 feature-card">

                <?php
                $terms = get_terms(array(
                    'taxonomy'   => 'feature',
                    'hide_empty' => false, 
                    'orderby'    => 'ID',
                    'order'      => 'ASC',
                    'hide_empty' => false,
                    'number'     => 6,));
                foreach ($terms as $term) :
                    $t_id = $term->term_id;
                    $term_meta = get_option( "feature_$t_id" ); 
                    $seriesimage = esc_attr( $term_meta['image'] ) ? esc_attr( $term_meta['image'] ) : '';?>
                    <div class="col-sm-12 col-md-6 col-lg-4 col-height-features">
                        <div class="card box text-center">
                            <div class="card-body box__image">
                                <div class="feature-icon green-color">
                                    <img src="<?= $seriesimage; ?>">
                                </div>
                                <h2 class="card-title"><?= $term->name; ?></h2>
                            </div>
                        </div>
                    </div>
           
                <?php endforeach; ?>


            </div>
        </div>
    </section>

    <!-- ==================== Start projdtal ==================== -->

     <section id="portfolio" class="mt-100">
        <div class="container">
            <div class="sec-head custom-font text-center">
                <h6 class="fadeIn" data-wow-delay=".5s"><?php _e('Product Gallery','codzilla'); ?></h6>
                <h3 class="wow" data-splitting><?php _e('Product Gallery','codzilla'); ?>.</h3>
                <span class="tbg">
                <?php _e('Gallery','codzilla'); ?></span>
            </div>
            <div id="js-grid-mosaic" class="cbp cbp-l-grid-mosaic">
                <?php $images =  get_post_meta(get_the_ID(),'thumbnail_ids'); ?>
                <?php  if($images != null && $images != '') { ?> 
                <?php $i=0;
                foreach ($images as $image) { ?>
                <?php $image_attributes_large = wp_get_attachment_image_src($image, 'large')[0];?>

                 <?php $image_attributes_thumbnail = wp_get_attachment_image_src($image, 'product-feature-size')[0];?>
                <?php $image_attributes_feature_bigsize = wp_get_attachment_image_src($image, 'product-feature-bigsize')[0];?>
                <?php if($i==0){?>
                 <div class="cbp-item zilla_gallery_first_img">
                    <div class="cbp-caption-defaultWrap">
                        <img src="<?=$image_attributes_feature_bigsize; ?>" alt="">
                    </div>
                </div>
                <?php }?>

                <div class="cbp-item">
                    <div class="demo height2">
                        <figure class="imghvr-blocks-rotate-right"><img class="img-responsive" src="<?=$image_attributes_thumbnail; ?>" alt="">
                            <figcaption>
                                <p class="heart-icon"><i class="fas fa-search"></i></p>
                                <a data-fancybox="gallery1" href="<?=$image_attributes_large; ?>" ></a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <?php $i++; } ?>
                <?php } ?>
            </div>
        </div>
    </section>


    <section id="contact-description" class="mb-100 mt-100">
        <div class="container">
            <div class="sec-head custom-font text-center">
                <h6 class="fadeIn" data-wow-delay=".5s"><?php _e('Quotation','codzilla'); ?></h6>
                <h3 class="wow" data-splitting><?php _e('Request Quotation','codzilla'); ?>.</h3>
                <span class="tbg"><?php _e('FAQ','codzilla'); ?></span>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 d-flex justify-content-center align-items-center mt-4 mt-md-0 mt-lg-0">
                    <div class="about-heading width-heading">
                        <h1 class="main-heading green-color"><?php _e('Have Questions?','codzilla'); ?> <span class="blue-color"><?php _e('Contact Us','codzilla'); ?></span></h1>
    
                        <p class="sub-heading mt-4"><?php _e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim veniam, quis nostrud exercitation.','codzilla'); ?></p>
    
                         <ul class="contact-info">
                            <?php $location = get_option('codzilla_location');  
                                if(!empty($location)) :
                            ?>
                             <li><i aria-hidden="true" class="fas fa-map-marker-alt"></i> <a href=""></a><?=$location; ?> </li>
                            <?php endif; ?>
                            <?php $phone = get_option('codzilla_phone');  
                                if(!empty($phone)) :
                            ?>
                             <li><i class="fas fa-mobile-alt"></i>
                                <a href="tel:<?=$phone; ?>"><?=$phone; ?></a>
                            </li>
                            <?php endif; ?>
                            <?php $mail = get_option('codzilla_email');  
                                if(!empty($mail)) :
                            ?>
                             <li><i class="far fa-envelope"></i><a href="mailto:<?=$mail; ?>"><?=$mail; ?></a></li>
                            <?php endif; ?>

                        </ul>
                    </div>
                </div>

                <div class=" col-sm-12 col-md-6 col-lg-6 text-left">
                    <h1 class="main-heading green-color text-left"><?php _e('Request','codzilla'); ?><span class="blue-color"> <?php _e('Quotation','codzilla'); ?></span></h1>

                    <?php  echo do_shortcode('[contact-form-7 id="180" title="product contact us"]');?>
                </div>
            </div>
        </div>
    </section>

</div>

<?php endwhile; endif;?>

<?php get_footer(); ?>