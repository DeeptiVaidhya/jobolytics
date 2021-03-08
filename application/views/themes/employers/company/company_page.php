 <!--  -->
<!-- <link rel="stylesheet" href="<?= base_url(); ?>crop_assets/crop/css/cropper.css">
<link rel="stylesheet" href="<?= base_url(); ?>crop_assets/css/bootstrap/bootstrap-theme.min.css">
<link rel="stylesheet" href="<?= base_url(); ?>crop_assets/css/bootstrap/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="<?= base_url(); ?>crop_assets/css/jquery-ui.css">
<link rel="stylesheet" href="<?= base_url(); ?>crop_assets/css/jquery-ui-timepicker-addon.css"> 
 -->

  <style type="text/css">
.error{
    color:red;
    font-weight: 400;
    font-size: 15px;
        padding-top: 10px;
}
.select{
 color:black;
}

.gif-loader {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-color: rgba(0,0,0,0.5);
    display: flex;
    justify-content: center;
    align-items: center;
    display: none;
    z-index:1060;
}
.gif-loader__img {
    max-width: 150px;
    width: 100%;
    margin-top: 150px;
}

.job_detail_btn {
    background: #bd2025;
    color: #fff !important;
    padding: 6px 20px !important;
    text-transform: uppercase;
    border: 1px solid #bd2025;
}
#errmsg
{
color: red;
}

.edit-pen {
       position: absolute;
    color: #01579B;
    background: #fff;
    /* padding: 10px; */
    box-shadow: 1px 1px 1px 1px #eee;
    border-radius: 50px;
    margin-bottom: 20px;
    top: 115px;
    left: 180px;
}


img {
  vertical-align: inherit !important;
  border-style: none;
}

.avatar{
  position: relative;

}

.submit-field{
	position: relative;
}


</style>

<div class="gif-loader" style="display:none;"> 
    <center>
        <img src="https://www.jainbandhutrust.com/assests/wait.gif" class="gif-loader__img" />
    </center>    
</div>

