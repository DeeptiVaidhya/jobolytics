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
  </style>

  <div class="container-login100">
    <div class="wrap-login100">
      <span class="login100-form-title pb-4">
          Reset Password
      </span>
      <?php if(isset($msg) || validation_errors() !== ''): ?>
        <div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <?= validation_errors();?>
            <?= isset($msg)? $msg: ''; ?>
        </div>
      <?php endif; ?>

      <?php $attributes = array('id' => 'login_form', 'method' => 'post' , 'class' => 'login100-form validate-form');
        echo form_open(base_url('auth/reset_password/'.$reset_code), $attributes);?>

        <div class="wrap-input100 mb-3">
          <input class="input100" type="password" name="password" placeholder="Password">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <span class="lnr lnr-lock"></span>
          </span>
        </div>
        <div class="wrap-input100 mb-3">
          <input class="input100" type="password" name="confirm_password" placeholder="Confirm">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <span class="lnr lnr-lock"></span>
          </span>
        </div>
        <div class="container-login100-form-btn pt-2">
          <input type="submit" class="login100-form-btn" name="submit" value="Change Password" style="background: #bd2025 !important">
        </div>
      <?php echo form_close(); ?>

      <div class="text-center w-full pt-4">
          <span class="txt1">
            You Remember Password?
          </span>
          <a class="txt1 bo1 hov1" href="<?= base_url(); ?>auth/login">
            Login            
          </a>
      </div>
    </div>
  </div>
