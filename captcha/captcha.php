<html>

	<head>
	<script src='https://www.google.com/recaptcha/api.js'></script>

	</head></span>

	 

	<body>
<form>

	<?

	require_once('recaptchalib.php');

	//Llaves de la captcha

	$captcha_publickey = "6Le52QcTAAAAAJbALQurOXxvn235evUeGWeao7XX";

	$captcha_privatekey = "6Le52QcTAAAAABBdRDI0hVJp5OapvKXqFxneGgaW";

	$error_captcha=null;

	?>

	 

	<?

	//escribimos en la página lo que nos devuelve recaptcha_get_html()
	
	echo recaptcha_get_html($captcha_publickey, $error_captcha);
	?>

</form>

	 <div class="g-recaptcha" data-sitekey="6Le52QcTAAAAAJbALQurOXxvn235evUeGWeao7XX"></div>

	</body>

	</html>

