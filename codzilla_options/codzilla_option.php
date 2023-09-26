<?php 

function main_content_area_callback(){

	$wp_editor_settings = array( 

		'quicktags' => array( 'buttons' => 'strong,em,del,ul,ol,li,close' ), // note that spaces in this list seem to cause an issue

		'textarea_rows'=> 2

	);    

	if( isset( $_POST['codzilla_save'] ) && !empty( $_POST['codzilla_save']) ){

		foreach ($_POST as $key => $value) {

			if(in_array($key,['codzilla_map_code'])){

				$value = stripcslashes($value);

			}				

			update_option( $key, $value);

		}

	}

?>

<div  class="container-fluid  padding-left-4">

	<div class="row">

		<div class="col-sm-12 col-md-12 col-lg-12 bg-col12">
			<!-- Top Navigation -->
			<header class="codrops-header">
				<h1 class="text-center cl-title"><span>Codzilla Options</span></h1>
			</header>
		</div>
			<br/>
		<div class="col-sm-3 col-md-3 col-lg-3 pl-0">

			<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

				<a class="nav-link   active" id="v-pills-firstsection-tab" data-toggle="pill" href="#v-pills-firstsection" role="tab" aria-controls="v-pills-firstsection" aria-selected="true">Logo</a>

				<a class="nav-link  " id="v-pills-secondsection-tab" data-toggle="pill" href="#v-pills-secondsection" role="tab" aria-controls="v-pills-secondsection" aria-selected="false">Contact Us </a>

				<a class="nav-link  " id="v-pills-thirdsection-tab" data-toggle="pill" href="#v-pills-thirdsection" role="tab" aria-controls="v-pills-thirdsection" aria-selected="false">Social Media </a>

				<a class="nav-link  " id="v-pills-fourthsection-tab" data-toggle="pill" href="#v-pills-fourthsection" role="tab" aria-controls="v-pills-fourthsection" aria-selected="false">Colors  </a>

				<a class="nav-link  " id="v-pills-fivthsection-tab" data-toggle="pill" href="#v-pills-fivthsection" role="tab" aria-controls="v-pills-fivthsection" aria-selected="false">Company Profile  </a>

			</div>

		</div>

		<div class="col-sm-9 col-md-9 col-lg-9 gray_back pl-0">

	  		<form class="form-horizontal" method="post" action="#">

			    <div class="tab-content" id="v-pills-tabContent">

			        <div class="tab-pane fade show active" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">

						<div class="form-group">

						  <label for="codzilla_website_logo" class="col-sm-12   control-label   text-white">Logo Dark</label>

						  <div class="col-sm-12  ">

						    <input class="first_img_url codzilla_half" type="text" name="codzilla_logo_dark" size="60" value="<?php echo get_option('codzilla_logo_dark'); ?>">

						    <a href="#" class="first_img_upload btn btn-info">Choose </a>

						    <img  class="first_img rounded img-fluid" src="<?php echo get_option('codzilla_logo_dark'); ?>" height="100" style="max-width:100%" />

						  </div>

						</div>
                        <div  class="form-group">

						  <label for="codzilla_website_logo" class="col-sm-12   control-label   text-white">Logo Light</label>

						  <div class="col-sm-12  ">

						    <input class="second_img_url codzilla_half" type="text" name="codzilla_logo_light" size="60" value="<?php echo get_option('codzilla_logo_light'); ?>">

						    <a href="#" class="second_img_upload btn btn-info">Choose </a>

						    <img  class="second_img rounded img-fluid" src="<?php echo get_option('codzilla_logo_light'); ?>" height="100" style="max-width:100%" />

						  </div>

						</div>
                        <div  class="form-group">

						  <label for="codzilla_website_logo" class="col-sm-12   control-label   text-white">Logo Sticky</label>

						  <div class="col-sm-12  ">

						    <input class="fourth_img_url codzilla_half" type="text" name="codzilla_logo_sticky" size="60" value="<?php echo get_option('codzilla_logo_sticky'); ?>">

						    <a href="#" class="fourth_img_upload btn btn-info">Choose </a>

						    <img  class="fourth_img rounded img-fluid" src="<?php echo get_option('codzilla_logo_sticky'); ?>" height="100" style="max-width:100%" />

						  </div>

						</div>
                        <div  class="form-group">

						  <label for="codzilla_website_logo" class="col-sm-12   control-label   text-white">Favicon</label>

						  <div class="col-sm-12  ">

						    <input class="third_img_url codzilla_half" type="text" name="codzilla_favicon" size="60" value="<?php echo get_option('codzilla_favicon'); ?>">

						    <a href="#" class="third_img_upload btn btn-info">Choose </a>

						    <img  class="third_img rounded img-fluid" src="<?php echo get_option('codzilla_favicon'); ?>" height="100" style="max-width:100%" />

						  </div>

						</div>
			        </div>

			        <div class="tab-pane fade" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">

						<div class="form-group">

							<label for="codzilla_phone" class="col-sm-12   control-label   text-white">phone </label>

							<div class="col-sm-12  ">

								<input type="number" class="form-control  " id="codzilla_phone" name="codzilla_phone" value="<?php echo get_option('codzilla_phone'); ?>">

							</div>

						</div>
                        <div class="form-group">

							<label for="codzilla_whatsapp" class="col-sm-12   control-label   text-white">Whatsapp</label>

							<div class="col-sm-12  ">

								<input type="text" class="form-control  " id="codzilla_whatsapp" name="codzilla_whatsapp" value="<?php echo get_option('codzilla_whatsapp'); ?>">

							</div>

						</div>

						<div class="form-group">

							<label for="codzilla_email" class="col-sm-12   control-label   text-white">Email 1</label>

							<div class="col-sm-12  ">

								<input type="email" class="form-control  " id="codzilla_email" name="codzilla_email" value="<?php echo get_option('codzilla_email'); ?>">

							</div>

						</div>
                        <div class="form-group">

							<label for="codzilla_email2" class="col-sm-12   control-label   text-white">Email 2</label>

							<div class="col-sm-12  ">

								<input type="email" class="form-control  " id="codzilla_email2" name="codzilla_email2" value="<?php echo get_option('codzilla_email2'); ?>">

							</div>

						</div>

						<div class="form-group">

							<label for="codzilla_location" class="col-sm-12   control-label   text-white">Address </label>

							<div class="col-sm-12  ">

								<input type="text" class="form-control  " id="codzilla_location" name="codzilla_location" value="<?php echo get_option('codzilla_location'); ?>">

							</div>

						</div>
                        <div class="form-group">

							<label for="codzilla_location_ar" class="col-sm-12   control-label   text-white">Arabic Address </label>

							<div class="col-sm-12  ">

								<input type="text" class="form-control  " id="codzilla_location_ar" name="codzilla_location_ar" value="<?php echo get_option('codzilla_location_ar'); ?>">

							</div>

						</div>

				    </div>	      

					<div class="tab-pane fade" id="v-pills-thirdsection" role="tabpanel" aria-labelledby="v-pills-thirdsection-tab">

						<div class="form-group">

							<label for="codzilla_fb" class="col-sm-12   control-label   text-white">Facebook </label>

							<div class="col-sm-12  ">

								<input type="text" class="form-control  " id="codzilla_fb" name="codzilla_fb" value="<?php echo get_option('codzilla_fb'); ?>">

							</div>

						</div>

						<div class="form-group">

							<label for="codzilla_insta" class="col-sm-12   control-label   text-white">Instagram</label>

							<div class="col-sm-12  ">

								<input type="text" class="form-control  " id="codzilla_insta" name="codzilla_insta" value="<?php echo get_option('codzilla_insta'); ?>">

							</div>

						</div>

						<div class="form-group">

							<label for="codzilla_twitter" class="col-sm-12   control-label   text-white">Twitter</label>

							<div class="col-sm-12  ">

								<input type="text" class="form-control  " id="codzilla_twitter" name="codzilla_twitter" value="<?php echo get_option('codzilla_twitter'); ?>">

							</div>

						</div>

						<div class="form-group">

							<label for="codzilla_youtube" class="col-sm-12   control-label   text-white">Youtube </label>

							<div class="col-sm-12  ">

								<input type="text" class="form-control  " id="codzilla_youtube" name="codzilla_youtube" value="<?php echo get_option('codzilla_youtube'); ?>">

							</div>

						</div>

					</div>

					<div class="tab-pane fade" id="v-pills-fourthsection" role="tabpanel" aria-labelledby="v-pills-fourthsection-tab">

						<div class="form-group mt-4">

							<label for="codzilla_primaryColor" class="col-sm-12   control-label   text-white">Primary Color </label>

							<div class="col-sm-12  ">

								<input style="width: 5%;" type="color" class="form-control" id="primaryColor" name="codzilla_primaryColor" value="<?php echo get_option('codzilla_primaryColor'); ?>">
								<span style="letter-spacing: 1.3px; text-transform: uppercase;" dir="ltr" class="text-white mr-2 mt-2"><?php echo get_option('codzilla_primaryColor'); ?></span>

							</div>

						</div>

						<div class="form-group mb-4">

							<label for="codzilla_secondaryColor" class="col-sm-12   control-label   text-white">Secondary Color  </label>

							<div class="col-sm-12  ">

								<input style="width: 5%;" type="color" class="form-control" id="secondaryColor" name="codzilla_secondaryColor" value="<?php echo get_option('codzilla_secondaryColor'); ?>">
								<span style="letter-spacing: 1.3px; text-transform: uppercase;" class="text-white mr-2 mt-2"><?php echo get_option('codzilla_secondaryColor'); ?></span>

							</div>

						</div>
					</div>

					<div class="tab-pane fade" id="v-pills-fivthsection" role="tabpanel" aria-labelledby="v-pills-fivthsection-tab">

						<div  class="form-group">

						  <label for="codzilla_company_profile" class="col-sm-12   control-label   text-white">Company Profile</label>

						  <div class="col-sm-12  ">

						    <input class="company_profile_url codzilla_half" type="text" name="codzilla_profile" size="60" value="<?php echo get_option('codzilla_profile'); ?>">

						    <a href="#" class="company_profile_upload btn btn-info">Choose </a>

						  </div>

						</div>

			    </div>

				<div class="form-group mt-4">

					<div class="col-sm-12">

					<input type="submit" class="btn btn-default btn-block btn-lg codzilla_save_route" name="codzilla_save" value="Save Setting ">

					</div>

				</div>

			</form>

	 	</div>

	</div>

</div><!-- /container -->

<?php

}