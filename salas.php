<?php session_start();
include 'conexion.php'; 
 include 'top.php';
 if(!isset($_SESSION['user'])){
		header('index.php');
	}else{
		$query="Select * from articulo where tipo=1";		 
?>

<div class="row">
	<div class="col-md-2">
		<ul class="breadcrumb">
          <li><a href="index.php">Home</a><span class="divider">|</span></li>
          <li><a href="salas.php">Salas</a> <span class="divider">|</span></li>
        </ul>
	</div>
</div>

<?php 
	}
include 'cargaArticulo.php'; 
 include 'bottom.html';
 ?>