<?php

require_once "../vendor/autoload.php";
use PHPMailer\PHPMailer\PHPMailer;
	class Email
	{
		private $link;
		function __construct()
		{
			$this->link = 'http://localhost/app/quila/';
		}
		function send_register_link($email,$message)
		{
			$mail = new PHPMailer();

			$mail->SMTPDebug = 3;                               
			$mail->isSMTP();            
			$mail->Host = "smtp.gmail.com";
			$mail->SMTPAuth = true;                          
			$mail->Username = "thenewxpat@gmail.com";                 
			$mail->Password = "adekunle";                           
			$mail->SMTPSecure = "tls";                           
			$mail->Port = 587;   
			$mail->SMTPDebug = false;                                

			$mail->From = "thenewxpat@gmail.com";
			$mail->FromName = "Quila";

			$mail->addAddress($email);

			$mail->isHTML(true);

			$mail->Subject = "Activation Code";
			$mail->Body = $message;

			if(!$mail->send()) 
			{
			    return false;
			} 
			else 
			{
			    return true;
			}
		}
	}

?>