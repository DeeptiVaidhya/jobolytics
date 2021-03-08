<!doctype html>
<html lang="en" class="no-js">
<head>
    <title>Prolan - Multi-purpose Landing Page Template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Resource style -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>resume_theme/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>resume_theme/css/swipebox.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>resume_theme/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>resume_theme/css/theme.css">

    <!-- Color style -->
    <link rel="stylesheet" href="<?php echo base_url() ?>resume_theme/css/colors/turquoise.css" class="colors">

    <!-- Switcher CSS -->
    <link href="<?php echo base_url() ?>resume_theme/css/switcher.css" rel="stylesheet">

    <!-- favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>

    <!-- Modernizr -->
    <script src="<?php echo base_url() ?>resume_theme/js/modernizr.js"></script>

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

    <style type="text/css">
        select
        {

        }
  *, :after, :before {
     box-sizing: border-box;
  }
  #orderform_ph{
    text-shadow: none;
    padding: 12px 15px 20px;
    background: rgba(13,29,45,.5);
    border-radius: 5px;
  }
  .counter__title {
      display: block;
      color: #58a5ff;
      font-size: 22px;
      text-align: center;
      line-height: 1.2;
      margin: 0 auto 15px;
      text-transform: uppercase;
  }
  .label{
    color: rgba(239,239,239,.4);
    margin-bottom: 5px;
    display: block;
    font-weight: 800;
  }
  #service_type{
    border-radius: 4px 4px 4px 4px !important;
    height: 42px !important;
  }
  #academic_level{
    border-radius: 4px 4px 4px 4px !important;
    height: 42px !important;
  }
  #deadline{
    border-radius: 4px 4px 4px 4px !important;
    height: 42px !important;
  }
  #form_pages{
    border-radius: 4px 4px 4px 4px !important;
    height: 42px !important;
  }
  .c-calc-discounts .c-counter__rh {
    font-size: 18px;
    text-align: center;
    color: #fff;
    display: inline-block;
    vertical-align: middle;
    line-height: 1.2;
    text-transform: uppercase;
  }
  .c-calc-discounts .c-counter__old-price {
    display: inline-block;
    position: relative;
    font-size: 21px;
    color: #fff;
    margin-top: 3px;
    margin-left: 8px;
  }
  .c-calc-discounts .c-counter__new-price {
    display: inline-block;
    font-size: 30px;
    color: #96bb00;
    font-weight: 700;
    margin-top: 3px;
    float: right;
    margin-left: 8px;
  }
  .c-counter__old-price:before {
    content: '';
    display: block;
    width: 44px;
    height: 23px;
    position: absolute;
    left: 50%;
    top: 50%;
    -webkit-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%);
    background: url(assets/img/main-sprite.png) no-repeat -139px -193px;
  }
  .c-counter__price{
    display: inline-block;
    vertical-align: middle;
  } 
  .btn{
    font-size: 18px;
    line-height: 1;
    padding: 12px 15px;
    font-weight: 400;
    color: #fff;
    position: relative;
    text-transform: uppercase;
    border-radius: 5px;
    background-color:#b8e113;
    border:0px;
  }
</style>


</head>
<body class="index-lead">
<div id="preloader">
    <div class="loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<header id="header">
  <div class="container">
    <div class="row align-items-center d-flex">
      <div class="col-2">
        <div id="logo">
          <a href="<?= base_url(); ?>"><img src="<?= base_url(); ?>assets/img/logo.png" alt="" title="" /></a>
        </div>
      </div>
      <div class="col-10">
        <nav id="nav-menu-container">
          <ul class="nav-menu">
           
            <?php if ($this->session->userdata('is_user_login')): ?>
            <li class=""><a href="<?= base_url('resume/resume_writing'); ?>">Resume</a></li>
              <li class="menu-has-children"><a href="">Jobs</a>
                <ul>
                  <li><a href="<?= base_url('jobs'); ?>">Search Job</a></li>
                  <li><a href="<?= base_url('jobs-by-category'); ?>">Jobs by Category</a></li>
                  <li><a href="<?= base_url('jobs-by-industry'); ?>">Jobs by Industry</a></li>
                  <li><a href="<?= base_url('jobs-by-location'); ?>">Jobs by Location</a></li>
                  <li><a href="<?= base_url('jobs'); ?>">Browse all Jobs</a></li>
                </ul>
              </li>
              <li class=""><a href="<?= base_url('about'); ?>">About</a></li>
              <li class=""><a href="<?= base_url('company'); ?>">Companies</a></li> 
              <li><a href="<?= base_url('employers') ?>"> For Employers</a> 
              </li>   
              <li class="menu-has-children margin-left-400"><img src="<?= base_url()?>assets/img/user.png" alt="user_img" height=35 /><a href="#"> <?= $this->session->userdata('username'); ?> </a>
                <ul>
                  <li><a href="<?= base_url('profile'); ?>">My Profile</a></li>
                  <li><a href="<?= base_url('myjobs'); ?>">My Applications</a></li>
                  <li><a href="<?= base_url('myjobs/matching'); ?>">Matching Jobs</a></li>
                  <li><a href="<?= base_url('setting/change_password'); ?>">Change Password</a></li>
                  <li><a href="<?= base_url('auth/logout')?>">LogOut</a></li>
                </ul>
              </li>   
            <?php elseif ($this->session->userdata('is_employer_login')): ?> 
            <li><a href="<?= base_url('employers/profile') ?>"> Dashboard</a>
            <li><a href="<?= base_url('employers/job/listing') ?>"> Manage Jobs</a>
            <li><a href="<?= base_url('employers/cv/search') ?>"> CV Search</a>
            <li><a href="<?= base_url('employers/job/post') ?>"> Post a Job</a> 
            </li>
            <li class="menu-has-children margin-left-400"><img src="<?= base_url()?>assets/img/user.png" alt="user_img"  height=35 /><a href="#"> <?= $this->session->userdata('username'); ?> </a>
                <ul>
                  <li><a href="<?= base_url('employers/profile') ?>">Dashboard</a></li>
                  <li><a href="<?= base_url('employers/job/listing') ?>">Manage Jobs</a></li>
                  <li><a href="<?= base_url('employers/setting/change_password'); ?>">Change Password</a></li>
                <li><a href="<?= base_url('employers/auth/logout')?>">LogOut</a></li>
                </ul>
              </li>   
            <?php else: ?> 
            <li class=""><a href="<?= base_url(); ?>">Home</a></li>
            <li class=""><a href="<?= base_url('resume/resume_writing'); ?>">Resume</a></li>
            <li class="menu-has-children"><a href="">Jobs</a>
              <ul>
                <li><a href="<?= base_url('jobs'); ?>">Search Job</a></li>
                <li><a href="<?= base_url('jobs-by-category'); ?>">Jobs by Category</a></li>
                <li><a href="<?= base_url('jobs-by-industry'); ?>">Jobs by Industry</a></li>
                <li><a href="<?= base_url('jobs-by-location'); ?>">Jobs by Location</a></li>
                <li><a href="<?= base_url('jobs'); ?>">Browse all Jobs</a></li>
              </ul>
            </li>
            <li class=""><a href="<?= base_url('about'); ?>">About</a></li>
            <li class=""><a href="<?= base_url('company'); ?>">Companies</a></li> 
            <li><a class="ticker-btn-nav btn_login mt-1" href="<?= ($this->uri->segment(1) == 'employers')?base_url('employers/auth/login'): base_url('auth/login') ?>"><i class="lnr lnr-user pr-1"></i> Login</a></li>
            <li><a class="nav_btn mt-1" href="<?= base_url('employers') ?>"><i class="lnr lnr-briefcase pr-1"></i> For Employers</a> </li>
            <?php endif; ?>                                 
          </ul>
        </nav><!-- #nav-menu-container -->      
      </div>      
    </div>
  </div>
