<!DOCTYPE html>
<?php
    session_start();
?>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bienvenido</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
     <script src="js/logindropdown.js"></script>
    <!--<script src="js/funciones.js"></script>-->
    <link rel="stylesheet" type="text/css" href="css/miestilo.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
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
  
  <div id="carousel-example-generic" class="carousel slide idxCarousel" data-ride="carousel">
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
              <img src="img/ib1.jpg" alt="..."> <!--class="img-responsive center-block"-->
              <div class="carousel-caption"><p><a href="producto.php?idProd=9" class="textBody2">Leer más</a></p></div>
            </div>

            <div class="item" href="#">
              <img src="img/ib2.jpg" alt="...">
              <div class="carousel-caption"><p><a href="producto.php?idProd=33" class="textBody2">Leer más</a></p></div>
            </div>
            
            <div class="item" href="#">
              <img src="img/ib3.jpg" alt="...">
              <div class="carousel-caption"><p><a href="producto.php?idProd=55" class="textBody2">Leer más</a></p></div>
            </div>

            <div class="item" href="#">
              <img src="img/ib4.jpg" alt="...">
              <div class="carousel-caption"><p><a href="producto.php?idProd=30" class="textBody2">Leer más</a></p></div>
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

  <row>
    <div clas="row">
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
       <h2><strong>Samsung S5<strong></h2><h5>Estás a tiempo de adquirir el tuyo</h5>
          <a href="producto.php?idProd=10"><img src="img/ixb1.png" alt="..."></a>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
       <h2><strong>Iphone 5s<strong></h2><h5>Estás a tiempo de adquirir el tuyo</h5>
          <a href="producto.php?idProd=56"><img src="img/ixb2.png" alt="..."></a>
      </div>
    </div>
    <div clas="row">
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <h2><strong>Lumia 640 LTE<strong></h2><h5>Todo el poder de Microsoft</h5>
                <a href="producto.php?idProd=2"><img src="img/ixb3.png" alt="..."></a>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
       <h2><strong>LG LEON H320<strong></h2><h5>Siempre con la mejor inovación</h5>
                <a href="producto.php?idProd=46"><img src="img/ixb4.png" alt="..."></a>
      </div>
    </div>
  </row>
    
  <row>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <h1><strong>Recomendado para ti<strong></h1>
      <div class="row">
       <div class="col-sm-4 col-md-3 text-center">
            <a href="producto.php?idProd=19" class="thumbnail">
                  <i class="fa fa-pencil-square-o fa-5x"></i>
                  <div class="caption">
                  <img src="img/m1.jpg" alt="CiTablets">
                  </div>
                  Galaxy Grand Prime
            </a>
        </div>

          <div class="col-sm-4 col-md-3 text-center">
            <a href="producto.php?idProd=20" class="thumbnail">
                <i class="fa fa-file-text-o fa-5x"></i>
                <div class="caption">
                <img src="img/m2.jpg" alt="Servicios">
                </div>
                Galaxy Note 4
            </a>
        </div>
                    
      
      
        <div class="col-sm-4 col-md-3  text-center">
             <a href="producto.php?idProd=1" class="thumbnail">
                 <i class="fa fa-pencil fa-5x"></i>
                <div class="caption">
                <img src="img/m3.jpg" alt="">  
                </div>
                Lumia 640 XL
             </a>
         </div>

         <div class="col-sm-4 col-md-3  text-center">
             <a href="producto.php?idProd=47" class="thumbnail">
                <i class="fa fa-university fa-5x"></i>
                <div class="caption">
                <img src="img/m4.jpg">
                </div>
              LG G Flex 2
            </a>
        </div>
 </div>          </div>
</row>
</div>  
  <div id="push"></div>

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