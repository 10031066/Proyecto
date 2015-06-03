<?php
 include 'top.php'
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
          <p align="justify">Hola cerro fresh<br>
            Desde la seccion Mi Cuenta, puedes consultar toda la actividad reciente de tus pedidos y actualizar 
            tu información personal.
          </P>

         <h4><font color="#DF3A01">Informacion de contacto</font></h4>
          <span style="color:#424242">
          <p align="justify"> 
		    Nombre: <br>
		    Direccion: <br> 
		    Teléfono: <br>
		    Email: <br>
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


			<div class="col-md-2">
			  
			</div>

      

</div>

<?php
 include 'bottom.html'
?>