</header>
<!-- /Header -->
<!-- cd-primary-nav -->
<nav>
    <ul class="cd-primary-nav">
        <li><a href="index-lead.html#home">Home</a></li>
        <li><a href="index-lead.html#features">Our Features</a></li>
        <li><a href="index-lead.html#how-it-works">How it Works</a></li>
        <li><a href="index-lead.html#our-stats">Our Stats</a></li>
        <li><a href="index-lead.html#screenshots">Screenshots</a></li>
        <li><a href="index-lead.html#our-pricing">Pricing</a></li>
        <li><a href="index-lead.html#feedback">Feedback</a></li>
        <li><a href="index-lead.html#download-app">Download</a></li>

        <li class="cd-label">Follow us</li>

        <li class="cd-social cd-facebook"><a href="index-lead.html#">Facebook</a></li>
        <li class="cd-social cd-instagram"><a href="index-lead.html#">Instagram</a></li>
        <li class="cd-social cd-dribbble"><a href="index-lead.html#">Dribbble</a></li>
        <li class="cd-social cd-twitter"><a href="index-lead.html#">Twitter</a></li>
    </ul>
</nav>
<!-- cd-primary-nav -->
<!-- Intro Content -->
<section class="cd-intro" id="home">
    <div class="intro-wrapper">
        <div class="hero-content-lead-generation">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-7 col-xs-12">
                           <div class="lead-generation-left-area">
                                <div class="lead-generation-left">
                                    <h1>Get Early Access to our App</h1>
                                    <p>Relax and enjoy our app</p>
                                </div>

                           </div>
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <div class="lead-generation-right-area">
                            <div class="lead-generation-right">

                                <div class="form-area">
                                    <form id="orderform_ph" target="_top" action="" method="get">
          <input type="hidden" name="p__utmz" id="p__utmz" value="">
          <input type="hidden" name="type" id="order_type" value="">
          <input type="hidden" name="pid" id="pid" value="">
          <input type="hidden" name="sub_id" id="sub_id" value="">
          <input type="hidden" name="partner_referer" id="partner_referer" value="http://www.edu-profit.com/script.html">
          <h3 class="counter__title">Calculate Your Price</h3>
          <div class="form-group">
            <label>Select levels:</label>
            <select style="font-size:16px!important;" id="service_type" name="service_type" onchange="calculatePrice();" class="form-control">
              <option value="0">Please select</option>
              <optgroup label="Essays">
                <option value="Annotated bibliography">Annotated bibliography</option>
                <option value="Argumentative essay">Argumentative essay</option>
                <option value="Article">Article</option>
                <option value="Article review">Article review</option>
                <option value="Biography">Biography</option>
                <option value="Book review">Book review</option>
                <option value="Business plan">Business plan</option>
                <option value="Capstone project">Capstone project</option>
                <option value="Case study">Case study</option>
                <option value="Course work">Course work</option>
                <option value="Creative writing">Creative writing</option>
                <option value="Critical thinking">Critical thinking</option>
                <option value="Essay">Essay</option>
                <option value="Literature review">Literature review</option>
                <option value="Movie review">Movie review</option>
                <option value="Presentation">Presentation</option>
                <option value="Question &amp; Answer">Question &amp; Answer</option>
                <option value="Report">Report</option>
                <option value="Research paper">Research paper</option>
                <option value="Research proposal">Research proposal</option>
                <option value="Term paper">Term paper</option>
                <option value="Thesis">Thesis</option>
                <option value="Thesis proposal">Thesis proposal</option>
                <option value="Thesis statement">Thesis statement</option>
              </optgroup>
              <optgroup label="Dissertation">
                <option value="Dissertation">Dissertation</option>
                <option value="Dissertation abstract">Dissertation abstract</option>
                <option value="Dissertation chapter">Dissertation chapter</option>
                <option value="Dissertation conclusion">Dissertation conclusion</option>
                <option value="Dissertation hypothesis">Dissertation hypothesis</option>
                <option value="Dissertation introduction">Dissertation introduction</option>
                <option value="Dissertation methodology">Dissertation methodology</option>
                <option value="Dissertation proposal">Dissertation proposal</option>
                <option value="Dissertation results">Dissertation results</option>
              </optgroup>
              <optgroup label="Homework Help">
                <option value="Biology Assignment">Biology Assignment</option>
                <option value="Chemistry Assignment">Chemistry Assignment</option>
                <option value="Engineering Assignment">Engineering Assignment</option>
                <option value="Geography Assignment">Geography Assignment</option>
                <option value="Math Assignment">Math Assignment</option>
                <option value="Physics Assignment">Physics Assignment</option>
                <option value="Programming Assignment">Programming Assignment</option>
              </optgroup>
              <optgroup label="Questions &amp;amp; Problems">
                <option value="Multiple choice questions">Multiple choice questions</option>
                <option value="Problem solving">Problem solving</option>
              </optgroup>
              <optgroup label="Admissions">
                <option value="Admission essay">Admission essay</option>
                <option value="Application letter">Application letter</option>
                <option value="Cover letter">Cover letter</option>
                <option value="Curriculum vitae">Curriculum vitae</option>
                <option value="Personal statement">Personal statement</option>
                <option value="Resume">Resume</option>
              </optgroup>
                <option value="Other">Other</option>
              </select>
          </div>
          <div class="form-group">
            <label>Select service:</label>
            <select style="font-size:16px!important;" id="academic_level" name="academic_level" onchange="calculatePrice();" class="form-control cstm-select">
              <option value="0" selected="selected">Please select</option>
              <option value="1">Undergraduate</option>
              <option value="2">Bachelor</option>
              <option value="3">Professional</option>
            </select>
          </div>
          <div class="form-group">
            <label>Urgency:</label>
            <select style="font-size:16px!important;" id="deadline" name="deadline" onchange="calculatePrice();" class="form-control">
              <option value="0" selected="selected">Please select</option>
              <option value="3 hours">3 hours</option>
              <option value="6 hours">6 hours</option>
              <option value="12 hours">12 hours</option>
              <option value="24 hours">24 hours</option>
              <option value="2 days">2 days</option>
              <option value="3 days">3 days</option>
              <option value="6 days">6 days</option>
              <option value="10 days">10 days</option>
              <option value="14 days">14 days</option>
            </select>
          </div>
          <div class="form-group">
            <div class="c-calc-discounts" style="text-align: center;">
              <span class="c-counter__rh">Price for this order:</span>
              <span class="c-counter__price"> 
                <span id="price_new" class="c-counter__new-price">30$</span>
                <span id="price_old" class="c-counter__old-price">0$</span>
              </span>
              <!-- <div class="c-counter__img-discount"> -->
                <img src="<?php echo base_url();?>resume_theme/img/img-calc-discount.png" alt="image" style="margin-left: 8px;">
             <!--  </div> -->
            </div>
          </div>
          <div class="form-group text-center">
            <?php
                if($this->session->userdata('username'))
                {  ?>
                    <a href="<?php echo site_url('resume/fill_detail'); ?>" class="btn btn-primary ">proceed to order</a>
                <?php }
                else
                { ?>
                    <a href="<?php echo site_url('auth/login'); ?>" class="btn btn-primary ">proceed to order</a>
                <?php }
            ?>
            
          </div>
          <script>
              var partner_id = 5727;
              var sub_id = '1';
          </script>
        </form>  
    </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="icon-arrow-down scroll-down-anim">
            <a href="#featured-in"><img src="<?php echo base_url() ?>resume_theme/img/icon-arrow-down.svg" alt="down-arrow"></a>
        </div>
    </div>
