<?php session_start();
include 'conexion.php';
 include 'top.php'
?>

<div class="row">

	<div class="col-md-12">
          
     <dr>
      <label>REGISTRA NUEV ARTICULO</label>
      <br>
   <form class="form-horizontal" role="form">
             
  <div class="form-group">
    <label for="Marca" class="col-lg-2 control-label">Marca: </label>
    <div class="col-lg-4">
      <input type="text" class="form-control" id="Marca">
    </div>
  </div>
  <div class="form-group">
    <label for="Descripcion" class="col-lg-2 control-label">Descripcion: </label>
    <div class="col-lg-4">
      <input type="text" class="form-control" id="Descripcion">
    </div>
  </div>


   <div class="input-group">
    <label for="Precio" class="col-lg-2 control-label">Percio: </label>
    <div class="col-lg-4">
  <span class="input-group-addon">$</span>
  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar) i" id=Pecio>
  <span class="input-group-addon">.00</span>
</div>
</div>      
      
         <br>
          <label for="foto" class="col-lg-2 control-label">Imagen</label>
          <div class="col-lg-4">
          <input class="form-control" type="file" name="Imagen" id="Imagen" required multiple>
          </div> 
          
          <br>
          <br>
<br>
        <div class="col-lg-8">
          <div class ="from-group">
          <input
            class="btn btn-primary"
          type="submit" value="Guardar">
</div>
        
        </div>
        </div> 

  </div>






<?php
 include 'bottom.html'
?>
