<!-- start banner Area -->
      <section class="banner-area relative" id="home">  
        <div class="overlay overlay-bg"></div>
        <div class="container">
          <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
              <h1 class="text-white">
                Contact Us        
              </h1> 
              <p class="text-white"><a href="<?= base_url(); ?>">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href=""> Contact Us</a></p>
            </div>                      
          </div>
        </div>
      </section>
      <!-- End banner Area -->  

      <!-- Start contact-page Area -->
      <section class="contact-page-area section-gap">
        <div class="container">
          <div class="row">

            <div class="col-lg-12 shdw pt-4 pb-4" style="background-color: white;">
              <div class="col-lg-12">

             <h3 class="mb-3"> Contact Us  </h3>
           	
            	<p style="text-align: center;font-size: 20px;margin-bottom: 50px;">  <b>Have a question? Need assistance?</b></p>
                
           
            <div class="col-lg-4" style="float: left;"> 
	            <div class="col-lg-12 d-flex flex-column">
	              <a class="contact-btns" href="<?php echo base_url('about');?>">About JobsClub</a>
	              <a class="contact-btns" href="<?php echo base_url('employers/auth/login');?>">Post New Job</a>
	              <a class="contact-btns" href="<?php echo base_url('employers/auth/registration');?>">Create New Account</a>
	            </div>
            </div>

            <div class="col-lg-8" style="float: left;">
            	<div class="col-lg-12 d-flex flex-column">             
	              <?php if($this->session->flashdata('success')): ?>
	                <div class="alert alert-success">
	                  <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
	                  <?=$this->session->flashdata('success')?>
	                </div>
	              <?php  endif; ?>
	         
	              <?php $attributes = array('id' => '', 'method' => 'post' , 'class' => 'form-area contact-form text-right'); ?>
	              <?php echo form_open('contact',$attributes);?>  
	                <div class="row"> 
	                  <div class="col-lg-12 form-group">
	                    <input name="username" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text " id="inputTextBox">
	                  
	                    <input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

	                    <input name="subject" placeholder="Enter your subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your subject'" class="common-input mb-20 form-control" required="" type="text">

	                    <textarea class="common-textarea mt-10 form-control" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
	                    <input type="submit" name="submit" value="Send Message" class="primary-btn mt-20 text-white" style="float: right;" />
	                  </div>
	                </div>
	              </form>
	            </div> 
            </div>
            </div>
          </div>
          </div>
        </div>  
      </section>
      <!-- End contact-page Area -->
         <script type="text/javascript">

    $(document).ready(function(){
    $("#inputTextBox").keypress(function(event){
        var inputValue = event.charCode;
        if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)){
            event.preventDefault();
        }
    });
});
</script>