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
    <div class="col-md-2">
      <img src="img/public.png" width="300" />
      <img src="img/public1.png" width="300" />
      <br>
      <img src="img/public2.png" width="300" />
      <br>
      <img src="img/public.png" width="300" />


      </div>

      <div class="col-md-2">

     <div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Sucursal Atzoacalco (291)</h3>
	  </div>
	  <div class="panel-body">
	  <P style="text-align: justify;"><span style="color:#424242">
	    Fernando Amilpa #80<br>
		Col. C.T.M. Atzacoalco<br><br>

		GUSTAVO A. MADERO, Distrito Federal. C.P. 07090<br><br>

		Tel(s): (0155) 5715.3231 (0155) 5769.0817 <br>
		<br></P>
			  </div>
		</div>
     </div>

     <div class="col-md-2">

     </div>

     <div class="col-md-2">

     </div>

     <div class="col-md-2">

     </div>


     <div class="col-md-2"></div>
    </div>

</div>


<?php
 include 'bottom.html';
}
?>
