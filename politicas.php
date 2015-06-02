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
    <title>Quienes Somos?</title>
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

    <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
    <h4><font color="#DF3A01">---------------- AVISO DE PRIVACIDAD ------------------</font></h4>
      <HR >
      <h5><font color="#DF3A01">EL AVISO DE PRIVACIDAD FORMA PARTE DEL USO DE ESTE SITIO WEB </font></h5>
      <P style="text-align: justify;"><span style="color:#BDBDBD">
      RESPONSABLE <BR>

        En cumplimiento a la Ley Federal de Protección de Datos Personales en Posesión de los Particulares, BAZAYA MEXICO, 
        S. de R.L. de C.V., (en adelante Muebles el carpintero) le informa que Muebles el carpintero es responsable de sus datos personales. 
        El "Usuario" podrá contactar a Linio en cualquier momento a través de nuestro correo electrónico muebleselcarpintero@hotmail.com o 
        directamente  en Río Elba #20 piso 5, Col. Cuauhtémoc, Del. Cuauhtémoc, México, D.F., C.P. 06500. <br>
        Nuestros teléfonos son (55) 85-25-12-00 y 01-800-925-46-46.

        Protegemos y salvaguardamos sus datos personales para evitar el daño, pérdida, destrucción, robo, extravío, alteración, 
        así como el tratamiento no autorizado de sus datos personales. 
          <br><br></P>

    </div>
    <div class="col-md-2"></div>
    </div>

    <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <P style="text-align: justify;"><span style="color:#BDBDBD">
      DATOS PERSONALES<BR>

         La información deberá ser siempre veraz y completa. El usuario responderá en todo momento por los datos 
         proporcionados y en ningún caso Linio será responsable de la veracidad de los mismos.<br>

        La información solicitada al usuario en el sitio www.muebleselcarpintero.com.mx es: Nombre completo, Teléfonos de contacto, 
        Dirección Postal, Correo Electrónico, Datos de Facturación, Datos de Tarjeta de Crédito o Débito. Sus datos 
        personales serán tratados con base a en los principios de licitud, consentimiento, información, calidad, finalidad, 
        lealtad, proporcionalidad y responsabilidad en términos de la Legislación. Se mantendrá la confidencialidad de sus 
        datos personales estableciendo y manteniendo de forma efectiva las medidas de seguridad administrativas, técnicas y 
        físicas, para evitar su daño, pérdida, alteración, destrucción, uso, acceso o divulgación indebida. 
          <br><br></P>

    </div>
    <div class="col-md-2"></div>
    </div>

    <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <P style="text-align: justify;"><span style="color:#BDBDBD">
      TRANSFERENCIA DE DATOS<BR>

         El titular de los datos personales, autoriza a Bazaya México, S. de R.L. de C.V., a transferir los datos 
         proporcionados por él a terceros (ya sea persona física o moral), que con motivo de la relación comercial 
         con Bazaya México, S. de R.L. de C.V. lo requieran para entero cumplimiento del negocio. El titular de los datos personales, 
         entiende y acepta que en ningún momento se podrán transferir datos sensibles ni patrimoniales. <br>

        En el caso de no estar de acuerdo con la transmisión aquí mencionada, el titular deberá ponerse en contacto al 
        correo electrónico: muebleselcarpintero@hotmail.com, o en nuestros teléfonos: (55) 8525-1200 y 01-800-925-4646, en un 
        plazo no mayor a 5 (cinco) días hábiles a partir de la publicación del presente aviso ya que de lo contrario y
        transcurrido dicho término, acepta y autoriza a Bazaya México, S. de R.L. de C.V. a la transferencia de los mismos.
          <br><br></P>

    </div>
    <div class="col-md-2"></div>
    </div>

    <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <P style="text-align: justify;"><span style="color:#BDBDBD">
      QUÉ SON LOS COOKIES Y CÓMO SE UTILIZAN<BR>

         La aceptación de las cookies no es un requisito para visitar nuestra página. Sin embargo, nos gustaría señalar 
         que el uso del "carrito", funcionalidad en linio y orden solo es posible con la activación de las cookies. 
         Las cookies son pequeños archivos de texto que identifican a tu computadora con nuestro servidor como un usuario 
         único cuando tú visitas ciertas páginas en nuestro sitio y que son guardados por tu navegador de internet en el disco 
         duro de tu computadora. Las cookies se pueden utilizar para reconocer tu dirección de protocolo de internet, 
         que te ahorra tiempo mientras quieres entrar a nuestro sitio. Solo utilizamos cookies para tu comodidad en el uso de 
         muebles el carpintero (por ejemplo, para recordar quién eres cuando deseas modificar tu carrito de compra sin tener que volver a 
         introducir tu dirección de correo electrónico) y no para obtener o usar cualquier otra información sobre ti 
         (por ejemplo de publicidad segmentada). Tu navegador puede ser configurado para no aceptar cookies, pero esto 
         sería restringir el uso de nuestra página. Por favor, acepta nuestra garantía de que el uso de cookies no contiene
         datos de carácter personal o privado, y están libres de virus. Si deseas obtener más información acerca de las cookies, 
         ve a http://www.allaboutcookies.org, y para obtener información sobre la eliminación de ellos desde el navegador, 
         ve a http://www.allaboutcookies.org/manage-cookies/index.html. En el caso de empleo de cookies, el botón de "ayuda" 
         que se encuentra en la barra de herramientas de la mayoría de los navegadores, le dirá cómo evitar aceptar nuevos cookies, 
         cómo hacer que el navegador le notifique cuando recibe un nuevo cookie o cómo deshabilitar todos los cookies. 
          <br><br></P>

    </div>
    <div class="col-md-2"></div>
    </div>

    <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <P style="text-align: justify;"><span style="color:#BDBDBD">
      USO DE LA INFORMACIÓN<BR>

         La información solicitada permite a muebles el carpintero contactar a los usuarios y potenciales clientes cuando sea necesario 
         para completar los procedimientos de compra. Asimismo, muebles el carpintero utilizará la información obtenida para: 
         • Procurar un servicio eficiente  <br>
         • Informar sobre nuevos productos o servicios que estén relacionados con el contratado o adquirido por el cliente  <br>
         • Dar cumplimiento a obligaciones contraídas con nuestros clientes  <br>
         • Informar sobre cambios de nuestros productos o servicios  <br>
         • Proveer una mejor atención al usuario. Los datos  <br>
         personales o empresariales proporcionados por el usuario formarán parte de un archivo que contendrá su perfil. 
         El usuario puede modificar su perfil en cualquier momento utilizando su número de usuario y contraseña. 
          <br><br></P>

    </div>
    <div class="col-md-2"></div>
    </div>

    <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <P style="text-align: justify;"><span style="color:#BDBDBD">
      LIMITACIÓN DE USO Y DIVULGACIÓN DE INFORMACIÓN<BR>

        En nuestro programa de notificación de promociones, ofertas y servicios a través de correo electrónico, 
        solo Linio tiene acceso a la información recabada. Este tipo de publicidad se realiza mediante avisos y 
        mensajes promocionales de correo electrónico, los cuales solo serán enviados a usted y a aquellos contactos 
        registrados para tal propósito, esta indicación podrá usted modificarla en cualquier momento enviando un 
        correo a muebleselcarpintero@hotmail.com. En los correos electrónicos enviados, pueden incluirse ocasionalmente ofertas 
        de terceras partes que sean nuestros socios comerciales. 
          <br><br></P>

    </div>
    <div class="col-md-2"></div>
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