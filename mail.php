<?php

$msg = "";
if(!empty($_POST)) {
    $name = $_POST['frmName'];
    if(trim($name) == '') {
        $msg.= 'Name is required.<br>';
    }

    $email = $_POST['frmEmail'];
    if(trim($email) == '') {
        $msg.= 'Email is required.<br>';
    }else {
    	if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
		  $msg.= 'Invalid email.<br>';
		}
    }

    $phone = $_POST['frmPhone'];
    if(trim($phone) == '') {
        $msg.= 'Phone is required.<br>';;
    }

    $subject = $_POST['frmSubject'];
    if(trim($subject) == '') {
        $msg.= 'Subject is required.<br>';
    }

    $text = $_POST['frmText'];

    if(trim($msg) == '') {
        // Configuring SMTP server settings
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPSecure = 'tls';
        $mail->SMTPAuth = true;
        $mail->Username = "auspiciouscluster@gmail.com";
        $mail->Password = "12cluster@2017";         // SMTP account password example

        $mail->From = 'email@email.com';
        $mail->FromName = 'Name';

        $body = "New request from ".$name;
        $body.= "<br>Email: ".$email;
        $body.= "<br>Phone: ".$phone;
        $body.= "<br>Text: ".$text;

        // Email Sending Details
        $mail->addAddress("auspiciouscluster@gmail.com");
        $mail->Subject = $subject;
        $mail->msgHTML($body);

        // Success or Failure
        if (!$mail->send()) {
            $msg = "Mailer Error: " . $mail->ErrorInfo;
        }
        else {
            $msg = "Message sent!";
        }
    }
}
        ?>
