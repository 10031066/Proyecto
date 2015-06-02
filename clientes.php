<?php session_start(); 
	include 'top.php';
?>

  

  <div class="row">
    <div class="col-md-12">
          <MARQUEE BEHAVIOR=alternate BGCOLOR="#FF7070"><FONT FACE=arial>--Ingrese sus datos--</FONT></MARQUEE>
    </div>
          
  </div>

  <div class="row">
    <div class="col-md-2">
          <label>Ingrese sus datos</label>
    </div>
 <form action="registrar.php" method="POST">
    <div class="col-md-8">
          <div class="col-md-12">
          <label for="Nombre" class="col-lg-6 control-label">Nombre: </label>
           <div class="col-lg-6">
          <input type="text" class="form-control" name="Nombre">
          </div>
          </div>

          <div class="col-md-12">
          <label for="ApeMaterno" class="col-lg-6 control-label">Ape. Materno: </label>
          <div class="col-lg-6">
          <input type="text" class="form-control" name="ApeMaterno">
          </div>
          </div>

          <div class="col-md-12">
          <label for="ApePaterno" class="col-lg-6 control-label">Ape. Paterno: </label>
          <div class="col-lg-6">
          <input type="tex" class="form-control" name="ApePaterno">
          </div>
          </div>

          <div class="col-md-12">
          <label for="Dir" class="col-lg-6 control-label">Direccion: </label>
          <div class="col-lg-6">
          <input type="tex" class="form-control" name="Dir">
          </div>
          </div>

          <div class="col-md-12">
          <label for="telefono" class="col-lg-6 control-label">Telefono: </label>
          <div class="col-lg-6">
          <input type="text" class="form-control" name="telefono">
          </div>
          </div>

          <div class="col-md-12">
           <label for="email1" class="col-lg-6 control-label">Email: </label>
           <div class="col-lg-6">
           <input type="email" class="form-control" name="email1">
         </div>
         </div>

          <div class="col-md-12">
          <label for="email2" class="col-lg-6 control-label">Confir E-mail: </label>
          <div class="col-lg-6">
          <input type="email" class="form-control" name="email2">
          </div>
          </div>

          <div class="col-md-12">
          <label for="edad" class="col-lg-6 control-label">Edad: </label>
          <div class="col-lg-6">
          <input type="text" class="form-control" name="edad">
          </div>
          </div>

          <div class="col-md-12">
          <label for="radio" class="col-lg-6 control-label">sexo: </label>
          <input type="radio" name="genero" value="M">Male<BR>
            <input type="radio"name="genero" value="F">Female
          </div>

          <div class="col-md-12">
            <div class="col-md-4">
            <label>Ingrese sus datos</label>
            </div>
             <div class="col-md-4">
            <input class="btn btn-primary btn-lg" type="submit" value="Registrar">
            </div>
             <div class="col-md-4">
            <label>Ingrese sus datos</label>
            </div>
          </div>

    </div>
</form>
    <div class="col-md-2">
          <label>Ingrese sus datos</label>
    </div>

  </div>

  <div class="row">
    <div class="col-md-2">
           <font color="white">separacion</font>
    </div>

    <div class="col-md-8">
      <label>Ingrese captcha</label>
    </div>

    <div class="col-md-2">
           <font color="white">separacion</font>
    </div>
  </div>


<?php
	include 'bottom.html';
?>