<?php
	
	$name 		= 'kapil karda'; // $_POST['txt_name'];
	$email 		= 'kkarda77@gmail.com'; // $_POST['txt_email'];
	$subject 	= 'kkarda77@gmail.com'; //$_POST['txt_subject'];
	$message 	= 'kkarda77@gmail.com'; //$_POST['txt_message'];


	$email_subject = 'Jobolytics form';
	$email_to = 'kkarda77@gmail.com';

	$email_message = "Name: ".$name."\n";
    $email_message .= "Email: ".$email."\n";
    $email_message .= "Subject: ".$subject."\n";
    $email_message .= "Message: ".$message."\n";

 	// create email headers
 	// $headers = 'From: '.$email."\r\n".
 	// 'Reply-To: '.$email."\r\n" .
 	// 'X-Mailer: PHP/' . phpversion();
 	// @mail($email_to, $email_subject, $email_message, $headers);  

 	require 'phpmailer/class.phpmailer.php';
    require 'phpmailer/PHPMailerAutoload.php';
    //Create a new PHPMailer instance
    $mail = new PHPMailer;
    //Tell PHPMailer to use SMTP
    //$mail->isSMTP();
    //Enable SMTP debugging
    // 0 = off (for production use)
    // 1 = client messages
    // 2 = client and server messages
    $mail->SMTPDebug = 2;
    //Set the hostname of the mail server
    $mail->Host = '103.133.215.239';
    // use
    // $mail->Host = gethostbyname('smtp.gmail.com');
    // if your network does not support SMTP over IPv6
    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = 587;
    //Set the encryption system to use - ssl (deprecated) or tls
    $mail->SMTPSecure = 'tls';
    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;
    //Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = "support@jobolytics.com";
    //Password to use for SMTP authentication
    $mail->Password = "Support@123#";
    //Set who the message is to be sent from
    $mail->setFrom($email, $name);
    //Set an alternative reply-to address
    //$mail->addReplyTo('replyto@example.com', 'First Last');
    //Set who the message is to be sent to
    $mail->addAddress($email_to, "Contact Form Jobolytics");
    //Set the subject line
    $mail->Subject = $email_subject;
    $mail->Body = $email_message;
    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body
    //$mail->msgHTML(file_get_contents('contents.html'), __DIR__);
    //Replace the plain text body with one created manually
    //$mail->AltBody = 'This is a plain-text message body';
    //Attach an image file
    //$mail->addAttachment('images/phpmailer_mini.png');
    //send the message, check for errors
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Message sent!";
    }


?>