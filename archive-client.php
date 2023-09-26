<?php 
/**
** Template Name: Clients Template
**/
get_header(); 
get_template_part('page_title'); ?>
         <!-- ==================== Start clients Brands ==================== -->

        <section class="clients section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 valign">
                        <div class="sec-head custom-font text-center">
			                <h6><?php _e('Clients','codzilla'); ?></h6>
                            <h3><?php _e('Our Clients' , 'codzilla'); ?> </h3>
			                <span class="tbg"><?php _e('Clients','codzilla'); ?></span> 
			            </div>
                    </div>
                    <div class="col-lg-12">
                        <div>
                        	<?php
                                $no = 20;
                                $first_flag = .3;
                                $partners = codzilla_get_partners($no);
                                if($partners->have_posts()) :  
                            ?>
                            <div class="row bord">
                            	 <?php while($partners->have_posts()) : $partners->the_post();?>
                                <div class="col-md-3 col-6 brands">
                                <div class="item wow fadeIn" data-wow-delay="<?= $first_flag;?>s">
                                    <div class="img">
                                        <img class="lazyload" data-src="<?php the_post_thumbnail_url(); ?>" width="130" height="88"/>
                                         <a href="javascript:void(0);" class="link data-splitting"><?php the_title(); ?></a>
                                    </div>
                                </div>
                            </div>
                            <?php $first_flag = $first_flag + .3; endwhile; wp_reset_query(); endif ?>
                        </div>
                        <div class="codzilla-panigations-block">
		                    <ul class="page-numbers justify-content-center">
		                        <?php    
		                            $args = array(
		                               'format'             => '?paged=%#%',
		                               'current'            => max( 1, get_query_var('paged') ),
		                               'total'              => $partners->max_num_pages,
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
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End clients Brands ==================== -->
<?php get_footer(); ?>
