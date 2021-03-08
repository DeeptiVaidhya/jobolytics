<style type="text/css">
	
	.disable{
		text-transform: uppercase;
    font-weight: 500;
    color: #222;
    padding: 10px 20px;
    background: #bd2025;
    color: white;
    border-radius: 3px;
	}
	.disable {
  cursor: not-allowed;
  opacity: 0.5;
}
.disable > a {
  color: currentColor;
  display: inline-block;  /* For IE11/ MS Edge bug */
  pointer-events: none;
  text-decoration: none;
}



</style>

<!-- start banner Area -->
<section class="banner-area relative" id="home">	
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					Job Details				
				</h1>	
				<p class="text-white link-nav"><a href="<?= base_url(); ?>">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href=""> Job Details</a></p>
			</div>											
		</div>
	</div>
</section>
<!-- End banner Area -->	

<!-- Start post Area -->
<section class="post-area section-gap">
	<div class="container">
		<div class="row d-flex">
			<div class="col-lg-8 col-12">
				<?php if($this->session->flashdata('applied_success')): ?>
		          <div class="alert alert-success">
		            <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
		            <?=$this->session->flashdata('applied_success')?>
		          </div>
		        <?php  endif; ?>
		        <?php if($already_applied == true && $this->session->flashdata('applied_success') == null): ?>
		          <div class="alert alert-success " >
		            <a href="#" class="close " data-dismiss="alert" aria-label="close" title="close">×</a>
		            You have already applied for this application
		          </div>
		        <?php  endif; ?>
		        <?php if($this->session->flashdata('validation_errors')): ?>
		         <div class="alert alert-danger">
		          <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
		          <?= $this->session->flashdata('validation_errors') ?>
		        </div>
		      <?php endif; ?>
			</div>
			<div class="col-lg-8 post-list">
				<div class="single-post d-flex flex-row">
					<div class="details col-12">
						<div class="title d-flex flex-row justify-content-between mb-2">
							<div class="titles">
								<a href="#"><h4><?= $job_detail['job_title']; ?></h4></a>
								<h6><?= $job_detail['company_name']; ?></h6>					
							</div>

							<?php if($already_applied == true && $this->session->flashdata('applied_success') == null) {?>
					         <ul class="btns">
								<li>

									<!-- <input type="text" class="disable" Value="Apply" disabled > -->

									<a id="btn-apply" class="disable" data-toggle="collapse" href="#collapseExample" role="button" disabled>Apply</a>

								</li>
							</ul>
					        <?php  }else{ ?>
					        	 <ul class="btns">
								<li><a id="btn-apply" data-toggle="collapse" href="#collapseExample" role="button" >Apply</a></li>
							</ul>
						<?php } ?>


							
						</div>
						<hr/>
						<p class="address">
							<strong>Industry:</strong> <?= get_industry_name($job_detail['industry']); ?>
						</p>
						<p class="address">
							<strong>Total Positions:</strong> <?= $job_detail['total_positions']; ?>
						</p>
						<p class="address">
							<strong>Job Type:</strong> <?= $job_detail['job_type']; ?>
						</p>
						<p class="address">
							<strong>Salary:</strong> <?= $job_detail['min_salary']; ?> - <?= $job_detail['max_salary']; ?> <?= $job_detail['currency']; ?>
						</p>
						<p class="address">
							<strong>Education:</strong> <?= get_education_level($job_detail['education']); ?>
						</p>
						<p class="address">
							<strong>Location:</strong> <?= $job_detail['location']; ?>
						</p>
						<p class="description">
							<?= $job_detail['description']; ?>
						</p>
						<?php  $skills = explode("," , $job_detail['skills']);?>
						<ul class="tags">
							<?php foreach($skills as $skill): ?>
							<li>
								<a href="#"><?= $skill; ?></a>
							</li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>	
				<div id="apply-block">
					<div class="collapse" id="collapseExample">
						<div class="card card-body">
							<h4 class="card-title">Apply for this job</h4>


						    <!-- <?php $attributes = array('id' => 'job-form', 'method' => 'post');
		        			echo form_open(base_url('jobs/apply_job'),$attributes);
		        			?>	 -->

		        			<form  action="<?php echo site_url('jobs/apply_job');?>"  class="form_horizontal"  method="post"  id="job-form"   name="update_user_form"> 
						      	<div class="form-group">
							       <textarea name="cover_letter" class="form-control" rows="5" placeholder="Your message / cover letter sent to the employer"></textarea>
							    </div> 

							    <!-- Hidden Inputs -->
							    <input type="hidden" name="username" value="<?= $user_detail['firstname']; ?>">
							    <input type="hidden" name="email" value="<?= $user_detail['email']; ?>" >
							    <input type="hidden" name="job_id" value="<?= $job_detail['id']; ?>" >
							    <input type="hidden" name="emp_id" value="<?= $job_detail['employer_id']; ?>" >
							    <input type="hidden" name="job_title" value="<?= $job_detail['job_title']; ?>" >
							    <!-- current url for redirect to same job detail page  -->
							    <input type="hidden" name="job_actual_link" value="<?= $job_actual_link ?>" >
								
								<?php
								    $last_request_page = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
								    $this->session->set_userdata('last_request_page', $last_request_page); 
								 ?>

								<?php if($this->session->userdata('is_user_login') == true): ?>
								    <button type="submit" name="submit" value="submit" class="btn btn-primary btn-block" id= "send_app" >Send Application</button>

								<?php elseif($this->session->userdata('is_employer_login') == true): ?>
								    <a href="<?= base_url('auth/login'); ?>" class="btn btn-primary btn-block">Please login as JobSeeker</a>
								<?php else: ?>
								    <a href="<?= base_url('auth/login'); ?>" class="btn btn-primary btn-block">Please login as JobSeeker</a> 
								<?php endif; ?>  

							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 sidebar">
				<div class="single-slidebar">
		            <h4>Jobs by Location</h4>
		            <ul class="cat-list">
		              <?php foreach($cities_job as $city):?>
		                <?php
		                $name = preg_replace('/\s+/', '_', $city['name']);
		                $name = preg_replace('/[ ,]+/', '-', $name);
		                ?>
		               <li><a class="justify-content-between d-flex" href="<?= base_url('jobs/location/'.$name); ?>"><p><?= $city['name']; ?></p><span><?= $city['total_jobs']; ?></span></a></li>
		             <?php endforeach; ?>
		           </ul>
		         </div>													
			</div>
		</div>
	</div>	
</section>
<!-- End post Area -->

<script>
    $(document).ready(function (){
        $("#btn-apply").click(function (){
            $('html, body').animate({
                scrollTop: $("#apply-block").offset().top-90
            }, 1000);
        });
    });


    $('.disable').click(function(){
   		$(this).prop('disabled', true);
	});



</script>



