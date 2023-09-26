<?php 
get_header(); 
get_template_part('page_title'); ?>
    <!-- ==================== Start Intro ==================== -->

    <section class="intro-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <?php the_content();?>
                </div>
              
            </div>
        </div>
    </section>

    <!-- ==================== End Intro ==================== -->


<?php get_footer(); ?>