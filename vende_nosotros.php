<?php session_start(); 
  include 'conexion.php';
  
  if(isset($_POST['usuario'])){
    login($_POST['usuario'],$_POST['pass']);
  }else if(isset($_GET['salir'])){
    session_destroy();
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Compra Online Muebleria Carpintero</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/main.css" rel="stylesheet">
    <link rel="stylesheet" type"text/css" href="css/miestilo.css">
    <link rel="stylesheet" href="css/1140.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/style.css">
<!---para hacer referencia a codigo java scrip desde un archivo
  externo (la funciona para que la calculadora funcione)-->
	  <script  src="js/jquery.min.js"></script>
	  <script type="text/javascript" src="js/funciones.js"></script>
	  <script src="./js/bootstrap.min.js"></script>
	  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  	  <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
	  <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>

    <script type="text/javascript">
function mostrar(){
document.getElementById('oculto').style.display = 'block';}
</script>


    <script type="text/javascript">
function mostrar(){
document.getElementById('registro').style.display = 'block';}
</script>
 
    <script type="text/javascript" charset="utf-8">
    $(window).load(function() {
      $('.flexslider').flexslider({
        controlsContainer: '.flex-container'
      });
    });
  </script>

  <script type="text/javascript"> 
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-718520-23']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>

   <style type="text/css">
      
      * {
        margin:0px;
        padding:0px;
      }
      
      #header {
        margin:auto;
        width:500px;
        font-family:Arial, Helvetica, sans-serif;
      }
      
      ul, ol {
        list-style:none;
      }
      
      .nav > li {
        float:left;
      }
      
      .nav li a {
        background-color:#FFF;
        color:#000;
        text-decoration:none;
        padding:10px 12px;
        display:block;
      }
      
      .nav li a:hover {
        background-color:#FFFFCC;
      }
      
      .nav li ul {
        display:none;
        position:absolute;
        min-width:140px;
      }
      
      .nav li:hover > ul {
        display:block;
      }
      
      .nav li ul li {
        position:relative;
      }
      
      .nav li ul li ul {
        right:-140px;
        top:0px;
      }
      
    </style>
	<!--<style type="text/css"> div{ border: 1px solid black; } </style>-->


	
