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
function ocultar(){
document.getElementById('oculto').style.display = 'none';}
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

	<style type="text/css"> div{ border: 1px solid black; } </style>

	
</head>

  <body style="background:#FFFFFF">

     <div class="container text-center">

     <div class="row">
     	<div class="col-md-4">
	    		<a href="index.php"><img src="img/logo1.png"alt="..." id="img1" width="250" height="300" class="img-circle"></a>
		</div>
    <div class="col-md-2"></div>

         <div class="col-md-6">
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
									    <?php if(isset($_SESSION['NomUser'])){?>        <li role="presentation" class="active"><a href="carrito.php" class="color-1"><img src="img/carrito.jpg" id="img1" width="35" height="15">Mi carrito <span class="badge">2</span></a></li>
										<?php }?>
													  <li role="presentation" class="active"><a href="cuenta<?php if(isset($_SESSION['NomEmpresa'])) echo "_empresa"?>.php">Bienvenido <br>
													  <?php 
															if(isset($_SESSION['NomUser'])){
																echo $_SESSION['NomUser'];
															}else if($_SESSION['NomEmpresa']){
																echo $_SESSION['NomEmpresa'];
															}
													  ?></a></li>
                        <a href="index.php?salir=si">Salir</a>
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
			  	<li role="presentation" class="active"><a href="sucursales.php"><img src="img/sucursales.jpg" id="img1" width="30" height="15">Sucursales</a></li>
			  	
          <li role="presentation" class="dropdown "><a href="#" class="dropdown-toggle color-1" data-toggle="dropdown" role="button" aria-expanded="false">
          <img src="img/pedidos.jpg" id="img1" width="30" height="15">Vende con nosotros<span class="caret"></span></a>
                                         <?php if(!isset($_SESSION['user'])){
											 
										 
										 ?>
										  <ul class="dropdown-menu" role="menu" class="ca-menu" id="desplegable">
                                              <form action="index.php" method="POST">
											  <li><P ALIGN=center>Usuario</P></a></li>
                                              <li><input type="usuario" class="form-control" name="NombreVendedor"></li>
                                              <li><P ALIGN=center></span> Contraseña</P></a></li>

                                              <li><input type="password" class="form-control" name="pass"></li>

                                              <li><input class="btn btn-primary" type="submit" value="Acceder"></li>
                                              <li class="divider"></li>
											  </form>
											  
                                              <li><a href="vende_nosotros.php"><P ALIGN=center></span> Registrarme</a></li>
                                         </ul>
										 <?php } ?>
                                     </li>

			  	</ul>

			</div>

                   </nav>
              </div>

            </div>
        </div>
	

		<div class="row">
      <div class="col-md-12">
          
        <ul class="nav nav-pills">
        <li role="presentation" ><a href="salas.php">Sala<span class="divider">|</span></a></li>
        <li role="presentation"><a href="comedor.php">Comedor<span class="divider">|</span></a></li>
        <li role="presentation"><a href="recamaras.php">Recamaras<span class="divider">|</span></a></li>
        <li role="presentation"><a href="estudios.php">Estudio y oficina<span class="divider">|</span></a></li>
		<?PHP if(isset($_SESSION['NomEmpresa'])){	
        echo '<li role="presentation"><a href="form_Art.php">Registrar productos<span class="divider">|</span></a></li>';
		}
		?>
      </ul>
    </div>
    </div>

