<!DOCTYPE html>
<?php
    session_start();
    require('../modelo/productos_class.php');
    $objPd=new Productos('');
?>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Producto</title>
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
  
  <div class="container">
    <div class='col-sm-1 col-md-1 text-center'>
    </div>
    <div class='col-sm-10 col-md-10'>
      <div class='col-sm-6 col-md-6 text-center'>
        <?php
          $con_pd=$objPd->getOneProducto($_GET['idProd']);
          echo   "<a class='thumbnail'>";
          echo      "<i class='fa fa-university fa-5x'></i>";
          echo      "<div class='caption'>";
          echo      "<img src='".$con_pd->fields[4]."'>";
          echo      "</div>";
          echo      $con_pd->fields[1];
          echo  "</a>";
          echo "</div>";
          echo "<div class='col-sm-6 col-md-6'>";
          
          echo   "<h1 class='textBody'><strong>".$con_pd->fields[1]."</strong></h1>";
          echo   "<br>";
          echo   "<h3><strong class='textBody'>Descripción</strong></h3><h4 class='textBody'>";
          echo    substr($con_pd->fields[3],0,-20);
          echo    ".</h4>";
          echo   "<h3><strong class='textBody'>Cámara</strong></h3><h4 class='textBody'>HD 9 MP angular</h4>";
          echo   "<h3><strong class='textBody'>Procesador</strong></h3><h4 class='textBody'>Cuatro núcleos de 1,2GHz</h4>";
          echo   "<h3><strong class='textBody'>Memoria interna</strong></h3><h4 class='textBody'>8GB</h4>";
          echo  "<h3 class='textBody'><strong>Precio</strong><h3><h4 class='textBody'>$".$con_pd->fields[2]."</h4>";
          echo (isset($_SESSION['nomusr'])) ? 
              "<form class='form-horizontal' method='POST' action=añadir.php?idProd=".$_GET['idProd']." id='frmAñade'>" 
              : "<form class='form-horizontal' method='POST' action='login.php' id=='frmAñade'>";
        ?>
          <input 
            class="btn btn-primary"
            type="submit" value="Añadir al carrito" name="btnactualizar" action>
        </form>

      </div>
    </div>
    <div class='col-sm-1 col-md-1 text-center'>
    </div>
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