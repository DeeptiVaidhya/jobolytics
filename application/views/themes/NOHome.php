  <!-- start banner Area -->
  <section class="banner-area relative" id="home">  
    <div class="overlay overlay-bg"></div>
    <div class="container">
      <div class="row fullscreen d-flex align-items-center justify-content-center">
        <div class="banner-content col-lg-12">
          <h1 class="text-white">
            Over <span>10,000+</span> jobs are waiting for you      
          </h1> 
          <?php $attributes = array('id' => 'search_job', 'method' => 'post');
          echo form_open('jobs/search',$attributes);?>
          <div class="row justify-content-center form-wrap no-gutters">
            <div class="col-lg-6 form-cols" style="background-color: white;">
              <input type="text" class="form-control" name="job_title" placeholder="what are you looking for?">
            </div>
            <div class="col-lg-4 form-cols">
              <div class="default-select" id="default-selects">
              	<input id="searchTextField" class="form-control" type="text" size="50" placeholder="Enter a location" autocomplete="on" runat="server" />
                <!-- <select name="city">
                  <option value="">Select Location</option> -->
                  <?php //foreach($cities as $city):?>
                    <!-- <option value="<?= $city['id']?>"><?= $city['name']?></option> -->
                  <?php //endforeach; ?>
                <!-- </select> -->
              </div>
            </div>
            <div class="col-lg-2 form-cols">
              <input type="submit" name="search" class="btn btn-info" value="Search">
            </div>                
          </div>
          <?php echo form_close(); ?>
        </div>                      
      </div>
    </div>
  </section>
  <!-- End banner Area -->  

  <!-- Start feature-cat Area -->
  <section class="feature-cat-area section-full" id="category">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="menu-content pb-60 col-lg-10">
          <div class="title text-center">
            <h1 class="mb-10">Featured Job Categories</h1>
            <p>Who are in extremely love with eco friendly system.</p>
          </div>
        </div>
      </div>            
      <div class="row">
        <div class="col-lg-2 col-md-4 col-sm-6">
          <div class="single-fcat">
            <a href="<?= base_url('jobs/category/accounting'); ?>">
              <img src="<?= base_url(''); ?>assets/img/o1.png" alt="">
              <p>Accounting</p>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6">
          <div class="single-fcat">
            <a href="<?= base_url('jobs/category/construction'); ?>">
              <img src="<?= base_url(); ?>assets/img/o2.png" alt="">
              <p>Construction</p>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6">
          <div class="single-fcat">
            <a href="<?= base_url('jobs/category/information-technology'); ?>">
              <img src="<?= base_url(); ?>assets/img/o3.png" alt="">
              <p>Technology</p>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6">
          <div class="single-fcat">
            <a href="<?= base_url('jobs/category/sales'); ?>">
              <img src="<?= base_url(); ?>assets/img/o4.png" alt="">
              <p>Sales</p>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6">
          <div class="single-fcat">
            <a href="<?= base_url('jobs/category/medical-healthcare'); ?>">
              <img src="<?= base_url(); ?>assets/img/o5.png" alt="">
              <p>Medical</p>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6">
          <div class="single-fcat">
            <a href="<?= base_url('jobs/category/engineering'); ?>">
              <img src="<?= base_url(); ?>assets/img/o6.png" alt="">
              <p>Engineering</p>
            </a>
          </div>      
        </div>                                                      
      </div>
    </div>  
  </section>
  <!-- End feature-cat Area -->

  <!-- Start post Area -->
  <section class="post-area section-full bg-gray">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="menu-content pb-60 col-lg-10">
          <div class="title text-center">
            <h1 class="mb-10">Jobs Available</h1>
            <p>Who are in extremely love with eco friendly system.</p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center d-flex">
        <div class="col-lg-8 post-list">
          <?php foreach($jobs as $job): ?>
            <div class="single-post d-flex flex-row">
              <div class="thumb">
                <img src="<?= base_url(); ?>assets/img/job_icon.png" alt="">
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
                    <li><i class="lnr lnr-map-marker"></i> <?= get_city_name($job['city']); ?>, <?= get_country_name($job['country']); ?></li>
                    <li><i class="lnr lnr-apartment"></i> <?= get_industry_name($job['industry']); ?></li>
                    <li><i class="lnr lnr-clock"></i> <?= time_ago($job['created_date']); ?></li>
                  </ul>                 
                </div>
              </div>
              <div class="job-listing-btns">
                <ul class="btns">
                  <li><a href="<?= site_url('jobs/'.$job['id'].'/'.($job['job_slug'])); ?>">Apply</a></li>
                </ul>
              </div>
            </div>
          <?php endforeach; ?>

          <a class="text-uppercase loadmore-btn mx-auto d-block" href="<?= base_url('jobs'); ?>">Load More job Posts</a>
        </div>

        <div class="col-lg-4 sidebar">
          <div class="single-slidebar">
            <h4>Jobs by Location</h4>
            <ul class="cat-list">
              <?php foreach($cities_job as $city):?>
               <li><a class="justify-content-between d-flex" href="<?= base_url('jobs/location/'.get_city_slug($city['name'])); ?>"><p><?= get_city_name($city['name']); ?></p><span><?= $city['total_jobs']; ?></span></a></li>
             <?php endforeach; ?>
           </ul>
         </div>

         <div class="single-slidebar">
          <h4>Top rated job posts</h4>
          <div class="active-relatedjob-carusel">
            <?php foreach($jobs as $job): ?>
              <div class="single-rated">
                <img class="img-fluid" src="<?= base_url(); ?>assets/img/r1.jpg" alt="">
                <a href="<?= site_url('jobs/'.$job['id'].'/'.($job['job_slug'])); ?>"><h4><?= text_limit($job['job_title'], 35); ?></h4></a>
                <h6><?= $job['company_name']; ?></h6>
                <p>
                  <?= text_limit($job['description'], 100); ?>
                </p>
                <p class="address"><span class="lnr lnr-map"></span> <?= $job['job_type']; ?></h5>
                  <p class="address"><span class="lnr lnr-map-marker"></span>  <?= get_city_name($job['city']); ?>, <?= get_country_name($job['country']); ?></p>
                  <p class="address"><span class="lnr lnr-clock"></span> <?= time_ago($job['created_date']); ?></p>
                  <a href="<?= site_url('jobs/'.$job['id'].'/'.($job['job_slug'])); ?>" class="btns text-uppercase">Apply job</a>
                </div>
              <?php endforeach; ?>                                 
            </div>
          </div>              
        </div>
      </div>
    </div>  
  </section>
  <!-- End post Area -->

  <!-- Start Cities Area -->
  <section class="featured-cities-area section-full" id="Cities">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="menu-content pb-60 col-lg-10">
          <div class="title text-center">
            <h1 class="mb-10">Top Employers</h1>
            <p>Who are in extremely love with eco friendly system.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <?php foreach($companies as $company): ?>
          <div class="col-lg-3 col-sm-6 col-12">
            <div class="company-item-list text-center">
              <a href="<?= base_url('company/'.$company['company_slug']); ?>"><img src="<?= base_url().$company['company_logo']; ?>" alt="company-img" /></a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="col-12 post-list">
        <a class="text-uppercase loadmore-btn mx-auto d-block" href="<?= base_url('company'); ?>">Show All</a>
      </div>
    </div>
  </section>
  <!-- End cities Area -->


  <!-- Start call-to-action Area -->
  <section class="callto-action-area section-half" id="join">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="menu-content col-lg-9">
          <div class="title text-center">
            <h1 class="mb-10 text-white">Join us today without any hesitation</h1>
            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
            <a class="primary-btn" href="#">I am a Candidate</a>
            <a class="primary-btn" href="<?= base_url('auth/login'); ?>">Request Free Demo</a>
          </div>
        </div>
      </div>  
    </div>  
  </section>
  <!-- End call-to-action Area -->

  <!-- Start download Area -->
  <!-- <section class="download-area section-gap" id="app">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 download-left">
          <img class="img-fluid" src="<?= base_url(); ?>assets/img/d1.png" alt="">
        </div>
        <div class="col-lg-6 download-right">
          <h1>Download the <br>
          Job Listing App Today!</h1>
          <p class="subs">
            It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game, it has been achieving great heights so far as its popularity and technological advancement are concerned.
          </p>
          <div class="d-flex flex-row">
            <div class="buttons">
              <i class="fa fa-apple" aria-hidden="true"></i>
              <div class="desc">
                <a href="#">
                  <p>
                    <span>Available</span> <br>
                    on App Store
                  </p>
                </a>
              </div>
            </div>
            <div class="buttons">
              <i class="fa fa-android" aria-hidden="true"></i>
              <div class="desc">
                <a href="#">
                  <p>
                    <span>Available</span> <br>
                    on Play Store
                  </p>
                </a>
              </div>
            </div>                  
          </div>            
        </div>
      </div>
    </div>  
  </section> -->
  <!-- End download Area -->

  <!-- Start testimonial Area -->
  <section class="testimonial-area section-full">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="menu-content pb-60 col-lg-10">
          <div class="title text-center">
            <h1 class="mb-10">Testimonials</h1>
            <p>Who are in extremely love with eco friendly system.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 shdw pt-4 pb-4">
          <div id="testimonial-slider" class="owl-carousel">
            <div class="testimonial">
              <div class="pic">
                <img src="<?= base_url(); ?>assets/img/test-1.jpg" alt="">
              </div>
              <h3 class="testimonial-title">
                Williamson<small>, Client</small>
              </h3>
              <p class="description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam enim diam, tempus vel ultricies viverra, luctus in elit. Aliquam tempus blandit velit, in pharetra ex volutpat a. Cras eu augue ac nisl tempor commodo.
              </p>
            </div>

            <div class="testimonial">
              <div class="pic">
                <img src="<?= base_url(); ?>assets/img/test-2.jpg" alt="">
              </div>
              <h3 class="testimonial-title">
                Julia<small>, Client</small>
              </h3>
              <p class="description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam enim diam, tempus vel ultricies viverra, luctus in elit. Aliquam tempus blandit velit, in pharetra ex volutpat a. Cras eu augue ac nisl tempor commodo.
              </p>
            </div>

            <div class="testimonial">
              <div class="pic">
                <img src="<?= base_url(); ?>assets/img/test-3.jpg" alt="">
              </div>
              <h3 class="testimonial-title">
                kristiana<small>, Client</small>
              </h3>
              <p class="description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam enim diam, tempus vel ultricies viverra, luctus in elit. Aliquam tempus blandit velit, in pharetra ex volutpat a. Cras eu augue ac nisl tempor commodo.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End testimonial Area -->

  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABD_-9SQzs8Djf8nOUhvy4fVMBE5LksNI&libraries=places"></script>
    <script>
        function initialize() {
          var input = document.getElementById('searchTextField');
          var autocomplete = new google.maps.places.Autocomplete(input);
            google.maps.event.addListener(autocomplete, 'place_changed', function () {
                var place = autocomplete.getPlace();
                document.getElementById('city2').value = place.name;
            });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>


  