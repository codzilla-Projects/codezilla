<?php 
/**
** Template Name: News Template
**/
get_header(); 
get_template_part('page_title'); ?>
<!-- ==================== Start Blog ==================== -->

<section class="blog-grid section-padding">
    <div class="container">
        <div class="sec-head custom-font text-center">
            <h6 class="fadeIn" data-wow-delay=".5s">Latest News</h6>
            <h3 class="wow" data-splitting>Our Blog.</h3>
            <span class="tbg">Blog</span>
        </div>
        <?php
            $no = 9;
            $news = codzilla_get_posts($no);
            if($news->have_posts()) : 
        ?>
        <div class="row">
            <?php
                while($news->have_posts()) : $news->the_post(); 
            ?>
            <div class="col-lg-4">
                <div class="item list md-mb50 wow fadeInUp" data-wow-delay=".3s">
                    <div class="img">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                    </div>
                    <div class="cont sub-bg">
                        <a href="<?php the_permalink(); ?>" class="date custom-font">
                            <span><i><?php the_time('j') ?></i> <?php the_time('M') ?></span>
                        </a>
                        <div class="info custom-font">
                            <a href="<?php the_permalink(); ?>" class="author">
                                <span><?php the_author(); ?></span>
                            </a>
                            <a href="<?php the_permalink(); ?>" class="tag">
                                <span><?php the_title(); ?></span>
                            </a>
                        </div>
                        <h6>
                            <a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?>.</a>
                        </h6>
                        <div class="btn-more custom-font">
                            <a href="<?php the_permalink(); ?>" class="simple-btn">Read More</a>
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
                               'total'              => $news->max_num_pages,
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
        <?php  wp_reset_query(); endif ?>
    </div>
</section>

<!-- ==================== End Blog ==================== -->
<?php get_footer(); ?>