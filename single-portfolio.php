<?php 

get_header(); 

?>

<header class="pages-header bg-img valign parallaxie" data-background="<?php $page_image = get_the_post_thumbnail_url(); if(empty($page_image)){ echo CODZILLA_URL .'assets/img/codzilla-4.jpg' ;} else{ echo $page_image;}?>" data-overlay-dark="5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cont text-center">
                        <h1><?php the_title(); ?></h1>
                        <div class="path">
                            <a href="<?php bloginfo('url'); ?>">Home</a><span>/</span> <a href="<?php bloginfo('url'); ?>/our-portfolio">Portfolio</a><span>/</span><h4 class="active"><?php the_title(); ?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
<?php

if ( have_posts() ) : while ( have_posts() ) : the_post(); $post_id = get_the_ID(); 

    $post_terms = get_the_terms(get_the_ID(),'classfications');

    $post_title = get_the_title();

?>

 <!-- ==================== Start Header ==================== -->


<!-- ==================== Start Intro ==================== -->



<section class="section-padding ">

    <div class="container">

        <div class="row">

            <div class="col-lg-3 col-md-4">

                <div class="htit">

                    <h4>Description</h4>

                </div>

            </div>

            <div class="col-lg-8 offset-lg-1 col-md-8 mb-30">

                <div class="text">

                    <p><?php the_content(); ?></p>

                </div>

            </div>



            <div class="col-lg-4">

                <div class="item mt-30">

                    <h6>Categories</h6>

                    <p><?php  foreach($post_terms as $post_term){ echo '<span class="category-slug"> <a herf='.esc_url( get_term_link($post_term)).'>' .$post_term->name. '</a></span><br>'; }?></p>

                </div>

            </div>


            <div class="col-lg-4">

                <div class="item mt-30">

                    <h6>Date</h6>

                    <p><?php the_time('j') ?> <?php the_time('M') ?> <?php the_time('Y') ?></p>

                </div>

            </div>

        </div>

        
    <section class="projdtal mt-50">

         <div class="row">

            <div class="col-lg-3 col-md-4">

                <div class="htit">

                    <h4>Screenshots</h4>

                </div>

            </div>
        </div>
        <?php $images =  get_post_meta($id,'thumbnail_ids'); ?>

        <?php  if($images != null && $images != '') { ?> 

        <div class="justified-gallery">

            <?php  foreach ($images as $image) { ?>

            <?php $image_attributes_large = wp_get_attachment_image_src($image, 'large')[0];?>

            <?php $image_attributes_thumbnail = wp_get_attachment_image_src($image, 'product-feature-size')[0];?>
            <?php $image_attributes_feature_bigsize = wp_get_attachment_image_src($image, 'product-feature-bigsize')[0];?>

            <a class="lightbox-image" href="<?= $image_attributes_large ?>" data-fancybox="gallery" >

                <img  src="<?= $image_attributes_thumbnail ?>" />

            </a>

            <?php } ?>

        </div>

        <?php } ?>

    </section>

    </div>

</section>



<!-- ==================== End Intro ==================== -->


<!-- ==================== Start projdtal ==================== -->







<!-- ==================== End projdtal ==================== -->





<?php endwhile; endif;?>

<?php get_footer(); ?>