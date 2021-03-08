
<!-- <div class="col-md-12">
  <?php echo $this->session->flashdata('success');?>
  <?php echo $this->session->flashdata('alert');?>  
</div> -->

 <section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-body">
        <div class="col-md-6">
          <h4><i class="fa fa-list"></i> &nbsp; Coupon List (Datatable - ServerSide Processing)</h4>
        </div>
        <div class="col-md-6 text-right">
          <a href="<?= base_url('admin/Coupon/couponAdd');?>" class="btn btn-success"><i class="fa fa-plus"></i> Add New Coupon</a>
        </div>
        
      </div>
    </div>
  </div> 

   <div class="box">
    <div class="box-header">
    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive">
      <table id="na_datatable" class="table table-bordered table-striped" width="100%">
        <thead>
        <tr>
             <th>S.No.</th>
             <th>Coupon Code</th>
             <th>Coupon Name</th> 
             <th>Description</th>
             <th>Discount</th>
             <th>Discount Type</th>
             <th>Start Date</th>
             <th>End Date</th>
             <th>Action</th>
        </tr>
        </thead>

          <tbody>
                            <?php 
                            $i=1;
                            foreach ($coupon as $key) { ?>
                            <tr>
                                <td>
                                    <?php echo $i;  ?>
                                </td>
                                <td>
                                    <?php echo $key['coupon_code']; ?>
                                </td>
                                <td>
                                    <?php echo $key['coupon_name']; ?>
                                </td>
                                <td>
                                    <?php echo $key['description']; ?>
                                </td>
                                <td>
                                    <?php echo $key['discount']; ?>
                                </td>
                                 <td>
                                    <?php echo $key['discount_type']; ?>
                                </td>
                                <!--  <td>
                                    <?php echo $key['coupon_applied_for']; ?>
                                </td> -->
                                <td>
                                    <?php echo $key['start_date']; ?>
                                </td>
                                <td>
                                    <?php echo $key['end_date']; ?>
                                </td>
                                
                                <td>
                                    <a target = "_blank" href="<?php echo site_url('admin/Coupon/editCoupon/')?><?php echo $key['coupon_id'];?>" class="btn bg-purple  btn-flat btn-xs" >EDIT</a>
                                    <a href="<?php echo site_url('admin/Coupon/deleteCoupon/')?><?php echo $key['coupon_id']; ?>" class="btn bg-purple btn-red btn-flat btn-xs" style="background-color: #f56954!important">DELETE</a>
                                </td>
                               
                            </tr>   
                            <?php $i++; } ?>
                        </tbody>
      </table>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</section>