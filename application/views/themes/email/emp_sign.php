<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
</style>
<body style="font-family: sans-serif; background: beige;">
<div class="container" style="margin: 0 auto; width: 90%;">
  <div style="display: flex;">
    <div style="width: 50%;">
      <img src="https://www.jobolytics.com/assets/email_tmp/logo.png" alt="logo" style="width: 260px;">

      <h1>Dear <?php echo $firstname;?>,</h1>
     <p valign="top" style="padding-top:10px;font-family:Helvetica,Helvetica neue,Arial,Verdana,sans-serif;color:#333333;font-size:16px;line-height:20px;text-align:left;font-weight:none" align="left">Please verify your email address so we know that it's really you!</p>
      <!-- <h3 valign="top" style="padding-top:30px;font-family:Helvetica neue,Helvetica,Arial,Verdana,sans-serif;color:#205081;font-size:20px;line-height:32px;text-align:left;font-weight:bold" align="left">Please verify your email address</h3> -->

      <a style="font-size:16px;font-family:Helvetica,Helvetica neue,Arial,Verdana,sans-serif;font-weight:none;color:#ffffff;text-decoration:none;background-color:#3572b0;border-top:11px solid #3572b0;border-bottom:11px solid #3572b0;border-left:20px solid #3572b0;border-right:20px solid #3572b0;border-radius:5px;display:inline-block" target="_blank"  
       href= "https://www.jobolytics.com/employers/auth/verify_email/<?php echo $user_id;?>">Verify my email address</a>

    </div>
    <div style="width: 50%; text-align: center;">
      <img src="https://www.jobolytics.com/assets/email_tmp/profile.png" alt="profile" style="width: 450px; padding: 48px 0 0 0;">
    </div>
  </div>

  <div style="text-align: center;padding: 90px 0 13px 0;">
      <p style="color: #a4a7a9;font-size:16px;">Copyright &copy; 2020 by <a href="https://www.jobolytics.com/">Jobolytics.</a> All rights reserved</p>

    <!-- <p style="font-size: 14px; color: #a4a7a9;">Copyright@2019 | All rights reserved</p> -->
    <a target = "_blank" href="https://www.facebook.com/Jobolytics-2051925195055407" class="fa fa-facebook" style=" padding: 12px; font-size: 30px; width: 40px; text-align: center; text-decoration: none; margin: 5px 2px;background: #3B5998; color: white; border-radius: 12%;"> <img src="https://www.jobolytics.com/assets/email_tmp/fb.png" alt="profile" style="width: 30px;"></a>

    <a target = "_blank" href="https://twitter.com/jobolytics" class="fa fa-twitter" style=" padding: 12px; font-size: 30px; width: 40px; text-align: center; text-decoration: none; margin: 5px 2px;background: #00aced;color: white; border-radius: 12%;"><img src="https://www.jobolytics.com/assets/email_tmp/twitter1.png" alt="profile" style="width: 30px;"></a>

    <a target = "_blank" href="https://www.instagram.com/jobolytics" class="fa fa-instagram" style=" padding: 12px; font-size: 30px; width: 40px; text-align: center; text-decoration: none; margin: 5px 2px;background: #dd4b39;; color: white; border-radius: 12%;"><img src="https://www.jobolytics.com/assets/email_tmp/instagram.png" alt="profile" style="width: 30px;"></a>

    <a target = "_blank" href="https://www.linkedin.com/company/jobolytics" class="fa fa-linkedin" style=" padding: 12px; font-size: 30px; width: 40px; text-align: center; text-decoration: none; margin: 5px 2px;background: #225982; color: white; border-radius: 12%;">
      <img src="https://www.jobolytics.com/assets/email_tmp/linkedin.png" alt="profile" style="width: 30px;">
    </a>
  </div>
</div>
</body>
</html>