<style type="text/css">
  .copyright1 {
    padding-top: 16px;
    background-color: #35434f!important;
    padding-bottom: 16px;
  }
  i.fa.fa-facebook {
    font-size: x-large!important;
    color: #bd2025!important;
  }
  i.fa.fa-twitter {
    font-size: x-large!important;
    color: #bd2025!important;
  }
  i.fa.fa-dribbble {
    font-size: x-large!important;
    color: #bd2025!important;
  }
  i.fa.fa-behance {
    font-size: x-large!important;
    color: #bd2025!important;
  }
  .footer-area .footer-nav li a:hover {
    color: #bd2025!important;
  }
  .bottom_footer_info a {
    color:#fff!important;
  }
  .bottom_footer_info a:hover{
    color: #bd2025!important;
  }

  i.fa.fa-linkedin {
    font-size: x-large!important;
    color: #bd2025!important;
  }

  i.fa.fa-instagram {
    font-size: x-large!important;
    color: #bd2025!important;
  }

  .sub_sec {
    width: 28%;
  }

@media only screen and (max-width: 479px) and (min-width: 320px){
  .sub_email {
      width: 58%;
  }
}

.footer-area .footer-nav li a:hover {
    color: #bd2025;
}

.footer-area h6 {
    color: #fff;
    margin-bottom: 25px;
    font-size: 16px;
    font-weight: 600;
}



