	
<?php
	include 'top.php';
	
	if(isset($_REQUEST['Nombre'])){
		registrarCliente($_REQUEST['Nombre'],$_REQUEST['ApePaterno'],$_REQUEST['ApeMaterno'],$_REQUEST['Dir'],$_REQUEST['telefono'],$_REQUEST['email1'],$_REQUEST['email2'],$_REQUEST['edad'],$_REQUEST['genero']);
	}else if(isset($_REQUEST['NombreVendedor'])){
		registraVendedor($_REQUEST['NombreVendedor'],$_REQUEST['ApePaterno'],$_REQUEST['ApeMaterno'],$_REQUEST['Dir'],$_REQUEST['telefono'],$_REQUEST['email1'],$_REQUEST['email2'],$_REQUEST['genero'],$_REQUEST['empresa'],$_REQUEST['dirempresa'],$_REQUEST['telempresa'],$_REQUEST['emailempresa']);
	}else{
		echo "No deberias estar aqui";
	}
	
	include 'bottom.html';
?>