<!-- start banner Area -->
	<section class="banner-area relative" id="home">	
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Company Details				
					</h1>	
					<p class="text-white link-nav"><a href="<?= base_url('employers'); ?>">Employer </a>  <span class="lnr lnr-arrow-right"></span>  <a href=""> Company Details</a></p>
				</div>											
			</div>
		</div>
	</section>
	<!-- End banner Area -->	

	<!-- Start post Area -->
	<section class="post-area section-gap">
		<div class="container">
			<div class="row justify-content-center d-flex">
				<div class="col-lg-4 sidebar">
					<?php $this->load->view($emp_sidebar); ?>					
				</div>
				<div class="col-lg-8 post-list">
					
					<?php if ($this->session->flashdata('file_error')) {
		              echo '<div class="alert alert-danger">' . $this->session->flashdata('file_error') . '</div>';
		            } ?>

					<?php
					if ($this->session->flashdata('update_success')) {
						echo '<div class="alert alert-success">' . $this->session->flashdata('update_success') . '</div>';
					}
					if($this->session->flashdata('error_update')){
						echo '<div class="alert alert-danger">' . $this->session->flashdata('error_update') . '</div>';
					}
					?>
					<!-- <?php $attributes = array('id' => 'update_employers_form', 'method' => 'post' , 'class' => 'form_horizontal'); ?>
					<?php echo form_open_multipart('employers/company',$attributes);?> -->

					  <form  action="<?php echo site_url('employers/company');?>"  class="form_horizontal"  method="post"  id="update_employers_form"  name="update_employers_form" enctype="multipart/form-data"> 



					<div class="profile_job_content col-lg-12">
						<div class="headline">
							<h3> Company Details</h3>
							
						</div>
						<div class="profile_job_detail">
							<div class="row">
								<div class="col-md-12 col-sm-12">
									<div class="submit-field">
										<h5>Company Logo *</h5>

										<?php 
									        $id   = $company_info['id'];
									        $info = $this->db->query('SELECT * FROM xx_companies WHERE id ="'.$id.'" ' )->row_array();

									        if(!empty($info['company_logo'])) {
									          $url = "https://www.jobolytics.com/".$info['company_logo']."";
									        } else {
									          $url = "https://www.jobolytics.com/".$info['company_logo']."";
									        }
									    ?>

										 <img  class="circular-fix has-shadow border marg-top10" src="<?php print $url;?>"  style="width:150px; height:150px; max-width: 150px; max-height: 150px;border-radius: 100%;">

										 <img alt="Update Profile" title="Click here for update Profile" data-toggle="modal" data-target="#avatar-modal" id="render-avatar"  data-ussuid="<?php echo  $company_info['id'];?>"  data-backdrop="static" data-keyboard="false" data-upltype="company_logo" class="fa fa-pencil edit-pen" src="https://www.jobolytics.com/uploads/edit1-pencil.png" style="position: absolute;
    color: #01579B;
    background: #fff;
    /* padding: 10px; */
    box-shadow: 1px 1px 1px 1px #eee;
    border-radius: 50px;
    margin-bottom: 20px;
    top: 142px;
    left: 107px;" >

        								<!-- <i class="fa fa-pencil edit-pen"  style="  position: absolute; top: 136px;left: 111px;font-size: 20px;color: #bd2025;"></i> -->

										 <!-- <?php

				                          if (!empty($company_info['company_logo'])) { ?>

										<input class="form-control" type="hidden" name="company_id" value="<?= $company_info['id']; ?>" placeholder="Company Name">
										<?php 
									        $id   = $company_info['id'];
									        $info = $this->db->query('SELECT * FROM xx_companies WHERE id ="'.$id.'" ' )->row_array();

									        if(!empty($info['company_logo'])) {
									          $url = "https://www.jobolytics.com/".$info['company_logo']."";
									        } else {
									          $url = "https://www.jobolytics.com/".$info['company_logo']."";
									        }
									    ?>


										 <img src="<?php print $url;?>" alt="Update Profile" title="Profile" class="circular-fix has-shadow border marg-top10" style="width:150px; height:150px; max-width: 150px; max-height: 150px;border-radius: 100%;">

        								<i class="fa fa-pencil edit-pen"  style="  position: absolute; top: 136px;left: 111px;font-size: 20px;color: #bd2025;"></i>

				                         
				                          <?php }else{?>

				                          	<?php 
									        $id   = $company_info['id'];
									        $info = $this->db->query('SELECT * FROM xx_companies WHERE id ="'.$id.'" ' )->row_array();

									        if(!empty($info['company_logo'])) {
									          $url = "https://www.jobolytics.com/".$info['company_logo']."";
									        } else {
									          $url = "https://www.jobolytics.com/".$info['company_logo']."";
									        }
									    ?>

				                           <img src="<?php print $url;?>" alt="Update Profile" title="Profile" class="circular-fix has-shadow border marg-top10" style="width:150px; height:150px; max-width: 150px; max-height: 150px;border-radius: 100%;">

        								<i class="fa fa-pencil edit-pen"  data-toggle="modal" data-target="#avatar-modal" id="render-avatar"  data-ussuid="<?php echo  $company_info['id'];?>"  data-backdrop="static" data-keyboard="false" data-upltype="company_logo" style="  position: absolute; top: 136px;left: 111px;font-size: 20px;color: #bd2025;"></i>

				                          <?php }?>

										<input type="hidden" name="old_logo" value="<?= $company_info['company_logo']; ?>"> -->
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="submit-field">
										<h5>Company Name *</h5>
										<input class="form-control" type="text" name="company_name" value="<?= $company_info['company_name']; ?>" placeholder="Company Name" title="Company Name is required!"  required>
										<!-- Hidden input for company ID-->
										<input class="form-control" type="hidden" name="company_id" value="<?= $company_info['id']; ?>" placeholder="Company Name">
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="submit-field">
										<h5>Email *</h5>
										<input type="email" name="email" value="<?= $company_info['email']; ?>"  class="form-control" placeholder="example@example.com" title="Email Name is required!"  required>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="submit-field">
										<h5>Phone *</h5>
										 <input class="form-control" type="tel" pattern="^\d{10}$"  name="phone_no"  value="<?= $company_info['phone_no']; ?>" placeholder="123456789" maxlength="12"  title="Phone is required!" required id="phone_no" >&nbsp;<span id="errmsg"></span>

										<!-- <input class="form-control" type="tel" name="phone_no" value="<?= $company_info['phone_no']; ?>" placeholder="123456789" title="Phone is required!" required> -->
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="submit-field">
										<h5>Website:</h5>
										<input class="form-control" type="url" name="website" value="<?= $company_info['website']; ?>" placeholder="www.example.com" >
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="submit-field">
										<h5>Category *</h5>
										<select class="form-control" name="category" title="Category is required!" required>
											<option value="">Select Category</option>
											<?php foreach($categories as $category):?>
												<?php if($company_info['category'] == $category['id']): ?>
													<option value="<?= $category['id']; ?>" selected> <?= $category['name']; ?> </option>
													<?php else: ?>
														<option value="<?= $category['id']; ?>"> <?= $category['name']; ?> </option>
													<?php endif; endforeach; ?>
												</select>
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
											<div class="submit-field">
												<h5>Date of Establishment *</h5>
												<input type="date" name="founded_date" value="<?= $company_info['founded_date']; ?>" class="form-control" title="Date is required!" required>
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
											<div class="submit-field">
												<h5>Organization Type *</h5>
												<select name="org_type"  class="form-control" title="Organization Type  required!" required>
													<option value="Public" <?php if($company_info['org_type'] == 'Public'){ echo "selected";} ?>>Public</option>
													<option value="Private" <?php if($company_info['org_type'] == 'Private'){ echo "selected";} ?>>Private</option>
													<option value="Government" <?php if($company_info['org_type'] == 'Government'){ echo "selected";} ?>>Government</option>
													<option value="NGO" <?php if($company_info['org_type'] == 'NGO'){ echo "selected";} ?>>NGO</option>
												</select>
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
											<div class="submit-field">
												<h5>No. of Employers *</h5>
												<select name="no_of_employers" class="form-control"  title="No. of Employers is required!" required>
													<option value="1-10" <?php if($company_info['no_of_employers'] == '1-10'){ echo "selected";} ?>>1-10</option>
													<option value="10-20" <?php if($company_info['no_of_employers'] == '10-20'){ echo "selected";} ?>>10-20</option>
													<option value="20-30" <?php if($company_info['no_of_employers'] == '20-30'){ echo "selected";} ?>>20-30</option>
													<option value="30-50" <?php if($company_info['no_of_employers'] == '30-50'){ echo "selected";} ?>>30-50</option>
													<option value="50-100" <?php if($company_info['no_of_employers'] == '50-100'){ echo "selected";} ?>>50-100</option>
													<option value="100+" <?php if($company_info['no_of_employers'] == '100+'){ echo "selected";} ?>>100+</option>
												</select>
											</div>
										</div>
										<div class="col-md-12 col-sm-12">
											<div class="submit-field">
												<h5>Company Description *</h5>
												<textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Nulla bibendum commodo rhoncus. Sed mattis magna nunc, ac varius quam pharetra vitae."><?= $company_info['description']; ?></textarea>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="profile_job_content col-lg-12 mt-5">
								<div class="headline">
									<h3>Address / Location</h3>
								</div>
								<div class="profile_job_detail">
									<div class="row">
										<div class="col-md-6 col-sm-12">
											<div class="submit-field">
												<h5>Postcode </h5>
												<input type="text" name="postcode" value="<?= $company_info['postcode']; ?>" class="form-control" placeholder="50700" pattern="[0-9]{6}" maxlength="6" id="pin" >&nbsp;<span id="pinerrmsg"></span>
											</div>
										</div>
										<div class="col-md-12 col-sm-12">
											<div class="submit-field">
												<h5>Full Address *</h5>
												<input type="text" id="searchTextField"autocomplete="on" runat="server" name="location"  value="<?= $company_info['location']; ?>" class="form-control" title="Address is required!" required>
											</div>
										</div>
									</div>
								</div>
							</div>	
							<div class="profile_job_content col-lg-12 mt-5">
								<div class="headline">
									<h3>Company Social</h3>
								</div>
								<div class="profile_job_detail">
									<div class="row">
										<div class="col-md-6 col-sm-12">
											<div class="submit-field">
												<h5>Facebook</h5>
												<input type="url" name="facebook_link" value="<?= $company_info['facebook_link']; ?>"  class="form-control" placeholder="http://www.facebook.com">
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
											<div class="submit-field">
												<h5>Twitter</h5>
												<input type="url" name="twitter_link" value="<?= $company_info['twitter_link']; ?>" class="form-control"  placeholder="http://www.twitter.com">
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
											<div class="submit-field">
												<h5>Google Plus</h5>
												<input type="url" name="google_link" value="<?= $company_info['google_link']; ?>" class="form-control" placeholder="http://www.google-plus.com">
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
											<div class="submit-field">
												<h5>Youtube</h5>
												<input type="url" name="youtube_link" value="<?= $company_info['youtube_link']; ?>" class="form-control"  placeholder="http://www.youtube.com">
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
											<div class="submit-field">
												<h5>Vimeo</h5>
												<input type="url" name="vimeo_link" value="<?= $company_info['vimeo_link']; ?>" class="form-control"  placeholder="http://www.vimeo.com">
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
											<div class="submit-field">
												<h5>Linkedin</h5>
												<input type="url" name="linkedin_link" value="<?= $company_info['linkedin_link']; ?>" class="form-control" placeholder="http://www.linkedin.com">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="add_job_btn col-lg-12 mt-5">
								<div class="submit-field">
									<input type="submit" name="update" value="Update" class="job_detail_btn">
								</div>
							</div>
							</form>	
						<!-- <?php echo form_close(); ?>		 -->												
						</div>
					</div>
				</div>	
			</section>
	<!-- End post Area -->

