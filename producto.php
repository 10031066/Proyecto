<?php session_start(); 
	include 'conexion.php';
	include 'top.php';
	if(!(isset($_SESSION['NomUser']) and isset($_GET['id']))){
				echo "<script language='JavaScript'>"; 
  echo "location = 'index.php'";
  echo "</script>";
	}else{
		$query="Select * from articulo where id='".$_GET['id']."'";
		$resultado = ejecutaQuery($query);
		$fila = $resultado->fetch_array(MYSQLI_ASSOC);
?>

<div class="row">
    <div class="col-md-2">
      <img src="img/public.png" width="300" />
      <img src="img/public1.png" width="300" />
      <br>
      <img src="img/public2.png" width="300" />

      </div>

      <div class="col-md-8">
        <div class="panel panel-success">
          <div class="panel-heading">
            <h3 class="panel-title"><?php echo $fila['marca'];?></h3>
          </div>
          <div class="panel-body">

          <div class="col-md-3">
             <h4><font color="#DF3A01">Caracteristicas Principales</font></h4>
            <P style="text-align: center;">
                <span style="color:#424242">
                    Calidad garantizada<br>
                    Tela en Lino<br>
                    Viene con 9 cojines <br>
                    Pata Metálica<br>
                    <h6><font color="#DF3A01">Mas informacion <button onclick="mostrar()">   
                    <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></button></font></h6>
 
               </P>
        </div>

          <div class="col-md-6">
            <img src="img/articulos/<?php echo $fila['id'];?>.jpg" width="250" onmouseover="javascript:this.height=900;this.width=900"  
                   onmouseout="javascript:this.width=250;this.height=250"/>
			<form action="carrito.php" METHOD="POST">
			<input type="hidden" value="<?php echo $fila['id'];?>" name="idArticulo">
            <HR><input class="btn btn-primary" type="submit" value="Comprar ahora" >
			</form>
          </div>

          <div class="col-md-3">
           <h4><font color="#DF3A01">Precio</font></h4>
            <P style="text-align: center;">
                <span style="color:#424242">$ <?php echo $fila['precio']; ?><br>
               </P>
          </div>
                 

        </div>
        </div>

         <div class="panel panel-default">
  <div class="panel-body">
    <h4><font color="#DF3A01">Detalles</font></h4>
<P style="text-align: justify;">
	<?php echo $fila['descripcion'];?>
  </div>
</div>

      </div>

      
    <div class="col-md-2"></div>

    </div>
 


<?php
	}
 include 'bottom.html';
?>
