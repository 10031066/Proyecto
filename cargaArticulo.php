<?php
$resultado = ejecutaQuery($query);
		
for($i=0;$i<$resultado->num_rows;$i++){
	$fila = mysqli_fetch_array($resultado);
?>
<div class="row">

	<div class="col-md-4">
            <div class="panel panel-default">
              <div class="panel-body">

                <div class="col-md-12">
                   <a href="Producto.php?id=<?php  echo $fila['id']; ?> "><img src="img/articulos/<?php  echo $fila['id']; ?>.jpg" width="250" onmouseover="javascript:this.height=500;this.width=500"  
                   onmouseout="javascript:this.width=250;this.height=250"/>
              	</div>

              	<div class="col-md-12">
                   <h4><font color="#DF3A01"><?php echo $fila['marca'];?></font></h4>
      				<HR >

      				<P style="text-align: center;">
			          <span style="color:#424242">$ <?php echo $fila['precio']; ?><br> 
			         </P>

			         <br><input class="btn btn-primary" type="submit" value="Comprar ahora" >

              	</div>
              </div>
            </div>
            <HR>
    </div>
</div>

<?php } ?>