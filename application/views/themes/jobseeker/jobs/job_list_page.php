<style type="text/css">


	.btn-info {
    color: #fff;
    background-color: #bd2025;
    border-color: #bd2025;
}

.btn-info:hover {
    color: #fff;
    background-color: #bd2025;
    border-color: #bd2025;
}


	


</style>

<!-- start banner Area -->
<section class="banner-area relative" id="home">	
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					Search Result			
				</h1>	
				<p class="text-white link-nav"><a href="">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="">Search Result</a></p>
			</div>											
		</div>
	</div>
</section>
<!-- End banner Area -->

<!-- Start post Area -->
<section class="post-area section-gap">
	<div class="container">
		<div class="row justify-content-center d-flex">
			<div class="col-lg-12">
				<div class="search-bar">
					<?php $attributes = array('id' => 'search_job', 'method' => 'post');
             		 echo form_open('jobs/search',$attributes);?>
	                <div class="row justify-content-center form-wrap no-gutters">
			            <div class="col-lg-6 form-cols" style="background-color: white;">
			              <input type="text" class="form-control" name="job_title" placeholder="What are you looking for?" required="" style="margin-bottom: -5px;line-height: initial;">
			            </div>
			            <div class="col-lg-4 form-cols">
			              <div class="default-select" id="default-selects">
			                <input style="background: #fff!important;height: 45px!important;" id="searchTextField" class="form-control" type="text" size="50" placeholder="Enter a location" autocomplete="on" runat="server" required="" /> 
			              </div>
			            </div>
			            <div class="col-lg-2 form-cols">
			              <input type="submit" name="search" class="btn btn-info" value="Search">
			            </div>                
			        </div>
	              <?php echo form_close(); ?>
	            </div> 
			</div>

			<div class="col-lg-4 order-2 sidebar search">

				<?php $attributes = array('id' => 'post_job', 'method' => 'post');
        			echo form_open('jobs/search',$attributes);?>

				<div class="single-slidebar">
					<h4>Category</h4>
					<ul class="cat-list">
						<?php $category_id = (isset($search_value['category']))? $search_value['category']: '';  ?>
						<?php foreach($categories as $category): ?>
							<?php if($category_id == $category['id']): ?>
							<li>
								<p><input type="checkbox" name="category" value="<?= $category['id']?>" checked="" > <?= $category['name']?></p>
							</li>
							<?php else: ?>
	                        <li>
								<p><input type="checkbox" name="category" value="<?= $category['id']?>" > <?= $category['name']?></p>
							</li>
	                    <?php endif; endforeach; ?>
					</ul>
				</div>

				<div class="single-slidebar">
					<h4>Experience</h4>
					<ul class="cat-list">
						<?php $experience = (isset($search_value['experience']))? $search_value['experience']: '';  ?>
						<li>
							<p><input type="checkbox" name="experience" value="0-1" <?= ($experience == '0-1')? 'checked' : '' ?> > 0-1 Years</p>
						</li>
						<li>
							<p><input type="checkbox" name="experience" value="1-2" <?= ($experience == '1-2') ? 'checked' : '' ?>> 1-2 Years</p>
						</li>
						<li>
							<p><input type="checkbox" name="experience" value="2-5" <?= ($experience == '2-5') ? 'checked' : '' ?> > 2-5 Years</p>
						</li>
						<li>
							<p><input type="checkbox" name="experience" value="5-10" <?= ($experience == '5-10') ? 'checked' : '' ?> > 5-10 Years</p>
						</li>
						<li>
							<p><input type="checkbox" name="experience" value="10-15" <?= ($experience == '10-15') ? 'checked' : '' ?> > 10-15 Years</p>
						</li>
						<li>
							<p><input type="checkbox" name="experience" value="15+" <?= ($experience == '15+') ? 'checked' : '' ?> > 15+ Years</p>
						</li>
					</ul>
				</div>		

				<div class="single-slidebar">
					<h4>Job Type</h4>
					<?php $job_type = (isset($search_value['job_type']))? $search_value['job_type']: '';  ?>
					<ul class="cat-list">
						<li><p><input type="checkbox" name="job_type" value="full-time" <?= ($job_type == 'full-time') ? 'checked' : '' ?> > Full Time</p></li>
						<li><p><input type="checkbox" name="job_type" value="part-time" <?= ($job_type == 'part-time') ? 'checked' : '' ?> > Part Time</p></li>
						<li><p><input type="checkbox" name="job_type" value="freelance" <?= ($job_type == 'freelance') ? 'checked' : '' ?> > Freelance</p></li>
						<li><p><input type="checkbox" name="job_type" value="internship" <?= ($job_type == 'internship') ? 'checked' : '' ?> > Internship</p></li>
						<li><p><input type="checkbox" name="job_type" value="temporary" <?= ($job_type == 'temporary') ? 'checked' : '' ?> > Temporary</p></li>
					</ul>
				</div>				

				<div class="single-slidebar">
					<h4>Employment Type</h4>
					<?php $employment_type = (isset($search_value['employment_type']))? $search_value['employment_type']: '';  ?>
					<ul class="cat-list">
						<li><p><input type="checkbox" name="employment_type" value="employee" <?= ($employment_type == 'employee') ? 'checked' : '' ?> > Employee</p></li>
						<li><p><input type="checkbox" name="employment_type" value="internship" <?= ($employment_type == 'internship') ? 'checked' : '' ?> > Internship</p></li>
						<li><p><input type="checkbox" name="employment_type" value="contractor" <?= ($employment_type == 'contractor') ? 'checked' : '' ?> > Contractor</p></li>
						<li><p><input type="checkbox" name="employment_type" value="temporary-employee" <?= ($employment_type == 'temporary-employee') ? 'checked' : '' ?> > Temporary Employee</p></li>
					</ul>
				</div>
				<?php
					if(!empty($this->session->flashdata('message_name'))){
						echo $this->session->flashdata('message_name');
					}
				?>		
				<div class="single-slidebar btn-search">	
					<input type="submit" name="search" class="btn btn-info btn-block" value="Search" >
				</div>				
				<?php echo form_close(); ?>
			</div> 
			<!-- End search sidebar -->

			<div class="col-lg-8 order-md-2  post-list">
				<div class="col-lg-12">
					<?php if(empty($jobs)): ?>
						<div class="alert alert-danger"><strong>Sorry,</strong> we could not find any job for the keywords that you entered</div>
					<?php endif; ?>
				</div>
				<?php

				//print_r($jobs);die;
				 foreach($jobs as $job): ?>
				<div class="single-post d-flex flex-row">
					<?php 
		                $id   = $job['company_id'];
		                // print_r($id);

		                $info = $this->db->query('SELECT * FROM xx_companies WHERE id ="'.$id.'" ' )->row_array();
		                if(!empty($info['company_logo'])) {
		                  $url = "https://www.jobolytics.com/".$info['company_logo']."";
		                } else {
		                  $url = "https://www.jobolytics.com/".$info['company_logo']."";
		                }
		            ?>
		              <div class="thumb">
		                 <img src="<?php echo $url;?>" alt="Jobolytics jobs" title="Jobolytics jobs" height="70" width="70" style=" max-height: 100px;max-width: 100%; height: 100px;object-fit: contain;">
		              </div>

					<!-- <div class="thumb">
						<img src="<?= base_url()?>assets/img/job_icon.png"  alt="Jobolytics jobs">
					</div> -->
					<div class="details">
						<div class="title d-flex flex-row justify-content-between">
							<div class="titles">
								<a href="<?= site_url('jobs/'.$job['id'].'/'.($job['job_slug'])); ?>"><h4><?= text_limit($job['job_title'], 35); ?></h4></a>
								<h6><?= $job['company_name']; ?></h6>					
							</div>
							
						</div>
						<div class="job-listing-footer">
							<ul>
								<li><i class="lnr lnr-map-marker"></i> <?= $job['location']; ?></li>
								<li><i class="lnr lnr-briefcase"></i> <?= $job['job_type']; ?></li>
								<li><i class="lnr lnr-apartment"></i> <?= get_industry_name($job['industry']); ?></li>
								<li><i class="lnr lnr-clock"></i> <?= time_ago($job['created_date']); ?></li>
							</ul>									
						</div>
					</div>
					<div class="job-listing-btns">
						<ul class="btns">
							<li><a href="<?= site_url('jobs/'.$job['id'].'/'.($job['job_slug'])); ?>">Apply</a></li>
						</ul>
					</div>
				</div>
				<?php endforeach; ?>
				<div class="pull-right">
			        <?php echo $this->pagination->create_links(); ?>
			      </div>
			</div>
		</div>
	</div>	
</section>
<!-- End post Area -->

