<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-body with-border">
        <div class="col-md-6">
          <h4><i class="fa fa-plus"></i> &nbsp; Add New Coupon</h4>
        </div>
        <div class="col-md-6 text-right">
          <a href="<?= base_url('admin/Coupon/couponAdd'); ?>" class="btn btn-success"><i class="fa fa-list"></i> Coupon List</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
     <div class="col-md-12">
  <?php echo $this->session->flashdata('success');?>
  <?php echo $this->session->flashdata('alert');?>  
</div> 

    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <div class="box-body my-form-body">
         <!--  <?php if(isset($msg) || validation_errors() !== ''): ?>
              <div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                  <?= validation_errors();?>
                  <?= isset($msg)? $msg: ''; ?>
              </div>
            <?php endif; ?> -->
           
            <?php echo form_open(base_url('admin/Coupon/insertCoupon'), 'class="form-horizontal"');  ?> 
              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Coupon Code </label>

                <div class="col-sm-9">
                  <input type="text" name="coupon_code" class="form-control" id="coupon_code" placeholder="Enter Code">
                </div>
              </div>
              
              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Coupon Name</label>

                <div class="col-sm-9">
                  <input type="text" name="coupon_name" class="form-control" id="lastname" placeholder="Enter Coupon Name">
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Description</label>

                <div class="col-sm-9">
                  <input type="text" name="description" class="form-control" id="email" placeholder="Enter Description">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Discount</label>

                <div class="col-sm-9">
                  <input type="number" name="discount" class="form-control" id="mobile_no" placeholder="Enter Discount">
                </div>
              </div>


              <div class="form-group">
               <label for="" class="col-sm-2 control-label">Discount Type</label>
                    </label>

                <div class="col-sm-9">
                  <select class="form-control" name="discount_type" style="text-transform: capitalize;">
                        <option>--Choose--</option>
                        <option value="Flat"> Flat </option>
                        <option value="Percent"> Percent </option>
                     </select>
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-2 control-label">Start Date</label>

                <div class="col-sm-9">
                  <input type="date" name="start_date" class="form-control" id="address" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-2 control-label">End Date</label>

                <div class="col-sm-9">
                  <input type="date" name="end_date" class="form-control" id="address" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-11">
                  <input type="submit" name="submit" value="Add Coupon" class="btn btn-info pull-right">
                </div>
              </div>
            <?php echo form_close( ); ?>
          </div>
          <!-- /.box-body -->
      </div>
    </div>
  </div>  

</section> 

   
</aside>
<!-- /.right-side -->
