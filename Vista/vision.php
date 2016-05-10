<!DOCTYPE html>
<?php
    session_start();
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Visión</title>
    

	
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link name="viewport" content="width=device-width, initial-sacle=1" href="css/estilo.css" rel="stylesheet" type="text/css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/logindropdown.js"></script>    	
    <link href="css/miestilo.css" rel="stylesheet">
  </head>
  <body class="cuerpo">
  <div id="wrap">  <!--Agregado--> 
    <!--Header, navbar superior-->
	<header >
      <nav class="navbar navbar-default .navbar-fixed-top" role="navigation" height="50">
        <!-- El logotipo y el icono que despliega el menú se agrupan
             para mostrarlos mejor en los dispositivos móviles -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Desplegar navegación</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="form-group">
            <img src="img/top_icon.png" width="35" height="40" href="index.php">
            <a class="navbar-brand" href="index.php">CEL4u®</a>
          </div>
        </div>
      
        <!-- Agrupar los enlaces de navegación, los formularios y cualquier
             otro elemento que se pueda ocultar al minimizar la barra -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav navbar-left">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                Productos<b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
                <li><a href="productos.php">Móviles</a></li>
                <li class="divider"></li>
                <li><a href="#">Accesorios</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                Soporte <b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
                <li><a href="contacto.php">Contacto</a></li>
                <li><a href="faq.php">Preguntas frecuentes</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                ¿Quienes somos?<b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
                <li><a href="mision.php">Misión</a></li>
                <li class="divider"></li>
                <li><a href="vision.php">Visión</a></li>
                <li class="divider"></li>
                <li><a href="valores.php">Valores</a></li>
              </ul>
            </li>
          </ul>
          <!--<form class="navbar-form navbar-left" role="search"><div class="form-group"><input type="text" class="form-control" placeholder="Buscar"></div><button type="submit" class="btn btn-default">Enviar</button></form>-->
          
          <ul class="nav navbar-nav navbar-right">
             
            <li><a href="<?php echo (isset($_SESSION['nomusr']))? "#" : "registro.php";?>"><?php echo (isset($_SESSION['nomusr']))? "" : "Registro";?></a></li>
            <li><a href="<?php echo (isset($_SESSION['nomusr']))? "../Controlador/validacionLog.php?opc=2" : "login.php";?>"><?php echo (isset($_SESSION['nomusr']))? $_SESSION['nomusr']." - Salir" : "Entrar";?></a></li>
          </ul>

        </div>
      </nav>
  </header>
<!--final del header-->

    <div class="container text-text">
	    <div class="row">
		    <div class="col-md-2">
		    </div>
		    <div class="col-md-8">
		    <h2>
		    	
		    	<nav class="navbar navbar-default">
				  <div class="container-fluid">
				    <div class="navbar-header">
				      <div class="navbar-brand" href="#">
				        Visión
				      </div>
				    </div>
				  </div>
				</nav>

		    </h2>
		    <nav class="navbar navbar-default">
				  <div class="container-fluid">
				    <div class="navbar-header">
				      <div class="navbar" href="#">
				        
		    	Ser la marca líder dentro del mercado de accesorios celulares ofreciendo a través de nuestros productos calidad y variedad que garanticen la satisfacción de nuestros clientes generando con ello el crecimiento de nuestro mercado a nivel nacional.
				      </div>
				    </div>
				  </div>
				</nav>
			    <div class="row">
<!--INICIO DEL CAROUSEL-->

				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
				    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
				    
				    <div class="item active">
				      <img src="img/img1.png" alt="...">
				      <div class="carousel-caption">
				        
				      </div>
				    </div>

				    <div class="item">
				      <img src="img/img2.png" alt="...">
				      <div class="carousel-caption">    
				      </div>
				    </div>
				    
				    <div class="item">
				      <img src="img/img3.png" alt="...">
				      <div class="carousel-caption">    
				      </div>
				    </div>

				    <div class="item">
				      <img src="img/img4.png" alt="...">
				      <div class="carousel-caption">    
				      </div>
				    </div>
				    

				  </div>

				  <!-- Controls -->
				  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>

<!--FIN DEL CAROUSEL-->
			    </div>
			    
			    <div class="row">
			    	<div class="col-md-3">
			    		
			    	</div>
			    	<div class="col-md-6">
			    	<!--COLOCAR LOS ESTILOS-->
			    	<br>
			    	<center>
					    <a href="mision.php" type="button" class="btn btn-primary">«Misión</a>
					    <a href="index.php" type="button" class="btn btn-primary">Página principal</a>
					    <a href="valores.php" type="button" class="btn btn-primary">Valores»</a>
			    	</center>
					</div>
			    	<div class="col-md-3">
			    		
			    	</div>
			    </div>

		    </div>
		    <div class="col-md-2">
		    	
		    </div>

		</div>
	</div>

	<div class="row">
		<br>
		<br>
		<br>
	</div>
	<div id="push"></div>
   </div>
		
<!--inicio footer-->
	<div class="row">
		<footer class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<row class="muted credit">
				<div class="container row-fluid">
					<div class="col-md-12">
						<div class="col-md-3">
						<center>
						<!--Texto que irá en lado izquierdo del footer-->
						Nos reservamos todos los derechos
						</center>
						</div>

						<div class="col-md-6 center">
						<!--Texto que irá en medio del footer-->
							<center>
							<b> Alonso de Zurita #101 Col. Fovisste. Celaya, Gto. México.
							</center>
							<center>
							<i> 
										Página exclusiva para clientes de México.
							</i>
							</center>
							</b>
						</div>
						
						<div class="col-md-3">
							<center>
						<!--Texto que irá lado derecho del footer-->
							Contacto lmaobb@ventaslmano.com		
							</center>
							<center>
								LOL Bebé, lol.
							</center>
							<center>
								
							</center>	
						</div>
						</div>
					</div>
      			</div>
			</row>
		</footer>
<!--fin footer-->	

	</div>

  </body>
</html>