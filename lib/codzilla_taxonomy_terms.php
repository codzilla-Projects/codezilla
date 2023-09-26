<?php

/************************
** create Custom Taxonomies for portfolio post type
************************/
add_action( 'init', 'sh_custom_tax', 0 );
function sh_custom_tax() 
{
    $my_taxonomies = array(
        array(
          'labels' => array(
            'name' => _x( 'Classfications', 'taxonomy general name' ),
            'singular_name' => _x( 'Classfication', 'taxonomy singular name' ),
            'search_items' =>  __( 'Search Classfications','codzilla' ),
            'popular_items' => __( 'Popular Classfications' ,'codzilla'),
            'all_items' => __( 'All Classfications' ),
            'parent_item' => __('Parent'),
            'parent_item_colon' => null,
            'edit_item' => __( 'Edit Classfication' ), 
            'update_item' => __( 'Update Classfication' ),
            'add_new_item' => __( 'Add New Classfication' ),
            'new_item_name' => __( 'New Classfication' ),
            'separate_items_with_commas' => __( 'Separate classfications with commas' ),
            'add_or_remove_items' => __( 'Add or remove Classfications' ),
            'choose_from_most_used' => __( 'Choose from the most used Classfications' ),
            'menu_name' => __( 'Classfications' ),
          ),
          'tax_name' => 'classfications',
          'post_types' =>  array('portfolio'),
          'slug' => 'portfolio-classfications'          
        ),
        array(
          'labels' => array(
            'name' => _x( 'Features', 'taxonomy general name' ),
            'singular_name' => _x( 'Feature', 'taxonomy singular name' ),
            'search_items' =>  __( 'Search Features','codzilla' ),
            'popular_items' => __( 'Popular Features' ,'codzilla'),
            'all_items' => __( 'All Features' ),
            'parent_item' => __('Parent'),
            'parent_item_colon' => null,
            'edit_item' => __( 'Edit Feature' ), 
            'update_item' => __( 'Update Feature' ),
            'add_new_item' => __( 'Add New Feature' ),
            'new_item_name' => __( 'New Feature' ),
            'separate_items_with_commas' => __( 'Separate features with commas' ),
            'add_or_remove_items' => __( 'Add or remove Features' ),
            'choose_from_most_used' => __( 'Choose from the most used Features' ),
            'menu_name' => __( 'Features' ),
          ),
          'tax_name' => 'feature',
          'post_types' =>  array('product'),
          'slug' => 'product-features'          
        ),
    );

  // Add new taxonomy, NOT hierarchical (like tags)
    foreach ($my_taxonomies as $tax) {
      register_taxonomy($tax['tax_name'],$tax['post_types'],array(
        'hierarchical' => true,
        'labels' => $tax['labels'],
        'show_ui' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array( 'slug' => $tax['slug'] ),
      ));
    }
}






/* Add Image Upload to Series Taxonomy */

// Add Upload fields to "Add New Taxonomy" form
function add_series_image_field() {
	// this will add the custom meta field to the add new term page
	?>
	<div class="form-field">
		<label for="series_image"><?php _e( 'Series Image:', 'journey' ); ?></label>
		<input type="text" name="series_image[image]" id="series_image[image]" class="series-image" value="<?php echo $seriesimage; ?>">
		<input class="upload_image_button button" name="_add_series_image" id="_add_series_image" type="button" value="Select/Upload Image" />
		<script>
			jQuery(document).ready(function() {
				jQuery('#_add_series_image').click(function() {
					wp.media.editor.send.attachment = function(props, attachment) {
						jQuery('.series-image').val(attachment.url);
					}
					wp.media.editor.open(this);
					return false;
				});
			});
		</script>
	</div>
<?php
}
add_action( 'feature_add_form_fields', 'add_series_image_field', 10, 2 );

// Add Upload fields to "Edit Taxonomy" form
function journey_series_edit_meta_field($term) {
 
	// put the term ID into a variable
	$t_id = $term->term_id;
 
	// retrieve the existing value(s) for this meta field. This returns an array
	$term_meta = get_option( "feature_$t_id" ); ?>
	
	<tr class="form-field">
	<th scope="row" valign="top"><label for="_series_image"><?php _e( 'Feature Image', 'codzilla' ); ?></label></th>
		<td>
			<?php
				$seriesimage = esc_attr( $term_meta['image'] ) ? esc_attr( $term_meta['image'] ) : ''; 
				?>
			<input type="text" name="series_image[image]" id="series_image[image]" class="series-image" value="<?php echo $seriesimage; ?>">
			<input class="upload_image_button button" name="_series_image" id="_series_image" type="button" value="Select/Upload Image" />
		</td>
	</tr>
	<tr class="form-field">
	<th scope="row" valign="top"></th>
		<td style="height: 150px;">
			<style>
				div.img-wrap img {
					width: 450px;
					height: 300px;
				}
			</style>
			<div class="img-wrap">
				<img src="<?php echo $seriesimage; ?>" id="series-img">
			</div>
			<script>
			jQuery(document).ready(function() {
				jQuery('#_series_image').click(function() {
					wp.media.editor.send.attachment = function(props, attachment) {
						jQuery('#series-img').attr("src",attachment.url)
						jQuery('.series-image').val(attachment.url)
					}
					wp.media.editor.open(this);
					return false;
				});
			});
			</script>
		</td>
	</tr>
<?php
}
add_action( 'feature_edit_form_fields', 'journey_series_edit_meta_field', 10, 2 );

// Save Taxonomy Image fields callback function.
function save_series_custom_meta( $term_id ) {
	if ( isset( $_POST['series_image'] ) ) {
		$t_id = $term_id;
		$term_meta = get_option( "feature_$t_id" );
		$cat_keys = array_keys( $_POST['series_image'] );
		foreach ( $cat_keys as $key ) {
			if ( isset ( $_POST['series_image'][$key] ) ) {
				$term_meta[$key] = $_POST['series_image'][$key];
			}
		}
		// Save the option array.
		update_option( "feature_$t_id", $term_meta );
	}
}  
add_action( 'edited_feature', 'save_series_custom_meta', 10, 2 );  
add_action( 'create_feature', 'save_series_custom_meta', 10, 2 );