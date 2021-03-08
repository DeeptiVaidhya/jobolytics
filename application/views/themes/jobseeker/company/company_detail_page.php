
<section class="banner-area relative" id="home">  
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center">
      <div class="about-content col-lg-12">
        <h1 class="text-white">
          Employer's List Detail       
        </h1> 
        <p class="text-white link-nav"><a href="<?= base_url(); ?>">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href=""> Employer's List Detail</a></p>
      </div>                      
    </div>
  </div>
</section>
<!-- End banner Area -->  

<!-- Start post Area -->
<section class="post-area section-gap">
  <div class="container">
    <div class="row justify-content-center d-flex">
      <div class="col-lg-10 list_banner">
        <div class="justify-content-between d-flex flex-row">
          <div class="emp_details">
            <div class="title d-flex flex-row justify-content-between mt-2">
              <div class="titles">
                <a href=""><h2 class="mb-2"><?= $company_info['company_name']; ?></h2></a>       
              </div>
            </div>
            <div class="job-listing-footer">
              <ul class="mb-3">
                <li><i class="lnr lnr-apartment"></i> <?= get_category_name($company_info['category']); ?></li>
                <li><i class="lnr lnr-map-marker"></i> <?= $company_info['location']; ?></li>
                <!-- <li><i class="lnr lnr-map-marker"></i> <?= $company_info['address']; ?></li> -->
              </ul>
              <!--<ul>
                <li><a class="ticker-btn mb-3" href="#">Follow</a></li>
                <li><a class="ticker-btn mb-3" href="#">Add a review</a></li>
              </ul>-->                   
            </div>
          </div>
          <div class="emp_logo">
            <img src="<?= base_url().$company_info['company_logo']?>" alt="company_logo" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center d-flex">
      <div class="col-lg-10 post-list">
        <div class="profile_job_content">
          <div class="headline">
            <h3> Company Overview</h3>
          </div>
          <div class="profile_job_detail">
            <div class="row">
              <div class="col-md-12 col-sm-12 mt-3">
                <div class="submit-field">
                  <p style="overflow-wrap: anywhere;"><?= $company_info['description']; ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="profile_job_content col-lg-12 mt-5">
          <div class="headline">
            <h3> Jobs Opening</h3>
          </div>
          <div class="profile_job_detail">
            <div class="row">
              <div class="col-lg-12">
                <?php if(empty($jobs)): ?>
                  <p class="text-gray"><strong>Sorry,</strong> there is no job opening at the moment</p>
                <?php endif; ?>
              </div>
              <div class="col-lg-12 post-list">
                <?php foreach($jobs as $job): ?>
                <div class="single-post d-flex flex-row">
                 <?php 
                    $id   = $job['company_id'];

                    $info = $this->db->query('SELECT * FROM xx_companies WHERE id ="'.$id.'" ' )->row_array();
                    if(!empty($info['company_logo'])) {
                      $url = "https://www.jobolytics.com/".$info['company_logo']."";
                    } else {
                      $url = "https://www.jobolytics.com/".$info['company_logo']."";
                    }
                ?>
                  <div class="thumb">
                     <img src="<?php echo $url;?>" alt="Jobolytics jobs" title="Jobolytics jobs" height="70" width="70" style=" width: 100px;height: 100px;max-width: 100px;max-height: 100px;border-radius: 100%;">
                  </div>
                  <div class="details">
                    <div class="title d-flex flex-row justify-content-between">
                      <div class="titles">
                        <a href="<?= site_url('jobs/'.$job['id'].'/'.($job['job_slug'])); ?>"><h4><?= text_limit($job['job_title'], 35); ?></h4></a>
                        <h6><?= $job['company_name']; ?></h6>         
                      </div>
                      
                    </div>
                    <div class="job-listing-footer">
                      <ul>
                        <li><i class="lnr lnr-map-marker"></i> <?= $job['location']; ?></li>
                        <li><i class="lnr lnr-briefcase"></i> <?= $job['job_type']; ?></li>
                        <li><i class="lnr lnr-apartment"></i> <?= get_industry_name($job['industry']); ?></li>
                        <li><i class="lnr lnr-clock"></i> <?= time_ago($job['created_date']); ?></li>
                      </ul>                 
                    </div>
                  </div>
                  <div class="job-listing-btns">
                    <ul class="btns">
                      <!-- <li><a href="#"><span class="lnr lnr-heart"></span></a></li> -->
                      <li><a href="<?= site_url('jobs/'.$job['id'].'/'.($job['job_slug'])); ?>">Apply</a></li>
                    </ul>
                  </div>
                </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>  
  </div>
</section>
      <!-- End post Area