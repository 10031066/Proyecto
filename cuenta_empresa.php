<?php session_start();
	include 'top.php';
	include 'conexion.php';
 
  if(isset($_SESSION['user'])){
	 $query = "Select * from empresa where id='".$_SESSION['user']."'";
	 echo $query;
	 $resultado = ejecutaQuery($query);
	 $fila = $resultado->fetch_array(MYSQLI_ASSOC);
	 
	 if(isset($_REQUEST['antigua'])){
		 actualizaPass($_REQUEST['antigua'],$_REQUEST['email1'],$_REQUEST['email2'],"empresa");
	 }
	}else{
		echo "<script type='text/javascript'>alert('No Deberias estar aqui!!');</script>";
	}
}else{
	echo "<script type='text/javascript'>alert('No Deberias estar aqui!!');</script>";
}

?>

<div class="row">
  <div class="col-md-3">
    <ul class="breadcrumb">
          <li><a href="index.php">Home</a><span class="divider">|</span></li>
          <li><a href="cuenta.php">Mi cuenta</a> <span class="divider">|</span></li>
        </ul>
  </div>
</div>


  <div class="row">
    <div class="col-md-2">
      <img src="img/public.png" width="300" />
      <img src="img/public1.png" width="300" />
      <br>
      <img src="img/public2.png" width="300" />


      </div>

  <div class="col-md-8">
    <h4><font color="#DF3A01">Mi cuenta</font></h4>
          <span style="color:#424242">
          <p align="justify">Hola <?php echo $fila['nom'];?><br>
            Desde la seccion Mi Cuenta, puedes consultar toda la actividad reciente de tus pedidos y actualizar 
            tu información personal.
          </P>

         <h4><font color="#DF3A01">Informacion de contacto</font></h4>
          <span style="color:#424242">
          <p align="justify"> 
		    Nombre: <?php echo $fila['nom'];?><br>
		    Direccion: <?php echo $fila['dir'];?><br> 
		    Teléfono: <?php echo $fila['tel'];?><br>
		    Email: <?php echo $fila['email'];?><br>
            
			<?php include '/extras/FormNuevaPass.php'; ?>


			<div class="col-md-2">
			  
			</div>

      

</div>

<?php
 include 'bottom.html'
?>
