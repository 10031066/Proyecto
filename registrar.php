	
<?php
	include 'top.php';
	include 'conexion.php';
	
	if(isset($_REQUEST['Nombre'])){
		registrarCliente($_REQUEST['Nombre'],$_REQUEST['ApePaterno'],$_REQUEST['ApeMaterno'],$_REQUEST['Dir'],$_REQUEST['telefono'],$_REQUEST['email1'],$_REQUEST['email2'],$_REQUEST['edad'],$_REQUEST['genero']);
	}else if(isset($_REQUEST['NombreVendedor'])){
		registraEmpresa($_REQUEST['NombreVendedor'],$_REQUEST['Direccion'],$_REQUEST['telefono'],$_REQUEST['email1'],$_REQUEST['email2']);
	}else{
		echo "<script language='JavaScript'>"; 
		echo "location = 'index.php'";
	    echo "</script>";
	}
	
	include 'bottom.html';
?>

