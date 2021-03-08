
<link rel="stylesheet" href="<?= base_url(); ?>crop_assets/crop/css/cropper.css">
<link rel="stylesheet" href="<?= base_url(); ?>crop_assets/css/bootstrap/bootstrap-theme.min.css">
<link rel="stylesheet" href="<?= base_url(); ?>crop_assets/css/bootstrap/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="<?= base_url(); ?>crop_assets/css/jquery-ui.css">
<link rel="stylesheet" href="<?= base_url(); ?>crop_assets/css/jquery-ui-timepicker-addon.css"> 


<style type="text/css">
  
  .image-upload > input
{
    display: none;
}

.fa fa-pencil fa-lg
{
    width: 100px;
    cursor: pointer;
}

.employer-dashboard-thumb img {
   border-radius: 100%;
    height: 100%;
    width: 100%;
    margin-top: 3px;
}

.employer-dashboard-thumb img {
   border-radius: 100%;
    height: 100%;
    width: 100%;
    margin-top: 3px;
}

 /*.edit-pen{
        position: absolute;
        color: #01579B;
        background: #fff;
        padding: 5px;
        box-shadow: 1px 1px 1px 1px #eee;
        border-radius: 17px;
        margin-left: -43px;
        margin-right: 25px;
        border: 1px solid #f1f1f1
        font-size: 20px;   
        margin-bottom: 20px;

} */ 

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


</style>
<div class="single-slidebar">

	<?php 

	$employer_id   = $this->session->userdata('employer_id');

	$emp_info = $this->db->query('SELECT * FROM xx_employers WHERE id ="'.$employer_id.'" ' )->row_array();

	?>
	<figure class="mb-4">

	<div class="avatar">
      <?php 
        

        if(!empty($emp_info['emp_img'])) {
          $url = "https://www.jobolytics.com/".$emp_info['emp_img']."";
        } else {
          $url = 'https://www.jobolytics.com/assets/img/user.png';
        }
      ?>
        <img class="circular-fix has-shadow border marg-top10" src="<?php print $url;?>"  style="width:150px; height:150px; max-width: 150px; max-height: 150px;border-radius: 100%;">

         <img class="fa fa-pencil edit-pen" src="https://www.jobolytics.com/uploads/edit1-pencil.png" alt="Update Profile" title="Click here for update Profile" data-toggle="modal" data-target="#avatar-modal" id="render-avatar"  data-ussuid="<?php print base64_encode(1);?>" data-backdrop="static" data-keyboard="false" data-upltype="avatar" >


        <!-- <i class="fa fa-pencil edit-pen"  style=" font-size: 20px;
    color: #bd2025;"></i> -->
    </div>



	<!-- <form  action="<?php echo site_url('employers/profile/editPicture')?>" method="post" enctype="multipart/form-data" >
      <?php if($emp_info['emp_img'] == ''){ ?>
      <a href="#" class="employer-dashboard-thumb"><img src="<?= base_url(); ?>assets/img/user.png" alt="User img" ></a>
       <?php } else { ?>
        <a href="#" class="employer-dashboard-thumb"><img src="<?= base_url(); ?><?php echo $emp_info['emp_img'];?>" alt="User img" / ></a>
      <?php } ?>
      <input id="fileupload" name="emp_img" type="file" style="margin-left: 20%;" required="">
      <span><input type="submit" name="update" value="Update" class="btn btn-info" style="margin-left: -2%; margin-top: 5%;
    	margin-bottom: 5%;"></span>
    </form> -->
		<figcaption>
			<h2 style="margin-top: 20px;"><?= $this->session->userdata('username'); ?></h2>
		</figcaption>
	</figure>
	<ul class="cat-list">
		<li>
			<a class="justify-content-between d-flex text_active" href="<?= base_url('employers/profile'); ?>"><p><i class="fa fa-user-o pr-2"></i> Personal Info</p></a>
		</li>
		<li>
			<a class="justify-content-between d-flex" href="<?= base_url('employers/company'); ?>"><p><i class="fa fa-user-o pr-2"></i>  Company Profile</p></a>
		</li>
		<li>
			<a class="justify-content-between d-flex" href="<?= base_url('employers/job/post'); ?>"><p><i class="fa fa-file-word-o pr-2"></i>  Post New Job</p></a>
		</li>
		<li>
			<a class="justify-content-between d-flex" href="<?= base_url('employers/job/listing'); ?>"><p><i class="fa fa-file-word-o pr-2"></i>  Manage Jobs</p></a>
		</li>
		<li>
			<a class="justify-content-between d-flex" href="<?= base_url('employers/cv/shortlisted') ?>"><p><i class="fa fa-briefcase pr-2"></i>  Shortlisted Resumes</p></a>
		</li>
		<li>
			<a class="justify-content-between d-flex" href="<?= base_url('employers/setting/change_password'); ?>"><p><i class="fa fa-lock pr-2"></i> Change Password</p></a>
		</li>
		<li>
			<a class="justify-content-between d-flex" href="<?= base_url('employers/auth/logout'); ?>"><p><i class="fa fa-sign-out pr-2"></i> Logout</p></a>
		</li>
	</ul>
</div>	

<?php
$this->load->view('themes/crop/company_img');
?>

<script>var baseurl = "<?php echo site_url(); ?>";</script>

<script type="text/javascript" src="<?= base_url(); ?>crop_assets/js/jquery.min.js"></script>
<script src="<?= base_url(); ?>crop_assets/js/jquery-ui.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>crop_assets/js/common.js"></script> 
<script type="text/javascript" src="https://techarise.com/demos/codeigniter/assets/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-filestyle/2.1.0/bootstrap-filestyle.js"></script>
<script src="<?= base_url(); ?>crop_assets/crop/js/cropper.js"></script> 
<script src="<?= base_url(); ?>crop_assets/crop/js/main.js"></script>