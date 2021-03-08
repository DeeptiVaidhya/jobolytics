	<style type="text/css">
.error{
    color:red;
    font-weight: 400;
    font-size: 15px;
        padding-top: 10px;
}
.select{
 color:black;
}

.gif-loader {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-color: rgba(0,0,0,0.5);
    display: flex;
    justify-content: center;
    align-items: center;
    display: none;
    z-index:1060;
}
.gif-loader__img {
    max-width: 150px;
    width: 100%;
    margin-top: 150px;
}
#errmsg
{
color: red;
}

.job_detail_btn {
    background: #bd2025;
    color: #fff !important;
    padding: 6px 20px !important;
    text-transform: uppercase;
    border: 1px solid #bd2025;
}
.ui-datepicker-month{
  float: left;
}
.ui-datepicker-year{
   float: left;
}
.ui-widget ui-widget-content ui-helper-clearfix ui-corner-all{
      position: absolute;
    top: 675px;
    left: 879.5px;
    z-index: 1;
    display: block;
    background: #c00000;
}

</style>

<div class="gif-loader" style="display:none;"> 
    <center>
        <img src="https://www.jainbandhutrust.com/assests/wait.gif" class="gif-loader__img" />
    </center>    
</div>
	<!-- start banner Area -->
	<section class="banner-area relative" id="home">	
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Company Profile				
					</h1>	
					<p class="text-white link-nav"><a href="<?php echo base_url('employers');?>">Employer </a>  <span class="lnr lnr-arrow-right"></span>  <a href=""> Company Profile</a></p>
				</div>											
			</div>
		</div>
	</section>
	<!-- End banner Area -->	

	<!-- Start post Area -->
	<section class="post-area section-gap">
		<div class="container">
			<div class="row justify-content-center d-flex">
				<div class="col-lg-4 sidebar">
					<?php $this->load->view($emp_sidebar); ?>					
				</div>

				<div class="col-lg-8 post-list">
					<?php
				        if ($this->session->flashdata('update_success')) {
				                echo '<div class="alert alert-success">' . $this->session->flashdata('update_success') . '</div>';
				            }
				        if($this->session->flashdata('error_update')){
				                echo '<div class="alert alert-danger col-md-8">' . $this->session->flashdata('error_update') . '</div>';
				          }
				    ?>
					 <!-- <?php $attributes = array('id' => 'update_employers_form', 'method' => 'post' , 'class' => 'form_horizontal'); ?>
    				<?php echo form_open('employers/profile',$attributes);?> -->

    				 <form  action="<?php echo site_url('employers/profile');?>"  class="form_horizontal"  method="post"  id="update_user_form"   name="update_user_form"> 

					<div class="profile_job_content col-lg-12">
						<div class="headline">
							<h3> Personal Info</h3>
						</div>
						<div class="profile_job_detail">
							<div class="row">
								<div class="col-md-6 col-sm-12">
				                    <div class="submit-field">
				                      <h5>First Name *</h5>
				                      <input class="form-control" type="text" name="firstname" value="<?= $emp_info['firstname']; ?>" placeholder="John Wick" title="First Name is required!" onkeypress="return (event.charCode > 64 &&  event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" required >
				                    </div>
				                  </div>
				                  <div class="col-md-6 col-sm-12">
				                    <div class="submit-field">
				                      <h5>Last Name *</h5>
				                      <input class="form-control" type="text" name="lastname" value="<?= $emp_info['lastname']; ?>" placeholder="John Wick" title="Last Name is required!" onkeypress="return (event.charCode > 64 &&  event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" required>
				                    </div>
				                  </div>
				                  <div class="col-md-6 col-sm-12">
				                    <div class="submit-field">
				                      <h5>Email *</h5>
				                      <input class="form-control" type="email" name="email" value="<?= $emp_info['email']; ?>" placeholder="example@example.com" title="Email is required!" required>
				                    </div>
				                  </div>
				                  <div class="col-md-6 col-sm-12">
				                    <div class="submit-field">
				                      <h5>Designation *</h5>
				                      <input class="form-control" type="text" name="designation" value="<?= $emp_info['designation']; ?>" placeholder="CEO" title="Designation is required!"  id="inputTextBox" required>
				                    </div>
				                  </div>
				                  <div class="col-md-6 col-sm-12">
				                    <div class="submit-field">
				                      <h5>Date of Birth *</h5><span id="dobError"  class="error"></span> 

				                        <input type="text"  class="form-control"  id="select_date" name="dob"  value="<?= $emp_info['dob']  ?>" title="DOB is required!" required  autocomplete="off">

				                     <!--  <input id="select_date" class="form-control" type="text" name="dob" value="<?= $emp_info['dob']  ?>" title="DOB is required!" required readonly="readonly"> -->

				                     <!--  <input   class="form-control datepicker minimumSize" type="text" name="dob" value="<?= $emp_info['dob']; ?>" title="DOB is required!" id="BirthDate" required readonly="readonly"> -->
				                    </div>
				                  </div>
				                  <div class="col-md-6 col-sm-12">
				                    <div class="submit-field">
				                      <h5>Mobile Number *</h5>

				                      <input class="form-control" type="tel" pattern="^\d{10}$"  name="mobile_no" value="<?= $emp_info['mobile_no']  ?>" placeholder="Mobile * " maxlength="12"  title="Mobile No is required!" required id="mobile_no">&nbsp;<span id="errmsg"></span>

				                    </div>
				                  </div>
				                  <!-- <div class="col-md-6 col-sm-12">
				                    <div class="submit-field">
				                      <h5>Country *</h5>
				                      <select name="country" class="form-control">
				                        <option>Select Country</option>
				                         <?php foreach($countries as $country):?>
				                            <?php if($emp_info['country'] == $country['id']): ?>
				                              <option value="<?= $country['id']; ?>" selected> <?= $country['name']; ?> </option>
				                            <?php else: ?>
				                              <option value="<?= $country['id']; ?>"> <?= $country['name']; ?> </option>
				                          <?php endif; endforeach; ?>
				                      </select>
				                    </div>
				                  </div>
				                  <div class="col-md-6 col-sm-12">
				                    <div class="submit-field">
				                      <h5>City *</h5>
				                      <select name="city" class="form-control">
				                        <option>Select City</option>
				                        <?php foreach($cities as $city):?>
				                            <?php if($emp_info['city'] == $city['id']): ?>
				                            <option value="<?= $city['id']; ?>" selected> <?= $city['name']; ?> </option>
				                          <?php else: ?>
				                            <option value="<?= $city['id']; ?>"> <?= $city['name']; ?> </option>
				                        <?php endif; endforeach; ?>
				                      </select>
				                    </div>
				                  </div> -->
				                  <div class="col-12">
									<div class="submit-field">
										<h5>Address *</h5>
										<input type="text" name="address" value="<?= $emp_info['address']; ?>" class="form-control" placeholder="Type Address" title="Address  is required!" required>
									</div>
								  </div>
				                  <div class="col-md-12 col-sm-12">
				                    <div class="submit-field">
				                      <h5>Description *</h5>
				                      <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Description" title="Description is required!"  required><?= $emp_info['description']; ?></textarea>
				                    </div>
				                  </div>
							</div>
						</div>
					</div>
					<div class="add_job_btn col-lg-12 mt-5">
						<div class="submit-field">
							<input type="submit" class="job_detail_btn" name="update" value="Update">
							<!-- <button type="submit"  id="btnSubmit" name="update" value="Submit" class="job_detail_btn">Submit</button> -->
						</div>
					</div>		
					</form>												
				</div>
			</div>
		</div>	
	</section>
