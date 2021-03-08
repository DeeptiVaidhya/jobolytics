<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title><?=isset($title)?$title.' - Jobolytics': 'jobolytics for Job Portal'; ?></title>
	<!-- Favicon-->
	<link rel="shortcut icon" href="<?= base_url(); ?>assets/img/favicon.png">
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/linearicons.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/magnific-popup.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/nice-select.css">					
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/animate.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/owl.theme.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/owl.transitions.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/main.css">
  	<script src="<?= base_url(); ?>assets/js/vendor/jquery-3.3.1.min.js"></script>

  	<link rel="stylesheet" href="<?php echo base_url() ?>colorlib-wizard-5/css/style.css">

</head>


<body>

	<!-- Navbar File-->
	<?php include('navbar.php'); ?>

	<!--main content start-->
		<?php $this->load->view($layout); ?>
	<!--main content end-->

	<!-- Footer File-->
	<?php include('footer.php'); ?>


	<!-- Scripts Files -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/vendor/bootstrap.min.js"></script>	
	<script src="<?= base_url(); ?>assets/js/easing.min.js"></script>			
	<script src="<?= base_url(); ?>assets/js/hoverIntent.js"></script>
	<script src="<?= base_url(); ?>assets/js/superfish.min.js"></script>	
	<script src="<?= base_url(); ?>assets/js/jquery.ajaxchimp.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/jquery.magnific-popup.min.js"></script>	
	<script src="<?= base_url(); ?>assets/js/owl.carousel.min.js"></script>			
	<script src="<?= base_url(); ?>assets/js/jquery.sticky.js"></script>
	<script src="<?= base_url(); ?>assets/js/jquery.nice-select.min.js"></script>			
	<script src="<?= base_url(); ?>assets/js/parallax.min.js"></script>		
	<script src="<?= base_url(); ?>assets/js/main.js"></script>	

    <!-- JQUERY STEP -->
    <script src="<?php echo base_url() ?>colorlib-wizard-5/js/jquery.steps.js"></script>

    <script src="<?php echo base_url() ?>colorlib-wizard-5/js/main.js"></script>

    <!--- jquery validation script --->
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js"></script>
	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/additional-methods.js"></script>


    <script src="<?= base_url(); ?>assets/js/custome.js"></script>	


	<script type="text/javascript">
		$(document).ready(function(){

			var email = $('#email_value').val();
			var password = $('#pass_value').val();
			var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>';
    		var csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';

        
	        $("#all_states").on('change', function () {

	            $.ajax({
	                type: "POST", 
	                url: "<?php echo site_url('home/get_categories_list') ?>", 
	                data:{csrfName:csrfHash,email:email,password:password};
	                success: function(html){
	                   console.log(html);
	                   return false;
	                   
	                }
	            });
	            

	        });
	    });	

	</script>

	<script type="text/javascript">

		
	    $("#submit_form").on('click', function () {

	    	console.log("hhhheeeelllloooo");
	    	alert('ksdfjhsdkgh');


	        $.ajax({
	            type: "POST", 
	            url: "<?php echo site_url('auth/login_payment');?>",
	            success: function(html){
	              console.log(html);
	            }
	        });
	        

	    });
	 

	</script>

</body>
</html>