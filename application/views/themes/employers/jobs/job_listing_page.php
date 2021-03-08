<style type="text/css">
  .FedCon-job-alerts thead {
    background-color: #ffffff;
}

table {
  
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

/*  table {
  width:100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
table#t01 tr:nth-child(even) {
  background-color: #eee;
}
table#t01 tr:nth-child(odd) {
 background-color: #fff;
}
table#t01 th {
  background-color: black;
  color: white;
}*/
</style>
<!-- start banner Area -->
<section class="banner-area relative" id="home">  
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center">
      <div class="about-content col-lg-12">
        <h1 class="text-white">
          Manage Jobs       
        </h1> 
        <p class="text-white link-nav"><a href="<?= base_url('employers'); ?>">Employer </a>  <span class="lnr lnr-arrow-right"></span>  <a href=""> Manage Jobs</a></p>
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
        <div class="col-md-12">
          <?php if ($this->session->flashdata('update_success')) :?>
            <div class="alert alert-success">
              <a href="#" class="close" data-dimdiss="alert" aria-label="close" title="close">×</a>
              <strong><?=$this->session->flashdata('update_success')?></strong> 
            </div>
          <?php endif;?>
          <?php if ($this->session->flashdata('deleted')) :?>
            <div class="alert alert-success">
              <a href="#" class="close" data-dimdiss="alert" aria-label="close" title="close">×</a>
              <strong><?=$this->session->flashdata('deleted')?></strong> 
            </div>
          <?php endif;?>
        </div>

        <div class="profile_job_content col-lg-12">
           <div class="headline">
            <div class="row">
              <div class="col-md-8 col-sm-8">
              <h3>Manage Your's Job</h3>
              </div>
              <div class="col-sm-4 col-md-4 mb-2"></div>
            </div>
          </div>
     
            <?php if($job_info){?>
        <div class="FedCon-job-alerts">
          <div class="box-body table-responsive default-data"  >
            <table id="example1" class="table table-bordered">
              <thead>
                <tr>
                  <th>Job Title</th>
                  <th>Applications</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
              </thead>
            
              <tbody style="background: #ffffff;">

                
                <?php foreach ($job_info as $job): ?>
                <tr>
                  <td>
                    <h4><a href=""><?= $job['job_title']; ?></a></h4>
                    <div class="job-listing-footer">
                      <ul>
                        <li><i class="fa fa-map-marker"></i> <?= $job['location']; ?></li>
                        <li><i class="fa fa-database"></i> <?= get_industry_name($job['industry']); ?></li>
                      </ul>
                    </div>
                  </td>
                  <td class="text-center">
                    <a href="<?= base_url('employers/applicants/view/'.$job['id']); ?>">Applied (<?= $job['cand_applied']?>)</a><br/>
                    <a href="<?= base_url('employers/applicants/shortlisted/'.$job['id']); ?>">Shortlisted (<?= $job['total_shortlisted']?>)</a><br/>
                  </td>
                  <td><?= $job['created_date']; ?></td>
                  <td>
                    <a href="<?= base_url('employers/job/delete/'.$job['id']); ?>" class="FedCon-savedjobs-links btn-delete"><i title="delete" class="lnr lnr-trash"></i></a>
                    <a href="<?= base_url('employers/job/edit/'.$job['id']); ?>" class="FedCon-savedjobs-links"><i title="edit" class="lnr lnr-pencil"></i></a>
                   <!--  <a href="<?= base_url('employers/job/edit/'.$job['id']); ?>" class="FedCon-savedjobs-links"><i title="view" class="lnr lnr-eye"></i></a> -->
                  </td>
                </tr>
                <?php endforeach; ?>
                 </tbody>
               </table>
            
          </div>
        </div>
         <?php  }else{?>

                  <div class="profile_job_detail">
                    <div class="row">
                              <p class="text-gray" style="margin-top: 30px;"><strong>Sorry,</strong> you didn't posted any job yet!</p>
                           
                    </div>
                  </div>
                   <?php } ?>

      </div>                            

    </div>

  </div>
</div>  
</section>
      <!-- End Job listing Area -->