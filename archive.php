 
<?php
/**
** Template Name: Blog Template
**/
get_header();?>

<!-- start page title section -->
        <section class="wow fadeIn parallax" data-stellar-background-ratio="0.5" style="background-image:url('<?= CODZILLA_URL .'assets/images/codzilla-4.jpg'?>');">
            <div class="opacity-medium bg-extra-dark-gray"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 d-flex flex-column justify-content-center text-center extra-small-screen page-title-large">
                        <!-- start page title -->
                        <h1 class="text-white-2 alt-font font-weight-600 letter-spacing-minus-1 margin-10px-bottom"><?php _e('Blog','codzilla'); ?></h1>
                        <span class="text-white-2 opacity6 alt-font"><?php _e('Lorem Ipsum is simply dummy text printing','codzilla'); ?></span>
                        <!-- end page title --> 
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title section -->

           <!-- start blog section -->
        <section class="wow fadeIn bg-light-gray">
            <div class="container">
               <?php 
                 $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
                 $args = array(
                     'post_status'     => 'publish',
                     'posts_per_page'  => get_option('posts_per_page'),
                     'paged'           => $paged,
                     'orderby'         => 'date',
                     'order'           => 'DESC'
                   );
                $posts = new WP_Query( $args );

                 if ( $posts->have_posts() ):
                 ?>
                    <div class="row hover-option4 blog-post-style5  sm-margin-15px-lr w-100">
                        <?php 
                            // Start the Loop 
                            while ( $posts->have_posts() ) : $posts->the_post(); 
                                    ?>
                                <!-- start blog post item -->
                                <div class="grid-item col-12 col-md-6 col-lg-4 md-margin-30px-bottom text-center text-md-left wow fadeInUp">
                                    <div class="blog-post bg-white">
                                        <div class="blog-post-images overflow-hidden position-relative">
                                            <a href="<?php the_permalink() ?>">
                                                <img src="<?php the_post_thumbnail_url('blog-size'); ?>" alt="">
                                            </a>
                                        </div>
                                        <div class="post-details padding-40px-all md-padding-20px-all">
                                            <a href="<?php the_permalink() ?>" class="alt-font post-title text-medium text-extra-dark-gray w-100 d-block lg-width-100 margin-15px-bottom"><?php the_title(); ?></a>
                                            <?php the_excerpt(); ?>
                                            <div class="separator-line-horrizontal-full bg-medium-gray margin-20px-tb"></div>
                                            <div class="author">
                                                <span class="text-medium-gray text-uppercase text-extra-small d-xl-inline-block d-block md-margin-10px-top">by <a href="blog-grid.html" class="text-medium-gray"><?php the_author(); ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;<?= get_the_date( 'j F Y', get_the_ID() );?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end blog post item -->

                    
                           <?php endwhile; ?>
                    </div>
                     <!-- start pagination -->
                 <div class=" text-center  wow fadeInUp">
                    <div class="pagination">
                        <?php    $args = array(
                               'format'             => '?paged=%#%',
                               'current'            => max( 1, get_query_var('paged') ),
                               'total'              => $posts->max_num_pages,
                               'show_all'           => false,
                               'end_size'           => 1,
                               'mid_size'           => 2,
                               'prev_next'          => false,
                               'type'               => 'list',
                              );
                        ?>
                       <?php echo paginate_links($args); ?>  
                     </div>
                </div>
                    <!-- end pagination -->
                <?php 
                wp_reset_postdata(); 
                endif; ?>
            </div>
        </section>
        <!-- end blog section -->
         
<?php
get_footer();?>