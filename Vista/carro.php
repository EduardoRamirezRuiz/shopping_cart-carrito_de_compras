<!DOCTYPE html>
<?php
    session_start();
    if(!isset($_SESSION['carrito']))
    {
      header("Location: index.php");
    }
?>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Carrito</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
     <script src="js/logindropdown.js"></script>
    <script src="js/funciones.js"></script>
    <script src="js/login.js"></script>
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
  
  <div class="container" id="drop">
    <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading">Productos en el carrito</div>
      <table class="table">
        <thead>
          <tr>
            <th>
              TOTAL A PAGAR
            </th>
            <th>
              $<?php echo $_SESSION['ttotal'];?>
            </th>
            <th>
              <form class='form-horizontal' method='POST' action="../Controlador/carrito.php?opc=3" id='frmAnade'> 
                  <input 
                    class='btn btn-success'
                    type='submit' value='PAGAR' name='delcarro'>
              </form>
            </th>
          </tr>
        </thead>
      </table>
      <div class="panel-body">
        <p>Verifique sus productos antes de confirmar el pago, por favor.</p>
      </div>

      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Total</th>
            <th></th>
          </tr>
        </thead>

        <tbody>
          <!--tr>
            <th scope="row">1</th>
            <td>edukok-ram@hotmail.com</td>
            <td>edukok-ram@hotmail.com</td>
            <td>edukok-ram@hotmail.com</td>
            <td>edukok-ram@hotmail.com</td>
          </tr-->
          <?php
            $i=0;
            foreach ($_SESSION['carrito'] as $carro) {
              //echo count($_SESSION['carrito']);
              echo "<tr>";
              echo  "<th scope='row'>".($i+1)."</th>";
              echo  "<td>".$carro['nomprod']."</td>"; //.$_SESSION['carrito'][0]."</td>";
              echo  "<td>$".$carro['precio']."</td>";
              echo  "<td>".$carro['cantidad']."</td>";
              echo  "<td>$".$carro['total']."</td>";
              echo  "<td> <form class='form-horizontal' method='POST' action=../Controlador/carrito.php?opc=2&idProd=".$carro['idProd']." id='frmAnade'> <input 
            class='btn btn-danger'
            type='submit' value='Eliminar' name='delcarro'></form></td>";
              echo "</tr>";
              $i++;
            }
          ?>
        </tbody>

      </table>
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