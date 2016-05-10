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
					
				<div class="col-md-6">
						<div class="col-md-12" >
							
							<div class="col-md-12">
						<div class="row opcion" id="ans1">
							<h4>¿Qué es CEL4u Link Sky?</h4>
						</div>

						<div class="row cuadro" id="ans1R" hidden>
							<div class="panel respuestas">
								<div class="panel-body">
									<p>El día de hoy 12 de Marzo del 2015 en la Explanada Cívica del Instituto Tecnológico de Celaya se realizó la exhibición de banda de Guerra y escolta del Instituto Tecnológico de Celaya para dar a conocer lo sucedido en el XXl Encuentro Nacional de Escoltas y Bandas de Guerra de los Institutos Tecnológicos en el Instituto Tecnológico de Nuevo Laredo.</p>
					                <p>
								</div>
							</div>
						</div>

						<div class="row opcion" id="ans2">
							<h4>¿Qué ventaja ofrece el servicio CEL4u en las marcas que ofrece?</h4>
						</div>

						<div class="row cuadro" id="ans2R" hidden>
							<div class="panel respuestas">
								<div class="panel-body">
									<p>El día de hoy 12 de Marzo del 2015 en la Explanada Cívica del Instituto Tecnológico de Celaya se realizó la exhibición de banda de Guerra y escolta del Instituto Tecnológico de Celaya para dar a conocer lo sucedido en el XXl Encuentro Nacional de Escoltas y Bandas de Guerra de los Institutos Tecnológicos en el Instituto Tecnológico de Nuevo Laredo.</p>
					                <p>
								</div>
							</div>
						</div>
						<div class="row opcion" id="ans3">
							<h4>¿Es necesario contar con cuenta bancaria para usa CEL4u mobile?</h4>
						</div>

						<div class="row cuadro" id="ans3R" hidden>
							<div class="panel respuestas">
								<div class="panel-body">
									<p>El día de hoy 12 de Marzo del 2015 en la Explanada Cívica del Instituto Tecnológico de Celaya se realizó la exhibición de banda de Guerra y escolta del Instituto Tecnológico de Celaya para dar a conocer lo sucedido en el XXl Encuentro Nacional de Escoltas y Bandas de Guerra de los Institutos Tecnológicos en el Instituto Tecnológico de Nuevo Laredo.</p>
					                <p>
								</div>
							</div>
						</div>
						<div class="row opcion" id="ans4">
							<h4>¿Qué marcas no contienen dual-sim?</h4>
						</div>

						<div class="row cuadro" id="ans4R" hidden>
							<div class="panel respuestas">
								<div class="panel-body">
									<p>El día de hoy 12 de Marzo del 2015 en la Explanada Cívica del Instituto Tecnológico de Celaya se realizó la exhibición de banda de Guerra y escolta del Instituto Tecnológico de Celaya para dar a conocer lo sucedido en el XXl Encuentro Nacional de Escoltas y Bandas de Guerra de los Institutos Tecnológicos en el Instituto Tecnológico de Nuevo Laredo.</p>
					                <p>
								</div>
							</div>
						</div>
						<div class="row opcion" id="ans5">
							<h4>¿Qué servcios ofrece la app CEL4u?</h4>
						</div>

						<div class="row cuadro" id="ans5R" hidden>
							<div class="panel respuestas">
								<div class="panel-body">
									<p>El día de hoy 12 de Marzo del 2015 en la Explanada Cívica del Instituto Tecnológico de Celaya se realizó la exhibición de banda de Guerra y escolta del Instituto Tecnológico de Celaya para dar a conocer lo sucedido en el XXl Encuentro Nacional de Escoltas y Bandas de Guerra de los Institutos Tecnológicos en el Instituto Tecnológico de Nuevo Laredo.</p>
					                <p>
								</div>
							</div>
						</div>
						<div class="row opcion" id="ans6">
							<h4>¿Puedo desinstalar CEL4u de mi teléfono?</h4>
						</div>

						<div class="row cuadro" id="ans6R" hidden>
							<div class="panel respuestas">
								<div class="panel-body">
									<p>El día de hoy 12 de Marzo del 2015 en la Explanada Cívica del Instituto Tecnológico de Celaya se realizó la exhibición de banda de Guerra y escolta del Instituto Tecnológico de Celaya para dar a conocer lo sucedido en el XXl Encuentro Nacional de Escoltas y Bandas de Guerra de los Institutos Tecnológicos en el Instituto Tecnológico de Nuevo Laredo.</p>
					                <p>
								</div>
							</div>
						</div>
						<div class="row opcion" id="ans7">
							<h4>¿Por qué mi CEL4u tarda en iniciar?</h4>
						</div>

						<div class="row cuadro" id="ans7R" hidden>
							<div class="panel respuestas">
								<div class="panel-body">
									<p>El día de hoy 12 de Marzo del 2015 en la Explanada Cívica del Instituto Tecnológico de Celaya se realizó la exhibición de banda de Guerra y escolta del Instituto Tecnológico de Celaya para dar a conocer lo sucedido en el XXl Encuentro Nacional de Escoltas y Bandas de Guerra de los Institutos Tecnológicos en el Instituto Tecnológico de Nuevo Laredo.</p>
					                <p>
								</div>
							</div>
						</div>
						<div class="row opcion" id="ans8">
							<h4>¿CEL4u con graficos dedicados?</h4>
						</div>

						<div class="row cuadro" id="ans8R" hidden>
							<div class="panel respuestas">
								<div class="panel-body">
									<p>El día de hoy 12 de Marzo del 2015 en la Explanada Cívica del Instituto Tecnológico de Celaya se realizó la exhibición de banda de Guerra y escolta del Instituto Tecnológico de Celaya para dar a conocer lo sucedido en el XXl Encuentro Nacional de Escoltas y Bandas de Guerra de los Institutos Tecnológicos en el Instituto Tecnológico de Nuevo Laredo.</p>
					                <p>
								</div>
							</div>
						</div>
						<div class="row opcion" id="ans9">
							<h4>¿AMD en marcas que ofrece CEL4u?</h4>
						</div>

						<div class="row cuadro" id="ans9R" hidden>
							<div class="panel respuestas">
								<div class="panel-body">
									<p>El día de hoy 12 de Marzo del 2015 en la Explanada Cívica del Instituto Tecnológico de Celaya se realizó la exhibición de banda de Guerra y escolta del Instituto Tecnológico de Celaya para dar a conocer lo sucedido en el XXl Encuentro Nacional de Escoltas y Bandas de Guerra de los Institutos Tecnológicos en el Instituto Tecnológico de Nuevo Laredo.</p>
					                <p>
								</div>
							</div>
						</div>
						<div class="row opcion" id="ans10">
							<h4>¿Qué ventajas tiene ser propiertario ser de una cuenta CEL4u?</h4>
						</div>

						<div class="row cuadro" id="ans10R" hidden>
							<div class="panel respuestas">
								<div class="panel-body">
									<p>El día de hoy 12 de Marzo del 2015 en la Explanada Cívica del Instituto Tecnológico de Celaya se realizó la exhibición de banda de Guerra y escolta del Instituto Tecnológico de Celaya para dar a conocer lo sucedido en el XXl Encuentro Nacional de Escoltas y Bandas de Guerra de los Institutos Tecnológicos en el Instituto Tecnológico de Nuevo Laredo.</p>
					                <p>
								</div>
							</div>
						</div>
					</div>
					<div><br><br><br></div>
				</div>
				</div>

				<div class="col-md-6 necesito_pad">
				
					<div id="carousel-example-generic" class="carousel slide idxCarousel" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
            <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
            <li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            
            <div class="item">
              <img src="img/ib1.jpg" alt="..."> <!--class="img-responsive center-block"-->
              <div class="carousel-caption"><p><a href="producto.php?idProd=9"><no>Leer más</no></a></p></div>
            </div>

            <div class="item active" href="#">
              <img src="img/ib2.jpg" alt="...">
              <div class="carousel-caption"><p><a href="producto.php?idProd=33"><no>Leer más</no></a></p></div>
            </div>
            
            <div class="item" href="#">
              <img src="img/ib3.jpg" alt="...">
              <div class="carousel-caption"><p><a href="producto.php?idProd=55"><no>Leer más</no></a></p></div>
            </div>

            <div class="item" href="#">
              <img src="img/ib4.jpg" alt="...">
              <div class="carousel-caption"><p><a href="producto.php?idProd=30"><no>Leer más</no></a></p></div>
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

			    </div>

			    </div>


				 <!--FIN!!!-->
			</div>
		</div>
	<div><br><br><br></div>
	<div id="push"></div>
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
</html>