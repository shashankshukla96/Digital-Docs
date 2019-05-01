<?php

	function upload($name, $email)
	{
		if(isset($_FILES[$name])){
	      $errors= array();
	      $file_name = $_FILES[$name]['name'];
	      $file_size =$_FILES[$name]['size'];
	      $file_tmp =$_FILES[$name]['tmp_name'];
	      $file_type=$_FILES[$name]['type'];
	      $temp = explode('/', $file_type);
	      $file_ext=strtolower(end($temp));

	      
	      if(empty($errors)==true){
	         move_uploaded_file($file_tmp,"img/".$email."/".$name.".png");
	         //echo "Success";
	      }else{
	         print_r($errors);
	      }
	   }
	}
	if(isset($_POST['submit-btn']))
	{
		


		//uploading files
		$email = $_POST['email'];


		upload('image', $email);
		upload('thumb', $email );
		upload('pan', $email);
		upload('adhar', $email);
		upload('passport', $email);
		upload('bank', $email);
		upload('dl', $email);

		$db = "digital_docs";
		$user = "root";
		$passw = "";		

		$con = mysqli_connect("localhost", $user, $passw, $db) or die("Error");

		if($con)
		{
		//	echo "Connection made";
		}

		$del = "delete from users where email = '".$email."'";
		mysqli_query($con, $del);



		$sql = "INSERT INTO users VALUES('".
		$_POST['name']."', ".
		$_POST['age'].", '".
		$_POST['email']."', '".
	    $_POST['mobile']."', '".
	    $_POST['pass']."', '".
		$_POST['father']."', '".
		$_POST['mother']."', '".
		$_POST['date']."', '".
		$_POST['address']."', '".
		$_POST['city']."', '".
		$_POST['state']."', '".
		$_POST['pin']."', '".
		$_POST['qual']."', '".
		$_POST['work']."', '".
		$_POST['dept']."', '".
		$_POST['title']."', '".
		$_POST['thumb-type']."', '".
		$_POST['bank-name']."', '".
		$_POST['bank-branch']."', '".
		$_POST['account']."', '".
		$_POST['bank-code']."')";

		//echo "<br>".$sql;

		if(mysqli_query($con, $sql)){
			//echo "string";
		}
		

		//SENDING MAIL TO THE USER, WHO REGISTERED.
		$mailto = $email;
	    $mailSub = "Modifications in your Digital Docs details.";
	    $mailMsg = "We have submiited new details in your <b>Digital Docs</b> account.<br>Your username: ".$email."<br>Your Password: ".$_POST['pass']."<br>".
	    "Name: ".$_POST['name']."<br>".
	    "Age : ". $_POST['age']."<br>".
		"Email: ". $_POST['email']."<br>".
		"Mobile: ".$_POST['mobile']."<br>".
		"Father: ". $_POST['father']."<br>".
		"Mother: ".$_POST['mother']."<br>".
		"Date: ".$_POST['date']."<br>".
		"Address: ".$_POST['address']."<br>".
		"City: ".$_POST['city']."<br>".
		"State: ".$_POST['state']."<br>".
		"Pin: ".$_POST['pin']."<br>".
		"Qualification: ".$_POST['qual']."<br>".
		"Work: ".$_POST['work']."<br>".
		"Department: ".$_POST['dept']."<br>".
		"Title: ".$_POST['title']."<br>".
		"Thumb-Type: ".$_POST['thumb-type']."<br>".
		"Bank-name: ".$_POST['bank-name']."<br>".
		"Bank-branch: ".$_POST['bank-branch']."<br>".
		"Account: ".$_POST['account']."<br>".
		"Bank-code: ".$_POST['bank-code']."<br>";
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
	      //echo "Mail Sent";
	    }
	    
	    echo "<script type='text/javascript'>location.href = 'login.php';</script>";
	}
?>