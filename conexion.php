<?php
	function registraEmpresa($nombre,$direccion,$telefono,$email1,$email2){
		if($email1==$email2){
			$pass = gererarPass();
			$query = "call abcEmpresa ('','".$nombre."','".$direccion."','"
			.$telefono."','".$email1."','".md5($pass)."',1)";
			//echo $query;
			ejecutaQuery($query);
			$query = "Select id from empresa where email='".$email1."'";
			$resultado = ejecutaQuery($query);
			
			$fila = $resultado->fetch_array(MYSQLI_ASSOC);
			
			echo "Usuario: ".$fila["id"]."<br>Pass: ".$pass;
			error_reporting(E_ALL);
					require("PHPmailer_5.2.4/class.phpmailer.php");

					$mail = new PHPMailer();

					$mail->IsSMTP(); 
					$mail->SMTPDebug = 2;
					$mail->From = "correo.prueba07.14@gmail.com";
					$mail->FromName = "El Carpintero";
					$mail->Host = "smtp.gmail.com";
					$mail->SMTPSecure = "ssl";
					$mail->Port = 465;
					$mail->SMTPAuth = true;
					$mail->Username ="correo.prueba07.14@gmail.com";
					$mail->Password = "860karlita100%";
				    $mail->AddAddress($fila['mailcte'],$nombre);
				    $mail->AddReplyTo("correo.prueba07.14@gmail.com","Karla");
				    $mail->WordWrap = 50;

				    $mail->IShtml(true);
				    $mail->subjetct='hola karlita si funciono';
				    $mail->Body ="Password: ".$pass."   Usuario: ".$fila["id"];

				    if($mail->Send()) {}
				    else {}

		
		}else{
			echo "Ambas direcciones de correo son distintas\n";
		}
	}
	
	function registrarCliente($nombre,$apellidoP,$apellidoM,$direccion,$telefono,$email1,$email2,$edad,$genero){
		if($email1==$email2){
			$pass = gererarPass();
			$query = "call abcclientes ('','".$nombre."','".$apellidoP."','".$apellidoM."','".$direccion."','"
			.$telefono."','".$email1."','".$genero."','".$edad."',1,'".md5($pass)."')";
			//echo $query;
			ejecutaQuery($query);
			
			$query = "Select * from clientes where mailcte='".$email1."'";
			$resultado = ejecutaQuery($query);
			
			$fila = $resultado->fetch_array(MYSQLI_ASSOC);
			//var_dump($fila);
			
			//enviaCorreo($email1,$fila["idcte"],$pass);
			
			//echo "Usuario: ".$fila["id"]."<br>Pass: ".$pass;


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
			    $mail->AddAddress($fila['mailcte'],$nombre);
			    $mail->AddReplyTo("kar.erika.07.14@gmail.com","Karla");
			    $mail->WordWrap = 50;

			    $mail->IShtml(true);
			    $mail->subjetct='hola karlita si funciono';
			    $mail->Body ="Password: ".$pass."   Usuario: ".$fila["id"];

			    if($mail->Send()) {}
			    else {}

		}else{
			echo "Ambas direcciones de correo son distintas\n";
		}
		
	}
	
	function registraArticulo($marca,$descripcion,$precio,$tipo){
		$query = "Call abcarticulo('','".$marca."','".$descripcion."','".$precio."',1,'".$tipo."')";
		ejecutaQuery($query);
		$query ="Select id from articulo where marca='".$marca."' and descripcion='".$descripcion."' and precio=".$precio." and tipo='".$tipo."'";
		//echo $query;
		$resultado = ejecutaQuery($query);
		return $resultado->fetch_array(MYSQLI_ASSOC);
	}
	
	function ejecutaQuery($query){
		$SQLi = new mysqli("localhost","root",'','proyectomuebles');
			if ($SQLi->connect_error) {
				die('Error de Conexión (' . $SQLi->connect_errno . ') '
				. $SQLi->connect_error);
			}
			//echo $query;
			$resultado =$SQLi->query($query);
			$SQLi->close();
			return $resultado;
	}
	
	function loginEmpresa($usuario,$pass){
		$query = "SELECT * FROM empresa where id='".$usuario."' and pass='".md5($pass)."'";
		//echo $query;
		$resultado = ejecutaQuery($query);
		$fila = $resultado->fetch_array(MYSQLI_ASSOC);
		if($resultado->num_rows>0){
			iniciaSesion($usuario,"empresa",$fila['nom'],$fila['email']);
			
			echo "<script type='text/javascript'>alert('Bienvenido Usuario');</script>";
		}else{	
			echo "<script type='text/javascript'>alert('El Usuario y contraseña no coinciden');</script>";
		}
	}
	
	function loginCliente($usuario,$pass){
		
		$query = "SELECT * FROM clientes where id='".$usuario."' and pass='".md5($pass)."'";
		$resultado = ejecutaQuery($query);
		$fila = $resultado->fetch_array(MYSQLI_ASSOC);
		if($resultado->num_rows>0){
			iniciaSesion($usuario,"clientes",$fila['nomcte'],$fila['mailcte']);
			
			echo "<script type='text/javascript'>alert('Bienvenido Usuario');</script>";
		}else{
			echo "<script type='text/javascript'>alert('El Usuario y contraseña no coinciden');</script>";
		}
	}
	
	function iniciaSesion($usuario,$tabla,$nombre,$correo){//Carga los valores del cliente en la sesion

		$_SESSION['user']=$usuario;
		$_SESSION['correo']=$correo;
		switch($tabla){
			case "clientes":
				$_SESSION['NomUser']=$nombre;
			break;
			case "empresa":
				$_SESSION['NomEmpresa']=$nombre;
			break;
		}
		
	}
	
	function actualizaPass($antigua,$email1,$email2,$tabla){
		$query = "Select * from ".$tabla." where id='".$_SESSION['user']."'";
		$resultado = ejecutaQuery($query);
		$fila = $resultado->fetch_array(MYSQLI_ASSOC);		 
		//echo $fila['pass']."   ".md5($antigua);
		if($fila['pass']==md5($antigua)){
			if($email1==$email2){
				$query = "UPDATE ".$tabla." SET pass='".md5($email1)."' where id='".$_SESSION['user']."'";
				
				ejecutaQuery($query);
				echo "La contraseña se ha actualizado";
			}else{
				echo "Ambas contraseñas nuevas no son iguales";
			}
		 }else{
			 echo "La contraseña anterior no es correcta";
		 }
	}
	
	function gererarPass(){
		$characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$randstring = '';
		for ($i = 0; $i < 10; $i++) {
			$randstring = $randstring.$characters[rand(0, strlen($characters)-1)];
		}
		return $randstring;
	}
	/*
	function enviaCorreo($destino,$usuario,$pass){
	require_once 'PHPMailer-master/PHPMailerAutoload.php';
	 $mail = new PHPMailer(); 
	 
    $mail -> From = 'adrii_jmtz@hotmail.com';
	$mail -> FromName = "Foo";
	$mail -> AddAddress ($destino);
	$mail -> Subject = "Test";
	$mail -> Body = "<h3>From GMail!</h3>";
	$mail -> IsHTML (true);

	$mail->IsSMTP();
	$mail->Host = 'tls://smtp.gmail.com:587';
	$mail->SMTPAuth = true;
	$mail->Username = 'adrii_jmtz@hotmail.com';
	$mail->Password = '';
      
    if(!$mail->Send()) {
        echo 'Error: ' . $mail->ErrorInfo;
	}
	else {
		echo 'Mail enviado!';
	}
	}*/




	
    

?>