<!DOCTYPE html>
<?php
    session_start();
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Preguntas Frecuentes</title>
    

	
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link name="viewport" content="width=device-width, initial-sacle=1" href="css/estilo.css" rel="stylesheet" type="text/css">
    <script src="js/jquery.min.js"></script>
    <script src="js/funciones.js"></script>
    <script src="js/login.js"></script>
    <script src="js/bootstrap.min.js"></script>    
    <link href="css/miestilo.css" rel="stylesheet">


    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>

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
            <li>
              <a href="productos.php">Productos</a>
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
            <li>
              <a href="estructura.php">¿Quienes somos?</a>
            </li>
            <li>
              <a href="sitemap.php">Mapa del sitio</a>
            </li>
          </ul>
          <!--<form class="navbar-form navbar-left" role="search"><div class="form-group"><input type="text" class="form-control" placeholder="Buscar"></div><button type="submit" class="btn btn-default">Enviar</button></form>-->
          
          <ul class="nav navbar-nav navbar-right">
             
            <li><a href="<?php echo (isset($_SESSION['nomusr']))? "carro.php" : "registro.php";?>"><?php echo (isset($_SESSION['nomusr']))? "Carrito" : "Registro";?></a></li>
            <li><a href="<?php echo (isset($_SESSION['nomusr']))? "../Controlador/validacionLog.php?opc=2" : "login.php";?>"><?php echo (isset($_SESSION['nomusr']))? $_SESSION['nomusr']." - Salir" : "Entrar";?></a></li>
          </ul>

        </div>
      </nav>
  </header>
<!--final del header-->
<!--Cuerpo-->
	<div class="row">
		
		<div class="col-md-12">
			<div class="row" id="registro">
					<!--INICIO PREGUNTAS FRECUENTES-->		
					
				<div class="col-md-12">
				  <div class="col-md-12 pad_estructura" >


						<div class="row cuadro" id="mision">
							<div class="panel respuestas">
								<div class="panel">
									<h3 class="titulo">MISIÓN</h3>
								</div>
								<div class="panel-body">
									<p>
									Satisfacer las demandas del mercado de accesorios celulares ofreciendo, calidad, innovación, felicidad y variedad en los productos que ofrecemos a nuestros clientes.<br>
				    				En <strong>CEL4u</strong> nos enfocamos en el cliente para proveer productos y servicios de calidad, 
				    				<strong>NO HAY</strong> ni habrá producto que defraude a nuestros clientes.
									<p>
								</div>
							</div>
						</div>

						<div class="divider"></div>

						<div class="row cuadro" id="vision">
							<div class="panel respuestas">
								<div class="panel">
									<h3 class="titulo">VISIÓN</h3>
								</div>
								<div class="panel-body">
									<p>
									Ser la marca líder dentro del mercado de accesorios celulares ofreciendo a través de nuestros productos calidad y variedad que 
									garanticen la satisfacción de nuestros clientes generando con ello el crecimiento de nuestro mercado a nivel nacional.
									<p>
								</div>
							</div>
						</div>
						
						<div class="divider"></div>

						<div class="row cuadro"  id="valores">
							<div class="panel respuestas">
								<div class="panel">
									<h3 class="titulo">VALORES</h3>
								</div>
								<div class="panel-body">
									<p>
									<ul class="list">
							    		<li class="list">Creatividad</li>
							    		<li class="list">Innovación</li>
							    		<li class="list">Calidad</li>
							    		<li class="list">Competitividad</li>
							    		<li class="list">Servicio</li>
							    		<li class="list">Honestidad</li>
							    		<li class="list">Lealtad</li>
							    	</ul>
									<p>
								</div>
							</div>
						</div>
								

				  </div>
				 <div><br><br><br></div>
				</div>
				</div>

				<div class="col-md-6 necesito_pad">
				

			    </div>


				 <!--FIN!!!-->
			</div>
		</div>
	</div>


	</div>
<!--FIN PREGUNTAS FRECUENTES-->
	
		<div class="col-md-6">
			
		</div>

	</div>

	</div>
<!--finn cuerpo-->	

<div class="row">
<!--inicio footer-->
		<footer class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<row class="muted credit">
				<div class="container row-fluid">
					<div class="col-md-12">
						<div class="col-md-3">
						<center>
						<!--Texto que irá en lado izquierdo del footer-->
						Nos reservamos todos los derechos
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
</html		