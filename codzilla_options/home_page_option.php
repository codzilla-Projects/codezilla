<?php 
function home_page_content_callback(){

if( isset( $_POST['codzilla_save'] ) && !empty( $_POST['codzilla_save']) ){



		foreach ($_POST as $key => $value) {		


			if(in_array($key,['home_seventh_content'])){

				$value = stripcslashes($value);

			}

			update_option( $key, $value);

		}

		if(!isset($_POST['home_hide_first_section'])) {delete_option('home_hide_first_section');}

		if(!isset($_POST['home_hide_second_section'])) {delete_option('home_hide_second_section');}

		if(!isset($_POST['home_hide_third_section'])) {delete_option('home_hide_third_section');}

		if(!isset($_POST['home_hide_fourth_section'])) {delete_option('home_hide_fourth_section');}

		if(!isset($_POST['home_hide_fivth_section'])) {delete_option('home_hide_fivth_section');}

		if(!isset($_POST['home_hide_sixth_section'])) {delete_option('home_hide_sixth_section');}

		if(!isset($_POST['home_hide_seventh_section'])) {delete_option('home_hide_seventh_section');}


	}



?>



<div class="container-fluid   padding-left-4">

	<div class="row">

		<div class="col-sm-12 col-md-12 col-lg-12 bg-col12">

			<!-- Top Navigation -->

			<header class="codrops-header">

				<h1 class="text-center cl-title"><span>Homepage Options </span></h1>

			</header>

		</div>

        <br/>

	</div>

		<div class="row">

		<div class="col-sm-3 pl-0">

			<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

				<a class="nav-link mb-1   active" id="v-pills-firstsection-tab" data-toggle="pill" href="#v-pills-firstsection" role="tab" aria-controls="v-pills-firstsection" aria-selected="true">First Section</a>	

				<a class="nav-link mb-1  " id="v-pills-secondsection-tab" data-toggle="pill" href="#v-pills-secondsection" role="tab" aria-controls="v-pills-secondsection" aria-selected="true">Second Section</a>

				<a class="nav-link mb-1  " id="v-pills-thirdsection-tab" data-toggle="pill" href="#v-pills-thirdsection" role="tab" aria-controls="v-pills-thirdsection" aria-selected="true">Third Section </a>

				<a class="nav-link mb-1  " id="v-pills-fourthsection-tab" data-toggle="pill" href="#v-pills-fourthsection" role="tab" aria-controls="v-pills-fourthsection" aria-selected="true">Fourth Section</a>

				<a class="nav-link mb-1  " id="v-pills-fivthsection-tab" data-toggle="pill" href="#v-pills-fivthsection" role="tab" aria-controls="v-pills-fivthsection" aria-selected="true">Fifth Section</a>

				<a class="nav-link mb-1  " id="v-pills-sixthsection-tab" data-toggle="pill" href="#v-pills-sixthsection" role="tab" aria-controls="v-pills-sixthsection" aria-selected="true">Sixth Section </a>

				<a class="nav-link mb-1  " id="v-pills-seventhsection-tab" data-toggle="pill" href="#v-pills-seventhsection" role="tab" aria-controls="v-pills-seventhsection" aria-selected="true">Seventh Section</a>

			</div>

		</div>

		<div class="col-sm-9 gray_back pl-0">

	  		<form class="form-horizontal" method="post" action="#">

			    <div  class="tab-content" id="v-pills-tabContent">

			        <div class="tab-pane fade show active" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">

			        	<div class="form-group">

						    <label class="col-sm-12 control-label  text-white">Section Hide</label>

						    <div class="col-sm-12  ">

						  	    <input type="checkbox" id="home_hide_first_section" name="home_hide_first_section" value="1" <?php echo get_option('home_hide_first_section') == '1' ? 'checked' : ''; ?>>

						    </div>

						</div>

			        	<div class="form-group">

						  <label for="home_hero_img" class="col-sm-12  control-label  text-white">Home Hero Image</label>

						  <div class="col-sm-12  ">

						    <input class="first_img_url codzilla_half" type="text" name="home_hero_img" size="60" value="<?php echo get_option('home_hero_img'); ?>">

						    <a href="#" class="first_img_upload btn btn-info">Choose </a>

						    <img  class="first_img rounded img-fluid" src="<?php echo get_option('home_hero_img'); ?>" height="100" style="max-width:50%" />

						  </div>

						</div>
                        <div  class="form-group">

						  <label for="first_sec_img_overlay" class="col-sm-12   control-label   text-white">Overlay Image</label>

						  <div class="col-sm-12  ">

						    <input class="second_img_url codzilla_half" type="text" name="first_sec_img_overlay" size="60" value="<?php echo get_option('first_sec_img_overlay'); ?>">

						    <a href="#" class="second_img_upload btn btn-info">Choose </a>

						    <img  class="second_img rounded img-fluid" src="<?php echo get_option('first_sec_img_overlay'); ?>" height="100" style="max-width:50%" />

						  </div>

						</div>		

					</div>



					<div class="tab-pane fade show" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">

			        	<div class="form-group">

						    <label class="col-sm-12 control-label   text-white">Section Hide</label>

						    <div class="col-sm-12  ">

						  	    <input type="checkbox" id="home_hide_second_section" name="home_hide_second_section" value="1" <?php echo get_option('home_hide_second_section') == '1' ? 'checked' : ''; ?>>

						    </div>

						</div>


					</div>



					<div class="tab-pane fade show" id="v-pills-thirdsection" role="tabpanel" aria-labelledby="v-pills-thirdsection-tab">

			        	<div class="form-group">

						    <label class="col-sm-12 control-label   text-white">Section Hide</label>

						    <div class="col-sm-12  ">

						  	    <input type="checkbox" id="home_hide_third_section" name="home_hide_third_section" value="1" <?php echo get_option('home_hide_third_section') == '1' ? 'checked' : ''; ?>>

						    </div>

						</div>
                        
                        <div class="form-group">

							<label for="home_third_subtitle" class="col-sm-12 control-label   text-white">Subtitle</label>

							<div class="col-sm-12  ">

								<input type="text" class="form-control" id="home_third_subtitle" name="home_third_subtitle" value="<?php echo get_option('home_third_subtitle'); ?>">

							</div>

						</div>
                        
						<div class="form-group">

							<label for="home_third_title" class="col-sm-12 control-label   text-white">Title</label>

							<div class="col-sm-12  ">

								<input type="text" class="form-control" id="home_third_title" name="home_third_title" value="<?php echo get_option('home_third_title'); ?>">

							</div>

						</div>
		

					</div>



					<div class="tab-pane fade show" id="v-pills-fourthsection" role="tabpanel" aria-labelledby="v-pills-fourthsection-tab">

			        	<div class="form-group">

						    <label class="col-sm-12 control-label   text-white">Section Hide</label>

						    <div class="col-sm-12  ">

						  	    <input type="checkbox" id="home_hide_fourth_section" name="home_hide_fourth_section" value="1" <?php echo get_option('home_hide_fourth_section') == '1' ? 'checked' : ''; ?>>

						    </div>

						</div>


					</div>

					<div class="tab-pane fade show" id="v-pills-fivthsection" role="tabpanel" aria-labelledby="v-pills-fivthsection-tab">

			        	<div class="form-group">

						    <label class="col-sm-12 control-label   text-white">Section Hide</label>

						    <div class="col-sm-12  ">

						  	    <input type="checkbox" id="home_hide_fivth_section" name="home_hide_fivth_section" value="1" <?php echo get_option('home_hide_fivth_section') == '1' ? 'checked' : ''; ?>>

						    </div>

						</div>
                        
                        <div class="form-group">

						  <label class="col-sm-12 control-label   text-white">Section Image</label>

						   <div class="col-sm-12  ">

						    <input class="third_img_url codzilla_half" type="text" name="home_fivth_img_url" size="60" value="<?php echo get_option('home_fivth_img_url'); ?>">

						    <a href="#" class="third_img_upload btn btn-info">Choose </a>

						    <img  class="third_img rounded img-fluid" src="<?php echo get_option('home_fivth_img_url'); ?>" height="100" style="max-width:50%" />

						  </div>

						</div>

					</div>



					<div class="tab-pane fade show" id="v-pills-sixthsection" role="tabpanel" aria-labelledby="v-pills-sixthsection-tab">

			        	<div class="form-group">

						    <label class="col-sm-12 control-label   text-white">Section Hide</label>

						    <div class="col-sm-12  ">

						  	    <input type="checkbox" id="home_hide_sixth_section" name="home_hide_sixth_section" value="1" <?php echo get_option('home_hide_sixth_section') == '1' ? 'checked' : ''; ?>>

						    </div>

						</div>

                        <div class="form-group">

							<label for="home_sixth_subtitle" class="col-sm-12 control-label   text-white">Subtitle</label>

							<div class="col-sm-12  ">

								<input type="text" class="form-control" id="home_sixth_subtitle" name="home_sixth_subtitle" value="<?php echo get_option('home_sixth_subtitle'); ?>">

							</div>

						</div>


						<div class="form-group">

							<label for="home_sixth_title" class="col-sm-12 control-label   text-white">Title</label>

							<div class="col-sm-12  ">

								<input type="text" class="form-control" id="home_sixth_title" name="home_sixth_title" value="<?php echo get_option('home_sixth_title'); ?>">

							</div>

						</div>
								

					</div>



					<div class="tab-pane fade show" id="v-pills-seventhsection" role="tabpanel" aria-labelledby="v-pills-seventhsection-tab">

						<div class="form-group">

						    <label class="col-sm-12 control-label   text-white">Section Hide</label>

						    <div class="col-sm-12  ">

						  	    <input type="checkbox" id="home_hide_seventh_section" name="home_hide_seventh_section" value="1" <?php echo get_option('home_hide_seventh_section') == '1' ? 'checked' : ''; ?>>

						    </div>

						</div>

                        

						<div class="form-group">

							<label for="home_seventh_content" class="col-sm-12 control-label   text-white">Call to Action Text</label>

							<div class="col-sm-12  ">

                                <?php wp_editor( get_option('home_seventh_content'), 'home_seventh_content',  array('textarea_rows'=>5,'textarea_name'=> 'home_seventh_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'home_seventh_content','class'=>'form-control  ',) );  ?>

							</div>

						</div>
                        
                        <div class="form-group">

							<label for="home_nineth_link_txt" class="col-sm-12 control-label   text-white">Button Text</label>

							<div class="col-sm-12  ">

								<input type="text" class="form-control" id="home_nineth_link_txt" name="home_nineth_link_txt" value="<?php echo get_option('home_nineth_link_txt'); ?>">

							</div>

						</div>
                        
						<div class="form-group">

							<label for="home_nineth_link" class="col-sm-12 control-label   text-white">Button URL</label>

							<div class="col-sm-12  ">

								<input type="text" class="form-control" id="home_nineth_link" name="home_nineth_link" value="<?php echo get_option('home_nineth_link'); ?>">

							</div>

						</div>

						<div class="form-group">

						  <label class="col-sm-12 control-label   text-white">Section Image</label>

						   <div class="col-sm-12  ">

						    <input class="fourth_img_url codzilla_half" type="text" name="home_nineth_img_url" size="60" value="<?php echo get_option('home_nineth_img_url'); ?>">

						    <a href="#" class="fourth_img_upload btn btn-info">Choose </a>

						    <img  class="fourth_img rounded img-fluid" src="<?php echo get_option('home_nineth_img_url'); ?>" height="100" style="max-width:50%" />

						  </div>

						</div>

					</div>


			    </div>



				<div class="form-group">

					<div class="col-sm-12  ">

					<input type="submit" class="btn btn-default btn-block btn-lg codzilla_save_route" name="codzilla_save" value="Save Setting ">

					</div>

				</div>



			</form>



	 	</div>

	</div>

</div><!-- /container -->

<?php

}