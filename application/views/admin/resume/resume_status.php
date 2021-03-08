<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-body with-border">
        <div class="col-md-6">
          <h4><i class="fa fa-plus"></i> &nbsp; Change Resume Status</h4>
        </div>
        <div class="col-md-6 text-right">
         <!--  <a href="<?= base_url('admin/users'); ?>" class="btn btn-success"><i class="fa fa-list"></i>Change Resume Status</a> -->
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <div class="box-body my-form-body">
         
            <form role="form"  action="<?php echo base_url('admin/Resume_request/updateStatus');?>" method="post" >
           
            
              <div class="form-group">

                <div class="col-sm-6">
                  <input type="hidden" name="req_id" value="<?php echo $request->r_id; ?>">
                   <label for="exampleInputEmail1" >--Select Option--<span class="intro" id="errorname"></span></label>
                  <select class="form-control" name="status" required>
                      <option value="1">INPROCESS</option>
                      <option value="2">COMPLETED</option>
                       <option value="2">CANCELLED</option>
                  </select>
                </div>
              </div>
              
              <!-- <div class="form-group">
                <label for="lastname" class="col-sm-2 control-label">Last Name</label>

                <div class="col-sm-9">
                  <input type="text" name="lastname" class="form-control" id="lastname" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>

                <div class="col-sm-9">
                  <input type="email" name="email" class="form-control" id="email" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="mobile_no" class="col-sm-2 control-label">Mobile No</label>

                <div class="col-sm-9">
                  <input type="number" name="mobile_no" class="form-control" id="mobile_no" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="password" class="col-sm-2 control-label">Password</label>

                <div class="col-sm-9">
                  <input type="password" name="password" class="form-control" id="password" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="address" class="col-sm-2 control-label">Address</label>

                <div class="col-sm-9">
                  <input type="text" name="address" class="form-control" id="address" placeholder="">
                </div>
              </div>-->
              <div class="form-group">
                <div class="col-sm-6">
                  <input type="submit" name="submit" value="Update" class="btn btn-info" style="margin-top: 22px;">
                </div>
              </div> 
            
          </div>
          <!-- /.box-body -->
      </div>
    </div>
  </div>  

</section> 