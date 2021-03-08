<style type="text/css">
  .box-item-single img {
    max-height: 100px;
    max-width: 100%;
    height: 100px;
    object-fit: contain;
}


.box-item-single {
  padding: 30px 20px;
  background-color: #fff;
  box-shadow: 0px 2px 5px #534d4d;
  height: 160px;

  margin-bottom: 30px;
  }


</style>

<!-- start banner Area -->
<section class="banner-area relative" id="home">  
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center">
      <div class="about-content col-lg-12">
        <h1 class="text-white">
          Jobs By Location     
        </h1> 
        <p class="text-white link-nav"><a href="">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="">Jobs By Location</a></p>
      </div>                      
    </div>
  </div>
</section>
<!-- End banner Area -->

<section class="post-area section-gap">
  <div class="container" style="background-color: #fff;padding: 75px;">
    <div class="row">

       <?php if(empty($location)): ?>


        <div class="col-md-12">
           <div class="col-md-4" style="float:left;"></div>
            <div class="col-md-4 " style="float:left;"> <h5 class="title"><strong>Sorry,</strong> Location Jobs Not Available</h5></div>
             <div class="col-md-4" style="float:left;"></div>
          
          </div>
          <?php endif; ?>

      <?php foreach($location as $city): ?>
        <?php
          $name = preg_replace('/\s+/', '_', $city['id']);
          $name = preg_replace('/[ ,]+/', '-', $name);
        ?>
      <div class="col-md-3">
        <div class="box-item-single text-center">
          <h5 class="title"><a href="<?= base_url('jobs/location/'.$name); ?>"><?= $city['id']; ?></a></h5>
          <span class="count"><a href="<?= base_url('jobs/location/'.$name); ?>">(<?= $city['total_jobs']; ?>)</a></span>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
     