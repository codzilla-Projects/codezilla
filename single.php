<?php 
get_header(); 
get_template_part('page_title');
if ( have_posts() ) : while ( have_posts() ) : the_post(); $post_id = get_the_ID(); 
    $post_title = get_the_title();
?>
<!-- ==================== Start Header ==================== -->

<section class="page-header blg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12">
                <div class="cont">
                    <h2><?php the_title(); ?></h2>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== Start Header ==================== -->



<!-- ==================== Start Blog ==================== -->

<section class="blog-pg single section-padding pt-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="post">
                    <ul class="post-meta mt-10">
                        <li><i class="far fa-user"></i> <?php the_author(); ?></li>
                        <li><i class="far fa-calendar-alt"></i> <?php the_time('M') ?> <?php the_time('j') ?>, <?php the_time('Y') ?></li>
                    </ul>
                    <div class="content pt-20">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="cont">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

        <!-- ==================== End Blog ==================== -->
<?php endwhile; endif;?>
<?php get_footer(); ?>