</section>
<!-- /Intro Content -->
<!-- Main Content -->
<main class="cd-main-content" id="main-content">
    <!-- Promo area -->
    <div class="promo-area section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="promo-icon-box text-center">
                        <div class="promo-icon">
                            <span class="icon icon-global"></span>
                        </div>
                        <div class="promo-content">
                            <h4>Design for Startups</h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis ducimus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 ">
                    <div class="promo-icon-box text-center">
                        <div class="promo-icon">
                            <span class="icon icon-mobile"></span>
                        </div>
                        <div class="promo-content">
                            <h4>Fully Customizable</h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis ducimus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="promo-icon-box text-center">
                        <div class="promo-icon">
                            <span class="icon icon-linegraph"></span>
                        </div>
                        <div class="promo-content">
                            <h4>Free Updates</h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis ducimus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Promo Area -->
    <!-- Features Area -->
    <div class="features-section-agency" id="featured-in">
        <div class="container">
            <div class="row text-center">
                <div class="features-heading">
                    <h2>Our Awesome Features</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 col-sm-6">
                    <div class="features-icon-box">
                        <div class="features-icon">
                            <span class="icon icon-documents"></span>
                        </div>
                        <div class="features-content">
                            <h4>Free Support</h4>

                            <p>
                                From goods to services, every business needs a space online to bring customers.
                            </p>
                        </div>

                    </div>
                    <div class="features-icon-box">
                        <div class="features-icon">
                            <span class="icon icon-video"></span>
                        </div>
                        <div class="features-content">
                            <h4>Tutorials</h4>

                            <p>
                                From goods to services, every business needs a space online to bring customers.
                            </p>
                        </div>

                    </div>
                    <div class="features-icon-box">
                        <div class="features-icon">
                            <span class="icon icon-pencil"></span>
                        </div>

                        <div class="features-content">
                            <h4>Creative Design</h4>

                            <p>
                                From goods to services, every business needs a space online to bring customers.
                            </p>
                        </div>

                    </div>
                </div>

                <div class="col-md-5 col-sm-6 col-md-push-2">
                    <div class="features-icon-box">
                        <div class="features-icon">
                            <span class="icon icon-mobile"></span>
                        </div>
                        <div class="features-content">
                            <h4>Easy Tuchon Mobile</h4>

                            <p>
                                From goods to services, every business needs a space online to bring customers.
                            </p>
                        </div>
                    </div>
                    <div class="features-icon-box">
                        <div class="features-icon">
                            <span class="icon icon-presentation"></span>
                        </div>
                        <div class="features-content">
                            <h4>Easy Cutomization</h4>

                            <p>
                                From goods to services, every business needs a space online to bring customers.
                            </p>
                        </div>
                    </div>
                    <div class="features-icon-box">
                        <div class="features-icon">
                            <span class="icon icon-tablet"></span>
                        </div>
                        <div class="features-content">
                            <h4>Responsive Layout</h4>

                            <p>
                                From goods to services, every business needs a space online to bring customers.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /Features Area -->
    <!-- How it works -->
    <div class="section how-it-works" id="how-it-works">
        <div class="container">
            <div class="row text-center">
                <div class="how-it-works-heading">
                    <h2 class="section-title">How It Work's</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 board">
                    <div class="board-inner">
                        <ul class="nav nav-tabs liner" id="myTab" role=tablist>
                            <li class="active">
                                <a href="index-lead.html#userexperience" aria-controls="userexperience" role="tab" data-toggle="tab" title="User Experience">
                                    <span class="round-tabs one">
                                        <i class="icon icon-profile-male"></i>
                                    </span>
                                </a>
                            </li>

                            <li>
                                <a href="index-lead.html#profile" aria-controls="profile" role="tab" data-toggle="tab" title="Sketch">
                                    <span class="round-tabs two">
                                        <i class="icon icon-pencil"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index-lead.html#prototyping" aria-controls="prototyping" role="tab" data-toggle="tab" title="Prototyping">
                                    <span class="round-tabs three">
                                        <i class="icon icon-layers"></i>
                                    </span>
                                </a>
                            </li>

                            <li>
                                <a href="index-lead.html#uidesign" aria-controls="uidesign" role="tab" data-toggle="tab" title="UI Design">
                                    <span class="round-tabs four">
                                        <i class="icon icon-aperture"></i>
                                    </span>
                                </a>
                            </li>

                            <li><a href="index-lead.html#doner" aria-controls="doner" role="tab" data-toggle="tab" title="Development">
                                <span class="round-tabs five">
                                    <i class="icon icon-tools-2"></i>
                                </span>
                            </a>
                            </li>

                        </ul>
                    </div>

                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="userexperience">

                            <h3 class="head text-center">User Experience</h3>

                            <p class="narrow text-center">
                                Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis
                                tincidunt ut, utinam saperet facilisi an vim.
                            </p>

                            <p class="text-center">
                                <a href="" class="btn btn-success btn-outline-rounded green"> Get Quote <span
                                        class="glyphicon glyphicon-send"></span></a>
                            </p>
                        </div>
                        <div class="tab-pane fade" id="profile">
                            <h3 class="head text-center">Sketch</h3>

                            <p class="narrow text-center">
                                Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis
                                tincidunt ut, utinam saperet facilisi an vim.
                            </p>

                            <p class="text-center">
                                <a href="" class="btn btn-success btn-outline-rounded green"> Get Quote <span
                                        class="glyphicon glyphicon-send"></span></a>
                            </p>

                        </div>
                        <div class="tab-pane fade" id="prototyping">
                            <h3 class="head text-center">Prototyping</h3>

                            <p class="narrow text-center">
                                Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis
                                tincidunt ut, utinam saperet facilisi an vim.
                            </p>

                            <p class="text-center">
                                <a href="" class="btn btn-success btn-outline-rounded green"> Get Quote <span
                                        class="glyphicon glyphicon-send"></span></a>
                            </p>
                        </div>
                        <div class="tab-pane fade" id="uidesign">
                            <h3 class="head text-center">UI Design</h3>

                            <p class="narrow text-center">
                                Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis
                                tincidunt ut, utinam saperet facilisi an vim.
                            </p>

                            <p class="text-center">
                                <a href="" class="btn btn-success btn-outline-rounded green"> Get Quote <span
                                        class="glyphicon glyphicon-send"></span></a>
                            </p>
                        </div>
                        <div class="tab-pane fade" id="doner">
                            <div class="text-center">
                                <i class="img-intro icon-checkmark-circle"></i>
                            </div>
                            <h3 class="head text-center">Development</h3>

                            <p class="narrow text-center">
                                Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis
                                tincidunt ut, utinam saperet facilisi an vim.
                            </p>

                            <p class="text-center">
                                <a href="" class="btn btn-success btn-outline-rounded green"> Get Quote <span
                                        class="glyphicon glyphicon-send"></span></a>
                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /How it works -->
    <!-- Our Stats -->
    <div class="our-stats section" id="our-stats">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="our-stats-box text-center">
                        <div class="our-stat-icon">
                            <span class="icon icon-genius"></span>
                        </div>
                        <div class="our-stat-info">
                            <span class="stats" data-from="1" data-to="32637" data-speed="5000"
                                  data-refresh-interval="50"></span>

                            <h5>PROJECTS EXECUTED</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="our-stats-box text-center">
                        <div class="our-stat-icon">
                            <span class="icon icon-tools"></span>
                        </div>
                        <div class="our-stat-info">
                            <span class="stats" data-from="1" data-to="209" data-speed="5000"
                                  data-refresh-interval="50"></span>

                            <h5>WRITERS ONLINE</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="our-stats-box text-center">
                        <div class="our-stat-icon">
                            <span class="icon icon-global"></span>
                        </div>
                        <div class="our-stat-info">
                            <span class="stats" data-from="1" data-to="947" data-speed="5000"
                                  data-refresh-interval="50"></span>

                            <h5>AMAZING WRITERS</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="our-stats-box text-center">
                        <div class="our-stat-icon">
                            <span class="icon icon-happy"></span>
                        </div>
                        <div class="our-stat-info">
                            <span class="stats" data-from="1" data-to="6" data-speed="5000"
                                  data-refresh-interval="50"></span>

                            <h5>ORDER IN PROGRESS</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Our Stats -->
    <!-- Why you love -->
    <div class="why-you-love section">
        <div class="container">
            <div class="row text-center">
                <div class="why-you-love-heading">
                    <h2>WHY YOU’LL LOVE</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="why-you-love-icon-box text-center">
                        <div class="why-you-love-icon">
                            <span class="icon icon-lightbulb"></span>
                        </div>
                        <div class="why-you-love-content">
                            <h4>INTUITIVE</h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis ducimus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="why-you-love-icon-box text-center">
                        <div class="why-you-love-icon">
                            <span class="icon icon-hotairballoon"></span>
                        </div>
                        <div class="why-you-love-content">
                            <h4>FAST</h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis ducimus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="why-you-love-icon-box text-center">
                        <div class="why-you-love-icon">
                            <span class="icon icon-adjustments"></span>
                        </div>
                        <div class="why-you-love-content">
                            <h4>EASY TO USE</h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis ducimus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="why-you-love-icon-box padding-top30 text-center">
                        <div class="why-you-love-icon">
                            <span class="icon icon-grid"></span>
                        </div>
                        <div class="why-you-love-content">
                            <h4>BOOTSTRAP 3</h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis ducimus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="why-you-love-icon-box padding-top30 text-center">
                        <div class="why-you-love-icon">
                            <span class="icon icon-mobile"></span>
                        </div>
                        <div class="why-you-love-content">
                            <h4>Responsive</h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis ducimus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="why-you-love-icon-box padding-top30 text-center">
                        <div class="why-you-love-icon">
                            <span class="icon icon-heart"></span>
                        </div>
                        <div class="why-you-love-content">
                            <h4>BEAUTIFUL</h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis ducimus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Why you love -->
    <!--Screenshots Area -->
    <div class="screenshot-area section" id="screenshots">
        <div class="container">
            <div class="row text-center">
                <div class="screenshots-heading">
                    <h2 class="section-title">App Screenshots</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="screenshot-carousel">
                        <div id="myCarousel" class="carousel slide">

                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>

                            <!-- Carousel items -->
                            <div class="carousel-inner">

                                <div class="item active">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <a href="index-lead.html#x">
                                                <img class="carousel-img" src="<?php echo base_url() ?>resume_theme/img/screenshots/screenshot-1.jpg" alt="Image"/>
                                            </a>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <a href="index-lead.html#x">
                                                <img class="carousel-img" src="<?php echo base_url() ?>resume_theme/img/screenshots/screenshot-2.jpg" alt="Image"/>
                                            </a>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <a href="index-lead.html#x">
                                                <img class="carousel-img" src="<?php echo base_url() ?>resume_theme/img/screenshots/screenshot-3.jpg" alt="Image"/>
                                            </a>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <a href="index-lead.html#x">
                                                <img class="carousel-img" src="<?php echo base_url() ?>resume_theme/img/screenshots/screenshot-4.jpg" alt="Image"/>
                                            </a>
                                        </div>
                                    </div>
                                    <!--/row-->
                                </div>
                                <!--/item-->

                                <div class="item">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <a href="index-lead.html#x">
                                                <img class="carousel-img" src="<?php echo base_url() ?>resume_theme/<?php echo base_url() ?>resume_theme/img/screenshots/screenshot-5.jpg" alt="Image"/>
                                            </a>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <a href="index-lead.html#x">
                                                <img class="carousel-img" src="<?php echo base_url() ?>resume_theme/img/screenshots/screenshot-6.jpg" alt="Image"/>
                                            </a>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <a href="index-lead.html#x">
                                                <img class="carousel-img" src="<?php echo base_url() ?>resume_theme/img/screenshots/screenshot-7.jpg" alt="Image"/>
                                            </a>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <a href="index-lead.html#x">
                                                <img class="carousel-img" src="<?php echo base_url() ?>resume_theme/img/screenshots/screenshot-8.jpg" alt="Image"/>
                                            </a>
                                        </div>
                                    </div>
                                    <!--/row-->
                                </div>
                                <!--/item-->

                                <div class="item">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <a href="index-lead.html#x">
                                                <img class="carousel-img" src="<?php echo base_url() ?>resume_theme/img/screenshots/screenshot-9.jpg" alt="Image"/>
                                            </a>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <a href="index-lead.html#x">
                                                <img class="carousel-img" src="<?php echo base_url() ?>resume_theme/img/screenshots/screenshot-10.jpg" alt="Image"/>
                                            </a>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <a href="index-lead.html#x">
                                                <img class="carousel-img" src="<?php echo base_url() ?>resume_theme/img/screenshots/screenshot-11.jpg" alt="Image"/>
                                            </a>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <a href="index-lead.html#x">
                                                <img class="carousel-img" src="<?php echo base_url() ?>resume_theme/img/screenshots/screenshot-12.jpg" alt="Image"/>
                                            </a>
                                        </div>
                                    </div>
                                    <!--/row-->
                                </div>
                                <!--/item-->

                            </div>
                            <!--/carousel-inner-->

                        </div>
                        <!--/myCarousel-->

                    </div>
                    <!--/well-->
                </div>
            </div>
        </div>
    </div>
    <!--Screenshot Area -->
    <!--start our pricing table -->
    <div class="our-pricing-plan section" id="our-pricing">
        <div class="container">
            <div class="row">
                <div class="col-md-12  text-center">
                    <div class="pricing-table-heading">
                        <h2 class="section-title">SELECT A PLAN</h2>
                    </div>
                    <!-- /.pricing-table-heading -->
                </div>
                <!-- /.col-md-4 col-md-offset-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->

        <div class="container text-center" id="pricing">
            <div class="row">
                <div class="col-md-12">
                    <div class="pricing-body">
                        <div class="col-sm-3">
                            <div class="profetional-plan price-plan price-plan-active">
                                <div class="plan-heading">
                                    <h3>PROFESSIONAL</h3>

                                    <p>$16/Month</p>
                                </div>
                                <a href="index-lead.html#" class="btn btn-professional">upgrade</a>

                                <div class="plan-feature">
                                    <p><strong>Free </strong> feature one</p>

                                    <p><strong>Unlimited </strong> feature two</p>

                                    <p><strong>Unlimited </strong> feature three</p>

                                    <p><strong>2x </strong> feature four</p>

                                    <p><strong>100x </strong> feature five</p>
                                </div>
                                <!-- /.pricing-feature -->
                            </div>
                            <!-- /.personal-plan -->
                        </div>
                        <div class="col-sm-3">
                            <div class="profetional-plan price-plan price-plan-active">
                                <div class="plan-heading">
                                    <h3>PROFESSIONAL</h3>

                                    <p>$16/Month</p>
                                </div>
                                <a href="index-lead.html#" class="btn btn-professional">upgrade</a>

                                <div class="plan-feature">
                                    <p><strong>Free </strong> feature one</p>

                                    <p><strong>Unlimited </strong> feature two</p>

                                    <p><strong>Unlimited </strong> feature three</p>

                                    <p><strong>2x </strong> feature four</p>

                                    <p><strong>100x </strong> feature five</p>
                                </div>
                                <!-- /.pricing-feature -->
                            </div>
                            <!-- /.personal-plan -->
                        </div>
                        <div class="col-sm-3">
                            <div class="profetional-plan price-plan price-plan-active">
                                <div class="plan-heading">
                                    <h3>PROFESSIONAL</h3>

                                    <p>$16/Month</p>
                                </div>
                                <a href="index-lead.html#" class="btn btn-professional">upgrade</a>

                                <div class="plan-feature">
                                    <p><strong>Free </strong> feature one</p>

                                    <p><strong>Unlimited </strong> feature two</p>

                                    <p><strong>Unlimited </strong> feature three</p>

                                    <p><strong>2x </strong> feature four</p>

                                    <p><strong>100x </strong> feature five</p>
                                </div>
                                <!-- /.pricing-feature -->
                            </div>
                            <!-- /.personal-plan -->
                        </div>
                        <div class="col-sm-3">
                            <div class="profetional-plan price-plan price-plan-active">
                                <div class="plan-heading">
                                    <h3>PROFESSIONAL</h3>

                                    <p>$16/Month</p>
                                </div>
                                <a href="index-lead.html#" class="btn btn-professional">upgrade</a>

                                <div class="plan-feature">
                                    <p><strong>Free </strong> feature one</p>

                                    <p><strong>Unlimited </strong> feature two</p>

                                    <p><strong>Unlimited </strong> feature three</p>

                                    <p><strong>2x </strong> feature four</p>

                                    <p><strong>100x </strong> feature five</p>
                                </div>
                                <!-- /.pricing-feature -->
                            </div>
                            <!-- /.personal-plan -->
                        </div>

                        
                    </div>
                    <!-- /.pricing-body -->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.our-pricing-table -->
    <!-- Testimonial area section -->
    <div id="feedback" class="testimonial-area section">

        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="testimonial-area-heading">
                        <h2>What Client Say About Us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" data-wow-delay="0.2s">
                    <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                        <!-- Bottom Carousel Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#quote-carousel" data-slide-to="0" class="active"><img
                                    class="img-responsive " src="<?php echo base_url() ?>resume_theme/img/clients/client-1.jpg" alt="client">
                            </li>
                            <li data-target="#quote-carousel" data-slide-to="1">
                                <img class="img-responsive"
                                src="<?php echo base_url() ?>resume_theme/img/clients/client-2.jpg" alt="client">
                            </li>
                            <li data-target="#quote-carousel" data-slide-to="2">
                                <img class="img-responsive" src="<?php echo base_url() ?>resume_theme/img/clients/client-3.jpg" alt="clinet">
                            </li>
                        </ol>

                        <!-- Carousel Slides / Quotes -->
                        <div class="carousel-inner text-center">

                            <!-- Quote 1 -->
                            <div class="item active">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-2 col-xs-12">

                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                                velit esse cillum dolore eu fugiat nulla pariatur. !</p>
                                            <small>John Doe</small>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- Quote 2 -->
                            <div class="item">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-2 col-xs-12">

                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                                velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                            <small>Nargis Doe</small>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- Quote 3 -->
                            <div class="item">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-2 col-xs-12">

                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                                velit esse cillum dolore eu fugiat nulla pariatur. .</p>
                                            <small>Jane Doe</small>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                        </div>

                        <!-- Carousel Buttons Next/Prev -->

                    </div>
                </div>
            </div>
        </div>

    </div>
   
    <!-- /Brand Logo Section -->
    <!-- Faq area section -->
    <div class="faq-area section" id="faq-area">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center">
                    <div class="faq-header">
                        <h2 class="section-title">FAQ</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="faq-inner-area">
                        <div class="row padding-top40">
                            <!--FAQ -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="row">
                                    <div class="col-md-2 margin-bottom20">
                                        <span class="faq-icon">Q</span>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="faq-inner">
                                            <h4>Not a image?</h4>

                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga
                                                consequuntur
                                                magnam, ea est quasi natus. Delectus, est doloribus id ullam nemo atque?
                                                Tenetur
                                                odio error voluptatibus reprehenderit dolor velit fugit.</p>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-2 margin-bottom20">
                                        <span class="faq-icon">Q</span>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="faq-inner">
                                            <h4>Can I upgrade/downgrade my plan?</h4>

                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga
                                                consequuntur
                                                magnam, ea est quasi natus. Delectus, est doloribus id ullam nemo atque?
                                                Tenetur
                                                odio error voluptatibus reprehenderit dolor velit fugit.</p>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-2 margin-bottom20">
                                        <span class="faq-icon">Q</span>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="faq-inner">
                                            <h4>What is the Trial Mode?</h4>

                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga
                                                consequuntur
                                                magnam, ea est quasi natus. Delectus, est doloribus id ullam nemo atque?
                                                Tenetur
                                                odio error voluptatibus reprehenderit dolor velit fugit.</p>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="row">
                                    <div class="col-md-2 margin-bottom20">
                                        <span class="faq-icon">Q</span>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="faq-inner">
                                            <h4>Not a image?</h4>

                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga
                                                consequuntur
                                                magnam, ea est quasi natus. Delectus, est doloribus id ullam nemo atque?
                                                Tenetur
                                                odio error voluptatibus reprehenderit dolor velit fugit.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-2 margin-bottom20">
                                        <span class="faq-icon">Q</span>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="faq-inner">
                                            <h4>What is a Charge?</h4>

                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga
                                                consequuntur
                                                magnam, ea est quasi natus. Delectus, est doloribus id ullam nemo atque?
                                                Tenetur
                                                odio error voluptatibus reprehenderit dolor velit fugit.</p>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-2 margin-bottom20">
                                        <span class="faq-icon">Q</span>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="faq-inner">
                                            <h4>What is the Trial Mode?</h4>

                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga
                                                consequuntur
                                                magnam, ea est quasi natus. Delectus, est doloribus id ullam nemo atque?
                                                Tenetur
                                                odio error voluptatibus reprehenderit dolor velit fugit.</p>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <!--FAQ -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    
    <!-- /Download app area section -->

