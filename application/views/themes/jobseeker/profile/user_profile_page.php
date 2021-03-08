  <style type="text/css">
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

.job_detail_btn {
    background: #bd2025;
    color: #fff !important;
    padding: 6px 20px !important;
    text-transform: uppercase;
    border: 1px solid #bd2025;
}

#errmsg
{
color: red;
}

.btn-file {
  background-color: #4A90E2;
  position: relative;
  overflow: hidden;
  color: white;
  letter-spacing: .5px;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    
    cursor: inherit;
    display: block;
}

.ui-datepicker-month{
  float: left;
}
.ui-datepicker-year{
   float: left;
}
.ui-widget ui-widget-content ui-helper-clearfix ui-corner-all{
      position: absolute;
    top: 675px;
    left: 879.5px;
    z-index: 1;
    display: block;
    background: #c00000;
}
/*#ui-datepicker-div{
      position: absolute;
    top: 675px;
    left: 879.5px;
    z-index: 1;
    display: block;
    background: #c00000;
}*/

</style>

<div class="gif-loader" style="display:none;"> 
    <center>
        <img src="https://www.jainbandhutrust.com/assests/wait.gif" class="gif-loader__img" />
    </center>    
</div>

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
            <?php $this->load->view($user_sidebar); ?>
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

           <!--  <?php $attributes = array('id' => 'update_user_form', 'method' => 'post' , 'class' => 'form_horizontal'); ?>
            <?php echo form_open_multipart('profile',$attributes);?> -->

            <form  action="<?php echo site_url('profile');?>"  class="form_horizontal"  method="post"  id="update_user_form"   name="update_user_form" enctype="multipart/form-data"> 


            <div class="profile_job_content col-lg-12">
              <div class="headline">
                <h3> Basic Information</h3>
              </div>
              <div class="profile_job_detail">
                <div class="row">
                  <div class="col-md-6 col-sm-12">
                    <div class="submit-field">
                     <h5>First Name *</h5>
                      <input class="form-control" type="text" name="firstname" value="<?= $user_info['firstname']  ?>" placeholder="John Wick"  title="First Name is required!" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" required>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="submit-field">
                     <h5>Last Name *</h5>
                      <input class="form-control" type="text" name="lastname" value="<?= $user_info['lastname']  ?>" placeholder="John Wick"  title="Last Name is required!" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" required>
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
                     <h5>Date of Birth:</h5><span id="dobError"  class="error"></span> 

                      <input type="text"  class="form-control"  id="select_date" name="dob" value="<?= $user_info['dob']?>" title="DOB is required!" required  autocomplete="off">

                      <!-- <input id="select_date" class="form-control" type="text" name="dob" value="<?= $user_info['dob']  ?>" title="DOB is required!" required readonly="readonly"> -->
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="submit-field">
                     <h5>Mobile No *</h5>

                      <input class="form-control" type="tel" pattern="^\d{10}$"  name="mobile_no"  value="<?= $user_info['mobile_no']; ?>" placeholder="Mobile *" maxlength="12"  title="Mobile is required!" required id="phone_no" >&nbsp;<span id="errmsg"></span>

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
                      <input class="form-control" type="text" name="job_title" value="<?= $user_info['job_title']; ?>" placeholder="web developer & designer" title="Job Title is required!"  id="inputTextBox" required>
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

                     <input type="text" name="postcode" value="<?= $user_info['postcode']  ?>" class="form-control" placeholder="50700" pattern="[0-9]{6}" maxlength="6" id="pin" >&nbsp;<span id="pinerrmsg"></span>


                  <!--     <input type="tel" name="postcode" value="<?= $user_info['postcode']  ?>" class="form-control" placeholder="12345" title="Postcode is required!"  required> -->
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12">
                    <div class="submit-field">
                     <h5>Full Address *</h5>
                      <input type="text" id="searchTextField" autocomplete="off" runat="server" name="location" value="<?= $user_info['location']; ?>" class="form-control" placeholder="Enter a Address" title="Full Address is required!" required>
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
                  <div class="col-md-4 col-sm-12">
                    <div class="submit-field">
                     <h5>Current CTC  *</h5>
                       <input type="text"  autocomplete="off" runat="server" name="current_salary" value="<?= $user_info['current_salary']; ?>" class="form-control salary" placeholder="Enter Current CTC " title="Current CTC  is required!"  required>&nbsp;<span clas="errmsg" id="errmsg"></span>
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
                  <div class="col-md-4 col-sm-12">
                    <div class="submit-field">
                     <h5>Expected CTC *</h5>
                       <input type="text"  autocomplete="off" runat="server" name="expected_salary" value="<?= $user_info['expected_salary']; ?>" class="form-control salary" placeholder="Enter Expected CTC  " title="Expected CTC  is required!" required >&nbsp;<span clas="errmsg" id="errmsg"></span>
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

                   <div class="col-md-4 col-sm-12">
                    <div class="submit-field">
                     <h5>Currency  *</h5>

                      <select name="currency" class="form-control" title="Currency is required!" required>
                        <option>Select Currency</option>
                        <?php foreach($currency as $cur):?>
                          <?php if($user_info['currency'] ): ?>
                          <option value="<?= $cur['code']?>" selected> <?= $cur['code'] ?> </option>
                          <?php else: ?>
                            <option value="<?=  $cur['code']; ?>"> <?= $cur['code'] ?> </option>
                        <?php endif; endforeach; ?>
                      </select>
                    </div>
                  </div>
                 
                  <div class="col-md-12 col-sm-12">
                    <div class="submit-field">
                     <h5>Skills *</h5>

                      <textarea name="skills" class="form-control"  rows="5" placeholder="eg, html, css, php, javascript" title="Skills is required!" required> <?= $user_info['skills']; ?></textarea>


                     <!--  <input type="tel" name="skills" value="<?= $user_info['skills']  ?>" class="form-control" placeholder="eg, html, css, php, javascript" title="Skills is required!" required> -->
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12">
                    <div class="submit-field">
                       <h5>Attach Resume * <small>(Maximum file size is 100kb, pdf, docx, doc)</small></h5>

                        <div id="fileError"  class="error"></div>
                       
                        <input type="hidden" name="old_resume" value="<?= $user_info['resume']; ?>"  >


                        <?php 

                        //print_r($user_info);
                          if (!empty($user_info['resume'])) { ?>

                          <span class="btn btn-file">Update Resume<input type="file" name="userfile" value="" class="FedCon-upload" onchange="ValidateSingleInput(this);"  ></span>

                          <a class="btn btn-outline" target = "_blank" href="<?= base_url().$user_info['resume']; ?>"><i class="lnr lnr-download"></i> <small style="font-weight: 600;">Downloaded Resume Here </small></a>
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

    var maxBirthdayDate = new Date();
maxBirthdayDate.setFullYear( maxBirthdayDate.getFullYear() - 18,11,31);
$( "#select_date" ).datepicker({
    dateFormat: 'dd/mm/yy',
    changeMonth: true,
    changeYear: true,
    maxDate: maxBirthdayDate,
  yearRange: '1950:'+maxBirthdayDate.getFullYear(),
});


// $("#select_date").datepicker({
//   dateFormat: 'dd/mm/yy',
//   changeMonth: true,
//   changeYear: true,
//   yearRange: 'c-99'
// });

    $(document).ready(function(){
    $("#inputTextBox").keypress(function(event){
        var inputValue = event.charCode;
        if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)){
            event.preventDefault();
        }
    });
});

      $("#pin").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#pinerrmsg").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });

    
      $(function() {
        //alert('fgdsdfdfg')
        $("#select_date").datepicker();
         $("#select_date").on('change', function(){
             
             var date = Date.parse($(this).val());

             if (date > Date.now()){
                $('#dobError').html("Please select valid Date of birth");
                 // alert('Please select another date');
                 $(this).val('');
             }
             
         });
    });
   </script>

    

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
                    $('#fileError').html("You can only upload PDF, DOC & Docx files Only.");
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


    $(document).ready(function () {
  //called when key is pressed in textbox
  $("#phone_no").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsg").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });


     $(".salary").keypress(function (e) {
         if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
            //display error message
            $(".errmsg").html("Digits Only").show().fadeOut("slow");
                   return false;
        }
      });



});


    </script>

