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
          <h4><i class="fa fa-list"></i> &nbsp; Complete Request </h4>
        </div>
        <div class="col-md-6 text-right">
          <!-- <a href="<?= base_url('admin/city/add'); ?>" class="btn btn-success"><i class="fa fa-plus"></i> Add New city</a> -->
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

         <!--  <a href="<?php echo base_url(); ?>admin/Resume_request/Comment/<?php echo $row['r_id']; ?>"> <button class="btn btn-success btn-sm" style="background-color: #5bc0de;border-color: #46b8da;">Comment</button></a> -->


           <a href=""> <button class="btn btn-success btn-sm" style="background-color: #5bc0de;border-color: #46b8da;">Comment</button></a>
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

