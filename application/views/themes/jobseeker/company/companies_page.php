<style type="text/css">
  
  .company-item-list img {
    max-height: 100px;
    max-width: 100%;
    height: 100px;
    object-fit: contain;
}


    .company-item-list {
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
          Top Companies     
        </h1> 
        <p class="text-white link-nav"><a href="">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="">Top Companies</a></p>
      </div>                      
    </div>
  </div>
</section>
<!-- End banner Area -->

<section class="post-area section-gap">
  <div class="container">
    <div class="row">
      <?php foreach($companies as $company): ?>
      <div class="col-lg-3 col-sm-6 col-12">
        <div class="company-item-list text-center">
          <a href="<?= base_url('company/'.$company['company_slug']); ?>"><img src="<?= base_url().$company['company_logo']; ?>" alt="company-img" /></a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
     