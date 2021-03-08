  <style type="text/css">    
    .label-checkbox100::before {   
      border: 2px solid #bd2025;
    }
    .hov1:hover {
      border-color: #bd2025;
    }
    .login100-form-btn:hover {
    background: #0b95ac;
    color: #fff !important;
    border: 1px solid #bd2025;
}

.login100-form-btn{
    background: #0b95ac;
    color: #fff !important;
    border: 1px solid #bd2025;
}

.input-checkbox100:checked + .label-checkbox100::before {
    color: #bd2025;
}


  </style>

  <div class="container-login100">
      <div class="wrap-login100">
        <?php $attributes = array('id' => 'registeration_form', 'method' => 'post',  'class' => 'login100-form validate-form'); ?>

        <?php echo form_open('auth/registration',$attributes); ?>
          <span class="login100-form-title pb-5">
            Sign Up
          </span>
           <?php 
              if($this->session->flashdata('validation_errors')){

                echo '<div class="alert alert-danger">' . $this->session->flashdata('validation_errors') . '</div>';
              }
              if ($this->session->flashdata('registration_success')) {

          echo  $this->session->flashdata('registration_success');
        }
          ?>


          <div class="wrap-input100 mb-3" data-validate = "Valid name is required: johnny">
            <input class="input100" type="text" name="firstname" placeholder="First Name" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <span class="lnr lnr-user"></span>
            </span>
          </div>

          <div class="wrap-input100 mb-3" data-validate = "Valid name is required: smith">
            <input class="input100" type="text" name="lastname" placeholder="Last Name" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <span class="lnr lnr-user"></span>
            </span>
          </div>

          <div class="wrap-input100 mb-3" data-validate = "Valid email is required: ex@abc.xyz">
            <input class="input100" type="text" name="email" placeholder="Email" required>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <span class="lnr lnr-envelope"></span>
            </span>
          </div>

          <div class="wrap-input100 mb-3" data-validate = "Password is required">
            <input class="input100" type="password" name="password" placeholder="Password">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <span class="lnr lnr-lock"></span>
            </span>
          </div>

          <div class="wrap-input100 mb-3" data-validate = "Password is required">
            <input class="input100" type="password" name="confirmpassword" placeholder="Confirm Password">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <span class="lnr lnr-lock"></span>
            </span>
          </div>

          <div class="contact100-form-checkbox pt-2 ml-1">
            <input class="input-checkbox100" id="ckb1" type="checkbox" name="termsncondition">
            <label class="label-checkbox100" for="ckb1">
              Terms & Conditions
            </label>
          </div>
          
          <div class="container-login100-form-btn pt-4">
            <input type="submit" class="login100-form-btn" name="submit" value="Sign Up" style="background: #bd2025 !important">
          </div>
        </form>

        <div class="text-center w-full pt-4">
            <span class="txt1">
              Already a member?
            </span>

            <a class="txt1 bo1 hov1" href="<?= base_url(); ?>auth/login" style="color: #bd2025;border-bottom: 1px solid #bd2025;">
              Sign in now             
            </a>
        </div>
      </div>
    </div>