<!-- 	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />
<script src="https://code.jquery.com/ui/1.10.0/jquery-ui.js"></script> -->


<script src="<?php echo base_url('jquery_validation_plugin/dist/jquery.validate.js')?>"></script>
 <script type="text/javascript">

 	 var maxBirthdayDate = new Date();
maxBirthdayDate.setFullYear( maxBirthdayDate.getFullYear() - 18,11,31);
$( "#select_date" ).datepicker({
    dateFormat: 'dd/mm/yy',
    changeMonth: true,
    changeYear: true,
    maxDate: maxBirthdayDate,
  yearRange: '1950:'+maxBirthdayDate.getFullYear(),
});


    $.validator.setDefaults({
        submitHandler: function() {    
        }
      });
    $(document).ready(function() {
        $("#update_user_form").validate({
          submitHandler:function(){
          	// $("#update_user_form").submit();

          	// $('.gif-loader').css('display','inline');

          	update_user_form.submit();
        $('.gif-loader').css('display','inline');
             return true;
          }
        });
      });

    $(document).ready(function () {
  //called when key is pressed in textbox
  $("#mobile_no").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsg").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });
});
    // $("#datepicker").datepicker( { minDate: '-80Y',dateFormat: 'dd/mm/yy', maxDate: '-18Y' });

// $(function() {
//     $( "#datepicker" ).datepicker({  maxDate: new Date() });

// });

 $(function() {
        //alert('fgdsdfdfg')
        $("#select_date").datepicker();
         $("#select_date").on('change', function(){
             
             var date = Date.parse($(this).val());

             if (date > Date.now()){
                  $('#dobError').html("Please select valid Date of birth");
                 $(this).val('');
             }
             
         });
    });

    $(document).ready(function(){
    $("#inputTextBox").keypress(function(event){
        var inputValue = event.charCode;
        if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)){
            event.preventDefault();
        }
    });
});


    


    </script>
