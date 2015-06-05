<?php session_start();
	include 'conexion.php'; 
	include 'top.php';
 if(!isset($_SESSION['user'])){
		header('index.php');
	}else{
		$query="Select * from articulo where tipo=4";		 
?>

<div class="row">
	<div class="col-md-3">
		<ul class="breadcrumb">
          <li><a href="index.php">Home</a><span class="divider">|</span></li>
          <li><a href="estudios.php">Estudio y oficina</a> <span class="divider">|</span></li>
        </ul>
	</div>
</div>

<?php
	}
	include 'cargaArticulo.php';
 include 'bottom.html';
?>
