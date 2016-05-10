<!DOCTYPE html>
<?php
    session_start();
?>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contacto</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
     <script src="js/logindropdown.js"></script>
    <!--<script src="js/funciones.js"></script>-->
    <link rel="stylesheet" type="text/css" href="css/miestilo.css">
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
                Contacto
              </div>
            </div>
          </div>
        </nav>
        </h2>
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <div class="navbar" href="#">
               Nos encontramos ubicados en Alonso de Zurita #101 Col. Fovisste. Celaya, Gto. México.
               <br>
               <br>
               Para más información también puedes seguirnos consultar la información en nuestras redes sociales.
               <br>
               <br>

               <div class="col-md-4">
               <ul list-style-type:none>
                

               <li><a href="https://www.facebook.com"><img src="img/fbsp.png" title="Facebook"></a></li>
             <li><a href="https://www.pinterest.com"><img src="img/pssp.png"  title="Pinterest"></a></li>
               <li><a href="https://www.linkedin.com"><img src="img/insp.png"  title="LinkedIn"></a></li>
               <li><a href="https://www.youtube.com"><img src="img/ytsp.png"  title="YouTube"></a></li>
               <li><a href="https://twitter.com/"><img src="img/twsp.png"  title="Twitter"></a></li>
               <li><a href="https://instagram.com"><img src="img/itsp.png"  title="Instagram"></a></li>
               <li><a href="https://www.reddit.com"><img src="img/rtsp.png"  title="Reddit"></a></li>

               </ul>
               </div>
               <div class="col-md-4">
               <img src="img/cl3d.png" max-width:100%; max-height:100%; > 
               </div>

               <div class="col-md-4">
                
               </div>
              
              </div>
            </div>
          </div>
        </nav>
          <div class="row">
<!--INICIO DEL CAROUSEL-->

        
       <div class="row">

 </div>
</div>
<!--FIN DEL CAROUSEL--> 
          
          <div class="row">
            <div class="col-md-3">
              
            </div>
            <div class="col-md-6">
            <!--COLOCAR LOS ESTILOS-->
            <br>
            <center>
              <a href="index.php" type="button" class="btn btn-primary">Página principal</a>
            </center>
          </div>
            <div class="col-md-3">
              
            </div>
          </div>
<br>
<br>
<div class="row">

  <div class="col-md-3">
    
  </div>
  
  <div class="col-md-6">
    <center>
    <h3 class="textBody">Tu opinió es importante <br> Envianos un comentario.</h3>
    </center> 
  </div>
  
  <div class="col-md-3">
    
  </div>

</div>
<br>
<br>
<!--Inicio caja de comentarios al diseñador-->
      <div>
        
    <form class="form-horizontal" action="../Controlador/mailToAdmin.php" method="post">
      <div class="form-group">
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
          <label for="h_mailcte" class="control-label textBody">eMail:</label>
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
          <label for="comment" class="control-label textBody">Escribanos:</label>
        </div>
        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">

        <div class="form-group">
            <textarea class="form-control" placeholder="Escriba aquí sus comentarios, quejas o sugerencias." rows="5" id="comment" name="comment"></textarea>
          </div>

        </div>
      </div>
      <div class="form-group">
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
          
        </div>
        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
          <div class="form-group">
              <div class="g-recaptcha" data-sitekey="6LdH2QcTAAAAAE2S1N_B-h_XTbKC1F4u_Ou9zLjb"></div>
            </div>
          </div>
      </div>

      <div class="form-group text-right">
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        </div>
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
          <input 
            class="btn btn-primary"
          type="submit" value="Enviar">
        </div>
      </div>

      </div>
    </form> 

      </div>
<!--Fin cada de comentarios al diseñador-->


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
</div>
<!--fin centro-->
    
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