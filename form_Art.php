<?php session_start();
include 'conexion.php';
 include 'top.php';
 
	if(!isset($_SESSION['NomEmpresa'])){
		echo "<script type='text/javascript'>alert('No deberias estar aqui');</script>";
	}else{
		if(isset($_FILES['imagen'])){
			$target_path = "img\\articulos\\";
			
			$fila = registraArticulo($_REQUEST['Marca'],$_REQUEST['Descripcion'],$_REQUEST['Precio'],$_REQUEST['Tipo']);
			$target_path = $target_path . $fila['id'].".jpg"; 
			
			//echo $target_path;
			//echo $_FILES['imagen']['tmp_name'];
			if(move_uploaded_file($_FILES['imagen']['tmp_name'], $target_path)) { 
				echo "El archivo ". basename( $_FILES['imagen']['name']). " ha sido subido";
				//echo "la imagen se subio";
			} else{
				echo "Ha ocurrido un error, trate de nuevo!";
			}
		}
?>

<div class="row">

	<div class="col-md-12">
          
     <dr>
      <label>REGISTRA NUEV ARTICULO</label>
      <br>
   <form enctype="multipart/form-data" action="#" METHOD="POST" class="form-horizontal">
             
  <div class="form-group">
    <label for="Marca" class="col-lg-2 control-label">Marca: </label>
    <div class="col-lg-4">
      <input type="text" class="form-control" name="Marca">
    </div>
  </div>

  <div class="form-group">
       <label for="radio" class="col-lg-4 control-label">Tipo: </label>
       <input type="radio" name="Tipo" value="1">Sala<BR>
       <input type="radio"name="Tipo" value="2">Comedor<BR>
       <input type="radio"name="Tipo" value="3">Recamaras<BR>
       <input type="radio"name="Tipo" value="4">Estudio y oficina<BR>
  </div>
  
  <div class="form-group">
    <label for="Descripcion" class="col-lg-2 control-label">Descripcion: </label>
    <div class="col-lg-4">
      <input type="text" class="form-control" name="Descripcion">
    </div>
  </div>


      <div class="form-group">
    <label for="Precio" class="col-lg-2 control-label">Precio: </label>
    <div class="col-lg-4">
      <input type="text" class="form-control" name="Precio">
    </div>
  </div>
      
         <br>
          <label for="foto" class="col-lg-2 control-label">Imagen</label>
          <div class="col-lg-4">
          <input class="form-control" type="file" name="imagen" name="Imagen" required multiple>
          </div> 
          
          
          <div class="col-md-4">
            <input class="btn btn-primary btn-lg" type="submit" value="Registrar">
            </div>

             <div class="col-md-4">
            <font color="white">col-md-8</font>
            </div>
          </div>
		
		</form>
        </div> 

  </div>

<?php
 include 'bottom.html';
}
?>
