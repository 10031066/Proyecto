<?php session_start(); 
	include 'top.php';
?>



<div class="row">
  <div class="col-md-3">
    <ul class="breadcrumb">
          <li><a href="index.php">Home</a><span class="divider">|</span></li>
          <li><a href="clientes.php">Registro de clientes</a> <span class="divider">|</span></li>
        </ul>
  </div>
</div>


  <div class="row">
    <div class="col-md-2">
          <font color="white">col-md-8</font>
    </div>
 <form name="formulario" action="validar.php" method="POST">
    <div class="col-md-8">
          <div class="col-md-12">
          <label for="Nombre" class="col-lg-6 control-label">Nombre: </label>
           <div class="col-lg-6">
              <input type="text" class="form-control" name="Nombre"><br>
           <?php
                        error_reporting (E_ALL ^ E_NOTICE);
                    if($_GET['error']=='1'){
                echo '<font color="#FF0000">Campo nombre vacio</font><br/>';
                }?>
          </div>
          </div>

          <div class="col-md-12">
          <label for="ApeMaterno" class="col-lg-6 control-label">Ape. Materno: </label>
          <div class="col-lg-6">
          <input type="text" class="form-control" name="ApeMaterno">
            <?php
                        error_reporting (E_ALL ^ E_NOTICE);
                    if($_GET['error']=='2'){
                echo '<font color="#FF0000">*Campo Apellido Materno vacio</font><br/>';
                }?>
          <br>
          </div>
          </div>

          <div class="col-md-12">
          <label for="ApePaterno" class="col-lg-6 control-label">Ape. Paterno: </label>
          <div class="col-lg-6">
          <input type="tex" class="form-control" name="ApePaterno">
          <?php
                        error_reporting (E_ALL ^ E_NOTICE);
                    if($_GET['error']=='3'){
                echo '<font color="#FF0000">*Campo Apellido Paterno vacio</font><br/>';
                }?>
          <br>
          </div>
          </div>

          <div class="col-md-12">
          <label for="Dir" class="col-lg-6 control-label">Direccion: </label>
          <div class="col-lg-6">
          <input type="tex" class="form-control" name="Dir">
          <?php
                        error_reporting (E_ALL ^ E_NOTICE);
                    if($_GET['error']=='4'){
                echo '<font color="#FF0000">*Campo Direccion vacio</font><br/>';
                }?>
          <br>
          </div>
          </div>

          <div class="col-md-12">
          <label for="telefono" class="col-lg-6 control-label">Telefono: </label>
          <div class="col-lg-6">
          <input type="text" class="form-control" name="telefono">
          <?php
                        error_reporting (E_ALL ^ E_NOTICE);
                    if($_GET['error']=='5'){
                echo '<font color="#FF0000">*Campo Telefono vacio</font><br/>';
                }?>
          <br>
          </div>
          </div>

          <div class="col-md-12">
           <label for="email1" class="col-lg-6 control-label">Email: </label>
           <div class="col-lg-6">
           <input type="email" class="form-control" name="email1">
           <?php
                        error_reporting (E_ALL ^ E_NOTICE);
                    if($_GET['error']=='6'){
                echo '<font color="#FF0000">*Campo Email vacio</font><br/>';
                }?>
         <br>  
         </div>
         </div>

          <div class="col-md-12">
          <label for="email2" class="col-lg-6 control-label">Confir E-mail: </label>
          <div class="col-lg-6">
          <input type="email" class="form-control" name="email2">
          <?php
                        error_reporting (E_ALL ^ E_NOTICE);
                    if($_GET['error']=='7'){
                echo '<font color="#FF0000">*Debe verificar el email</font><br/>';
                }?>
          <br>
          </div>
          </div>

          <div class="col-md-12">
          <label for="edad" class="col-lg-6 control-label">Edad: </label>
          <div class="col-lg-6">
          <input type="text" class="form-control" name="edad">
          <?php
                        error_reporting (E_ALL ^ E_NOTICE);
                    if($_GET['error']=='8'){
                echo '<font color="#FF0000">*Campo Edad vacio</font><br/>';
                }?>
          <br>
          </div>
          </div>

          <div class="col-md-12">
          <label for="radio" class="col-lg-6 control-label">sexo: </label>
          <input type="radio" name="genero" value="M">Hombre<BR>
            <input type="radio"name="genero" value="F">Mujer
          </div>

              <div class="col-md-12">
                <?php
                  include 'captcha/captcha.php';
                ?>
              </div>


          <div class="col-md-12">
            <div class="col-md-4">
            <font color="white">col-md-8</font>
            </div>

            
             <div class="col-md-4">
            <input class="btn btn-primary btn-lg" type="submit" value="Registrar">
            </div>
             <div class="col-md-4">
            <font color="white">col-md-8</font>
            </div>
          </div>

    </div>
</form>
    <div class="col-md-2">
          <font color="white">col-md-8</font>
    </div>

  </div>

  <div class="row">
    <div class="col-md-2">
           <font color="white">separacion</font>
    </div>

    <div class="col-md-2">
           <font color="white">separacion</font>
    </div>
  </div>


<?php
	include 'bottom.html';
?>