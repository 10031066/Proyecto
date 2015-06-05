<?php
$resultado = ejecutaQuery($query);
		$fila = $resultado->fetch_array(MYSQLI_ASSOC);
for($i=0;$i<$resultado->num_rows;$i++){
?>
<div class="row">

	<div class="col-md-4">
            <div class="panel panel-default">
              <div class="panel-body">

                <div class="col-md-12">
                   <a href="Producto.php"><img src="img/sala1.jpg" width="250" onmouseover="javascript:this.height=500;this.width=500"  
                   onmouseout="javascript:this.width=250;this.height=250"/>
              	</div>

              	<div class="col-md-12">
                   <h4><font color="#DF3A01"><?php echo $resultado[$i]['marca']?></font></h4>
      				<HR >

      				<P style="text-align: center;">
			          <span style="color:#424242">$ <?php $fila[$i]['precio']?><br> 
			         </P>

			         <br><input class="btn btn-primary" type="submit" value="Comprar ahora" >

              	</div>


              </div>
            </div>

            <HR>

    </div>
          
</div>

<?php } ?>