</head>


  <body style="background:#FFFFFF">



     <div class="container text-center">

     <div class="row">
     	<div class="col-md-4">
	    		<img src="img/logo1.png"alt="..." id="img1" width="250" height="300" class="img-circle">
		</div>

         <div class="col-md-8">
            <div class="panel panel-default">

              <div class="panel-body" align="right">
                  <nav class="navbar navbar-info">
                       <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <!-- Collect the nav links, forms, and other content for toggling -->
                           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-right" class="ca-menu">
                                     <li role="presentation" class="active"><a href="#" class="color-1"><img src="img/carrito.jpg" id="img1" width="35" height="15">Mi carrito <span class="badge">2</span></a></li>
                                      <li class="dropdown "><a href="#" class="dropdown-toggle color-1" data-toggle="dropdown" role="button" aria-expanded="false">Iniciar sesion <span class="caret"></span></a>
                                          <ul class="dropdown-menu" role="menu" class="ca-menu" id="desplegable">
                                              <li><P ALIGN=center>Usuario</P></a></li>
                                              <li><input type="usuario" class="form-control" id="usuario"></li>
                                              <li><P ALIGN=center></span> Contraseña</P></a></li>
                                              <li><input type="contraseña" class="form-control" id="contraseña"></li>
                                              <li><input class="btn btn-primary" type="submit" value="Acceder"></li>
                                              <li class="divider"></li>
                                              <li><a href="#"><P ALIGN=center></span> Registrarme</a></li>
                                         </ul>
                                     </li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                        <div class="col-md-12">
	    		<ul class="nav nav-tabs  nav-justified">
			  	<li role="presentation" class="active"><a href="#"><img src="img/sucursales.jpg" id="img1" width="30" height="15">Sucursales</a></li>
			  	<li role="presentation" class="active"><a href="#"><img src="img/pedidos.jpg" id="img1" width="30" height="15">Vende con nosotros</a></li>
			  	<li role="presentation" class="active"><a href="#"><img src="img/pedido.jpg" id="img1" width="30" height="15">Mis pedidos</a></li>
				</ul>
			</div>

                   </nav>
              </div>

            </div>
        </div>
	

		<div class="row">
      <div class="col-md-12">
          
        <div id="header">
      <ul class="nav">
        <li><a href="">Sala</a>
          <ul>
            <li><a href="">Sofa</a></li>
            <li><a href="">Sillones</a></li>
            <li><a href="">Sala de TV</a></li>
          </ul>
        </li>

        <li><a href="">Comedor</a>
          <ul>
            <li><a href="">Madera</a></li>
            <li><a href="">Metal</a></li>
            <li><a href="">Jardin</a></li>
          </ul>
        </li>

        <li><a href="">Recamara</a>
          <ul>
            <li><a href="">Individual</a></li>
            <li><a href="">Matrimanial</a></li>
            <li><a href="">Literas/a></li>
          </ul>
        </li>

        <li><a href="">Estudio y oficina</a>
          <ul>
            <li><a href="">Escritorios</a></li>
            <li><a href="">Libreros</a></li>
            <li><a href="">Mesas ajustables</a></li>
            <li><a href="">Sillas ejecutivas</a></li>
          </ul>
        </li>

      </ul>
    </div>


	<div class="row">
		<div class="col-md-12">
	    		<font color="white">separacion</font>
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
          <div class="col-md-12">
          <label for="Nombre" class="col-lg-6 control-label">Nombre: </label>
           <div class="col-lg-6">
          <input type="text" class="form-control" id="Nombre">
          </div>
          </div>

          <div class="col-md-12">
          <label for="ApeMaterno" class="col-lg-6 control-label">Ape. Materno: </label>
          <div class="col-lg-6">
          <input type="text" class="form-control" id="ApeMaterno">
          </div>
          </div>

          <div class="col-md-12">
          <label for="ApePaterno" class="col-lg-6 control-label">Ape. Paterno: </label>
          <div class="col-lg-6">
          <input type="tex" class="form-control" id="ApePaterno">
          </div>
          </div>

          <div class="col-md-12">
          <label for="Dir" class="col-lg-6 control-label">Direccion: </label>
          <div class="col-lg-6">
          <input type="tex" class="form-control" id="Dir">
          </div>
          </div>

          <div class="col-md-12">
          <label for="telefono" class="col-lg-6 control-label">Telefono: </label>
          <div class="col-lg-6">
          <input type="text" class="form-control" id="telefono">
          </div>
          </div>

          <div class="col-md-12">
           <label for="email1" class="col-lg-6 control-label">Email: </label>
           <div class="col-lg-6">
           <input type="email" class="form-control" id="email1">
         </div>
         </div>

          <div class="col-md-12">
          <label for="email2" class="col-lg-6 control-label">Confir E-mail: </label>
          <div class="col-lg-6">
          <input type="email" class="form-control" id="email2">
          </div>
          </div>

          <div class="col-md-12">
          <label for="edad" class="col-lg-6 control-label">Edad: </label>
          <div class="col-lg-6">
          <input type="text" class="form-control" id="edad">
          </div>
          </div>

          <div class="col-md-12">
          <label for="radio" class="col-lg-6 control-label">sexo: </label>
          <input type="radio" name="genero" value="Male">Male<BR>
            <input type="radio"name="genero" value="Female">Female
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


	<div class="row">
		<div class="col-md-12">

	    		<font color="white">col-md-8</font>
		</div>
					
	</div>


	<div class="row">
            <div class="col-md-12">
           


            </div>


 </div>

	<div class="row">
		<div class="col-md-12">
	    		<font color="white">separacion</font>
		</div>
					
	</div>

	<div class="row">
		<div class="col-md-12">

		<ul class="breadcrumb">
          <li><img src="img/pago.jpg" id="img1" width="150" height="100"></a><span class="divider">|</span></li>
          <li><img src="img/devoluciones.jpg" id="img1" width="90" height="90">Devoluciones gratis</a> <span class="divider">|</span></li>
          <li><img src="img/meses.jpg" id="img1" width="80" height="900">Hasta 12 meses sin intereses</a> <span class="divider">|</span></li>
        </ul>

		</div>
		
	</div>

	<div class="row">
		<div class="col-md-12">
	    		<font color="white">separacion</font>
		</div>

					
	</div>

	<div class="row">
		<div class="col-md-6">
	    		<P style="text-align: justify;">
	    		<span style="color:#BDBDBD">Muebles el carpintero es la Tienda Online más grande del país, en nuestro 
	    		catálogo tenemos una enorme variedad de productos, marcas y artículos de todo 
	    		tipo que puedes comprar en Internet y recibir en la comodidad de tu casa. 
	    		Disponemos de muchas facilidades de pago, créditos de hasta 12 meses sin 
	    		intereses y la opción de pagar al momento de recibir tu producto en casa, 
	    		ya sea en efectivo o con tarjeta. En Muebles el carpintero estamos comprometidos con nuestros clientes, 
	    		así que puedes tener la certeza de que recibirás tus productos en la puerta de tu casa de 
	    		forma rápida, segura y efectiva.</P>

			<P style="text-align: justify;">
			<span style="color:#BDBDBD">Muebles de carpintero ha traído el e-commerce a América Latina y 
			en este momento tiene presencia en Colombia,Panamá, Perú,Venezuela y Chile, 
			además de México. En todos estos países se ha posicionado como el referente en 
			comercio de muebleria y ha dejado satisfechos a todos sus clientes.
			</P>


	    		

		</div>

		<div class="col-md-6">
    		
			<P style="text-align: justify;">
			<span style="color:#BDBDBD"> En cada uno de nuestros departamentos encontrarás artículos de excelente calidad y de todas las marcas para que tengas la mejor experiencia de compras online y adquieras exactamente lo que estás buscando.Contamos con la mejor calidad, selección y variedad de productos, siempre con increíbles ofertas y promociones, el mejor de las tiendas en línea. En Linio México nos ocupamos de que nuestros clientes disfruten de una experiencia placentera, satisfactoria y agradable al momento de hacer compras en línea.No olvides visitar nuestras tiendas Linio Colombia,Linio Panamá Linio Perú, Linio Venezuela y Linio Chile.</P>
			    			
		</div>

					
	</div>

	<div class="row">
		<div class="col-md-3">

		</div>

		<div class="col-md-6"> 
			<div class="form-group">
            <a href="#"><img src="img/contactanos/face.png" id="face" width="30" height="30">
            <a href="#"><img src="img/contactanos/twitter.png" id="twitter" width="30" height="30">
            <a href="#"><img src="img/contactanos/you.jpeg" id="you" width="30" height="30">
          </div>
		</div>

		<div class="col-md-3">

		</div>
	</div>


	<div class="row">
		<div class="col-md-3">
		</div>

		<div class="col-md-3">
    		<P ALIGN=center>
    		<FONT FACE="times new roman"><span style="color:#088A08">ACERCA DE NOSOTROS<BR></font>
    		<span style="color:#BDBDBD">Quienes somos?<BR>
    		<span style="color:#BDBDBD">Trabaja con nosotros<BR>
    		<span style="color:#BDBDBD">Login<BR>
    		</P>
    			
		</div>

		<div class="col-md-3">
    		<P ALIGN=center>
    		<FONT FACE="times new roman"><span style="color:#088A08">SERVICIO A CLIENTES<BR></font>
    		<span style="color:#BDBDBD">Preguntas Frecuencias?<BR>
    		<span style="color:#BDBDBD">Contactanos<BR>
    		<span style="color:#BDBDBD">Politicas de Privacidad<BR>
    		<span style="color:#BDBDBD">Cancelaciones<BR>
    		<span style="color:#BDBDBD">Politicas de Envios, Cancelaciones, Devoluciones<BR>
    		</P>
    			
		</div>

		<div class="col-md-3">
		</div>


	</div>
		
    
    </div>

   
  </body>
</html>