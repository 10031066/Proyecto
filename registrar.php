<!DOCTYPE html>
<?php include 'conexion.php'; ?>
<html>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrar</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript"> 
    </script>

    <!--<style type="text/css"> div{ border: 1px solid black; } </style>
    -->

</head>

<body>
  <div class="container text-center">
    
    <div class="row">
        <div class="col-md-4">
          <img src="img/logo.jpg" id="img1" width="250" height="200">
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
                                              <li><a href="clientes.php"><P ALIGN=center></span> Registrarme</a></li>
                                         </ul>
                                     </li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                        <div class="col-md-12">
                          <ul class="nav nav-tabs  nav-justified">
                          <li role="presentation" class="active"><a href="#"><img src="img/sucursales.jpg" id="img1" width="40" height="35">Sucursales</a></li>
                          <li role="presentation" class="active"><a href="#"><img src="img/pedidos.jpg" id="img1" width="40" height="35">Vende con nosotros</a></li>
                          <li role="presentation" class="active"><a href="#"><img src="img/pedido.jpg" id="img1" width="40" height="35">Mis pedidos</a></li>
                        </ul>
                      </div>

                   </nav>
              </div>

            </div>
    </div><!-- barra principal-->

    <div class="row">
    <div class="col-md-12">
          <font color="white">separacion</font>
          <font color="white">separacion</font>
    </div>
          
    </div>

    <div class="row">
      <div class="col-md-12">
          
         <nav class="navbar navbar-default" role="navigation">

         <div class="col-md-2">
            <ul class="nav navbar-nav">
              <a href="#" role="presentation" class="dropdown-toggle" data-toggle="dropdown">Sala<b class="caret" data-hover="dropdown"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#"><P ALIGN=center>Sofa</a></li>
                  <li><a href="#"><P ALIGN=center>Sillones</a></li>
                  <li><a href="#"><P ALIGN=center>Sala de TV</a></li>
                </ul>             
            </ul>
          </div>

          <div class="col-md-2">
            <ul class="nav navbar-nav">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Comedor<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#"><P ALIGN=center>Madera</a></li>
                  <li><a href="#"><P ALIGN=center>Metal</a></li>
                  <li><a href="#"><P ALIGN=center>Jardin</a></li>
                </ul>             
            </ul>
          </div>

         <div class="col-md-2">
            <ul class="nav navbar-nav">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Recamara<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#"><P ALIGN=center>Individual</a></li>
                  <li><a href="#"><P ALIGN=center>Matrimonial</a></li>
                  <li><a href="#"><P ALIGN=center>Literas</a></li>
                </ul>             
            </ul>
          </div>

          <div class="col-md-2">
            <ul class="nav navbar-nav">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Estudio y oficina<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#"><P ALIGN=center>Escritorios</a></li>
                  <li><a href="#"><P ALIGN=center>Libreros</a></li>
                  <li><a href="#"><P ALIGN=center>Mesas ajustables</a></li>
                  <li><a href="#"><P ALIGN=center>Sillas ejecutivas</a></li>
                </ul>             
            </ul>
          </div>


      </div>          
    </div><!-- barra secundaria-->

    <div class="row">
    <div class="col-md-12">
          <font color="white">separacion</font>
          <font color="white">separacion</font>
    </div>
          
    </div>
	
	
<?php

	if(isset($_REQUEST['Nombre'])){
		registrarCliente($_REQUEST['Nombre'],$_REQUEST['ApePaterno'],$_REQUEST['ApeMaterno'],$_REQUEST['Dir'],$_REQUEST['telefono'],$_REQUEST['email1'],$_REQUEST['email2'],$_REQUEST['edad'],$_REQUEST['genero']);
	}else{
		echo "No deberias estar aqui";
	}
	
	
?>

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

  </div> <!-- class container text center -->

</body>

</html>