</main>
<!-- Footer area -->
<footer class="footer-area footer-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-3  col-md-3 col-sm-6">
        <div class="single-footer-widget newsletter">
          <h6>About</h6>
          <p>Lorem ipsum dolor sit amet, iudico dummy text 
          vituperatoribus at usu cum ex vituperatoribus at usu cum ex nostrud singulis.</p>
          <p>Lorem ipsum dolor sit amet, iudico dummy text 
          vituperatoribus at usu vituperatoribus.</p>
          <div id="mc_embed_signup">
            <form  action="#" method="get" class="form-inline">

              <div class="form-group row no-gutters">
                <div class="col-10">
                  <input name="" placeholder="Enter Email" type="email">
                </div> 
                <div class="col-2">
                  <button class="nw-btn primary-btn fa fa-paper-plane-o"></button>
                </div> 
              </div>    
            </form>
          </div>    
        </div>
      </div>
      <div class="col-lg-2  col-md-2 col-sm-6">
        <div class="single-footer-widget">
          <h6>Hot Links</h6>
          <ul class="footer-nav">
            <li><a href="<?= base_url('employers'); ?>">Post a Job</a></li>
            <li><a href="<?= base_url('contact'); ?>">Contact Us</a></li>
            <li><a href="<?= base_url('about'); ?>">About Us</a></li>
            <li><a href="#">Our Blogs</a></li>
            <li><a href="<?= base_url('jobs-by-category'); ?>">Job Category</a></li>
            <li><a href="<?= base_url('jobs-by-industry'); ?>">Job Industry</a></li>
            <li><a href="<?= base_url('jobs-by-location'); ?>">Job Location</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4  col-md-4 col-sm-6">
        <div class="single-footer-widget">
          <h6>Latest Posts</h6>
          <ul class="footer-nav">
            <li><a href="#"><i class="fa fa-minus pr-1"></i> If you need a crown or 
              lorem an implant <br> you will pay it gap </a>
              <p><small>July 2, 2018</small></p>
            </li>
            <li><a href="#"><i class="fa fa-minus pr-1"></i> If you need a crown or 
              lorem an implant<br> you will pay it gap </a>
              <p><small>Aug 9, 2018</small></p>
            </li>
            <li><a href="#"><i class="fa fa-minus pr-1"></i> If you need a crown or 
              lorem an implant<br> you will pay it gap </a>
              <p><small>Sep 20, 2018</small></p>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3  col-md-3 col-sm-6">
        <div class="single-footer-widget mail-chimp">
          <h6 class="mb-20">Instragram Feed</h6>
          <ul class="instafeed d-flex flex-wrap">
            <li><img src="<?= base_url(); ?>assets/img/i1.jpg" alt=""></li>
            <li><img src="<?= base_url(); ?>assets/img/i2.jpg" alt=""></li>
            <li><img src="<?= base_url(); ?>assets/img/i3.jpg" alt=""></li>
            <li><img src="<?= base_url(); ?>assets/img/i4.jpg" alt=""></li>
            <li><img src="<?= base_url(); ?>assets/img/i5.jpg" alt=""></li>
            <li><img src="<?= base_url(); ?>assets/img/i6.jpg" alt=""></li>
            <li><img src="<?= base_url(); ?>assets/img/i7.jpg" alt=""></li>
            <li><img src="<?= base_url(); ?>assets/img/i8.jpg" alt=""></li>
            <li><img src="<?= base_url(); ?>assets/img/i1.jpg" alt=""></li>
            <li><img src="<?= base_url(); ?>assets/img/i2.jpg" alt=""></li>
            <li><img src="<?= base_url(); ?>assets/img/i3.jpg" alt=""></li>
            <li><img src="<?= base_url(); ?>assets/img/i4.jpg" alt=""></li>
          </ul>
        </div>
      </div>
      
      
    </div>

    
  </div>
