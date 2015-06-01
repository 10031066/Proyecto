<?php
	session_start();
	include 'conexion.php';
	login($_REQUEST['usuario'],$_REQUEST['pass']);
		
		
	
?>