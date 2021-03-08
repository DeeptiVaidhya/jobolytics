
<style type="text/css">
  .wrap-login100{
    width: 50% !important;
  }
  .modal-header{
    display: table !important;
  }
  #ajax_form_error{
    color:red;
  }
  .alert{
        margin-top: 45px;
  }

</style>
<div class="container-login100">
   <div class="row">
    <div class="col-md-2"> 
       
        </div>
    <div class="col-md-8" style="background-color:#ffffffe3;">

      <?php 
          if ($this->session->flashdata('success')) {
                    echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
                }
          if($this->session->flashdata('file_error')){
                    echo '<div class="alert alert-danger">' . $this->session->flashdata('file_error') . '</div>';
              }
        ?>
      <h2 class="text-center" style="padding-top:15px;">Term & Condition</h2><br>
      <h4 style="text-align: center;">Within <?php echo $result[0]->duration?> Hours</h4><br>
     
    <p style="text-align: justify;">
     Jobolytics create career portfolio documents that will market your skills and skills are based upon information that we receive from the client. We are your partners in career search success, and that we take our role seriously and thus only produce the very best quality marketing tools and documents.
    </p><br>
    <p style="text-align: justify;">If your new resume doesn’t end in an interview opportunity in 60 days then we'll revise the resume for you without costs. you want to notify us with a replica of the resume alongside a canopy letter written by us or approved to be used together with your resume. don't change any of the resume content. Any contact from a possible recruiter, an employer, or HR agency is considered interest and a call for participation for an interview. The contact is often either by telephone, e-mail, or other correspondence.</p>

     <center>
<?php 
  // if(isset($_SESSION['coupon_id'])){ 

  // $coupon_id = $this->session->userdata('coupon_id');
  // $discount = $this->session->userdata('discount');
  ?>

<!--   <p id="price_value" style="font-size: 20px;text-align: center; height: 60px;width: 60px;line-height: 60px;border-radius: 50%;background-color: #bd2025;color: white;">$<?php echo $discount;?></p>
 -->
  <?php // }else{?>
       <p id="price_value" style="font-size: 25px;text-align: center; height: 60px;width: 60px;line-height: 60px;border-radius: 50%;background-color: #bd2025;color: white;">$<?php echo $result[0]->price;?></p>

       <p id="price_value1" style="font-size: 25px;text-align: center; height: 60px;width: 60px;line-height: 60px;border-radius: 50%;background-color: #bd2025;color: white;display: none;"></p>
   <?php // } ?>

  

    
<div id="successMessage" style="color: indianred;font-size: 18px;padding-bottom: 12px;font-size: 13px;"></div>
    

   <fieldset class="answer">
    <input type="hidden" name="price" id="price" value="<?php echo $result[0]->price;?>">
       <input  type="text" name="coupon_field" id="coupon_field" placeholder="Enter Coupon Code" style="padding: 8px;box-shadow: 0 1px 8px #9e9898;"/>
       <button  type="submit" class="ticker-btn-nav btn_login mt-1" name="apply" id="applyCoupon">Apply</button>
   </fieldset> 
    </center>

    <div class="text-center" style="padding-bottom: 20px;padding-top: 18px;">
      <?php if(isset($_SESSION['user_id'])){  
      $user_id = $this->session->userdata('user_id');
      $id = $this->uri->segment(3);

      if(isset($_SESSION['coupon_id'])){  
         $coupon_id = $this->session->userdata('coupon_id');

         $price = $this->session->userdata('discount');
      }else{
         $coupon_id = 0;
         $price = $result[0]->price;
      }
      
      ?>

      <a href="<?php echo site_url('resume/request_resume/'); ?><?php echo $price; ?>/<?php echo $id; ?>" class="ticker-btn-nav btn_login mt-1" >Resume Request</a>

       <!-- <a href="<?php echo site_url('Products/buy/'); ?><?php echo $result[0]->price; ?>" class="ticker-btn-nav btn_login mt-1" >PayNow</a>  -->
    <?php }

    else{?>
      <!-- <button data-toggle="modal"  data-target="#myModal" class="ticker-btn-nav btn_login mt-1" >Resume Request</button> -->
          
      <?php }?>
     </div>
     <center>
     <?php
    if (!empty($_SESSION['user_id'])) {?>
      <fieldset class="question">
       <!--   <label for="coupon_question" style="font-weight: 600;">Do you have a coupon?</label>
         <input class="coupon_question" type="checkbox" name="coupon_question" value="1" /> -->
         <!-- <span class="item-text">Yes</span> -->
     </fieldset>
    <?php }else{ ?>
        <fieldset class="question">
           <label for="coupon_question">For process your resume request, please <a href=""  data-toggle="modal"  data-target="#myModal" class="ticker-btn-nav mt-1" style="padding: 0!important;"><u style="color: #673AB7;font-size: 15px; font-weight: 700;">Click here</u></a></label>
       </fieldset>
    <?php } ?>
  </center>
  <br/>
   </div>
   <div class="col-md-2"></div>
   </div>  
