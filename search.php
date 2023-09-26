<?php get_header(); ?>


    <header class="pages-header bg-img valign parallaxie" data-background="<?php $page_image = get_the_post_thumbnail_url(); if(empty($page_image)){ echo CODZILLA_URL .'assets/img/codzilla-4.jpg' ;} else{ echo $page_image;}?>" data-overlay-dark="5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cont text-center">
                        <h1><?php _e('Search for : ','codzilla');echo $_GET['s']; ?> </h1>
                        <div class="path">
                            <a href="<?php bloginfo('url'); ?>">Home</a><span>/</span><a href="#0" class="active"><?php _e('Search for : ','codzilla');echo $_GET['s']; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="blog-grid section-padding">
    <div class="container">
        
    <?php if ( have_posts() ) :  ?>
      <div class="row">
        <?php while ( have_posts() ) : the_post();
              $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; ?>
            <div class="col-lg-4">
                <div class="item list md-mb50 wow fadeInUp" data-wow-delay=".3s">
                    <div class="cont sub-bg">
                        
                        <div class="info custom-font">
                            <a href="<?php the_permalink(); ?>" class="tag">
                                <span><?php the_title(); ?></span>
                            </a>
                        </div>
                        <h6>
                            <a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?>.</a>
                        </h6>
                    </div>
                </div>
            </div>
            <?php endwhile;?>
        </div>
        <div class="codzilla-panigations-block">
                    <ul class="page-numbers justify-content-center">
                        <?php    
                            $args = array(
                               'format'             => '?paged=%#%',
                               'current'            => max( 1, get_query_var('paged') ),
                               'total'              => $wp_query->max_num_pages,
                               'show_all'           => false,
                               'end_size'           => 1,
                               'mid_size'           => 2,
                               'prev_next'          => true,
                               'next_text'          => '<i class="fas fa-arrow-right"></i>',
                               'prev_text'          => '<i class="fas fa-arrow-left"></i>',
                               'type'               => 'list',
                              );
                        ?>
                        <?php echo paginate_links($args); ?>
                    </ul> 
                </div>
         <?php else: echo '<section class="blog-grid section-padding">
                            <div class="container">
                                <div class="row text-center">
                                    <div class="col-lg-12 text-center">
                                        <h2 class="custom-font text-center">There are no results matching your search</h2>
                                        <a href="https://codzilla.net/" class="btn-curve btn-blc wow fadeInUp text-center mt-50" data-wow-delay=".5s"><span>Back to Home</span></a>
                                    </div>
                                </div>
                            </div>
                        </section>
                '; ?>
        <?php wp_reset_query(); endif ?>
    </div>
</section>

<!-- ==================== End Blog ==================== -->
<?php get_footer(); ?>