<?php
$this->load->view('templates/header');

//$this->load->view('themes/navbar');
?>
<link rel="stylesheet" href="https://www.jobolytics.com/crop_assets/crop/css/cropper.css">

<style type="text/css">
  

.employer-dashboard-thumb img {
   border-radius: 100%;
    height: 100%;
    width: 100%;
    margin-top: 3px;
}
 .edit-pen{
        /*position: absolute;*/
        color: #01579B;
        background: #fff;
        padding: 5px;
        box-shadow: 1px 1px 1px 1px #eee;
        border-radius: 17px;
        right: 329px;
        bottom: 2px;
        border: 1px solid #f1f1f1;
    } 


    .error{
    color:red;
    font-weight: 400;
    font-size: 15px;
        padding-top: 10px;
}
.select{
 color:black;
}

.gif-loader {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-color: rgba(0,0,0,0.5);
    display: flex;
    justify-content: center;
    align-items: center;
    display: none;
    z-index:1060;
}
.gif-loader__img {
    max-width: 150px;
    width: 100%;
    margin-top: 150px;
}

</style>
<?php if ($this->session->flashdata('file_error')) {
    echo '<div class="alert alert-danger">' . $this->session->flashdata('file_error') . '</div>';
} ?>


    <!-- start banner Area -->
    <section class="banner-area relative" id="home">  
      <div class="overlay overlay-bg"></div>
      <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
          <div class="about-content col-lg-12">
            <h1 class="text-white">
              Candidate Profile        
            </h1> 
            <p class="text-white link-nav"><a href="<?= base_url(); ?>">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href=""> Candidate Profile</a></p>
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

                 <div class="single-slidebar">
    <figure>


    <div class="avatar" style="top: 11px;">

      <?php 

      $user_id   = $this->session->userdata('user_id');

      $info = $this->db->query('SELECT * FROM xx_users_profile_picture WHERE user_id ="'.$user_id.'" ' )->row_array();

      //print_r($user_info);die;


      if(!empty($info['url'])) {
          //https://techarise.com/demos/codeigniter/assets/images/user-default.jpg
          $url = "https://www.jobolytics.com/assets/uploads/_thumb/".$info['url']."";
      } else {
          $url = 'https://www.jobolytics.com/assets/img/user.png';
      }
        ?>
        <img src="<?php print $url;?>" alt="jaeeme" title="jaeeme" data-toggle="modal" data-target="#avatar-modal" id="render-avatar" class="circular-fix has-shadow border marg-top10" data-ussuid="<?php print base64_encode(1);?>" data-backdrop="static" data-keyboard="false" data-upltype="avatar" style="width:150px; height:150px; max-width: 150px; max-height: 150px;">
        <i class="fa fa-pencil edit-pen"></i>
    </div>


   <!--  <form  action="<?php echo site_url('Profile/editPicture')?>" method="post" enctype="multipart/form-data" >
      <?php if($user_info['userimg'] == ''){ ?>
      <a href="#" class="employer-dashboard-thumb"><img src="<?= base_url(); ?>assets/img/user.png" alt="User img" ></a>
       <?php } else { ?>
        <a href="#" class="employer-dashboard-thumb"><img src="<?= base_url(); ?><?php echo $user_info['userimg'];?>" alt="User img" / ></a>
      <?php } ?>
      <input id="fileupload" name="userimg" type="file" style="margin-left: 20%;">
      <span><input type="submit" name="update" value="Update" class="btn btn-info" style="margin-left: -2%;margin-top: 5%;
    margin-bottom: 5%;"></span>
    </form> -->

    <!-- <figcaption>
      <h2><?= $user_info['firstname']  ?> <?= $user_info['lastname']  ?></h2>
      <span><?= $user_info['job_title']; ?></span>
    </figcaption> -->
  </figure>
  <ul class="cat-list">
    <li>
      <a class="text_active" href="<?= base_url('profile'); ?>"><p><i class="fa fa-user-o pr-2"></i> My Profile</p></a>
    </li>
    <li>
      <a class="" href="<?= base_url('myjobs'); ?>"><p><i class="fa fa-file-word-o pr-2"></i> My Applications</p></a>
    </li>
    <li>
      <a class="" href="<?= base_url('myjobs/matching'); ?>"><p><i class="fa fa-briefcase pr-2"></i> Matching jobs</p></a>
    </li>
    <li>
      <a class="" href="<?= base_url('setting/change_password'); ?>"><p><i class="fa fa-lock pr-2"></i> Change Password</p></a>
    </li>
    <li>
      <a class="" href="<?= base_url('auth/logout')?>"><p><i class="fa fa-sign-out pr-2"></i> Logout</p></a>
    </li>
  </ul>
