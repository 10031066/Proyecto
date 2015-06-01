<?php
	require("class.phpmailer.php");
	$mail =  new PHPMailer();
	
	$WNOM = $_POST['txtnom'];
	$WAPE = $_POST['txtape'];
	$WEMP = $_POST['txtemp'];
	$WTEL = $_POST['txttel'];
	$WEMA = $_POST['txtmai'];
	$WASU = $_POST['txtasu'];
	$WCOM = $_POST['txtcom'];
	
	$mail -> IsSMTP(); 												// Verificamos si el envio es via protocolo SMTP
	$mail -> Host = "smtp.google.com";			 		// Especificamos el servidor de envio
	$mail -> SMTPAuth = true; 										// Definimos el envio SMPT
	$mail -> Username = "usuario@gmail.com"; 			// Nombre de usuario SMTP
	$mail -> Password = "********"; 								// Password SMTP
	$mail -> From = $WEMA;											// Cuenta de correo que envia el correo	
	$mail -> FromName = $WNOM.' '.$WAPE;				 			// "Alias" para indentificar el correo
	$mail -> AddAddress("isctorres@gmail.com","Ruben"); 			
	
	$mail -> WordWrap = 100; // set word wrap to 50 characters		
	//$mail -> IsHTML(true); // set email format to HTML
	$mail -> Subject = $WASU;
	$mail -> Body = "Empresa   : ".$WEMP."<br>
					 Nombre    : ".$WNOM." ".$WAPE."<br>;
					 Telefono  : ".$WTEL."<br>
					 Mensaje: <br>".$WCOM;
							
						$mail -> AltBody = $WASU;
						if( !$mail -> Send() )
						{
?>
							<script language="JavaScript">
								alert("Error de envio.<? echo $mail -> ErrorInfo?>");
							</script>
<?php						
						}
?>