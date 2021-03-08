<!-- Datatable style -->
<link rel="stylesheet" href="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.css">   
  
 <section class="content">
   <div class="row">
    <div class="col-md-12">
       <?php if($this->session->flashdata('success')):?>
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <?= $this->session->flashdata('success'); ?>
        </div>
      <?php endif; ?>

      <?php if($this->session->flashdata('error')):?>
        <div class="alert alert-error alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <?= $this->session->flashdata('error'); ?>
        </div>
      <?php endif; ?>
    </div>
    <div class="col-md-12">
      <div class="box box-body">
        <div class="col-md-6">
          <h4><i class="fa fa-list"></i> &nbsp; Pending Request </h4>
        </div>
        <div class="col-md-6 text-right">
         <!--  <a href="<?= base_url('admin/resume/editCvDetails'); ?>" class="btn btn-success"><i class="fa fa-plus"></i> Add Details</a> -->
        </div>
        
      </div>
    </div>
  </div>

   <div class="box border-top-solid table-responsive">
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped ">
        <thead>
        <tr>
          <th>No</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Contact Number</th>
          <th>Email Id</th>
         <!--  <th>Permanent Address</th>
          <th>Current Address</th>
          <th>Degree</th>
          <th>Certification </th>
          <th>Company</th>
          <th>Skills</th>
          <th>Achievements</th> -->
          <th >Status</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
          <?php 

          //print_r($Resume_request);die;
          $count=0; foreach($Resume_request as $row):?>
          <tr>
            <td><?= ++$count; ?></td>
            <td><?= $row['firstname']; ?></td>
            <td><?= $row['lastname']; ?></td>
            <td><?= $row['mobile_no']; ?></td>
            <td><?= $row['email']; ?></td>
           <!--  <td><?= $row['permanent_address']; ?></td>
            <td><?= $row['current_address']; ?></td>
            <td><?= $row['degree']; ?></td>
            <td><?= $row['certificate']; ?></td>
            <td><?= $row['company']; ?></td>
            <td><?= $row['skills']; ?></td>
            <td><?= $row['achivments']; ?></td> -->
           <!--  <td>
              <?php
                echo "<table><tbody>"; 
                $certificate = json_decode($row['degree']); 
                foreach ($certificate as $value) {
                  
                  foreach ($value as $key => $value1) {
                    $name = $value1->name;
                    $specialization = $value1->specialization;
                    $year_of_admission = $value1->year_of_admission;
                    $year_of_passing = $value1->year_of_passing;
                    echo "<tr><td><b>name</b> : ".$name."<br> <b>specialization</b> : ".$specialization." <br> <b>year_of_admission</b> : ".$year_of_admission." <br> <b>year_of_passing</b> : ".$year_of_passing."</td></tr>";
                    
                  }
                  
                }
                echo "</tbody></table>";
              ?>    
            </td> -->
            <!-- <td>
              <?php
                echo "<table><tbody>"; 
                $certificate = json_decode($row['certificate']); 
                foreach ($certificate as $value) {
                  
                  foreach ($value as $key => $value1) {
                    $name = $value1->name;
                    $yoc = $value1->year_of_certificate;
                    echo "<tr><td><b>name</b> : ".$name."<br> <b>Year of certificate</b> : ".$yoc."</td></tr>";
                    
                  }
                  
                }
                echo "</tbody></table>";
              ?>    
            </td> -->
            <!-- <td>
              <?php
                echo "<table><tbody>"; 
                $certificate = json_decode($row['company']); 
                foreach ($certificate as $value1) {
                      $companyname = $value1->companyname;
                    $companyemail = $value1->companyemail;
                    $startdate = $value1->startdate;
                    $enddate = $value1->enddate;
                    $designation = $value1->designation;
                    $cts_lakhs = $value1->cts_lakhs;
                    $cts_thousands = $value1->cts_thousands;
                    $project = $value1->pro_detail;
                    echo "<tr><td><b>companyname</b> : ".$companyname."<br> <b>companyemail</b> : ".$companyemail." <br> <b>startdate</b> : ".$startdate." <br> <b>enddate</b> : ".$enddate."<br> <b>designation</b> : ".$designation."<br> <b>cts_lakhs</b> : ".$cts_lakhs."<br> <b>cts_thousands</b> : ".$cts_thousands."<br> <b>company project detail</b> : <br> <ul> ";
                    $i = 1;
                    foreach ($project as $key => $value2) {
                      $project_name = $value2->project;
                      $project_description = $value2->project_description;
                      $project_url = $value2->project_url;
                      echo "<li>".$i." . <b>Project Name</b> : ".$project_name." <br> <b>Project Description</b> : ".$project_description." <br><b>Project Url</b> : ".$project_url." </li>";
                      $i++;
                    }  

                    echo "</ul></td></tr><br><br>";               
                  
                }
                echo "</tbody></table>";
              ?> 
            </td> -->
           <!--  <td>
              <?php
                echo "<table><tbody>"; 
                $skills = $row['skills']; 
                echo "<b>".json_decode($skills)."</b>"; 
                echo "</tbody></table>";
              ?>    
            </td> -->
           <!--  <td><?= $row['achivments']; ?></td> -->
            <td>
              <?php
                if ($row['status'] == 0) {
                  echo "<p style='color: #FF9800;font-size: 14px;font-weight: 600;'>PENDING</p>";
                }
                else if ($row['status'] == 1) {
                  echo "<p style='color:green;font-size: 14px;font-weight: 600;'>INPROCESS</p>";
                }
                else if ($row['status'] == 2) {
                  echo "<p style='color:green;font-size: 14px;font-weight: 600;'>COMPLETED</p>";
                }
                else{
                  echo "<p style='color:red;font-size: 14px;font-weight: 600;'>CANCELLED</p>";
                }
              ?>
          </td>
          <td>

          <a href="<?php echo base_url(); ?>admin/Resume_request/Process/<?php echo $row['r_id']; ?>"> <button class="btn btn-success btn-sm" style="background-color: #03A9F4;border-color: #46b8da;">IN PROCESS</button></a>

          <a title="Edit" class="update btn btn-sm btn-primary pull-right" href="<?php echo base_url(); ?>admin/Resume_request/editCvDetails/<?php echo $row['r_id']; ?>"> <i class="fa fa-pencil-square-o"></i></a>

           <a href="<?php echo base_url(); ?>admin/Resume_request/move_cancel/<?php echo $row['r_id']; ?>"> <button class="btn btn-warning btn-sm" >CANCEL</button></a>


          

         


             <!--  <a href="<?php echo base_url(); ?>admin/Resume_request/changeStatus/<?php echo $row['r_id']; ?>"><button class="btn btn-success btn-sm" >VIEW</button></a> -->
          </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</section>  


  <!-- DataTables -->
  <script src="<?= base_url() ?>public/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.min.js"></script>
  <!-- Scripts for this page -->
  <script type="text/javascript">
     $(document).ready(function(){
      $(".btn-delete").click(function(){
        if (!confirm("Do you want to delete")){
          return false;
        }
      });
    });
  </script>
  <script>
  $(function () {
    $("#example1").DataTable();
  });
  </script>
  <script>
  $("#city").addClass('active');
  </script>

