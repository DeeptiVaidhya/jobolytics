
<link rel="stylesheet" href="<?= base_url(); ?>crop_assets/crop/css/cropper.css">
<link rel="stylesheet" href="<?= base_url(); ?>crop_assets/css/bootstrap/bootstrap-theme.min.css">
<link rel="stylesheet" href="<?= base_url(); ?>crop_assets/css/bootstrap/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="<?= base_url(); ?>crop_assets/css/jquery-ui.css">
<link rel="stylesheet" href="<?= base_url(); ?>crop_assets/css/jquery-ui-timepicker-addon.css"> 

<style type="text/css">
.employer-dashboard-thumb img {
   border-radius: 100%;
    height: 100%;
    width: 100%;
    margin-top: 3px;
}

 .edit-pen{
        /*position: absolute;*/
        color: #01579B;
        background: #fff;
        padding: 5px;
        box-shadow: 1px 1px 1px 1px #eee;
        border-radius: 17px;
        margin-left: -58px;
        margin-right: 25px;
        border: 1px solid #f1f1f1
        font-size: 20px;   
        margin-bottom: 20px;

}  

  img {
    vertical-align: inherit !important;
    border-style: none;
  }.avatar{
  position: relative;

  }

  

  .avatar{
  position: relative;

  }
}
</style>
<?php if ($this->session->flashdata('file_error')) {
    echo '<div class="alert alert-danger">' . $this->session->flashdata('file_error') . '</div>';
} ?>
 <div class="single-slidebar">
  <figure>
    <div class="avatar">
      <?php 
        $user_id   = $this->session->userdata('user_id');
        $info = $this->db->query('SELECT * FROM xx_users WHERE id ="'.$user_id.'" ' )->row_array();

        if(!empty($info['userimg'])) {
          $url = "https://www.jobolytics.com/".$info['userimg']."";
        } else {
          $url = 'https://www.jobolytics.com/assets/img/user.png';
        }
      ?>
        <img src="<?php print $url;?>" alt="Update Profile" title="Profile" data-toggle="modal" data-target="#avatar-modal" id="render-avatar" class="circular-fix has-shadow border marg-top10" data-ussuid="<?php print base64_encode(1);?>" data-backdrop="static" data-keyboard="false" data-upltype="avatar" style="width:150px; height:150px; max-width: 150px; max-height: 150px;border-radius: 100%;">
        <i class="fa fa-pencil edit-pen"  data-toggle="modal" data-target="#avatar-modal" id="render-avatar"  data-ussuid="<?php print base64_encode(1);?>" data-backdrop="static" data-keyboard="false" data-upltype="avatar" style=" font-size: 20px;
    color: #bd2025;"></i>
    </div>
   <!--  <form  action="<?php echo site_url('Profile/editPicture')?>" method="post" enctype="multipart/form-data" >
      <?php if($user_info['userimg'] == ''){ ?>
      <a href="#" class="employer-dashboard-thumb"><img src="<?= base_url(); ?>assets/img/user.png" alt="User img" ></a>
       <?php } else { ?>
        <a href="#" class="employer-dashboard-thumb"><img src="<?= base_url(); ?><?php echo $user_info['userimg'];?>" alt="User img" / ></a>
      <?php } ?>
      <input id="fileupload" name="userimg" type="file" style="margin-left: 20%;">
      <span><input type="submit" name="update" value="Update" class="btn btn-info" style="margin-left: -2%;margin-top: 5%;
    margin-bottom: 5%;"></span>
    </form> -->
    <figcaption>
      <h2><?= $user_info['firstname']  ?> <?= $user_info['lastname']  ?></h2>
      <span><?= $user_info['job_title']; ?></span>
    </figcaption>
  </figure>
  <ul class="cat-list">
    <li>
      <a class="text_active" href="<?= base_url('profile'); ?>"><p><i class="fa fa-user-o pr-2"></i> My Profile</p></a>
    </li>
    <li>
      <a class="" href="<?= base_url('myjobs'); ?>"><p><i class="fa fa-file-word-o pr-2"></i> My Applications</p></a>
    </li>
    <li>
      <a class="" href="<?= base_url('myjobs/matching'); ?>"><p><i class="fa fa-briefcase pr-2"></i> Matching jobs</p></a>
    </li>
    <li>
      <a class="" href="<?= base_url('setting/change_password'); ?>"><p><i class="fa fa-lock pr-2"></i> Change Password</p></a>
    </li>

    <li><a href="<?= base_url('resume/resume_tracking'); ?>"><p><i class="fa fa-map pr-2"></i> Resume Tracking</p></a></li>
    <li>
      <a class="" href="<?= base_url('auth/logout')?>"><p><i class="fa fa-sign-out pr-2"></i> Logout</p></a>
    </li>
  </ul>
</div> 

<?php
$this->load->view('themes/crop/profileAvatar');
?>

<script>var baseurl = "<?php echo site_url(); ?>";</script>

<script type="text/javascript" src="<?= base_url(); ?>crop_assets/js/jquery.min.js"></script>
<script src="<?= base_url(); ?>crop_assets/js/jquery-ui.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>crop_assets/js/common.js"></script> 
<script type="text/javascript" src="https://techarise.com/demos/codeigniter/assets/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-filestyle/2.1.0/bootstrap-filestyle.js"></script>
<script src="<?= base_url(); ?>crop_assets/crop/js/cropper.js"></script> 
<script src="<?= base_url(); ?>crop_assets/crop/js/main.js"></script>