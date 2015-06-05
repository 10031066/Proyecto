<?php session_start(); 
	session_unset();
	session_destroy();
	include 'top.php';
?>

<div class="row">
  <div class="col-md-3">
    <ul class="breadcrumb">
          <li><a href="index.php">Home</a><span class="divider">|</span></li>
          <li><a href="vende_nosotros.php">Registro de empresas</a> <span class="divider">|</span></li>
        </ul>
  </div>
</div>


	<div class="row">
		<div class="col-md-12">
       <img src="img/vende_nts.png" width="1200" />
	    		
		</div>
					
	</div>

	<div class="row">
		<div class="col-md-12">
       <img src="img/pasos.png" width="900" />
			
		</div>

		<div class="col-md-4">

    
		
	</div>

	
	<div class="row">
		<div class="col-md-12">
      <h4><font color="silver">---------------- EMPIEZA A VENDER HOY MISMO Y LLEGA A MILLONES DE CLIENTES------------------</font></h4>

      <HR >

      <div class="col-md-2">
          <font color="white">Ingrese sus datos.......</font>
      </div>

      <div class="col-md-8">
		<form action="registrar.php" method="POST">

        
          <div class="col-md-12">
            <h4><font color="#DF3A01">---------------- Datos de la empresa ------------------</font></h4>
             <HR >
          </div>

          <div class="col-md-12">
          <label class="col-lg-6 control-label">Nombre de la empresa: </label>
          <div class="col-lg-6">
          <input type="text" class="form-control" name="NombreVendedor">
          </div>
          </div>

          <div class="col-md-12">
          <label class="col-lg-6 control-label">Direccion de la empresa: </label>
          <div class="col-lg-6">
          <input type="text" class="form-control" name="Direccion">
          </div>
          </div>

          <div class="col-md-12">
          <label class="col-lg-6 control-label">Telefono de la empresa: </label>
          <div class="col-lg-6">
          <input type="text" class="form-control" name="telefono">
          </div>
          </div>

          <div class="col-md-12">
          <label class="col-lg-6 control-label">Email de la empresa: </label>
          <div class="col-lg-6">
          <input type="text" class="form-control" name="email1">
          </div>
          </div>
			
			<div class="col-md-12">
          <label class="col-lg-6 control-label">Repetir email: </label>
          <div class="col-lg-6">
          <input type="text" class="form-control" name="email2">
          </div>
          </div>


          <div class="col-md-12">
            <div class="col-md-5">
            <font color="white">Ingrese sus datos.......</font>
            </div>
             <div class="col-md-3">
             <input class="btn btn-primary" type="submit" value="REGISTRARME" >
            </div>
             <div class="col-md-4">
            <font color="white">Ingrese sus datos.......</font>
            </div>
          </div>

          <div class="col-md-2">
          <font color="white">Ingrese sus datos.......</font>
		</div>
      </form>
    </div>
 

    </div>
	    		
		</div>
					
	</div>

	<div class="row">
		<div class="col-md-12">
          <hr>
      <h4><font color="silver">----------------------------- PREGUNTAS FRECUENTES-----------------------------</font></h4>
<HR>
		
		</div>

    <div class="col-md-6">
        <img src="img/video.png" width="1200" />

      </div>

         <div class="col-md-6">

         <div>
           <h4><font color="#DF3A01" >¿POR QUE VENDER MUEBLES EL CARPINTERO? <button onclick="mostrar()">   <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></button> </font></h4>

           <div id='oculto' style='display:none;' >
           <h4><font color="#585858"><p align="justify">Puedes cargar en nuestra página todos los productos que quieres, no se cobra nada por creación de la cuenta ni por publicación de producto. Se cobrará únicamente una comisión por cada venta realizada.</P>
           </font></h4>
           </div>
          </div>

           <HR>

           <div>
             <h4><font color="#DF3A01">¿CÓMO FUNCIONA EL PROCESO DE ENVÍOS? <button onclick="mostrar()">   <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></button>  </font></h4>

             <div id='oculto' style='display:none;' >
           <h4><font color="#585858"><p align="justify">Todos los productos que se ofrecen en Linio deben ser enviados por medio de las paqueterías autorizadas (DHL, Fedex y Estafeta). El vendedor NO puede utilizar unidades propias para repartir tus productos. Tampoco está permitido el modelo “ordena y recoge” en punto de venta. Si decides usar el convenio de Linio, se te otorgará acceso al portal del proveedor logístico para que generes tus propias guías a costos preferenciales.</P>
           </font></h4>
           </div>
            </div>

            <HR>
           
           <div>
           <h4><font color="#DF3A01">¿CUÁNDO RECIBIRÉ LOS PAGOS POR MIS VENTAS? <button onclick="mostrar()">   <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></button>  </font></h4>

            <div id='oculto' style='display:none;' >
           <h4><font color="#585858"><p align="justify">Recibirás el acumulado de las ventas de tus productos dentro de un período de 7 días naturales a partir del día de entrega al cliente. Todos los viernes se hace el corte de venta semanal en Linio, y por lo tanto tú recibirás el pago 7 días después. Los pagos se realizan vía transferencia electrónica.
           </P>
           </font></h4>
           </div>
          </div>

      </div>
		
	</div>
  <hr>

<?php
	include 'bottom.html';
?>