<?php session_start();
include 'conexion.php'; 
 include 'top.php';
	
	if(!isset($_SESSION['NomUser'])){
				echo "<script type='text/javascript'>alert('No deberias estar aqui');</script>";
		//header('index.php');
	}else{
		$query="Select * from carrito where idCte='".$_SESSION['user']."'";
		$resultado = ejecutaQuery($query);
		$fila = $resultado->fetch_array(MYSQLI_ASSOC);		
?>

<div class="row">
  <div class="col-md-2">
    <ul class="breadcrumb">
          <li><a href="index.php">Home</a><span class="divider">|</span></li>
          <li><a href="carrito.php">Carrito</a> <span class="divider">|</span></li>
        </ul>
  </div>
</div>


<div class="row">
	<div class="col-md-4">
          <h4><font >Tu producto</font></h4>
          <HR >
    </div>
    <div class="col-md-2">
          <h4><font >Precio</font></h4>
          <HR >
    </div>
    <div class="col-md-2">
          <h4><font >Cantidad</font></h4>
          <HR >
    </div>
    <div class="col-md-2">
          <h4><font >Sub-total</font></h4>
          <HR >
    </div>
    <div class="col-md-2">
          <h4><font >Eliminar</font></h4>
          <HR >
    </div>
</div>

<?php
	for($i=0;$i<$resultado->num_rows;$i++){

?>
		<div class="row">
			<div class="col-md-4">
			<?php echo $fila[i]['Nombre']; ?>
			</div>
			<div class="col-md-2">
			<?php echo $fila[i]['precio']; ?>
			</div>
			<div class="col-md-2">
			<?php echo $fila[i]['cantidad']; ?>
			</div>
			<div class="col-md-2">
			<?php echo $fila[i]['precio']*$fila[i]['cantidad']; ?>
			</div>
			<div class="col-md-2">
			</div>
		</div>
	<?php }
	?>

<div class="row">
	<div class="col-md-4">
		
	</div>

	<div class="col-md-4">
		<input class="btn btn-primary" type="submit" value="Pagar" >
	</div>

	<div class="col-md-4">
		
	</div>
</div>


<?php
	}
 include 'bottom.html';
?>
