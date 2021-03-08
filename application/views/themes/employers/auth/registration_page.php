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
.input-checkbox100:checked + .label-checkbox100::before {
    color: #bd2025;
}
  </style>
<!-- registration-section-starts -->
<div class="container-login100">
  <div class="wrap-login100" style="width: 650px;">
    <div class="container">
      <span class="login100-form-title pb-5">
       Sign up <small>(Employers)</small>
      </span>
      
      <div class="line-title-left"></div>
      <?php 
      if($this->session->flashdata('error')){
        echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
      }
      if ($this->session->flashdata('registration_success')) {

          echo  $this->session->flashdata('registration_success');
        }
      ?>


      <?php $attributes = array('id' => 'registeration_form', 'method' => 'post'); ?>
      <?php echo form_open('employers/auth/registration',$attributes); ?>
      <div class="row">
        <div class="col-lg-6">
          <div class="form-group">
            <label>First Name</label>
            <input type="text" name="firstname" class="form-control" placeholder="Enter your first name"   onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" required/>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="form-group">
            <label>Last Name</label>
            <input type="text" name="lastname" class="form-control" placeholder="Enter your last name"  onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)"  required/>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" placeholder="Enter your email" required />
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Enter your password" required/>
          </div>
        </div>
        <div class="col-lg-6">      
         <div class="form-group">
          <label>Confirm Password</label>
          <input type="password" name="confirmpassword" class="form-control" placeholder="Enter your password again"  required/>
        </div>
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-md-12">
        <h5>Company Information</h5>
        <hr />
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="form-group">
          <label>Company Name</label>
          <input type="text" name="company_name" class="form-control" placeholder="Enter Company Name"  required/>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label>Category</label>
          <select class="form-control" name="category" id="" required>
            <option value="">Select category</option>
            <?php foreach($categories as $category):?>
              <option value="<?= $category['id']?>"><?= $category['name']?></option>
            <?php endforeach; ?>
          </select>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label>Organization Type</label>
          <select class="form-control" name="org_type" id="org_type" required>
            <option value="Private">Private</option>
            <option value="Public">Public</option>
            <option value="Government">Government</option>
            <option value="NGO">NGO</option>
          </select>
        </div>
      </div>
    </div>
    <!-- <div class="row">
      <div class="col-lg-12">
        <div class="form-group">
          <label>Address</label>
          <input type="text" name="address" class="form-control" placeholder=""  required/>
        </div>
      </div>
    </div> -->
    
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label>Phone No.</label>
          <input type="number" name="phone_no" class="form-control" placeholder="Enter Phone Number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==12) return false;" required/>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label>Website</label>
          <input type="text" name="website" class="form-control" placeholder="Enter Websie" required>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="form-group">
          <label>Company Description.</label>
          <textarea name="description" class="form-control" placeholder="Enter Description" required></textarea>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="form-group">
          <label>Location</label>
          <input id="searchTextField" class="form-control" type="text" name="location" size="50" placeholder="Enter a location" autocomplete="on" runat="server" />
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="form-group">
          <input type="checkbox" name="termsncondition" required> Agree to our <small> Terms and Conditions</small>
        </div>
        <div class="form-group">
          <input type="submit" class="login100-form-btn btn-block" name="submit" value="Register" style="background: #bd2025 !important">
        </div>
      </div>
    </div>
    <?php echo form_close(); ?>
    <div class="text-center w-full pt-4">
          <span class="txt1">
            Already have an account?
          </span>
          <a class="txt1 bo1 hov1" href="<?= base_url(); ?>employers/auth/login" style="color: #bd2025;border-bottom: 1px solid #bd2025;">
            SignIn now             
          </a>
      </div>
  </div>  
</div>  
</div>


<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABD_-9SQzs8Djf8nOUhvy4fVMBE5LksNI&libraries=places"></script>
    <script>
        function initialize() {
          var input = document.getElementById('searchTextField');
          var options = {
            types: ['(cities)']
          };
          var autocomplete = new google.maps.places.Autocomplete(input, options);
          // var autocomplete = new google.maps.places.Autocomplete(input);
          //   google.maps.event.addListener(autocomplete, 'place_changed', function () {
          //       var place = autocomplete.getPlace();
          //       document.getElementById('city2').value = place.name;
          //   });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>



<!-- registration-section-Ends -->