</footer>
<!-- End Footer Area -->

<!-- start Copyright Area -->
<div class="copyright1">
  <div class="container">
    <div class="row"> 
      <div class="col-md-6 col-8">
        <div class="bottom_footer_info">
          <p>Copyright &copy; 2019 by CodeGlamour. All rights reserved</p>
        </div>
      </div>
      <div class="col-md-6 col-4">
        <div class="bottom_footer_logo text-right">
          <ul class="list-inline">
            <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fa fa-behance"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Copyright Area --> 
<!-- Modal -->
<section id="modals">
    <!-- Login Modal -->
    <div class="modal login fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="form-signin-heading modal-title" id="myModalLabel">Login</h2>
                </div>
                <form method="post" id="login">
                    <div class="modal-body">
                        <fieldset>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <span class="input input--chisato">
                                        <input class="input__field input__field--chisato" type="text" name="username"
                                               id="username"/>
                                        <label class="input__label input__label--chisato" for="username">
                                            <span class="input__label-content input__label-content--chisato"
                                                  data-content="Username">Username</span>
                                        </label>
                                    </span>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <span class="input input--chisato">
                                        <input class="input__field input__field--chisato" type="password"
                                               name="password" id="password"/>
                                        <label class="input__label input__label--chisato" for="password">
                                            <span class="input__label-content input__label-content--chisato"
                                                  data-content="Password">Password </span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="modal-footer">
                        <a href="index-lead.html#" class="pull-left lost-pwd">(Lost Password?)</a>
                        <button type="button" class="btn btn-default btn-border" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-color">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Login Modal -->
    <!-- Registration Modal -->
    <div class="modal register fade" id="registrationModal" tabindex="-1" role="dialog"
         aria-labelledby="registrationModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="form-signin-heading modal-title" id="registrationModalLabel">Create a new account</h2>
                </div>
                <form method="post" id="registration">
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <span class="input input--chisato">
                                        <input class="input__field input__field--chisato" type="text" name="firstname"
                                               id="firstname"/>
                                        <label class="input__label input__label--chisato" for="firstname">
                                            <span class="input__label-content input__label-content--chisato"
                                                  data-content="First Name">First Name</span>
                                        </label>
                                    </span>

                                </div>
                                <div class="col-md-6">
                                    <span class="input input--chisato">
                                        <input class="input__field input__field--chisato" type="text" name="lastname"
                                               id="lastname"/>
                                        <label class="input__label input__label--chisato" for="lastname">
                                            <span class="input__label-content input__label-content--chisato"
                                                  data-content="Last Name">Last Name</span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <span class="input input--chisato">
                                        <input class="input__field input__field--chisato" type="password"
                                               name="reg_password" id="reg_password"/>
                                        <label class="input__label input__label--chisato" for="reg_password">
                                            <span class="input__label-content input__label-content--chisato"
                                                  data-content="Password">Password</span>
                                        </label>
                                    </span>
                                </div>
                                <div class="col-md-6">
                                    <span class="input input--chisato">
                                        <input class="input__field input__field--chisato" type="password"
                                               name="re_reg_password" id="re_reg_password"/>
                                        <label class="input__label input__label--chisato" for="re_reg_password">
                                            <span class="input__label-content input__label-content--chisato"
                                                  data-content="Re-enter Password">Re-enter Password</span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <span class="input input--chisato">
                                        <input class="input__field input__field--chisato" type="email" name="reg_email"
                                               id="reg_email"/>
                                        <label class="input__label input__label--chisato" for="reg_email">
                                            <span class="input__label-content input__label-content--chisato"
                                                  data-content="Email">Email</span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-border" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-color">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Registration Modal -->
