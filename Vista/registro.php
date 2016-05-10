<!DOCTYPE html>
<?php
    session_start();
    if(isset($_SESSION['nomusr']))
    {
      header("Location: index.php");
    }
?>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
     <script src="js/logindropdown.js"></script>
    <!--<script src="js/funciones.js"></script>-->
    <link rel="stylesheet" type="text/css" href="css/miestilo.css">
    <script src="js/login.js"></script>
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <!--captcha-->
    <script src='https://www.google.com/recaptcha/api.js?hl=es'></script>
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
<!--centro-->
<div class="row">

	<!--centro izquierdo-->
	<div class="col-md-3">
		<div class="form-group text-center">
        </div>	
	</div>
	<!--fin lado izquierdo-->
		
	<!--INICIO CENTRO FORMULARIO-->
		<div class="col-md-6" id="registro">
		<h4>
    		<label class="text-left textBody">Complete todos los campos por favor</label>
		</h4>
		<!--formulario de centro-->        
		<form class="form-horizontal containerRegistro" id="registro" action="../Controlador/validacion.php" method="post">

			<div class="form-group">
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					<label for="h_nomcte" class="control-label">Nombre:</label>
				</div>
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
					<input 
    					class="form-control text-center"
    					type="text" name="h_nomcte" id="h_nomcte"
    					placeholder="Nombres (s)" 
    					required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					<label for="h_apepat" class="control-label">Ape. Paterno:</label>
				</div>
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
					<input 
    					class="form-control text-center"
    					type="text" name="h_apepat" id="h_apepat"
    					placeholder="Apellido Paterno" 
    					required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					<label for="h_apemat" class="control-label">Ape. Materno:</label>
				</div>
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
					<input 
    					class="form-control text-center"
    					type="text" name="h_apemat" id="h_apemat"
    					placeholder="Apellido Materno" 
    					required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					<label for="h_mailcte" class="control-label">eMail:</label>
				</div>
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
					<input 
    					class="form-control text-center"
    					type="email" name="h_mailcte" id="h_mailcte"
    					placeholder="ejemplo@example.dom" 
    					required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					<label for="h_telcte" class="control-label">Télefono:</label>
				</div>
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
					<input 
    					class="form-control text-center"
    					type="text" name="h_telcte" id="h_telcte"
    					placeholder="tel: 0000000000"  
    					required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					<label for="h_dircte" class="control-label">Dirección:</label>
				</div>
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
					<input 
    					class="form-control text-center"
    					type="text" name="h_dircte" id="h_dircte"
    					placeholder="Calle, Colonia, Estado" 
    					required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					<label for="h_sexcte" class="control-label">Sexo:</label>
				</div>
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
					<label>
						<input type="radio" name="h_sexcte" id="h_sexcte" value='f'>
    						Mujer.
					</label>
					<label>
						<input type="radio" name="h_sexcte" id="h_sexcte" value='h'>
    						Hombre.
					</label>
    			</div>
			</div>
			<div class="form-group">
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					<label for="h_edadcte" class="control-label">Edad:</label>
				</div>
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
					<input 
    					class="form-control text-center"
    					type="text" name="h_edadcte" id="h_edadcte"
    					placeholder="00" 
    					required>
				</div>
			</div>

			<div class="form-group">
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					
				</div>
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
					<div class="g-recaptcha" data-sitekey="6LdH2QcTAAAAAE2S1N_B-h_XTbKC1F4u_Ou9zLjb"></div>
				</div>
			</div>

			<div class="form-group">
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					
				</div>
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
					<label>
						<input type="checkbox" name="terminos" id="terminos"
						required>
						Acepto términos y condiciones.
    				</label>
				</div>
			</div>
			<div class="form-group text-right">
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					
				</div>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<input 
						class="btn btn-primary"
					type="submit" value="Register!">
				</div>
			</div>

			</div>
		</form>
	</div>
	<!--FIN CENTRO FORMULARIO-->

	<!--inicio lado derecho-->
		<div class="col-md-6">	
		</div>
	<!--fin centro derecho-->
	</div>
	<div id="push"></div>
</div>
</div>
<!--fin centro-->

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
							<b>Alonso de Zurita #101 Col. Fovisste. Celaya, Gto. México.
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