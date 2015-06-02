<?php
	require 'PHPMailerAutoload.php';
	function registraEmpresa($nombre,$direccion,$telefono,$email1,$email2){
		if($email1==$email2){
			$pass = gererarPass();
			$query = "call abcempresa (1,'".$nombre."','".$direccion."','"
			.$telefono."','".$email1."','".$pass."')";
		}else{
			echo "Ambas direcciones de correo son distintas\n";
		}
	}
	
	function registrarCliente($nombre,$apellidoP,$apellidoM,$direccion,$telefono,$email1,$email2,$edad,$genero){
		if($email1==$email2){
			$pass = gererarPass();
			$query = "call abcclientes (1,'".$nombre."','".$apellidoP."','".$apellidoM."','".$direccion."','"
			.$telefono."','".$email1."','".$genero."','".$edad."',1,'".$pass."')";
			
			ejecutaQuery($query);
			
			$query = "Select idcte from clientes where mailcte='".$email1."'";
			$resultado = $SQLi->query($query);
			
			$fila = $resultado->fetch_array(MYSQLI_ASSOC);
			//var_dump($fila);
			
			enviaCorreo($email1,$fila["idcte"],$pass);
			
			$SQLi->close();
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
			
			if($SQLi->query($query)==true){
				echo "<br>Se ha registrado con exito<br>";
			}else{
				echo "<br>Ha ocurrido un error al registrar<br>";
			}
	}
	
	function login($usuario,$pass){
		$SQLi = new mysqli("localhost","root",'','proyectomuebles');
		$query = "SELECT * FROM clientes where idcte='".$usuario."' and pass='".$pass."'";
		$resultado = $SQLi->query($query);
		if($resultado->num_rows>0){
			iniciaSesion($usuario);
			
			$SQLi->close();
			echo "<script type='text/javascript'>alert('Bienvenido Usuario');</script>";
		}else{
			echo "<script type='text/javascript'>alert('El Usuario y contraseña no coinciden');</script>";
			$SQLi->close();
		}
		
	}
	
	function iniciaSesion($usuario){//Carga los valores del cliente en la sesion
		$SQLi = new mysqli("localhost","root",'','proyectomuebles');
		$query = "SELECT * FROM clientes where idcte='".$usuario."'";
		$resultado = $SQLi->query($query);
		$fila = $resultado->fetch_array(MYSQLI_ASSOC);
		
		$_SESSION['user']=$usuario;
		$_SESSION['NomUser']=$fila['nomcte'];
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
		$titulo    = 'Usuario y contraseña ';
		$mensaje   = 'Usuario: '.$usuario."\nContraseña: ".$pass;
		if(mail($destino, $titulo, $mensaje)){
			echo "<br>Recibira un correo con su informacion a ".$destino;
		}else{
			echo "Ha ocurrido un error al enviar el correo";
		}
		
	}
?>