</div> 


<div class="gif-loader" style="display:none;"> 
    <center>
        <img src="https://www.jainbandhutrust.com/assests/wait.gif" class="gif-loader__img" />
    </center>    
</div>
          </div>
          <div class="col-lg-8 post-list">

            <?php if ($this->session->flashdata('file_error')) {
              echo '<div class="alert alert-danger">' . $this->session->flashdata('file_error') . '</div>';
            } ?>

            <?php if ($this->session->flashdata('error_update')) {
              echo '<div class="alert alert-danger">' . $this->session->flashdata('error_update') . '</div>';
            } ?>

            <?php if ($this->session->flashdata('update_success')) {
              echo '<div class="alert alert-success">' . $this->session->flashdata('update_success') . '</div>';
            } ?>
 <?php 

      $user_id   = $this->session->userdata('user_id');

      $user_info = $this->db->query('SELECT * FROM xx_users WHERE id ="'.$user_id.'" ' )->row_array();?>


           <!--  <?php $attributes = array('id' => 'update_user_form', 'method' => 'post' , 'class' => 'form_horizontal'); ?>
            <?php echo form_open_multipart('profile',$attributes);?> -->

            <form  action="<?php echo site_url('profile');?>"  class="form_horizontal"  method="post"  id="update_user_form"   name="update_user_form"> 


            <div class="profile_job_content col-lg-12">
              <div class="headline">
                <h3> Basic Information</h3>
              </div>
              <div class="profile_job_detail">
                <div class="row">
                  <div class="col-md-6 col-sm-12">
                    <div class="submit-field">
                     <h5>First Name *</h5>
                      <input class="form-control" type="text" name="firstname" value="<?= $user_info['firstname']  ?>" placeholder="John Wick"  title="First Name is required!"  required>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="submit-field">
                     <h5>Last Name *</h5>
                      <input class="form-control" type="text" name="lastname" value="<?= $user_info['lastname']  ?>" placeholder="John Wick"  title="Last Name is required!" required>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="submit-field">
                     <h5>Email *</h5>
                      <input class="form-control" type="email" name="email" value="<?= $user_info['email']  ?>" placeholder="example@example.com" title="Email is required!" required>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="submit-field">
                     <h5>Date of Birth:</h5>
                      <input class="form-control" type="date" name="dob" value="<?= $user_info['dob']  ?>" title="DOB is required!" required >
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="submit-field">
                     <h5>Mobile No *</h5>
                      <input class="form-control" type="tel" pattern="^\d{10}$"  name="mobile_no" value="<?= $user_info['mobile_no']  ?>" placeholder="Mobile * " maxlength="12"  title="Mobile No is required!" required>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="submit-field">
                     <h5>Nationality *</h5>
                      <select name="nationality" class="form-control" required title="Nationality is required!">
                        <option>Select Nationality</option>
                         <?php foreach($countries as $country):?>
                            <?php if($user_info['nationality'] == $country['id']): ?>
                              <option value="<?= $country['id']; ?>" selected> <?= $country['name']; ?> </option>
                            <?php else: ?>
                              <option value="<?= $country['id']; ?>"> <?= $country['name']; ?> </option>
                          <?php endif; endforeach; ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="submit-field">
                     <h5>Category *</h5>
                      <select class="form-control" name="category" title="Category is required!" required >
                        <option value="">Select Category</option>
                        <?php foreach($categories as $category):?>
                            <?php if($user_info['category'] == $category['id']): ?>
                            <option value="<?= $category['id']; ?>" selected> <?= $category['name']; ?> </option>
                          <?php else: ?>
                            <option value="<?= $category['id']; ?>"> <?= $category['name']; ?> </option>
                        <?php endif; endforeach; ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="submit-field">
                     <h5>Job Title *</h5>
                      <input class="form-control" type="text" name="job_title" value="<?= $user_info['job_title']; ?>" placeholder="web developer & designer" title="Job Title is required!" required>
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12">
                    <div class="submit-field">
                     <h5>Description *</h5>
                      <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Enter Description" title="Description is required!" required><?= $user_info['description']; ?></textarea>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="profile_job_content col-lg-12 mt-5">
              <div class="headline">
                <h3>Address / Location</h3>
              </div>
              <div class="profile_job_detail">
                <div class="row">
                  <div class="col-md-12 col-sm-12">
                    <div class="submit-field">
                     <h5>Postcode *</h5>
                      <input type="tel" name="postcode" value="<?= $user_info['postcode']  ?>" class="form-control" placeholder="12345" title="Postcode is required!"  required>
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12">
                    <div class="submit-field">
                     <h5>Full Address *</h5>
                      <input type="text" id="searchTextField" autocomplete="off" runat="server" name="location" value="<?= $user_info['location']; ?>" class="form-control" placeholder="Enter a location" title="Full Address is required!" required>
                    </div>
                  </div>
                </div>
              </div>
            </div>  

            <div class="profile_job_content col-lg-12 mt-5">
              <div class="headline">
                <h3>Other Information</h3>
              </div>
              <div class="profile_job_detail">
                <div class="row">
                  <div class="col-md-6 col-sm-12">
                    <div class="submit-field">
                     <h5>Experience *</h5>
                      <select name="experience" class="form-control" title="Experience is required!" required>
                        <option value="0-1" <?php if($user_info['experience'] == '0-1'){ echo "selected";} ?>>0-1 Years</option>
                        <option value="1-2" <?php if($user_info['experience'] == '1-2'){ echo "selected";} ?>>1-2 Years</option>
                        <option value="2-5" <?php if($user_info['experience'] == '2-5'){ echo "selected";} ?>>2-5 Years</option>
                        <option value="5-10" <?php if($user_info['experience'] == '5-10'){ echo "selected";} ?>>5-10 Years</option>
                        <option value="10-15" <?php if($user_info['experience'] == '10-15'){ echo "selected";} ?>>10-15 Years</option>
                         <option value="15+" <?php if($user_info['experience'] == '15+'){ echo "selected";} ?>>15+ Years</option>
                      </select>
                    </div>
                  </div>
                  <!-- <div class="col-md-6 col-sm-12">
                    <div class="submit-field">
                     <h5>Age *</h5>
                      <select name="age" class="form-control" required>
                        <option>20</option>
                        <option>19</option>
                        <option>18</option>
                      </select>
                    </div>
                  </div -->
                  <div class="col-md-6 col-sm-12">
                    <div class="submit-field">
                     <h5>Current CTC  *</h5>
                       <input type="text"  autocomplete="off" runat="server" name="current_salary" value="<?= $user_info['current_salary']; ?>" class="form-control" placeholder="Enter Current CTC " title="Current CTC  is required!" required>
                      <!-- <select name="current_salary" class="form-control" required>
                        <option>Select Salary</option>
                        <?php for($i=500; $i<10000; $i=$i+500): ?>
                          <?php if($user_info['current_salary'] == $i): ?>
                          <option value="<?= $i; ?>" selected> <?= $i; ?> </option>
                        <?php else: ?>
                            <option value="<?= $i; ?>"> <?= $i; ?> </option>
                        <?php endif; endfor; ?>
                      </select> -->
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="submit-field">
                     <h5>Expected CTC *</h5>
                       <input type="text"  autocomplete="off" runat="server" name="expected_salary" value="<?= $user_info['expected_salary']; ?>" class="form-control" placeholder="Enter Expected CTC  " title="Expected CTC  is required!" required>
                      <!-- <select name="expected_salary" class="form-control" required>
                        <option>Select Salary</option>
                        <?php for($i=500; $i<10000; $i=$i+500): ?>
                            <?php if($user_info['expected_salary'] == $i): ?>
                          <option value="<?= $i; ?>" selected> <?= $i; ?> </option>
                        <?php else: ?>
                            <option value="<?= $i; ?>"> <?= $i; ?> </option>
                        <?php endif; endfor; ?>
                      </select> -->
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="submit-field">
                     <h5>Education Levels *</h5>
                      <select name="education_level" class="form-control" title="Education Levels is required!" required>
                        <option>Select Education</option>
                        <?php foreach($educations as $education):?>
                          <?php if($user_info['education_level'] == $education['id']): ?>
                          <option value="<?= $education['id']; ?>" selected> <?= $education['type']; ?> </option>
                          <?php else: ?>
                            <option value="<?= $education['id']; ?>"> <?= $education['type']; ?> </option>
                        <?php endif; endforeach; ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="submit-field">
                     <h5>Skills *</h5>
                      <input type="tel" name="skills" value="<?= $user_info['skills']  ?>" class="form-control" placeholder="eg, html, css, php, javascript" title="Skills is required!" required>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="submit-field">
                       <h5>Resume * <small>(Maximum file size is 100kb, pdf, docx)</small></h5>

                        <div id="fileError"  class="error"></div>
                       
                        <input type="hidden" name="old_resume" value="<?= $user_info['resume']; ?>"  >


                        <?php 
                          if (!empty($user_info['resume'])) { ?>
                            <input type="file" name="userfile" value="" class="FedCon-upload" onchange="ValidateSingleInput(this);"  >

                          <a class="btn btn-outline" href="<?= base_url().$user_info['resume']; ?>"><i class="lnr lnr-download"></i> <small>Downloaded Uploaded Resume</small></a>
                          <?php }else{?>

                              <input type="file" name="userfile" value="" class="FedCon-upload" onchange="ValidateSingleInput(this);" title="Resume is required!" required >

                          <?php }?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="add_job_btn col-lg-12 mt-5">
              <div class="submit-field">
                <input type="submit" class="btn job_detail_btn" name="update" value="Update">
             </div>
           </div>
           </form>                       
         </div>
       </div>
     </div>  
   </section>

    

   <script type="text/javascript">
     var _validFileExtensions = [".pdf", ".doc" , ".docx"];    
      function ValidateSingleInput(oInput) {
         
    if (oInput.type == "file") {
        var sFileName = oInput.value;
         if (sFileName.length > 0) {
            var blnValid = false;
            for (var j = 0; j < _validFileExtensions.length; j++) {
                var sCurExtension = _validFileExtensions[j];
                if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                    blnValid = true;
                    break;
                }
            }
             
            if (!blnValid) {
                oInput.value = "";
                $('#fileError').html("You can only upload PDF files.");
                return false;
            }
        }
    }
    $('#fileError').html("");
    return true;
}
   </script>


   <script src="<?php echo base_url('jquery_validation_plugin/dist/jquery.validate.js')?>"></script>
 <script type="text/javascript">
    $.validator.setDefaults({
        submitHandler: function() {    
        }
      });
    $(document).ready(function() {
        $("#update_user_form").validate({
          submitHandler:function(){
            // $("#update_user_form").submit();

            // $('.gif-loader').css('display','inline');

            update_user_form.submit();
        $('.gif-loader').css('display','inline');
             return true;
          }
        });
      });

    </script>



    
<?php
$this->load->view('templates/footer');
$this->load->view('crop/profileAvatar');

$this->load->view('themes/footer');
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-filestyle/2.1.0/bootstrap-filestyle.js"></script>
<script src="https://www.jobolytics.com/crop_assets/crop/js/cropper.js"></script>
<script src="https://www.jobolytics.com/crop_assets/crop/js/main.js"></script>