</section>
<!-- Scroll To Top -->
<a href="index-lead.html#" class="scrollup"><i class="fa fa-angle-up"></i></a>
<!-- Style Switcher -->
<script src="<?php echo base_url() ?>resume_theme/js/jquery-1.11.3.min.js"></script>
<script src="<?php echo base_url() ?>resume_theme/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>resume_theme/js/jquery.ajaxMailChimp.min.js"></script>
<script src="<?php echo base_url() ?>resume_theme/js/jquery.touchSwipe.min.js"></script>
<script src="<?php echo base_url() ?>resume_theme/js/jquery.swipebox.min.js"></script>
<script src="<?php echo base_url() ?>resume_theme/js/fappear.js"></script>
<script src="<?php echo base_url() ?>resume_theme/js/classie.js"></script>
<script src="<?php echo base_url() ?>resume_theme/js/jquery.countTo.js"></script>
<script src="<?php echo base_url() ?>resume_theme/js/jquery.typer.js"></script>
<script src="<?php echo base_url() ?>resume_theme/js/jquery.smooth-scroll.js"></script>
<script src="<?php echo base_url() ?>resume_theme/js/switcher.js"></script>
<script src="<?php echo base_url() ?>resume_theme/js/main.js"></script>
<!-- Resource jQuery -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-67149717-1', 'auto');
    ga('send', 'pageview');

</script>

<script type="text/javascript">
    function calculatePrice()
    {
        
        var academic_level = $('#academic_level').val();
        var deadline = $('#deadline').val();

        //alert(academic_level + deadline );

        if(academic_level == 0)
        {
            $('#price_old').text('0$');
            $('#price_new').text('0$');
        }
        else if(deadline == 0)
        {
            $('#price_old').text('0$');
            $('#price_new').text('0$');
        }
        else
        {
            $.ajax({
              type: "POST",
              url: "<?php echo site_url('Resume/get_price') ?>",
              data: {'<?php echo $this->security->get_csrf_token_name(); ?>':'<?php echo $this->security->get_csrf_hash(); ?>',academic_level:academic_level , deadline: deadline },
              cache: false,
              success: function(data){
                var data_value = JSON.parse(data);
                console.log(data);
                $('#price_old').text(data_value.price+'$');
                $('#price_new').text(data_value.price_after_discount+'$');
              }
            });
        }
   

    }
</script>
</body>
</html>