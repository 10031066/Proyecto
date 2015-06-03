<?php session_start(); 
	include 'conexion.php';
	
	if(isset($_POST['usuario'])){ //Login de usuario
		loginCliente($_POST['usuario'],$_POST['pass']);
	}else if(isset($_POST['NombreVendedor'])){ //Registro de vendedor
		loginEmpresa($_POST['NombreVendedor'],$_POST['pass']);
	}else if(isset($_GET['salir'])){
		echo "<script type='text/javascript'>alert('Adios');</script>";
		session_unset();
		session_destroy();
	}
	include 'top.php';
?>

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
		<img src="img/ofertas/comedor.png" width="250" onmouseover="javascript:this.height=500;this.width=500"  
    onmouseout="javascript:this.width=250;this.height=250"/>

		<div class="col-md-12">
		<img src="img/ofertas/keia.jpg" width="250" onmouseover="javascript:this.height=500;this.width=500"  
    onmouseout="javascript:this.width=250;this.height=250"/>
		</div>

		</div>

		<div class="col-md-4">
		<img src="img/ofertas/antesydespues.jpg" width="250" onmouseover="javascript:this.height=500;this.width=500" 
     onmouseout="javascript:this.width=250;this.height=250"/>
		</div>

		<div class="col-md-4">
		<img src="img/ofertas/comedor.png" width="250" onmouseover="javascript:this.height=500;this.width=500"  
    onmouseout="javascript:this.width=250;this.height=250"/>

		<div class="col-md-12">
		<img src="img/ofertas/keia.jpg" width="250" onmouseover="javascript:this.height=500;this.width=500"  
    onmouseout="javascript:this.width=250;this.height=250"/>
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
<?php
	include 'bottom.html'
?>