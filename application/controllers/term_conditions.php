
<style type="text/css">
  .wrap-login100{
    width: 50% !important;
  }
</style>
<div class="container-login100">
   <div class="wrap-login100">
    <div class="text-center">
      <h2>Term & Condition</h2><br>
      <h4>With in <?php echo $result[0]->duration?> Hours</h4><br>
    
    </div>  
    <p style="text-align: justify;">
      Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.
    </p><br>
    <center>
      <p style="font-size: 30px;text-align: center;height: 60px;width: 60px;line-height: 60px;border-radius: 50%;background-color: #adff2f;">$<?php echo $result[0]->price;?>
      </p>
    </center>

    

    <div class="container-login100-form-btn pt-4">
       <!--  <input type="submit" class="btn btn-success" name="submit" value="PayNow"> -->
       <?php
            if(isset($_SESSION['user_id']))
            {   ?>
                <a href="<?php echo site_url('Products/buy/'); ?><?php echo $result[0]->price; ?>" class="ticker-btn-nav btn_login mt-1" >PayNow</a>
            <?php }
            else
            {   ?>
                <a  data-toggle="modal" data-target="#myModal" class="ticker-btn-nav btn_login mt-1" >PayNow</a>
            <?php }
        ?>
        
     </div>
   </div>  
</div>


<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title">SIGN IN</h4>
      </div>
      <div class="modal-body">
        <form id="login_form1" method="post" class="login100-form validate-form" accept-charset="utf-8">      
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
        
        <div class="container-login100-form-btn pt-4">
          <input id="submit_form" type="submit" class="login100-form-btn" name="login" value="LogIn">
        </div>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

 