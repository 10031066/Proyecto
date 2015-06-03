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
			
			$query = "Select id from clientes where mailcte='".$email1."'";
			$resultado = ejecutaQuery($query);
			
			$fila = $resultado->fetch_array(MYSQLI_ASSOC);
			//var_dump($fila);
			
			//enviaCorreo($email1,$fila["idcte"],$pass);
			
			echo "Usuario: ".$fila["id"]."<br>Pass: ".$pass;
		}else{
			echo "Ambas direcciones de correo son distintas\n";
		}
		
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
			iniciaSesion($usuario,"empresa",$fila['nom']);
			
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
			iniciaSesion($usuario,"clientes",$fila['nomcte']);
			
			echo "<script type='text/javascript'>alert('Bienvenido Usuario');</script>";
		}else{
			echo "<script type='text/javascript'>alert('El Usuario y contraseña no coinciden');</script>";
		}
	}
	
	function iniciaSesion($usuario,$tabla,$nombre){//Carga los valores del cliente en la sesion

		$_SESSION['user']=$usuario;
		switch($tabla){
			case "clientes":
				$_SESSION['NomUser']=$nombre;
			break;
			case "empresa":
				$_SESSION['NomEmpresa']=$nombre;
			break;
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
	
	function enviaCorreo($destino,$usuario,$pass){
	require_once 'PHPMailer-master/PHPMailerAutoload.php';
	 $mail = new PHPMailer(); 
	 
    $mail -> From = 'greedsama23@gmail.com';
	$mail -> FromName = "Foo";
	$mail -> AddAddress ($destino);
	$mail -> Subject = "Test";
	$mail -> Body = "<h3>From GMail!</h3>";
	$mail -> IsHTML (true);

	$mail->IsSMTP();
	$mail->Host = 'tls://smtp.gmail.com:587';
	$mail->SMTPAuth = true;
	$mail->Username = 'greedsama23@gmail.com';
	$mail->Password = 'Irredimible12';
      
    if(!$mail->Send()) {
        echo 'Error: ' . $mail->ErrorInfo;
	}
	else {
		echo 'Mail enviado!';
	}
	}
?>