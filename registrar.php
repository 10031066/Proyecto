	
<?php
	include 'top.php';
	
	if(isset($_REQUEST['Nombre'])){
		registrarCliente($_REQUEST['Nombre'],$_REQUEST['ApePaterno'],$_REQUEST['ApeMaterno'],$_REQUEST['Dir'],$_REQUEST['telefono'],$_REQUEST['email1'],$_REQUEST['email2'],$_REQUEST['edad'],$_REQUEST['genero']);
	}else if(isset($_REQUEST['NombreVendedor'])){
		registraVendedor();
	}else{
		echo "No deberias estar aqui";
	}
	
	include 'bottom.html';
?>

