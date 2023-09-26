<?php 
function about_page_content_callback(){
	   
if( isset( $_POST['cl_save'] ) && !empty( $_POST['cl_save']) ){

		foreach ($_POST as $key => $value) {		

			if(in_array($key,['about_first_content','about_third_content_one','about_third_content_two','about_third_content_three','about_third_content_four','about_fourth_content1','about_fourth_content2','about_fourth_content3','about_seventh_content'])){
                
				$value = stripcslashes($value);

			}

			update_option( $key, $value);

		}
	}

?>

<div class="container-fluid   padding-left-4">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12 bg-col12">
			<!-- Top Navigation -->
			<header class="codrops-header">
				<h1 class="text-center cl-title"><span>About Us Setting </span></h1>
			</header>
		</div>
			<br/>
	</div>
		<div class="row">

		<div class="col-sm-3 pl-0">

			<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

				<a class="nav-link mb-1   active" id="v-pills-firstsection-tab" data-toggle="pill" href="#v-pills-firstsection" role="tab" aria-controls="v-pills-firstsection" aria-selected="true">First Section </a>	

				<a class="nav-link mb-1  " id="v-pills-secondsection-tab" data-toggle="pill" href="#v-pills-secondsection" role="tab" aria-controls="v-pills-secondsection" aria-selected="true">Second Section </a>

				<a class="nav-link mb-1  " id="v-pills-thirdsection-tab" data-toggle="pill" href="#v-pills-thirdsection" role="tab" aria-controls="v-pills-thirdsection" aria-selected="true">Third Section </a>

				<a class="nav-link mb-1  " id="v-pills-fourthsection-tab" data-toggle="pill" href="#v-pills-fourthsection" role="tab" aria-controls="v-pills-fourthsection" aria-selected="true">Fourth Section </a>	

			</div>

		</div>

		<div class="col-sm-9 gray_back pl-0">
	  		<form class="form-horizontal" method="post" action="#">
			    <div  class="tab-content" id="v-pills-tabContent">
					<div class="tab-content" id="v-pills-tabContent">
			        <div class="tab-pane fade show active" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">
			        	<div class="form-group">
						    <label class="col-sm-12 control-label   text-white">Section Hide</label>
						    <div class="col-sm-12  ">
						  	    <input type="checkbox" id="about_hide_first_section" name="about_hide_first_section" value="1" <?php echo get_option('about_hide_first_section') == '1' ? 'checked' : ''; ?>>
						    </div>
						</div>
                        
                        <div class="form-group">
							<label for="about_first_title" class="col-sm-12 control-label   text-white">Title</label>
							<div class="col-sm-12  ">
								<input type="text" class="form-control" id="about_first_title" name="about_first_title" value="<?php echo get_option('about_first_title'); ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="about_first_content" class="col-sm-12 control-label   text-white">Content</label>
							<div class="col-sm-12  ">
                                <?php wp_editor( get_option('about_first_content'), 'about_first_content',  array('textarea_rows'=>5,'textarea_name'=> 'about_first_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about_first_content','class'=>'form-control',) );  ?>
							</div>
                        </div>
                        
                        <div class="form-group">
							<label for="about_first_link_txt" class="col-sm-12 control-label   text-white">Link Text</label>
							<div class="col-sm-12  ">
								<input type="text" class="form-control" id="about_first_link_txt" name="about_first_link_txt" value="<?php echo get_option('about_first_link_txt'); ?>">
							</div>
						</div>
                        
                        <div class="form-group">
							<label for="about_first_link_url" class="col-sm-12 control-label   text-white">Link URL</label>
							<div class="col-sm-12  ">
								<input type="text" class="form-control" id="about_first_link_url" name="about_first_link_url" value="<?php echo get_option('about_first_link_url'); ?>">
							</div>
						</div>
                        
                        <div class="form-group">

						  <label for="about_first_img_url" class="col-sm-12   control-label   text-white">Image</label>

						  <div class="col-sm-12  ">

						    <input class="first_img_url codzilla_half" type="text" name="about_first_img_url" size="60" value="<?php echo get_option('about_first_img_url'); ?>">

						    <a href="#" class="first_img_upload btn btn-info">Choose </a>

						    <img  class="first_img rounded img-fluid" src="<?php echo get_option('about_first_img_url'); ?>" height="100" style="max-width:50%" />

						  </div>

						</div>

					</div>

					<div class="tab-pane fade show" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">
			        	<div class="form-group">
						    <label class="col-sm-12 control-label   text-white">Section Hide</label>
						    <div class="col-sm-12  ">
						  	    <input type="checkbox" id="about_hide_second_section" name="about_hide_second_section" value="1" <?php echo get_option('about_hide_second_section') == '1' ? 'checked' : ''; ?>>
						    </div>
						</div>

						<div class="form-group">
							<label for="about_first_counter_txt" class="col-sm-12 control-label   text-white">First Counter Text</label>
							<div class="col-sm-12  ">
								<input type="text" class="form-control" id="about_first_counter_txt" name="about_first_counter_txt" value="<?php echo get_option('about_first_counter_txt'); ?>">
							</div>
						</div>
                        
                        <div class="form-group">
							<label for="about_first_counter_icon" class="col-sm-12 control-label   text-white">First Counter Icon</label>
							<div class="col-sm-12  ">
								<input type="text" class="form-control" id="about_first_counter_icon" name="about_first_counter_icon" value="<?php echo get_option('about_first_counter_icon'); ?>">
							</div>
						</div>

						<div class="form-group">
							<label for="about_first_counter_num" class="col-sm-12 control-label   text-white">First Counter Number </label>
							<div class="col-sm-12  ">
								<input type="number" class="form-control" id="about_first_counter_num" name="about_first_counter_num" value="<?php echo get_option('about_first_counter_num'); ?>">
							</div>
						</div>
                     
						<div class="form-group">
							<label for="about_second_counter_txt" class="col-sm-12 control-label   text-white">Second Counter Text</label>
							<div class="col-sm-12  ">
								<input type="text" class="form-control" id="about_second_counter_txt" name="about_second_counter_txt" value="<?php echo get_option('about_second_counter_txt'); ?>">
							</div>
						</div>
                        
                        <div class="form-group">
							<label for="about_second_counter_icon" class="col-sm-12 control-label   text-white">Second Counter Icon</label>
							<div class="col-sm-12  ">
								<input type="text" class="form-control" id="about_second_counter_icon" name="about_second_counter_icon" value="<?php echo get_option('about_second_counter_icon'); ?>">
							</div>
						</div>

						<div class="form-group">
							<label for="about_second_counter_num" class="col-sm-12 control-label   text-white">Second Counter Number </label>
							<div class="col-sm-12  ">
								<input type="number" class="form-control" id="about_second_counter_num" name="about_second_counter_num" value="<?php echo get_option('about_second_counter_num'); ?>">
							</div>
						</div>
                        

						<div class="form-group">
							<label for="about_third_counter_txt" class="col-sm-12 control-label   text-white">Third Counter Text</label>
							<div class="col-sm-12  ">
								<input type="text" class="form-control" id="about_third_counter_txt" name="about_third_counter_txt" value="<?php echo get_option('about_third_counter_txt'); ?>">
							</div>
						</div>
                        
                        <div class="form-group">
							<label for="about_third_counter_icon" class="col-sm-12 control-label   text-white">Third Counter Icon</label>
							<div class="col-sm-12  ">
								<input type="text" class="form-control" id="about_third_counter_icon" name="about_third_counter_icon" value="<?php echo get_option('about_third_counter_icon'); ?>">
							</div>
						</div>

						<div class="form-group">
							<label for="about_third_counter_num" class="col-sm-12 control-label   text-white">Third Counter Number </label>
							<div class="col-sm-12  ">
								<input type="number" class="form-control" id="about_third_counter_num" name="about_third_counter_num" value="<?php echo get_option('about_third_counter_num'); ?>">
							</div>
						</div>
                    

						<div class="form-group">
							<label for="about_fourth_counter_txt" class="col-sm-12 control-label   text-white">Fourth Counter Text</label>
							<div class="col-sm-12  ">
								<input type="text" class="form-control" id="about_fourth_counter_txt" name="about_fourth_counter_txt" value="<?php echo get_option('about_fourth_counter_txt'); ?>">
							</div>
						</div>
                        
                        <div class="form-group">
							<label for="about_fourth_counter_icon" class="col-sm-12 control-label   text-white">Fourth Counter Icon</label>
							<div class="col-sm-12  ">
								<input type="text" class="form-control" id="about_fourth_counter_icon" name="about_fourth_counter_icon" value="<?php echo get_option('about_fourth_counter_icon'); ?>">
							</div>
						</div>

						<div class="form-group">
							<label for="about_fourth_counter_num" class="col-sm-12 control-label   text-white">Fourth Counter Number </label>
							<div class="col-sm-12  ">
								<input type="number" class="form-control" id="about_fourth_counter_num" name="about_fourth_counter_num" value="<?php echo get_option('about_fourth_counter_num'); ?>">
							</div>
						</div>
								
					</div>

					<div class="tab-pane fade show" id="v-pills-thirdsection" role="tabpanel" aria-labelledby="v-pills-thirdsection-tab">
			        	<div class="form-group">
						    <label class="col-sm-12 control-label   text-white">Section Hide</label>
						    <div class="col-sm-12  ">
						  	    <input type="checkbox" id="about_hide_third_section" name="about_hide_third_section" value="1" <?php echo get_option('about_hide_third_section') == '1' ? 'checked' : ''; ?>>
						    </div>
						</div>

						<div  class="form-group">

						  <label for="about_second_img_url" class="col-sm-12   control-label   text-white">Section Image</label>

						  <div class="col-sm-12  ">

						    <input class="second_img_url codzilla_half" type="text" name="about_second_img_url" size="60" value="<?php echo get_option('about_second_img_url'); ?>">

						    <a href="#" class="second_img_upload btn btn-info">Choose </a>

						    <img  class="second_img rounded img-fluid" src="<?php echo get_option('about_second_img_url'); ?>" height="100" style="max-width:50%" />

						  </div>

						</div>

						<div class="form-group">
							<label for="about_third_title" class="col-sm-12 control-label   text-white">Title</label>
							<div class="col-sm-12  ">
								<input type="text" class="form-control" id="about_third_title" name="about_third_title" value="<?php echo get_option('about_third_title'); ?>">
							</div>
						</div>
                        
                        <div class="form-group">
							<label for="about_third_block1_title" class="col-sm-12 control-label   text-white">Block one title</label>
							<div class="col-sm-12  ">
								<input type="text" class="form-control" id="about_third_block1_title" name="about_third_block1_title" value="<?php echo get_option('about_third_block1_title'); ?>">
							</div>
						</div>

						<div class="form-group">
							<label for="about_third_content_one" class="col-sm-12 control-label   text-white">Block one content</label>
							<div class="col-sm-12  ">
                                <?php wp_editor( get_option('about_third_content_one'), 'about_third_content_one',  array('textarea_rows'=>5,'textarea_name'=> 'about_third_content_one', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about_third_content_one','class'=>'form-control',) );  ?>
							</div>
						</div>
                        
                        <div class="form-group">
							<label for="about_third_block2_title" class="col-sm-12 control-label   text-white">Block two title</label>
							<div class="col-sm-12  ">
								<input type="text" class="form-control" id="about_third_block2_title" name="about_third_block2_title" value="<?php echo get_option('about_third_block2_title'); ?>">
							</div>
						</div>
                        
                        <div class="form-group">
							<label for="about_third_content_two" class="col-sm-12 control-label   text-white">Block two content</label>
							<div class="col-sm-12  ">
                                <?php wp_editor( get_option('about_third_content_two'), 'about_third_content_two',  array('textarea_rows'=>5,'textarea_name'=> 'about_third_content_two', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about_third_content_two','class'=>'form-control',) );  ?>
							</div>
						</div>
                        
                        <div class="form-group">
							<label for="about_third_block3_title" class="col-sm-12 control-label   text-white">Block three title</label>
							<div class="col-sm-12  ">
								<input type="text" class="form-control" id="about_third_block3_title" name="about_third_block3_title" value="<?php echo get_option('about_third_block3_title'); ?>">
							</div>
						</div>
                        
                        <div class="form-group">
							<label for="about_third_content" class="col-sm-12 control-label   text-white">Block three content</label>
							<div class="col-sm-12  ">
                                <?php wp_editor( get_option('about_third_content_three'), 'about_third_content_three',  array('textarea_rows'=>5,'textarea_name'=> 'about_third_content_three', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about_third_content_three','class'=>'form-control',) );  ?>
							</div>
						</div>
                        
                        <div class="form-group">
							<label for="about_third_block4_title" class="col-sm-12 control-label   text-white">Block four title</label>
							<div class="col-sm-12  ">
								<input type="text" class="form-control" id="about_third_block4_title" name="about_third_block4_title" value="<?php echo get_option('about_third_block4_title'); ?>">
							</div>
						</div>
                        
                        <div class="form-group">
							<label for="about_third_content" class="col-sm-12 control-label   text-white">Block four content</label>
							<div class="col-sm-12  ">
                                <?php wp_editor( get_option('about_third_content_four'), 'about_third_content_four',  array('textarea_rows'=>5,'textarea_name'=> 'about_third_content_four', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about_third_content_four','class'=>'form-control',) );  ?>
							</div>
						</div>
                        
									
					</div>


					<div class="tab-pane fade show" id="v-pills-fourthsection" role="tabpanel" aria-labelledby="v-pills-fourthsection-tab">
			        	<div class="form-group">
						    <label class="col-sm-12 control-label   text-white">Section Hide</label>
						    <div class="col-sm-12  ">
						  	    <input type="checkbox" id="about_hide_fourth_section" name="about_hide_fourth_section" value="1" <?php echo get_option('about_hide_fourth_section') == '1' ? 'checked' : ''; ?>>
						    </div>
						</div>

                        <div  class="form-group">

						  <label for="about_third_img_url" class="col-sm-12   control-label   text-white">First Image</label>

						  <div class="col-sm-12  ">

						    <input class="third_img_url codzilla_half" type="text" name="about_third_img_url" size="60" value="<?php echo get_option('about_third_img_url'); ?>">

						    <a href="#" class="third_img_upload btn btn-info">Choose </a>

						    <img  class="third_img rounded img-fluid" src="<?php echo get_option('about_third_img_url'); ?>" height="100" style="max-width:50%" />

						  </div>

						</div>
                        
						<div class="form-group">
							<label for="about_fourth_title1" class="col-sm-12 control-label   text-white">First Title</label>
							<div class="col-sm-12  ">
								<input type="text" class="form-control" id="about_fourth_title1" name="about_fourth_title1" value="<?php echo get_option('about_fourth_title1'); ?>">
							</div>
						</div>

						<div class="form-group">
							<label for="about_fourth_content1" class="col-sm-12 control-label   text-white">First Content</label>
							<div class="col-sm-12  ">
                                <?php wp_editor( get_option('about_fourth_content1'), 'about_fourth_content1',  array('textarea_rows'=>5,'textarea_name'=> 'about_fourth_content1', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about_fourth_content1','class'=>'form-control ',) );  ?>
							</div>
						</div>

						<div  class="form-group">

						  <label for="about_third_img_url" class="col-sm-12   control-label   text-white">Second Image</label>

						  <div class="col-sm-12  ">

						    <input class="fourth_img_url codzilla_half" type="text" name="about_fourth_img_url" size="60" value="<?php echo get_option('about_fourth_img_url'); ?>">

						    <a href="#" class="fourth_img_upload btn btn-info">Choose </a>

						    <img  class="fourth_img rounded img-fluid" src="<?php echo get_option('about_fourth_img_url'); ?>" height="100" style="max-width:50%" />

						  </div>

						</div>
                        
						<div class="form-group">
							<label for="about_fourth_title2" class="col-sm-12 control-label   text-white">Second Title</label>
							<div class="col-sm-12  ">
								<input type="text" class="form-control" id="about_fourth_title2" name="about_fourth_title2" value="<?php echo get_option('about_fourth_title2'); ?>">
							</div>
						</div>

						<div class="form-group">
							<label for="about_fourth_content2" class="col-sm-12 control-label   text-white">First Content</label>
							<div class="col-sm-12  ">
                                <?php wp_editor( get_option('about_fourth_content2'), 'about_fourth_content2',  array('textarea_rows'=>5,'textarea_name'=> 'about_fourth_content2', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about_fourth_content2','class'=>'form-control',) );  ?>
							</div>
						</div>

						<div  class="form-group">

						  <label for="about_fifth_img_url" class="col-sm-12   control-label   text-white">Third Image</label>

						  <div class="col-sm-12  ">

						    <input class="fifth_img_url codzilla_half" type="text" name="about_fifth_img_url" size="60" value="<?php echo get_option('about_fifth_img_url'); ?>">

						    <a href="#" class="fifth_img_upload btn btn-info">Choose </a>

						    <img  class="fifth_img rounded img-fluid" src="<?php echo get_option('about_fifth_img_url'); ?>" height="100" style="max-width:50%" />

						  </div>

						</div>
                        
						<div class="form-group">
							<label for="about_fourth_title3" class="col-sm-12 control-label   text-white">Third Title</label>
							<div class="col-sm-12  ">
								<input type="text" class="form-control" id="about_fourth_title3" name="about_fourth_title3" value="<?php echo get_option('about_fourth_title3'); ?>">
							</div>
						</div>

						<div class="form-group">
							<label for="about_fourth_content3" class="col-sm-12 control-label   text-white">Third Content</label>
							<div class="col-sm-12  ">
                                <?php wp_editor( get_option('about_fourth_content3'), 'about_fourth_content3',  array('textarea_rows'=>5,'textarea_name'=> 'about_fourth_content3', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about_fourth_content3','class'=>'form-control  ',) );  ?>
							</div>
						</div>

						
								
					</div>

			    </div>

				<div class="form-group">
					<div class="col-sm-12  ">
					<input type="submit" class="btn btn-default btn-block btn-lg cl_save_route" name="cl_save" value="Save Setting ">
					</div>
				</div>

			</form>

	 	</div>
	</div>
</div><!-- /container -->
<?php
}