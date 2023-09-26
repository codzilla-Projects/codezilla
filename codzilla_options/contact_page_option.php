<?php 
function contact_page_content_callback(){
	   

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
				<h1 class="text-center cl-title"><span>Contact Us Options</span></h1>
			</header>
		</div>
			<br/>
		<div class="col-sm-3 col-md-3 col-lg-3 pl-0">

			<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

				<a class="nav-link   active" id="v-pills-firstsection-tab" data-toggle="pill" href="#v-pills-firstsection" role="tab" aria-controls="v-pills-firstsection" aria-selected="true">First Section</a>

				
			</div>

		</div>

		<div class="col-sm-9 col-md-9 col-lg-9 gray_back pl-0">

	  		<form class="form-horizontal" method="post" action="#">

			    <div class="tab-content" id="v-pills-tabContent">

			        <div class="tab-pane fade show active" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">
                        
                        <div class="form-group">

							<label for="codzilla_form_subtitle" class="col-sm-12   control-label   text-white">Form Subtitle </label>

							<div class="col-sm-12  ">

								<input type="text" class="form-control  " id="codzilla_form_subtitle" name="codzilla_form_subtitle" value="<?php echo get_option('codzilla_form_subtitle'); ?>">

							</div>

						</div>
                        <div class="form-group">

							<label for="codzilla_form_title" class="col-sm-12   control-label   text-white">Form Title </label>

							<div class="col-sm-12  ">

								<input type="text" class="form-control  " id="codzilla_form_title" name="codzilla_form_title" value="<?php echo get_option('codzilla_form_title'); ?>">

							</div>

						</div>
                        
                        <div class="form-group">

						  <label for="contact_first_sec_img" class="col-sm-12   control-label   text-white">Image</label>

						  <div class="col-sm-12  ">

						    <input class="first_img_url codzilla_half" type="text" name="contact_first_sec_img" size="60" value="<?php echo get_option('contact_first_sec_img'); ?>">

						    <a href="#" class="first_img_upload btn btn-info">Choose </a>

						    <img  class="first_img rounded img-fluid" src="<?php echo get_option('contact_first_sec_img'); ?>" height="100" style="max-width:50%" />

						  </div>

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