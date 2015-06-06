<?php session_start();
include 'conexion.php'; 
 include 'top.php';
	
	if(!isset($_SESSION['NomUser'])){
				echo "<script language='JavaScript'>"; 
				echo "location = 'index.php'";
			  echo "</script>";
	}else{
		//echo $_REQUEST['idArticulo'];
		if(isset($_REQUEST['idArticulo'])){
			//echo 'hola';
			$query = "Select * from articulo where id='".$_REQUEST['idArticulo']."'";
			
			$resultado = ejecutaQuery($query);
			$fila = mysqli_fetch_array($resultado);
			
			$query ="Insert into carrito VALUES('".$_SESSION['user']."','".$_REQUEST['idArticulo']."','".$fila['marca']."','".$fila['precio']."',1)";
			ejecutaQuery($query);
			echo $query;
			
		}
		
		$query="Select * from carrito where idCte='".$_SESSION['user']."'";
		$resultado = ejecutaQuery($query);
			
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
		$fila = $resultado->fetch_array(MYSQLI_ASSOC);	
?>
		<div class="row">
			<div class="col-md-4">
			<?php echo $fila['Nombre']; ?>
			</div>
			<div class="col-md-2">
			<?php echo $fila['precio']; ?>
			</div>
			<div class="col-md-2">
			<?php echo $fila['cantidad']; ?>
			</div>
			<div class="col-md-2">
			<?php echo $fila['precio']*$fila['cantidad']; ?>
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
