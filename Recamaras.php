<?php session_start();
	include 'conexion.php'; 
	include 'top.php';
 if(!isset($_SESSION['NomUser'])){
		header('index.php');
	}else{
		$query="Select * from articulo where tipo=3";		 
?>

<div class="row">
	<div class="col-md-2">
		<ul class="breadcrumb">
          <li><a href="index.php">Home</a><span class="divider">|</span></li>
          <li><a href="Recamaras.php">Recamaras</a> <span class="divider">|</span></li>
        </ul>
	</div>
</div>


<?php
	}
	include 'cargaArticulo.php';
 include 'bottom.html';
?>