</style>
<!-- Footer area -->
<footer class="footer-area footer-section text-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-3  col-md-3 col-sm-3">
        <div class="single-footer-widget newsletter">
          <h6>About</h6>
          <ul class="footer-nav">
            <li><a href="<?= base_url('about'); ?>" target = "_blank">About Us</a></li>
            <li><a href="<?= base_url('contact'); ?>" target = "_blank">Contact Us</a></li>
            <li><a href="<?= base_url('career'); ?>" target = "_blank">Carrer with Us</a></li>
            <li><a href="<?= base_url('feedback'); ?>" target = "_blank">Send Feedback</a></li>
          </ul>
          <!-- <p>Lorem ipsum dolor sit amet, iudico dummy text 
          vituperatoribus at usu cum ex vituperatoribus at usu cum ex nostrud singulis.</p>
          <p>Lorem ipsum dolor sit amet, iudico dummy text 
          vituperatoribus at usu vituperatoribus.</p> -->
          <!-- <div id="mc_embed_signup">
            <form  action="#" method="get" class="form-inline">

              <div class="form-group row no-gutters">
                <div class="col-10">
                  <input name="" placeholder="Enter Email" type="email">
                </div> 
                <div class="col-2">
                  <button class="nw-btn primary-btn fa fa-paper-plane-o"></button>
                </div> 
              </div>    
            </form>
          </div>   -->  
        </div>
      </div>
      <div class="col-lg-3  col-md-3 col-sm-3">
        <div class="single-footer-widget">
          <h6>Legal</h6>
          <ul class="footer-nav">
            <li><a href="<?= base_url('besafe'); ?>" target = "_blank">Be Safe</a></li>
            <li><a href="<?= base_url('terms_of_use'); ?>" target = "_blank">Terms of use</a></li>
            <li><a href="<?= base_url('privacy'); ?>" target = "_blank">Privacy Policy</a></li>
            <li><a href="<?= base_url('security_center'); ?>" target = "_blank">Security & Fraud</a></li>
            
          </ul>
        </div>
      </div>




        <div class="col-lg-3  col-md-3 col-sm-3">
        <div class="single-footer-widget">
          <h6>Hot Links</h6>
          <ul class="footer-nav">

            <li><a target = "_blank" href="<?= base_url('employers'); ?>">Post a Job</a></li>
            <li><a href="<?= base_url('jobs-by-category'); ?>" target = "_blank">Job Category</a></li>
            <li><a href="<?= base_url('jobs-by-industry'); ?>" target = "_blank">Job Industry</a></li>
            <li><a href="<?= base_url('jobs-by-location'); ?>" target = "_blank">Job Location</a></li>
             <li><a href="<?= base_url('resume-builder-strategy'); ?>" target = "_blank">Resume Builder Strategy</a></li>
          </ul>
        </div>
      </div>
      <!-- <div class="col-lg-4  col-md-4 col-sm-6">
        <div class="single-footer-widget">
          <h6>Latest Posts</h6>
          <ul class="footer-nav">
            <li><a href="#">Our Blogs</a></li>
          </ul> -->
          <!-- <ul class="footer-nav">
            <li><a href="#"><i class="fa fa-minus pr-1"></i> If you need a crown or 
              lorem an implant <br> you will pay it gap </a>
              <p><small>July 2, 2018</small></p>
            </li>
            <li><a href="#"><i class="fa fa-minus pr-1"></i> If you need a crown or 
              lorem an implant<br> you will pay it gap </a>
              <p><small>Aug 9, 2018</small></p>
            </li>
            <li><a href="#"><i class="fa fa-minus pr-1"></i> If you need a crown or 
              lorem an implant<br> you will pay it gap </a>
              <p><small>Sep 20, 2018</small></p>
            </li>
          </ul> -->
        <!-- </div>
      </div> -->

      <div class="col-lg-3  col-md-3 col-sm-3">  
       <div id="successMessage" style="color: indianred;font-size: 18px;padding-bottom: 40px;"></div>                
        <div class="single-footer-widget mail-chimp">
          <h6 class="mb-20" style="margin-top: -32px;">Subscribe to our Newsletter</h6>

          <div class= "col-lg-10 sub_email" style="float: left;padding-right: 0px;">

             <input name="email" id="email"placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email" style="font-size: 12px;line-height: 18px;">
          </div>
          <div class= "col-lg-2 sub_sec" style="float: left;padding: 0;margin-left: -15px;"><input type="submit" name="submit" value="Subscribe" class="primary-btn mt-20 text-white" id="butsave" style="margin: 0px;padding-top: 4px;" /></div>

            
        </div>
        <div class="single-footer-widget mail-chimp" style="margin-top: 88px;">
          <h6 class="mb-20" style="margin-bottom: 15px !important;"> Follow Us</h6>
          <ul class="list-inline">
            <li class="list-inline-item"><a target = "_blank" href="https://www.facebook.com/Jobolytics-2051925195055407"><i class="fa fa-facebook"></i></a></li>
            <li class="list-inline-item"><a target = "_blank" href="https://twitter.com/jobolytics"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a target = "_blank" href="https://www.linkedin.com/company/jobolytics"><i class="fa fa-linkedin"></i></a></li>
            <li class="list-inline-item"><a target = "_blank" href="https://www.instagram.com/jobolytics"><i class=" fa fa-instagram "></i></a></li>
          </ul>
        </div>
      </div>
      
      
    </div>

    
  </div>
</footer>
<!-- End Footer Area -->

<!-- start Copyright Area -->
<div class="copyright1">
  <div class="container">
    <div class="row"> 
      <div class="col-md-12 col-12">
        <div class="bottom_footer_info text-center">
          <p style="color: #fff;font-size:18px;">Copyright &copy; 2020 by <a href="<?php echo base_url()?>">Jobolytics.</a> All rights reserved</p>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABD_-9SQzs8Djf8nOUhvy4fVMBE5LksNI&libraries=places"></script>
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
    </script> -->



   <script>
$(document).ready(function() {
  $('#butsave').on('click', function() {
    $("#successMessage").empty(); 
    var email = $('#email').val();
    if(email!=""){
      $.ajax({
        url: "https://www.jobolytics.com/subscribe_email",
        type: "POST",
        data: {
          email: email
        },
        success: function(dataResult){
          $("#successMessage").append(dataResult);
          // setTimeOut(function(){ 
          //   $("#successMessage").css('display', 'none');
          //   alert('hy');
          // }, 3000);          
        }
      });
    }
    else{
      $("#successMessage").append('Please enter email'); 
      // setTimeOut(function(){ 
      //       $("#successMessage").css('display', 'none');
      //     }, 3000);    
      //$("#successErr").show();
      //alert('Please fill email!');
    }
  });
});
</script>
