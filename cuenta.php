<?php session_start();
	include 'conexion.php';
	include 'top.php';
 
 if(isset($_SESSION['user'])){
	 $query = "Select * from clientes where id='".$_SESSION['user']."'";
	 echo $query;
	 $resultado = ejecutaQuery($query);
	 $fila = $resultado->fetch_array(MYSQLI_ASSOC);
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

            <br><input class="btn btn-primary btn-xs" type="submit" value="Cambiar contraseña" value="Mostrar" onclick="mostrar()"><br> <br> 
            
            <HR>
            <div class="panel panel-default" id='oculto' style='display:none;'>
              <div class="panel-body">

                <div class="col-md-12">
                   <label for="email1" class="col-lg-6 control-label">Contraseña actual: </label>
                   <div class="col-lg-6">
                   <input type="email" class="form-control" name="email1">
                </div>
              </div>

                <div class="col-md-12">
                   <label for="email1" class="col-lg-6 control-label">Nueva contraseña: </label>
                   <div class="col-lg-6">
                   <input type="email" class="form-control" name="email1">
                </div>
              </div>

              <div class="col-md-12">
                  <label for="email2" class="col-lg-6 control-label">Confirmar contraseña: </label>
                <div class="col-lg-6">
                  <input type="email" class="form-control" name="email2">
                </div>
              </div>
              
              <input class="btn btn-primary btn-xs" type="submit" value="Guardar" value="Ocultar" onclick="ocultar()">

              </div>
            </div>

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
