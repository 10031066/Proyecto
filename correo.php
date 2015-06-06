<?php

error_reporting(E_ALL);
	require("PHPmailer_5.2.4/class.phpmailer.php");

	$mail = new PHPMailer();

	$mail->IsSMTP(); 
	$mail->SMTPDebug = 2;
	$mail->From = "kar.erika.07.14@gmail.com";
	$mail->FromName = "El Carpintero";
	$mail->Host = "smtp.gmail.com";
	$mail->SMTPSecure = "ssl";
	$mail->Port = 465;
	$mail->SMTPAuth = true;
	$mail->Username ="kar.erika.07.14@gmail.com";
	$mail->Password = "860karlita100%";
    $mail->AddAddress("correo.prueba07.14@gmail.com","Prueba");
    $mail->AddReplyTo("kar.erika.07.14@gmail.com","Karla");
    $mail->WordWrap = 50;

    $mail->IShtml(true);
    $mail->subjetct='hola karlita si funciono';
    $mail->Body = "funciono funciono";

    if($mail->Send()) {echo "send mail successfully";}
    else {echo "send mail fail";}

?>