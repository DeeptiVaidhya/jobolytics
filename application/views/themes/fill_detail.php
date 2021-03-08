<style type="text/css">
  .ctn
  {
      background-color: #bd2025;
      padding: 5px 10px;
      color: white;
  }
  .focus-input100{
    color:red;
  }
  span[generated|="true"]{
    color:red;
  }

</style>

  <div class="container-login100">
      <div class="wrap-login100">
        <form action="<?php echo site_url('resume/submit') ?>" method="post" id="myform" novalidate >

          <input type="hidden" name="csrf_test_name" value="<?php echo $this->security->get_csrf_hash();  ?>">
          <div id="sf1" class="frm">

            <div class="text-center" style="font-weight: 800; font-size: 35px; padding-top: -3px; padding-bottom: 19px;"><span>Step 1</span></div>

            <div class="wrap-input100 mb-3" data-validate = "Valid name is required: johnny">
              <input class="input100" id="first_name" type="text" name="first_name" placeholder="First Name">
              <span class="focus-input100" id="first_name_error" ></span>
              <span class="symbol-input100">
                <span class="lnr lnr-user"></span>
              </span>
            </div>

            <div class="wrap-input100 mb-3" data-validate = "Valid name is required: smith">
              <input class="input100" type="text" id="last_name" name="last_name" placeholder="Last Name">
              <span class="focus-input100" id="last_name_error"></span>
              <span class="symbol-input100">
                <span class="lnr lnr-user"></span>
              </span>
            </div>

            <div class="wrap-input100 mb-3" data-validate = "Valid email is required: ex@abc.xyz">
              <input class="input100" type="email" id="email" name="email_id" placeholder="Email" >
              <span class="focus-input100" id="email_error"></span>
              <span class="symbol-input100">
                <span class="lnr lnr-envelope"></span>
              </span>
            </div>

            <div class="wrap-input100 mb-3" data-validate = "Mobile Number is required">
              <input class="input100" type="text" id="mob" name="mobile" placeholder="Mobile Number">
              <span class="focus-input100" id="mob_error"></span>
              <span class="symbol-input100">
                <span class="lnr lnr-lock"></span>
              </span>
            </div>

            <div class="wrap-input100 mb-3" data-validate = "Permanent Address is required">
              <input class="input100" type="text" id="paddress" name="paddress" placeholder="Permanent Address">
              <span class="focus-input100" id="paddress_error"></span>
              <span class="symbol-input100">
                <span class="lnr lnr-lock"></span>
              </span>
            </div>

            <div class="wrap-input100 mb-3" data-validate = "current Address is required">
              <input class="input100" type="text" id="caddress" name="caddress" placeholder="current Address">
              <span class="focus-input100" id="caddress_error"></span>
              <span class="symbol-input100">
                <span class="lnr lnr-lock"></span>
              </span>
            </div>

            <div class="wrap-input100 text-center mb-3">
              <span class="focus-input100" id="step1_error"></span>
            </div>

            <div class="container-login100-form-btn pt-4">
                <button class="ctn open1" type="button">Continue</span></button> 
            </div>


          </div>

          <div id="sf2" class="frm" style="display: none;">

            <div class="text-center" style="font-weight: 800; font-size: 35px; padding-top: -3px; padding-bottom: 19px;"><span>Step 2</span></div>

            <div class="degreeAdd" id="degreeAdd">

               
              <div class="col-md-12">
                <div class="form-group">
                  <label for="pwd">Degree Name</label>
                  <input type="text" class="form-control formbox degree_name" id="degree_name" name="degree[0][0][name]" placeholder="Enter your Degree" autocomplete="my-field-name" required>
                  <span id="degree_name_error" style="color:#F56780"></span>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="pwd">Specialization</label>
                  <input type="text" class="form-control formbox" id="specialization" name="degree[0][0][specialization]" placeholder="Enter your specialization" autocomplete="my-field-name" required>
                  <span id="specialization_error" style="color:#F56780"></span>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="pwd">Year of Admission</label>
                  <input type="date" class="form-control formbox" id="year_of_admission" name="degree[0][0][year_of_admission]" placeholder="dd-mm-yyyy" autocomplete="my-field-name" required>
                  <span id="year_of_admission_error" style="color:#F56780"></span>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="pwd">Year of Passing</label>
                  <input type="date" class="form-control formbox" id="year_of_passing" name="degree[0][0][year_of_passing]" placeholder="dd-mm-yyyy" autocomplete="my-field-name" required>
                  <span id="year_of_passing_error" style="color:#F56780"></span>
                </div>
              </div>
          </div>

            <div class="container-login100-form-btn pt-4">
              <a href="javascript:void(0);" class="add_degree text-center"><h3>Add more degree</h3></a>
            </div>

            <div class="wrap-input100 text-center mb-3">
              <span class="focus-input100" id="step2_error"></span>
            </div>

            <div class="container-login100-form-btn pt-4 text-center">
              <button class="ctn open2back" style="margin-right: 10px;" type="button">Previous</button> 
              <button class="ctn open2" type="button">Continue</span></button> 
            </div>

          </div>

          <div id="sf3" class="frm" style="display: none;">

            <div class="text-center" style="font-weight: 800; font-size: 35px; padding-top: -3px; padding-bottom: 19px;"><span>Step 3</span></div>

            <div class="certificateAdd" id="certificateAdd">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="pwd">Ceritificate Name</label>
                  <input type="text" class="form-control formbox" id="certificate_name" name="certificate[0][0][name]" placeholder="Enter your Ceritificate" autocomplete="my-field-name" required="">
                  <span id="certificate_name_error" style="color:#F56780"></span>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="pwd">Year of Admission</label>
                  <input type="date" class="form-control formbox" id="year_of_certificate" name="certificate[0][0][year_of_certificate]" placeholder="Enter Certificate Date" autocomplete="my-field-name" required="">
                  <span id="year_of_certificate_error" style="color:#F56780"></span>
                </div>
              </div>
              
            </div>

            <div class="container-login100-form-btn pt-4">
              <a href="javascript:void(0);" class="add_certificate text-center"><h3>Add more certificate</h3></a>
            </div>

            <div class="wrap-input100 text-center mb-3">
              <span class="focus-input100" id="step3_error"></span>
            </div>
            
            <div class="container-login100-form-btn pt-4">
              <button class="ctn sp3back" style="margin-right: 10px;" type="button">Previous</button>
              <button class="ctn open3" type="button">Continue</span></button> 
            </div>

          </div>

          <div id="sf4" class="frm" style="display: none;">

            <div class="text-center" style="font-weight: 800; font-size: 35px; padding-top: -3px; padding-bottom: 19px;"><span>Step 4</span></div>

            <div class="Addcompany" id="Addcompany">
            <div class="col-md-12">
              <div class="form-group clearfix">
                <label for="pwd">Company Name</label>
                <a href="javascript:void(0);" class="addCF plusAdd float-right formbox1"><i class="fa fa-plus"></i></a>
                <input type="text" class="form-control formbox" id="companyid" name="company[0][companyname]" required="">
                <span id="company_name_error" style="color:#F56780"></span>
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label for="pwd">Company Email ID</label>
                <input type="email" class="form-control formbox" id="comEmailid" name="company[0][companyemail]" required="">
                <span id="company_email_error" style="color:#F56780"></span>
              </div>
            </div>
            <div class="col-md-12">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="fname">From</label>
                    <input type="date" class="form-control formbox" name="company[0][startdate]" id="startdate" placeholder="DD/MM/YY" required="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="lname">To</label>
                    <input type="date" class="form-control formbox" name="company[0][enddate]" id="todate" placeholder="DD/MM/YY" required="">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="pwd">Designation</label>
                <input type="text" class="form-control formbox" name="company[0][designation]" id="designation" required="">
                <span id="designation_error" style="color:#F56780"></span>
              </div>
            </div>
            <div class="col-md-12">
              <div class="boxxsize">
                <label for="ctc">CTC</label>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="text" class="form-control formbox" id="cts_lakhs" name="company[0][cts_lakhs]" placeholder="Lakhs" required="">
                    <span id="cts_lakhs_error" style="color:#F56780"></span>

                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="text" class="form-control formbox" id="cts_thousands" name="company[0][cts_thousands]" placeholder="Thousands" required="">
                    <span id="cts_thousands_error" style="color:#F56780"></span>
                  </div>
                </div>
              </div>
            </div>
            <!--Add more project start-->
            <div class="projectAdd" id="projectAdd">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="pwd"> Projects</label>
                  <input type="text" class="form-control formbox" id="proj" name="company[0][pro_detail][0][project]" placeholder="Project title" required="">
                   <span id="project_error" style="color:#F56780"></span>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="cpwd"></label>
                  <textarea class="form-control formbox" id="desp2" name="company[0][pro_detail][0][project_description]" placeholder="Description" cols="2" rows="2" required=""></textarea>
                  <span id="project_description_error" style="color:#F56780"></span>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="cpwd"></label>
                  <input type="text" class="form-control formbox" id="url" name="company[0][pro_detail][0][project_url]" placeholder="URL" required="">
                  <span id="project_url_error" style="color:#F56780"></span>
                </div>
              </div>
            </div>
            <div class="col-md-12 head-top bottomm">
              <a href="javascript:void(0);" class="add_project text-center"><h3>Add more projects</h3></a>
            </div>
            <!--Add more project start-->
          </div>

          <div class="wrap-input100 text-center mb-3">
              <span class="focus-input100" id="step4_error"></span>
          </div>
            
            <div class="container-login100-form-btn pt-4">
              <button class="ctn sp4back" style="margin-right: 10px;" type="button">Previous</button>
              <button class="ctn open4" type="button">Continue</span></button> 
            </div>

          </div>

          <div id="sf5" class="frm" style="display: none;">

            <div class="text-center" style="font-weight: 800; font-size: 35px; padding-top: -3px; padding-bottom: 19px;"><span>Step 5</span></div>

            <div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="tags">Skills</label>
                  <input type="text" class="form-control formbox" id="tags" name="skills" placeholder="Add to tags" autocomplete="off" >
                  <span id="skills_error" style="color:#F56780"></span>
                </div>
              </div>
                
              <div class="col-md-12">
                <div class="form-group">
                  <label for="pwd">Your Achivements</label>
                  <textarea type="textarea" class="form-control formbox" id="achivments" name="achivments" placeholder="Enter your Achivements" autocomplete="my-field-name" required=""></textarea>
                  <span id="achivments_error" style="color:#F56780"></span>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="pwd">Photo</label>
                  <input type="file" style="height: 60px!important;" class="form-control formbox" id="profile_image" name="profile_image" autocomplete="my-field-name" required>
                </div>
              </div>
              
            </div>

            <div class="wrap-input100 text-center mb-3">
              <span class="focus-input100" id="step5_error"></span>
          </div>
            
            <div class="container-login100-form-btn pt-4">
              <button class="ctn sp5back" style="margin-right: 10px;" type="button">Previous</button>
               <input type="button" class="ctn open5" name="btnsubmit" value="Submit" >
            </div>

          </div>


        </form>
      </div>
    </div>

    <script type="text/javascript">

      jQuery().ready(function() {
            var v = jQuery("#myform").validate({
              onkeyup: true,
            rules: {
               first_name: {
                required: true,
                minlength: 2,
                maxlength: 16
              },
            last_name: {
                required: true,
                minlength: 2,
                maxlength: 16
              },
              email_id: {
                required: true,
                minlength: 2,
                email: true,
                maxlength: 100,
              },
              mobile: {
                required: true,
                minlength: 10,
                maxlength: 15,
              },
              paddress: {
                required: true,
              },
              caddress: {
                required: true,
              },
              name: {
                required: true,
                minlength: 2,
              }
            },
              errorElement: "span",
              errorClass: "help-inline-error",
          });

            $(".open1").click(function() {
                if(v.form())
                {
                    $(".frm").hide("fast");
                    $("#sf2").show("slow");
                }
            });
            $(".open2").click(function() {

                if(v.form())
                {
                    $(".frm").hide("fast");
                    $("#sf3").show("slow");
                }
            });
            $(".open3").click(function() {

                if(v.form())
                {
                    $("#sf3").hide("fast");
                    $("#sf4").show("slow");
                } 
            }); 
            $(".open4").click(function() {

                if(v.form())
                {
                    $("#sf4").hide("fast");
                    $("#sf5").show("slow");
                }
                
            }); 

            $(".open5").click(function() {

                if(v.form())
                {
                    //$("#sf5").hide("fast");
                    if(checkField())
                    {
                        document.getElementById("myform").submit();
                    }
                } 
            }); 
          });
    </script>


    <script type="text/javascript">

      // back functionality 
      $('.open2back').click(function(){
          $("#sf2").hide("fast");
          $("#sf1").show("slow");
      });
      $('.sp3back').click(function(){
          $("#sf3").hide("fast");
          $("#sf2").show("slow");
      });
      $('.sp4back').click(function(){
          $("#sf4").hide("fast");
          $("#sf3").show("slow");
      });
      $('.sp5back').click(function(){
          $("#sf5").hide("fast");
          $("#sf4").show("slow");
      });
      // $(".open2").click(function() {
      //     $("#sf2").hide("fast");
      //     $("#sf3").show("slow");
      // }); 
    </script>
    <script type="text/javascript">

      function checkField() {

        var agency = document.getElementById('tags').value;

        if (agency == "") {
          $('#skills_error').html('skills is required !');
          return false;
        }

        return true;
          
      };

    </script>

    

    