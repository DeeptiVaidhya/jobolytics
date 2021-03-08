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

	<meta name="description" content="With Jobolytics, you'll search many jobs online to seek out subsequent steps in your career. With tools for job search, resumes and more. Register FREE Now!">
	
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
  	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>Montserrat-master/fonts/ttf/Montserrat.css">

  	<!-- <link rel="stylesheet" href="<?php echo base_url() ?>colorlib-wizard-5/css/style.css"> -->

</head>

<style type="text/css">
	
body {
  font-family: 'Montserrat', sans-serif;
  font-weight: 500;
}
</style>


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
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.validate.js"></script>
	<script  type="text/javascript" src="<?= base_url(); ?>assets/js/vendor/bootstrap.min.js"></script>	
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/easing.min.js"></script>			
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/hoverIntent.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/superfish.min.js"></script>	
	<script  type="text/javascript" src="<?= base_url(); ?>assets/js/jquery.ajaxchimp.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery.magnific-popup.min.js"></script>	
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/owl.carousel.min.js"></script>			
	<script type="text/javascript"  src="<?= base_url(); ?>assets/js/jquery.sticky.js"></script>
	<script type="text/javascript"  src="<?= base_url(); ?>assets/js/jquery.nice-select.min.js"></script>			
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/parallax.min.js"></script>		
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/main.js"></script>	
	

	<!-------- multi select skills ----->
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>

		<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
			<script src="<?= base_url(); ?>assets/js/jquery.tagsinput-revisited.js"></script>
	<link rel="stylesheet" href="<?= base_url(); ?>assets/js/jquery.tagsinput-revisited.css" />
    <!-- JQUERY STEP -->
    <script src="<?php echo base_url() ?>colorlib-wizard-5/js/jquery.steps.js"></script>

    <script src="<?php echo base_url() ?>colorlib-wizard-5/js/main.js"></script>

  

    <!--- jquery validation script --->
    <!-- <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js"></script>
	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/additional-methods.js"></script> -->




    <script src="<?= base_url(); ?>assets/js/custome.js?13"></script>	


	<script type="text/javascript">
		$(document).ready(function(){
        
	        $("#all_states").on('change', function () {

	            $.ajax({
	                type: "POST", 
	                url: "<?php echo site_url('home/get_categories_list') ?>", 
	                
	                success: function(html){
	                   console.log(html);
	                     
	                }
	            });
	            

	        });
	    });	

	</script>

	<script type="text/javascript">
		var fullURl = window.location.href.split('.com/');
		var loginUrl = fullURl[0]+".com/auth/login_payment";
		console.log(loginUrl);
	    $("#submit_form").on('click', function () {
	    	var price  = $('#pcg_price').val();
	    	var id  = $('#id').val();
	    	var coupon_id = 0;
	    	var email = $('#email_value').val();
			var password = $('#pass_value').val();
			var get_csrf_token_name = '<?php echo $this->security->get_csrf_token_name();?>';
			var get_csrf_hash = '<?php echo $this->security->get_csrf_hash();?>' ;
	        $.ajax({
	            type: "POST", 
	            url: loginUrl,
	            data: {get_csrf_token_name:get_csrf_hash,email:email,password:password},
	            success: function(html){
	              	var data = JSON.parse(html);
	              	if(data.status == 1){
		               window.location.href = "<?php echo site_url('resume/request_resume/') ?>"+price+"/"+id;
	              	} else {
	              		$('#ajax_form_error').html(data.status);
	              	}
	            }
	        });
	        

	    });
	 

	</script>


	<script type="text/javascript">
    $('#tags').tagsInput({
					'autocomplete': {
						source: [
							"ActionScript",
				            "AppleScript",
				            "Asp",
				            "BASIC",
				            "C",
				            "C++",
				            "Clojure",
				            "COBOL",
				            "ColdFusion",
				            "Erlang",
				            "Fortran",
				            "Groovy",
				            "Haskell",
				            "Java",
				            "JavaScript",
				            "Lisp",
				            "Perl",
				            "PHP",
				            "Python",
				            "Ruby",
				            "Scala",
				            "Scheme",
				            "Codeigniter",
				            "laravel",
				            "Node Js",
				            "Angular",
						]
					} 
				});
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-64201999-4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-64201999-4');
</script>

	

</body>
</html>