<?php session_start();
include 'conexion.php';
 include 'top.php';
?>

<div class="row">
	<div class="col-md-3">
		<ul class="breadcrumb">
          <li><a href="index.php">Home</a><span class="divider">|</span></li>
          <li><a href="Recamaras.php">contactanos</a> <span class="divider">|</span></li>
        </ul>
	</div>
</div>

<div class="row">
<div class="col-md-2">
      <img src="img/public.png" width="300" />
      <img src="img/public1.png" width="300" />
      <br>
      <img src="img/public2.png" width="300" />
      <br>

      </div>
	<div class="col-md-6">
		<div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">Contactanos</h3>
  </div>
  <div class="panel-body">

    <div class="form-group">
    <label for="Nombre" class="col-lg-2 control-label">Nombre: </label>
    <div class="col-lg-4">
      <input type="text" class="form-control" name="Nombre">
    </div>
  </div>

	<div class="form-group">
	    <label for="Correo" class="col-lg-2 control-label">Correo: </label>
	    <div class="col-lg-4">
	      <input type="text" class="form-control" name="Correo">
	    </div>
	  </div>

	<div class="form-group">
	    <label for="Mensaje" class="col-lg-2 control-label">Mensaje: </label>
	    <div class="col-lg-4">
	      <input type="text" class="form-control" name="Mensaje">
	    </div>
	  </div>

     <div class="col-md-12">
      <?php
        include 'captcha/captcha.php';
      ?>
     </div>	 

     <div class="col-md-4">
            <input class="btn btn-primary btn-sm" type="submit" value="Registrar">
            </div> 

  </div>
</div>
	</div>
</div>

<?php
 include 'bottom.html';
?>