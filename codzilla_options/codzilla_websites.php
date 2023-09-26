<?php 
    
/**
 * Display All Links CPT data .
 */
function codzilla_websites_links_callback_fn() { 

        $args = array(
            'post_type'       => 'link',
            'post_status'     => 'publish',
            'posts_per_page'  => -1,
            'orderby'         => 'date',
            'order'           => 'DESC',
        );
        $links = get_posts( $args );
        ?>

        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 bg-col12">
                    <!-- Top Navigation -->
                    <header class="codrops-header">
                        <h1 class="text-center cl-title"><span>Codzilla Websites</span></h1>
                    </header>
                </div>
                    <br>
                <div class="col-sm-12 col-md-12 col-lg-12">

                    <table id="codzillaLinksTable" class="table table-striped table-bordered " style="width:100%">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>url</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Type</th>

                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach($links as $link) : $linkId= $link->ID; ?>
                                     <tr>
                                        <td><?= $link->post_title;?></td>
                                        <td><?= get_post_meta( $linkId, 'codzilla_link_url_box' , true );?></td>
                                        <td><?= get_post_meta( $linkId, 'codzilla_link_username_box' , true );?></td>
                                        <td><?= get_post_meta( $linkId, 'codzilla_link_password_box' , true );?></td>
                                        <td><?= get_post_meta( $linkId, 'codzilla_link_type' , true );?></td>
                                    </tr>
                               <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
    </div>

			
    <?php

}
