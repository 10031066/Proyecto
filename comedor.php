<?php session_start();
include 'conexion.php'; 
 include 'top.php';
		$query="Select * from articulo where tipo=2";		 
?>

<div class="row">
	<div class="col-md-2">
		<ul class="breadcrumb">
          <li><a href="index.php">Home</a><span class="divider">|</span></li>
          <li><a href="comedor.php">Comedor</a> <span class="divider">|</span></li>
        </ul>
	</div>
</div>
<?php

include 'cargaArticulo.php'; 
 include 'bottom.html'
?>