<!-- 
<?php
$this->load->view('themes/crop/company_img');
?> -->


 <script src="<?php echo base_url('jquery_validation_plugin/dist/jquery.validate.js')?>"></script>
 <script type="text/javascript">
    $.validator.setDefaults({
        submitHandler: function() {    
        }
      });
    $(document).ready(function() {
        $("#update_employers_form").validate({
          submitHandler:function(){
            // $("#update_user_form").submit();

            // $('.gif-loader').css('display','inline');

            update_employers_form.submit();
        $('.gif-loader').css('display','inline');
             return true;
          }
        });

         $("#phone_no").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsg").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });

  $("#pin").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#pinerrmsg").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });


      });


    </script>


<!-- <script>var baseurl = "<?php echo site_url(); ?>";</script>

<script type="text/javascript" src="<?= base_url(); ?>crop_assets/js/jquery.min.js"></script>
<script src="<?= base_url(); ?>crop_assets/js/jquery-ui.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>crop_assets/js/common.js"></script> 
<script type="text/javascript" src="https://techarise.com/demos/codeigniter/assets/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-filestyle/2.1.0/bootstrap-filestyle.js"></script>
<script src="<?= base_url(); ?>crop_assets/crop/js/cropper.js"></script> 
<script src="<?= base_url(); ?>crop_assets/crop/js/main.js"></script> -->