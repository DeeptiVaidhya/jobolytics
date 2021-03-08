<style type="text/css">
  

  .single-fcat {
    text-align: center;
    border-radius: 3px;
    background-color: #f0f0f0;
    box-shadow: 0px 0px 40px 0px rgba(132, 144, 255, 0.2);
    padding: 20px 0;
    border: 1px solid transparent;
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
}

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
          Jobs By Category     
        </h1> 
        <p class="text-white link-nav"><a href="">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="">Jobs By Category</a></p>
      </div>                      
    </div>
  </div>
</section>
<!-- End banner Area -->

<section class="post-area section-gap">
  <div class="container" style="background-color: #fff;padding: 75px;">
    <div class="row">
      <?php foreach($categories as $category): ?>
      <div class="col-12 col-md-4 col-lg-3">
        <div class="box-item-single text-center">
          <h5 class="title"><a href="<?= base_url('jobs/category/'.get_category_slug($category['category_id'])); ?>"> <?= get_category_name($category['category_id']); ?></a></h5>
          <span class="count"><a href="<?= base_url('jobs/category/'.get_category_slug($category['category_id'])); ?>">(<?= $category['total_jobs']; ?>)</a></span>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
     