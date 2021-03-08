<style type="text/css">
  
  .mb-4{
     line-height: 1.65rem !important;
    margin-bottom: 0.5rem!important;
    
    text-align: justify;
  }

  h3{
    font-size: 22px;
    font-weight: 600;
    padding: 7px 6px;
    border-radius: 3px;
  }
  h4{
        padding-top: 10px;
  }
</style>
<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">Resume Tracking</h1>
                <p class="text-white"><a href="<?= base_url(); ?>">Home </a> <span class="lnr lnr-arrow-right"></span> <a href=""> Resume Tracking</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start contact-page Area -->
<section class="post-area section-gap">
  <div class="container">
    <div class="row justify-content-center d-flex">
        <div class="col-lg-4 sidebar">                          
        <?php $this->load->view($user_sidebar); ?>
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
              <h3>Track Your's Resume Here</h3>
              </div>
              <div class="col-sm-4 col-md-4 mb-2"></div>
            </div>
          </div>
     
            <?php if($result){?>
        <div class="FedCon-job-alerts">
          <div class="box-body table-responsive default-data"  >
            <table id="example1" class="table table-bordered">
              <thead>
                <tr style="background: aliceblue;">
                  <th>S. No.</th>
                  <th>Resume Title</th>
                  
                  <th>Date & Time</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
            
              <tbody style="background: #ffffff;">                
                <?php 
                $count=0;
                //print_r($result);

                foreach ($result as $req): ?>
                <tr>
                     <td><?= ++$count; ?></td>
                  <td>
                    <h6 style="color: #333"><?= $req['resume_title']; ?></h6>
                   
                  </td>
                   <td>
                    <?php echo $req['created_date']; ?>
                    </td>
                  <td >
                   <?php
                        if ($req['status'] == 0) {
                          echo "<b style='color: #FF9800;font-size: 14px;font-weight:500;'>PENDING</b>";
                        }
                        else if ($req['status'] == 1) {
                          echo "<b style='color:#00BCD4;font-size: 14px;font-weight: 500;'>IN PROGRESS</b>";
                        }
                        else if ($req['status'] == 2) {
                          echo "<b style='color: #009688;font-size: 14px;font-weight: 600;'>COMPLETED</b>";
                        }
                        else{
                          echo "<b style='color:#bd2025;font-size: 14px;font-weight: 500;'>CANCELLED</b>";
                        }
                      ?>
                  </td>
                 
                  <td>
                    <?php
                        if ($req['status'] == 2) {?>

                          <a class="btn btn-outline" href=""><i class="lnr lnr-download"></i> <small style="font-weight: 600;">Download Resume Here</small></a>

                    <?php }?>

                    <!-- <a href="" class="FedCon-savedjobs-links btn-delete"><i title="delete" class="lnr lnr-trash"></i></a>
                    <a href="" class="FedCon-savedjobs-links"><i title="edit" class="lnr lnr-pencil"></i></a> -->
                   <!--  <a href="" class="FedCon-savedjobs-links"><i title="view" class="lnr lnr-eye"></i></a> -->
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
                              <p class="text-gray" style="margin-top: 30px;"><strong>Sorry,</strong> order not found!</p>
                           
                    </div>
                  </div>
                   <?php } ?>

      </div>                            

    </div>

  </div>
</div>  
</section>
<!-- End contact-page Area -->