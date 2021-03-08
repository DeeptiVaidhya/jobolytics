<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-body">
        <div class="col-md-6">
          <h4><i class="fa fa-pencil"></i> &nbsp; Edit Resume Details</h4>
        </div>
        <div class="col-md-6 text-right">
          <a href="<?= base_url('admin/Resume_request'); ?>" class="btn btn-success"><i class="fa fa-list"></i> Resume List</a>
        </div>
        
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Resume</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <div class="box-body my-form-body">
          <?php if(isset($msg) || validation_errors() !== ''): ?>
              <div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                  <?= validation_errors();?>
                  <?= isset($msg)? $msg: ''; ?>
              </div>
            <?php endif; ?>
           
            <?php echo form_open(base_url('admin/Resume_request/editResumeDetails/'.$cv_details->r_id), 'class="form-horizontal"' )?> 

        
              <div class="form-group">
                <label for="firstname" class="col-sm-2 control-label">First Name</label>

                <div class="col-sm-9">
                  <input type="text" name="firstname" value="<?= $cv_details->first_name ?>" class="form-control" id="firstname" placeholder="Enter First Name">
                </div>
              </div>

              <div class="form-group">
                <label for="lastname" class="col-sm-2 control-label">Last Name</label>

                <div class="col-sm-9">
                  <input type="text" name="lastname" value="<?= $cv_details->last_name ?>" class="form-control" id="lastname" placeholder="Enter Last Name">
                </div>
              </div>

              <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>

                <div class="col-sm-9">
                  <input type="email" name="email" value="<?= $cv_details->email_id ?>" class="form-control" id="email" placeholder="Enter Email">
                </div>
              </div>
              <div class="form-group">
                <label for="mobile_no" class="col-sm-2 control-label">Mobile No</label>

                <div class="col-sm-9">
                  <input type="number" name="mobile_no" value="<?= $cv_details->mobile_number ?>" class="form-control" id="mobile_no" placeholder="Enter Mobile No">
                </div>
              </div>
                

                <div class="form-group">
                <label for="mobile_no" class="col-sm-2 control-label">Resume Title</label>

                <div class="col-sm-9">
                  <input type="text" name="resume_title" value="<?= $cv_details->resume_title ?>" class="form-control" id="resume_title" placeholder="Enter Resume Title">
                </div>
              </div>

                <div class="form-group">
                <label for="mobile_no" class="col-sm-2 control-label">Permanent Address</label>

                <div class="col-sm-9">
                  <input type="text" name="permanent_address" value="<?= $cv_details->permanent_address ?>" class="form-control" id="permanent_address" placeholder="Enter Permanent Address">
                </div>
              </div>
                <div class="form-group">
                <label for="mobile_no" class="col-sm-2 control-label">Current Address</label>

                <div class="col-sm-9">
                  <input type="text" name="current_address" value="<?= $cv_details->current_address ?>" class="form-control" id="current_address" placeholder="Enter Current Address">
                </div>
              </div>
                <div class="form-group">
                <label for="mobile_no" class="col-sm-2 control-label">Degree</label>

                <div class="col-sm-9">
                  <input type="text" name="degree" value="<?= $cv_details->degree ?>" class="form-control" id="degree" placeholder="Enter Degree">
                </div>
              </div>
                <div class="form-group">
                <label for="mobile_no" class="col-sm-2 control-label">Certificate</label>

                <div class="col-sm-9">
                  <input type="text" name="certificate" value="<?= $cv_details->certificate ?>" class="form-control" id="certificate" placeholder="Enter Certificate">
                </div>
              </div>

               <div class="form-group">
                <label for="mobile_no" class="col-sm-2 control-label">Company</label>

                <div class="col-sm-9">
                  <input type="text" name="company" value="<?= $cv_details->company ?>" class="form-control" id="company" placeholder="Enter Company">
                </div>
              </div>

               <div class="form-group">
                <label for="mobile_no" class="col-sm-2 control-label">Skills</label>

                <div class="col-sm-9">
                  <input type="text" name="skills" value="<?= $cv_details->skills ?>" class="form-control" id="skills" placeholder="Enter Skills">
                </div>
              </div>

              <div class="form-group">
                <label for="mobile_no" class="col-sm-2 control-label">Achivments</label>

                <div class="col-sm-9">
                  <input type="text" name="achivments" value="<?= $cv_details->achivments ?>" class="form-control" id="achivments" placeholder="Enter Achivments">
                </div>
              </div>

              <div class="form-group">
                <label for="role" class="col-sm-2 control-label">Select Status</label>

                <div class="col-sm-9">
                  <select name="status" class="form-control">
                    <option value="">Select Status</option>
                    <option value="1" <?= ($cv_details->status== 1)?'selected': '' ?> >INPROCESS</option>
                    <!-- <option value="2" <?= ($cv_details->status == 2)?'selected': '' ?>>COMPLETED</option>
                     <option value="3" <?= ($cv_details->status == 3)?'selected': '' ?>>CANCELLED</option> -->
                  </select>

                 <!--   <select class="form-control" name="status" required>
                      <option value="1">INPROCESS</option>
                      <option value="2">COMPLETED</option>
                       <option value="2">CANCELLED</option>
                  </select> -->
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-11">
                  <input type="submit" name="submit" value="Update" class="btn btn-info pull-right">
                </div>
              </div>
            <?php echo form_close(); ?>
          </div>
          <!-- /.box-body -->
      </div>
    </div>
  </div>  

</section> 