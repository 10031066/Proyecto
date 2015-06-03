<?php session_start();
	include 'conexion.php';
	include 'top.php';
 
 if(isset($_SESSION['user'])){
	 $query = "Select * from clientes where id='".$_SESSION['user']."'";
	 //echo $query;
	 $resultado = ejecutaQuery($query);
	 $fila = $resultado->fetch_array(MYSQLI_ASSOC);
	 
	 if(isset($_REQUEST['antigua'])){
		 actualizaPass($_REQUEST['antigua'],$_REQUEST['email1'],$_REQUEST['email2'],"clientes");
	 }
}else{
	echo "<script type='text/javascript'>alert('No Deberias estar aqui!!');</script>";
}
	
?>

<div class="row">
  <div class="col-md-2">
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
          <p align="justify">Hola <?php echo $_SESSION['NomUser']; ?><br>
            Desde la seccion Mi Cuenta, puedes consultar toda la actividad reciente de tus pedidos y actualizar 
            tu información personal. Selecciona los links de la izquierda para ver o editar tu información.
          </P>

         <h4><font color="#DF3A01">Informacion de contacto</font></h4>
          <span style="color:#424242">
          <p align="justify"><?php echo $fila['nomcte']; ?><br>
            <?php echo $fila['mailcte']; ?>
			
            <?php include '/extras/FormNuevaPass.php'; ?>

            <HR>
          </P>

  <div class="col-md-6">
          <h4><font color="#DF3A01">Dirección de facturación predeterminada</font></h4>
          <HR >

            <span style="color:#424242">
            <p align="justify">
    Nombre: <?php echo $fila['nomcte']." ".$fila['apepat']." ".$fila['apemat'];?> <br>
    Direccion: <?php echo $fila['dircte'];?> <br>
    Teléfono: <?php echo $fila['telcte']; ?><br>
    Email:  <?php echo $fila['mailcte'];?><br>
           </P>
    </div>

    <div class="col-md-6">
          <h4><font color="#DF3A01">Dirección de entrega predeterminada</font></h4>
          <HR >

          <span style="color:#424242"> 
          <p align="justify">
    Nombre: karla erika torres rodriguez <br>
    Direccion: lopez rayon <br>
    Teléfono: 4171554153 <br>
    Email:  <br>
           </P>
    </div>

  </div>

<div class="col-md-2">
  
</div>

          
</div>


<?php
 include 'bottom.html'
?>
