<style type="text/css">
	.job_title {
	    height: 49px;
	}
	.post-list .single-post .tags li:hover{
		background-color:#bd2025!important;
	}
</style>
<!-- start banner Area -->
<section class="banner-area relative" id="home">	
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					CV Search 			
				</h1>	
				<p class="text-white link-nav"><a href="<?php echo base_url('employers')?>">Employer </a>  <span class="lnr lnr-arrow-right"></span>  <a href="">CV Search </a></p>
			</div>											
		</div>
	</div>
</section>
<!-- End banner Area -->

<!-- Start post Area -->
<section class="post-area section-gap">
	<div class="container">
		<div class="row d-flex">
			<div class="col-lg-12">
				<div class="search-bar">
					<?php $attributes = array('id' => 'search_job', 'method' => 'post');
             		 echo form_open('employers/cv/search',$attributes);?>
	                <div class="row justify-content-center form-wrap no-gutters">
			            <div class="col-lg-6 form-cols" style="background-color: white;">
			              <input type="text" class="form-control" name="job_title" placeholder="what are you looking for?" style="line-height: 0.5;"required>
			            </div>
			            <div class="col-lg-4 form-cols">
			              <div class="default-select" id="default-selects">
			                <input style="background: #fff!important;height: 45px!important;" id="searchTextField" class="form-control" type="text" size="50" placeholder="Enter a location" autocomplete="on" runat="server" required/> 
			              </div>
			            </div>
			            <div class="col-lg-2 form-cols">
			              <input type="submit" name="search" class="btn btn-info" value="Search">
			            </div>                
			        </div>
	              <?php echo form_close(); ?>
	            </div> 
			</div>
			<!-- End search sidebar -->
			<div class="col-12 post-list">
				<?php if(empty($profiles)): ?>
		          <p class="alert alert-danger"><strong>Sorry,</strong> we could not find any profile for the keywords that you entered</p>
		        <?php endif; ?>
				<?php foreach($profiles as $row): ?>
				<div class="single-post d-flex flex-row">
					<div class="thumb">
						<img src="<?= base_url()?>assets/img/user.png" height=100 alt="user img">
						<?php  $skills = explode("," , $row['skills']);?>
						<ul class="tags">
							<?php foreach($skills as $skill): ?>
							<li>
								<a class="skills" href="#"><?= $skill; ?></a>
							</li>
							<?php endforeach; ?>
						</ul>
					</div>
					<div class="details col-lg-7">
						<div class="title d-flex flex-row justify-content-between">
							<div class="titles">
								<a href="#"><h4><?= $row['firstname'].' '.$row['lastname']; ?></h4></a>
								<h6><?= $row['job_title']; ?></h6>					
							</div>
						</div>
						<p class=""><b style="color:#bd2025!important;">Location</b> : <?= $row['location']; ?></p>
						<p class=""><b style="color:#bd2025!important;">Education</b> : <?= get_education_level($row['education_level']); ?></p>
						<p class=""><b style="color:#bd2025!important;">Experience</b> : <?= $row['experience']; ?> Years</p>
						<p class=""><b style="color:#bd2025!important;">Nationality</b> : <?= get_country_name($row['nationality']); ?></p>
						<p class=""><b style="color:#bd2025!important;">Current Salary</b> : $<?= $row['current_salary']; ?></p>
						<p class=""><b style="color:#bd2025!important;">Expected Salary</b> : $<?= $row['expected_salary']; ?></p>
						<p class=""><b style="color:#bd2025!important;">Category</b> : <?= $row['category']; ?></p>
						<p class=""><b style="color:#bd2025!important;">Description</b> : <?= $row['description']; ?></p>
					</div>
					<div class="options col-lg-3">
						<ul class="btns">
							<li><a href="<?= base_url('employers/cv/make_shortlist/'.$row['id']); ?>">Shortlist</a></li><br/>
							<?php if(!empty($row['resume'])) :?>
							<li><a href="<?= base_url().$row['resume']; ?>">Download Resume</a></li>
							<?php endif; ?>
						</ul>
					</div>
				</div>			
				<?php endforeach; ?>									
			</div>
		</div>
	</div>	
</section>
<!-- End post Area -->