</div>

<?php 
$id = $this->uri->segment(3);?>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title">SIGN IN</h4>
      </div>
      <div class="modal-body">
        <form id="login_form1" class="login100-form validate-form" accept-charset="utf-8">      
        <div class="wrap-input100 validate-input mb-3" data-validate="Valid email is required: ex@abc.xyz">
          <input class="input100" id="email_value" type="text" name="email" placeholder="Email">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <span class="lnr lnr-envelope"></span>
          </span>
        </div>

        <div class="wrap-input100 validate-input mb-3" data-validate="Password is required">
          <input class="input100" id="pass_value" type="password" name="password" placeholder="Password">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <span class="lnr lnr-lock"></span>
          </span>
        </div>

        <div class="contact100-form-checkbox pt-2 ml-1">
          <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
          <label class="label-checkbox100" for="ckb1">
            Remember me
          </label>
        </div>

        <input type="hidden"  value= "<?php echo $result[0]->price; ?>" name="pcg_price" id = "pcg_price" >

        <input type="hidden"  value= "<?php echo $id ?>" name="id" id="id" >
        
        <div class="container-login100-form-btn pt-4">
          <button id="submit_form" type="button" class="login100-form-btn text-center" name="login">Login</button>
        </div>
        <div class="container-login100-form-btn pt-4 text-center">
          <span id="ajax_form_error"></span>
        </div>
      </form>
      <div class="text-center w-full pt-4">
          <a class="txt1 bo1 hov1" href="<?= base_url(); ?>auth/forgot_password">
            Forgot Password?            
          </a>
      </div>
      <div class="text-center w-full pt-3">
          <span class="txt1">
            Don't have an account?
          </span>
          <a class="txt1 bo1 hov1" href="<?= base_url(); ?>auth/registration">
            Sign up now             
          </a>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

   <script>
$(document).ready(function() {
  $('#applyCoupon').on('click', function() {
    $("#successMessage").empty(); 
    var coupon_field = $('#coupon_field').val();

    var price = $('#price').val();
    if(coupon_field!=""){
      $.ajax({
        url: "<?php echo base_url();?>/resume/coupon_apply",
        type: "POST",
        data: {
          coupon_field: coupon_field,
          price: price
        },
        success: function(dataResult){
          var info = JSON.parse(dataResult);
          // console.log(info.message)
          if (info.coupon_data != '') {
            $("#price_value").hide();
            $("#price_value1").show();
            $("#price_value1").append('$'+info.coupon_data.discount);
            $("#successMessage").append(info.message);
          }else{
            $("#successMessage").append(info.message);
          }
          
        }
      });
    }
    else{
      $("#successMessage").append('Please enter Code'); 
    }
  });
});


// $(".answer").hide();
// $(".coupon_question").click(function() {
//     if($(this).is(":checked")) {
//         $(".answer").show();
//     } else {
//         $(".answer").hide();
//     }
// });

</script>


<script>
function refreshPage(){
    window.location.reload();
} 
</script>
 