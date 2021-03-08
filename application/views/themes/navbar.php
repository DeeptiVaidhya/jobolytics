<style type="text/css">
  .nav-menu ul li:hover > a {
    color: #bd2025!important;
  }

  .nav_btn:hover {
    background: #bd2025;
    color: #fff !important;
    border: 1px solid #bd2025;
}

</style>
<!-- #header start -->
<header id="header">
  <div class="container">
    <div class="row align-items-center d-flex">
      <div class="col-2">
        <div id="logo">
          <a href="<?= base_url(); ?>">
            <img style="width:170px!important; height: auto!important; max-width:170px!important;" src="<?= base_url(); ?>assets/img/logo.png" alt="Jobolytics" title="Jobolytics" />
          </a>
        </div>
      </div>
      <div class="col-10">
        <nav id="nav-menu-container">
          <ul class="nav-menu">
            <?php if ($this->session->userdata('is_user_login')): ?>
              <li class=""><a href="<?= base_url('resume/builder'); ?>">Resume Builder</a>|</li>
              <li class="menu-has-children"><a href="">Find a Job</a>|
                <ul>
                  <li><a href="<?= base_url('jobs'); ?>">Search Job</a></li>
                  <li><a href="<?= base_url('jobs-by-category'); ?>">Jobs by Category</a></li>
                  <li><a href="<?= base_url('jobs-by-industry'); ?>">Jobs by Industry</a></li>
                  <li><a href="<?= base_url('jobs-by-location'); ?>">Jobs by Location</a></li>
                  <li><a href="<?= base_url('jobs'); ?>">Browse all Jobs</a></li>
                </ul>
              </li>
              <!-- <li class=""><a href="<?= base_url('about'); ?>">About</a>|</li> -->
              <li class=""><a href="<?= base_url('company'); ?>">Companies</a></li> 
              <!-- <li><a href="<?= base_url('employers') ?>"> For Employers</a> --> 
              </li>  

              <?php 

                $user_id   = $this->session->userdata('user_id');

                $user_info = $this->db->query("SELECT * FROM xx_users WHERE id ='".$user_id."'   ")->row_array();

              ?>

              <li class="menu-has-children margin-left-400">

              <?php if($user_info['userimg'] == ''){ ?>

              <span style=" vertical-align: middle;"><img src="<?= base_url()?>assets/img/user.png" alt="user_img" style=" width: 35px;

                " /></span>
              <?php } else { ?>

              <span style=" vertical-align: middle;"><img src="<?= base_url(); ?><?php echo $user_info['userimg'];?>" alt="user_img" style="border-radius: 100%; width: 35px;"></span>
               <?php } ?>


                <!-- <img src="<?= base_url()?>assets/img/user.png" alt="user_img" height=35 /> -->


                <a href="#"> <?= $this->session->userdata('username'); ?> </a>
                <ul>


                  <li><a href="<?= base_url('profile'); ?>">My Profile</a></li>
                  <li><a href="<?= base_url('myjobs'); ?>">My Applications</a></li>
                  <li><a href="<?= base_url('myjobs/matching'); ?>">Matching Jobs</a></li>
                  <li><a href="<?= base_url('setting/change_password'); ?>">Change Password</a></li>
                  <li><a href="<?= base_url('resume/resume_tracking'); ?>">Resume Tracking</a></li>
                  <li><a href="<?= base_url('auth/logout')?>">LogOut</a></li>
                </ul>
              </li>   
            <?php elseif ($this->session->userdata('is_employer_login')): ?> 
            <li><a href="<?= base_url('employers/profile') ?>"> Dashboard</a>|
            <li><a href="<?= base_url('employers/job/listing') ?>"> Manage Jobs</a>|
            <li><a href="<?= base_url('employers/cv/search') ?>"> CV Search</a>|
            <li><a href="<?= base_url('employers/job/post') ?>"> Post a Job</a> 
            </li>

           
         

            <li class="menu-has-children margin-left-400">

              <?php 

                $employer_id   = $this->session->userdata('employer_id');

                
                $emp_info = $this->db->query("SELECT * FROM xx_employers WHERE id ='".$employer_id."' ")->row_array();

              ?>
              

              <?php if($emp_info['emp_img'] == ''){ ?>

              <span style=" vertical-align: middle;"><img src="<?= base_url()?>assets/img/user.png" alt="emp_img" style="width: 35px;"></span>              <?php } else { ?>

             <span style=" vertical-align: middle;"> <img src="<?= base_url(); ?>/<?php echo $emp_info['emp_img'];?>" alt="emp_img"  height=35  style="border-radius: 100%;width: 35px;"></span>
               <?php } ?>

              <a href="#"> <?= $this->session->userdata('username'); ?> </a>
                <ul>
                  <li><a href="<?= base_url('employers/profile') ?>">Dashboard</a></li>
                  <li><a href="<?= base_url('employers/job/listing') ?>">Manage Jobs</a></li>
                  <li><a href="<?= base_url('employers/setting/change_password'); ?>">Change Password</a></li>
                <li><a href="<?= base_url('employers/auth/logout')?>">LogOut</a></li>
                </ul>
              </li>   
            <?php else: ?> 
            <!-- <li class=""><a href="<?= base_url(); ?>">Home</a>|</li> -->
            <li class=""><a href="<?= base_url('resume/builder'); ?>">Resume Builder</a>|</li>
            <li class="menu-has-children"><a href="">Find a Job</a>|
              <ul>
                <li><a href="<?= base_url('jobs'); ?>">Search Job</a></li>
                <li><a href="<?= base_url('jobs-by-category'); ?>">Jobs by Category</a></li>
                <li><a href="<?= base_url('jobs-by-industry'); ?>">Jobs by Industry</a></li>
                <li><a href="<?= base_url('jobs-by-location'); ?>">Jobs by Location</a></li>
                <li><a href="<?= base_url('jobs'); ?>">Browse all Jobs</a></li>
              </ul>
            </li>
            <!-- <li class=""><a href="<?= base_url('about'); ?>">About</a>|</li> -->
            <li class=""><a href="<?= base_url('company'); ?>">Companies</a></li> 
            <li><a class="ticker-btn-nav btn_login mt-1" href="<?= base_url('auth/login') ?>"><i class="lnr lnr-user pr-1"></i> JobSeeker</a></li>
            <!-- <li><a class="nav_btn mt-1" href="<?= base_url('employers') ?>"><i class="lnr lnr-briefcase pr-1"></i> For Employers</a> </li> --> 
            <li><a class="nav_btn mt-1" href="<?= base_url('employers/auth/login') ?>"><i class="lnr lnr-briefcase pr-1"></i> For Employers</a> </li>
            <?php endif; ?>                                 
          </ul>
        </nav><!-- #nav-menu-container -->      
      </div>      
    </div>
  </div>
</header><!-- #header End-->