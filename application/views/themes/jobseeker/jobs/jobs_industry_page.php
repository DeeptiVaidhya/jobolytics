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
          Jobs By Industry     
        </h1> 
        <p class="text-white link-nav"><a href="">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="">Jobs By Industry</a></p>
      </div>                      
    </div>
  </div>
</section>
<!-- End banner Area -->

<section class="post-area section-gap">
  <div class="container" style="background-color: #fff;padding: 75px;">
    <div class="row">

       <?php if(empty($industries)): ?>


        <div class="col-md-12">
           <div class="col-md-4" style="float:left;"></div>
            <div class="col-md-4 " style="float:left;"> <h5 class="title"><strong>Sorry,</strong> Industry Jobs Not Available</h5></div>
             <div class="col-md-4" style="float:left;"></div>
          
          </div>
          <?php endif; ?>

      <?php foreach($industries as $industry): ?>
      <div class="col-12 col-md-4 col-lg-3">
        <div class="box-item-single text-center">
          <h5 class="title"><a href="<?= base_url('jobs/industry/'.get_industry_slug($industry['industry_id'])); ?>"> <?= get_industry_name($industry['industry_id']); ?></a></h5>
          <span class="count"><a href="<?= base_url('jobs/industry/'.get_industry_slug($industry['industry_id'])); ?>">(<?= $industry['total_jobs']; ?>)</a></span>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
     