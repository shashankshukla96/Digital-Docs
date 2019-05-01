<?php
  $mailto = "shashankshukla96@gmail.com";
  $mailSub = "Hello";
  $mailMsg = "SHSHSHSHSHS";
  require 'PHPMailer-master/PHPMailerAutoload.php';
  $mail = new PHPMailer();
  $mail ->IsSmtp();
  $mail ->SMTPDebug = 0;
  $mail ->SMTPAuth = true;
  $mail ->SMTPSecure = 'ssl';
  $mail ->Host = "smtp.gmail.com";
  $mail ->Port = 465; // or 587
  $mail ->IsHTML(true);
  $mail ->Username = "shashankshukla96@gmail.com";
  $mail ->Password = "arunraishashank";
  $mail ->SetFrom("shashankshukla96@gmail.com");
  $mail ->Subject = $mailSub;
  $mail ->Body = $mailMsg;
  $mail ->AddAddress($mailto);
  if(!$mail->Send())
  {
    echo "Mail Not Sent";
  }
  else
  {
    echo "Mail Sent";
  }
?>

   

