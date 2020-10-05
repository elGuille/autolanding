<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


/* Exception class. */
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if(isset($_POST['name'])){
	//Sales Rep Info
	$name		= $_POST['name'];
	$email 		= $_POST['email'];
	$subject 		= $_POST['subject'];
	$message		= $_POST['message'];


	

//Creating The Body Of The E-mail
    $msg 	= "<b>Name:</b>".$name."<br>";
    $msg 	.= "<b>E-mail:</b>".$email."<br>";
    $msg 	.= "<b>Subject:</b>".$subject."<br>";
    $msg 	.= "<b>Message:</b>".$message."<br>";
	$mail = new PHPMailer(TRUE);
   /* Set the mail sender. */
  	 $mail->setFrom($email, $name);

   /* Add a recipient. */
   // $mail->addAddress('ifbasit@gmail.com');
   $mail->addAddress('hi@yoaapp.com');
   /* Set the subject. */
   $mail->Subject = 'You have received a message from '.$name;
	 /* Set the mail message body. */
   $mail->Body = $msg;
	$mail->IsHTML(true);
   /* Finally send the mail. */


   if($mail->send()){
   	echo "Thank you! We received the info";
   }
   else {
   	echo "Sorry! There was an error. Please try again!";
   }

}


 ?>