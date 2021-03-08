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
.job_detail_btn {
    background: #bd2025;
    color: #fff !important;
    padding: 6px 20px !important;
    text-transform: uppercase;
    border: 1px solid #bd2025;
}

</style>

<!-- start banner Area -->
<section class="banner-area relative" id="home">	
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					Post a New Job				
				</h1>	
				<p class="text-white link-nav"><a href="<?php echo base_url('employers')?>">Employer </a>  <span class="lnr lnr-arrow-right"></span>  <a href=""> Post a New Job</a></p>
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
				<div class="row">
					<div class="col-12">
						<?php 
							if ($this->session->flashdata('post_job_success')) {
				                echo '<div class="alert alert-success">' . $this->session->flashdata('post_job_success') . '</div>';
				            }
							if($this->session->flashdata('post_job_error')){
				                echo '<div class="alert alert-danger">' . $this->session->flashdata('post_job_error') . '</div>';
				        	}
						?>
					</div>


        			 <form  action="<?php echo site_url('employers/job/post');?>"  class="form_horizontal"  method="post"  id="post_job"   name="post_job"> 

					<div class="add_job_content col-lg-12">
						<div class="headline">
							<h3><i class="fa fa-folder-o"></i> Post a New Job</h3>
						</div>
						<div class="add_job_detail">
							<div class="row">
								<div class="col-12">
									<div class="submit-field">
										<h5>Job Title*</h5>
										<input type="text" name="job_title" class="form-control" title="Job Title is required!" placeholder="Enter Job Title" required id="inputTextBox" >
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="submit-field">
										<h5>Job Type*</h5>
										<select name="job_type" class="form-control" placeholder="Enter Job Type" title="Job Type is required!" required>
											<option>Select Job Type</option>
											<option value="full-time">Full Time</option>
											<option value="freelance">Freelance</option>
											<option value="part-time">Part Time</option>
											<option value="internship">Internship</option>
											<option value="temporary">Temporary</option>
										</select>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="submit-field">
										<h5>Job Category*</h5>
										<select class="form-control" name="category" title="Category is required!" required>
										   <option>Select Category</option>
										   <?php foreach($categories as $category): ?>
										   		<option value="<?= $category['id']?>"><?= $category['name']?></option>
										   <?php endforeach; ?>
										</select>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="submit-field">
										<h5>Job Industry*</h5>
										<select class="form-control" name="industry" title="Indusry is required!" required>
										   <option>Select Industry</option>
										   <?php foreach($industries as $industry):?>
										   		<option value="<?= $industry['id']?>"><?= $industry['name']?></option>
										   <?php endforeach; ?>
										</select>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="submit-field">
										<h5>Working Experience*</h5>
										<select class="form-control" name="experience"  title="Experience is required!" required>
											<option value="0-1">0-1 Years</option>
											<option value="1-2" >1-2 Years</option>
											<option value="2-5">2-5 Years</option>
											<option value="5-10">5-10 Years</option>
											<option value="10-15">10-15 Years</option>
											<option value="15+">15+ Years</option>
										</select>
									</div>
								</div>
								<div class="col-12">
									<div class="submit-field">
										<h5>Salary*</h5>
										<div class="row">
											<div class="col-md-4">
												<div class="input-group">
													<input name="min_salary" class="form-control salary" title="Salary is required!" placeholder="Enter Min Salary" required>&nbsp;<span clas="errmsg" id="errmsg"></span>
														<!-- <?php for($i=500; $i<10000; $i=$i+500): ?>
												   			<option value="<?= $i; ?>"><?= $i; ?></option>
													    <?php endfor; ?>
													</select> -->
													<!-- <div class="input-group-append">
														<span class="input-group-text">$</span>
													</div> -->
												</div>
											</div>
											<div class="col-md-4">
												<div class="input-group">
													<input name="max_salary" class="form-control salary" title="Salary is required!" placeholder="Enter Max Salary" required>&nbsp;<span clas="errmsg" id="errmsg"></span>
														<!-- <?php for($i=500; $i<10000; $i=$i+500): ?>
												   			<option value="<?= $i; ?>"><?= $i; ?></option>
													    <?php endfor; ?>
													</select> -->
													<!-- <div class="input-group-append">
														<span class="input-group-text">$</span>
													</div> -->
												</div>
											</div>

											<div class="col-md-4">
												<div class="input-group">
													<select class="form-control" name="currency" title="Currency is required!" required>
													   <option>Select Currency</option>
													   <?php foreach($currency as $cur):?>
													   		<option value="<?= $cur['code']?>"><?= $cur['code']?></option>
													   <?php endforeach; ?>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-12">
									<div class="submit-field">
										<h5> Skills*</h5>
										<input type="text" name="skills" class="form-control" placeholder="e.g. job title, responsibilites" title="Skills is required!" required>
									</div>
								</div>
								<div class="col-md-12 col-sm-12">
									<div class="submit-field">
										<h5>Job Description*</h5>
										<textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="5" title="Description is required!"  required></textarea>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="submit-field"> 
										<h5>Position Available*</h5>
										<select name="total_positions" class="form-control" title="Position is required!" required>	
									  	    <?php for($i=1; $i<30; $i++): ?>
									   			<option value="<?= $i; ?>"><?= $i; ?></option>
										    <?php endfor; ?>
										</select>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="submit-field"> 
										<h5>Gender Requirement*</h5>
										<select name="gender" class="form-control" title="Gender is required!" required>	
									   		<option value="Male">Male</option>
									   		<option value="Female">Female</option>
									   		<option value="No Preference" selected="">No Preference</option>
										</select>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="submit-field">
										<h5>Employment Type*</h5>
										<select class="form-control" name="employment_type" title="Type is required!" required>
											<option value="">Select Employment Type</option>
											<option value="employee">Employee</option>
											<option value="internship">Internship</option>
											<option value="contractor">Contractor</option>
											<option value="temporary-employee">Temporary Employee</option>
										</select>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="submit-field">
										<h5>Education*</h5>
										<select class="form-control" name="education" title="Education is required!" required>
											<option value="">Select Education</option>
											<?php foreach($educations as $row): ?>
												<option value="<?= $row['id']; ?>"> <?= $row['type']; ?></option>
											<?php endforeach; ?>
										</select>
									</div>
								</div>
								<!-- <div class="col-md-6 col-sm-12">
									<div class="submit-field">
										<h5>Country*</h5>
										<select class="form-control" name="country">
										   <option>Select Country</option>
										    <?php foreach($countries as $country):?>
										   		<option value="<?= $country['id']?>"><?= $country['name']?></option>
										    <?php endforeach; ?>
										</select>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="submit-field">
										<h5>City*</h5>
										<select class="form-control" name="city">
										   <option>Select City</option>
									  	    <?php foreach($cities as $city):?>
									   			<option value="<?= $city['id']?>"><?= $city['name']?></option>
										    <?php endforeach; ?>
										</select>
									</div>
								</div> -->
								<div class="col-12">
									<div class="submit-field default-select">
										<h5>Location*</h5>

										<input id="searchTextField" class="form-control" type="text" name="location" size="50" placeholder="Enter a location" autocomplete="on" runat="server" title="Location is required!" required/>
									</div>
								</div>
								<!-- <div class="col-12">
									<div class="submit-field">
										<h5>Location*</h5>
										<input type="text" name="location" class="form-control" placeholder="Type Address">
									</div>
								</div> -->
							</div>
						</div>
					</div>
					<div class="add_job_btn col-lg-12 mt-3">
						<div class="submit-field">
							<input type="submit" class="job_detail_btn" name="post_job" value="Submit">
						</div>
					</div>
				</form>
					<!-- <?php echo form_close(); ?> -->
				</div>													
			</div>

		</div>
	</div>	
</section>
<!-- End post Area -->

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



  <script src="<?php echo base_url('jquery_validation_plugin/dist/jquery.validate.js')?>"></script>
 <script type="text/javascript">
    $.validator.setDefaults({
        submitHandler: function() {    
        }
      });
    $(document).ready(function() {
        $("#post_job").validate({
          submitHandler:function(){
            // $("#update_user_form").submit();

            // $('.gif-loader').css('display','inline');

      post_job.submit();
        $('.gif-loader').css('display','inline');
             return true;
          }
        });

        $(".salary").keypress(function (e) {
		     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
		        //display error message
		        $(".errmsg").html("Digits Only").show().fadeOut("slow");
		               return false;
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