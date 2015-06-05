<html>

	<head>
	<script src='https://www.google.com/recaptcha/api.js'></script>

	</head></span>

	 

	<body>
<form>

	<?

	require_once('recaptchalib.php');

	//Llaves de la captcha

	$captcha_publickey = "6LdH8gcTAAAAAFnSJubG-hHE0luH_JcWD7nd4Rs8";

	$captcha_privatekey = "6LdH8gcTAAAAAEv75Pv3rhjGNwmOKL-WuqXvLe1g";

	$error_captcha=null;

	?>

	 

	<?

	//escribimos en la página lo que nos devuelve recaptcha_get_html()
	
	echo recaptcha_get_html($captcha_publickey, $error_captcha);
	?>

</form>

	 <div class="g-recaptcha" data-sitekey="6LdH8gcTAAAAAFnSJubG-hHE0luH_JcWD7nd4Rs8"></div>

	</body>

	</html>

