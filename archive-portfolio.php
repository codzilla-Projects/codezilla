<?php 
/**
** Template Name: Portfolio Template
**/
get_header(); 
get_template_part('page_title'); ?>
    <!-- ==================== Start works ==================== -->

    <section class="portfolio section-padding pb-70">
        <div class="container">
            <div class="sec-head custom-font text-center">
                <h6>Portfolio</h6>
                <h3>Our Works.</h3>
                <span class="tbg">Portfolio</span> 
            </div>
        </div>
        <div class="container">
            <div class="row">
                <?php
                    $no = 15;
                    $portfolio = codzilla_get_portfolio($no);
                    if($portfolio->have_posts()) : 
                ?>
                <!-- gallery -->
                <div class="gallery full-width filter-layout masonary-layout">
                    <?php
                        while($portfolio->have_posts()) : $portfolio->the_post(); 
                        $post_id = get_the_ID();
                        $post_terms = get_the_terms(get_the_ID(),'classfications');
                    ?>
                    
                    
                    <!-- gallery item -->
                    <div class="col-lg-4 col-md-6 items wow fadeInUp" data-wow-delay=".4s">
                        <div class="inner-box">
                            <div class="image">
                                <img class="lazyload" data-src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" width="380" height="309" />
                                <div class="overlay-box">
                                    <div class="options">
                                        <a href="<?php the_permalink(); ?>" class="plus-icon"><i class="fas fa-link"></i></a>
                                        <a href="<?php the_post_thumbnail_url(); ?>" class="plus-icon lightbox-image" data-fancybox-group="gallery1" data-fancybox="gallery1"><i class="fas fa-search"></i></a>
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
                </div>
                <div class="codzilla-panigations-block">
                    <ul class="page-numbers justify-content-center">
                        <?php    
                            $args = array(
                               'format'             => '?paged=%#%',
                               'current'            => max( 1, get_query_var('paged') ),
                               'total'              => $portfolio->max_num_pages,
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
                <?php wp_reset_query(); endif ?>
            </div>
        </div>
    </section>

    <!-- ==================== End works ==================== -->
<?php get_footer(); ?>