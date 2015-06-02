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

	<style type="text/css"> div{ border: 1px solid black; } </style>

	
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
                                      <?php 
												if(isset($_SESSION['user'])){
													?>
									            <li role="presentation" class="active"><a href="carrito.php" class="color-1"><img src="img/carrito.jpg" id="img1" width="35" height="15">Mi carrito <span class="badge">2</span></a></li>
												<a href="index.php/?a=salir">Salir</a>
										<?php		}else{
												  
											  ?>
									  <li class="dropdown "><a href="#" class="dropdown-toggle color-1" data-toggle="dropdown" role="button" aria-expanded="false">Iniciar sesion <span class="caret"></span></a>
                                          <ul class="dropdown-menu" role="menu" class="ca-menu" id="desplegable">
                                              
											  <form ACTION="index.php" method="POST">
												<li><P ALIGN=center>Usuario</P></a></li>
												<li><input type="usuario" class="form-control" name="usuario"></li>
												<li><P ALIGN=center></span> Contraseña</P></a></li>
												<li><input type="password" class="form-control" name="pass"></li>
												<li><input class="btn btn-primary" type="submit" value="Acceder"></li>
											  </form>
                                              <li class="divider"></li>
                                              <li><a href="clientes.php"><P ALIGN=center></span> Registrarme</a></li>
											  
                                         </ul>
                                     </li>
									 <?php
									} ?>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                        <div class="col-md-12">
	    		<ul class="nav nav-tabs  nav-justified">
			  	<li role="presentation" class="active"><a href="#"><img src="img/sucursales.jpg" id="img1" width="30" height="15">Sucursales</a></li>
			  	<li role="presentation" class="active"><a href="vende_nosotros.php"><img src="img/pedidos.jpg" id="img1" width="30" height="15">Vende con nosotros</a></li>
			  	<li role="presentation" class="active"><a href="#"><img src="img/pedido.jpg" id="img1" width="30" height="15">Mis pedidos</a></li>
				</ul>
			</div>

                   </nav>
              </div>

            </div>
        </div>
	

		<div class="row">
      <div class="col-md-12">
          
        <ul class="nav nav-pills">
        <li role="presentation" ><a href="#">Sala<span class="divider">|</span></a></li>
        <li role="presentation"><a href="#">Comedor<span class="divider">|</span></a></li>
        <li role="presentation"><a href="#">Recamara<span class="divider">|</span></a></li>
        <li role="presentation"><a href="#">Estudio y oficina<span class="divider">|</span></a></li>
      </ul>
    </div>
    </div>

	<div class="row">
		<div class="col-md-12">
	    		<font color="white">separacion</font><br>
          <font color="white">separacion</font>
		</div>
					
	</div>
  <div class="row">
    <div class="col-md-12">
          <font color="white">separacion</font>
    </div>
          
  </div>

		<div class="row">
			<div class="col-md-8">
	    		<div id="contenedor">
                <div id="myCarousel" class="carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol>
                  <!-- Carousel items -->
                  <div class="carousel-inner">
                    <div class="active item"><img  src="img/0.jpg" width="3500" height="500" alt="banner1"  /></div>
                    <div class="item"><img  src="img/1.JPG" width="1500" height="300"  alt="banner2" /></div>
                    <div class="item"><img  src="img/2.jpg" width="2000" height="300"  alt="banner3" /></div>

                  </div>
                  <!-- Carousel nav -->
                  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
                </div>
            </div>
             
            <script src="js/jquery.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script>
                $(document).ready(function(){
                    $('.myCarousel').carousel()
                });
            </script>

		</div>	

			<div class="col-md-4">
			<img src="img/keia.jpg" id="img1" width="300" height="250">

			</div>	

			<div class="col-md-4">
    			<img src="img/keia.jpg" id="img1" width="300" height="250">
			</div>

		</div>
		

	<div class="row">
		<div class="col-md-12">
	    		<font color="white">separacion</font>
		</div>
					
	</div>

	<div class="row">
		<div class="col-md-12">
    <h4><font color="silver">---------------- LAS MEJORES OFERTAS ------------------</font></h4>
      <HR >
		</div>

		<div class="col-md-4">
		<img src="img/ofertas/comedor.png" id="img1" width="300" height="250">

		<div class="col-md-12">
		<img src="img/ofertas/keia.jpg" id="img1" width="300" height="250">
		</div>

		</div>

		<div class="col-md-4">
		<img src="img/ofertas/antesydespues.jpg" id="img1" width="900" height="400">
		</div>

		<div class="col-md-4">
		<img src="img/ofertas/comedor.png" id="img1" width="300" height="250">

		<div class="col-md-12">
		<img src="img/ofertas/keia.jpg" id="img1" width="300" height="250">
		</div>
		</div>
		
	</div>

	
	<div class="row">
		<div class="col-md-12">
	    		<font color="white">separacion</font>
		</div>
					
	</div>

	<div class="row">
		<div class="col-md-12">
    <h4><font color="silver">---------------- TIENDAS OFICIALES ------------------</font></h4>
      <HR >
		<ul class="breadcrumb">
          <li><img src="img/tiendas/coppel.jpg" id="img1" width="150" height="100"></a><span class="divider"></span></li>
          <li><img src="img/tiendas/famsa.jpg" id="img1" width="90" height="90"></a> <span class="divider"></span></li>
          <li><img src="img/tiendas/sanborns.jpg" id="img1" width="80" height="900"></a> <span class="divider"></span></li>
          <li><img src="img/tiendas/elektra.png" id="img1" width="80" height="900"></a> <span class="divider"></span></li>
          <li><img src="img/tiendas/walmart.png" id="img1" width="80" height="900"></a> <span class="divider"></span></li>
        	</ul>

		</div>
		
	</div>


	<div class="row">
		<div class="col-md-12">
	    		<font color="white">col-md-8</font>
		</div>
					
	</div>


	<div class="row">
            <div class="col-md-12">
            <h4><font color="silver">---------------- MARCAS OFICIALES ------------------</font></h4>
      <HR >

               <nav class="navbar navbar-default" role="navigation">


            <div class="flex-container">
              <div id="main" class="row">
                  
                  <div class="onecol"></div> 
                       
                    <div id="slider" class="tencol">

                      <div class="flex-container">
                        <div class="flexslider">
                          <ul class="slides">
                            <li><img src="img/marcas/alfonso.gif"/></li>
                            <li><img src="img/marcas/amboan.jpg"/></li>
                            <li><img src="img/marcas/baker.jpg"/></li>
                            <li><img src="img/marcas/belta.gif"/></li>
                            <li><img src="img/marcas/ber.jpg"/></li>
                            <li><img src="img/marcas/brian.jpg"/></li>
                            <li><img src="img/marcas/calvin.jpg"/></li>
                            <li><img src="img/marcas/camerich.jpg"/></li>
                            <li><img src="img/marcas/casa.jpg"/></li>
                            <li><img src="img/marcas/chate.gif"/></li>
                            <li><img src="img/marcas/furni.jpg"/></li>
                            <li><img src="img/marcas/labo.gif"/></li>
                          </ul><!-- .slides -->
                        </div><!-- .flexslider -->
                      </div><!-- .flex-container -->

                    </div>
                    
                  <div class="onecol last"></div>
                </div>
            </div>

          </nav>


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
    		<a href="mision.php"><span style="color:#BDBDBD">Quienes somos?<BR></a>
    		<a href="vende_nosotros.php"><span style="color:#BDBDBD">Trabaja con nosotros<BR></a>
    		<a href=".php"><span style="color:#BDBDBD">Login<BR></a>
    		</P>
    			
		</div>

		<div class="col-md-3">
    		<P ALIGN=center>
    		<FONT FACE="times new roman"><span style="color:#088A08">SERVICIO A CLIENTES<BR></font>
    		<a href="politicas.php"><span style="color:#BDBDBD">Politicas de Privacidad<BR></a>
    		<a href="mision.php"><span style="color:#BDBDBD">Cancelaciones<BR></a>
    		<a href="mision.php"><span style="color:#BDBDBD">Politicas de Envios, Cancelaciones, Devoluciones<BR></a>
    		</P>
    			
		</div>

		<div class="col-md-3">
		</div>
	</div>
		
    
    </div>

   
  </body>
</html>