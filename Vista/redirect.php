<!DOCTYPE html>
<?php
	$direccion="refresh: 3; url =".$_GET['pag'].".php";
	header($direccion);
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Redireccionando...</title>
    
    	

    <!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link name="viewport" content="width=device-width, initial-sacle=1" href="css/estilo.css" rel="stylesheet" type="text/css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>    
    <link href="css/miestilo.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>

  </head>
  <body>
    <div class="container text-text">
	    <div class="row">
	    <br>
	    <br>
		    <div class="col-md-4"></div>
		
		    <div class="col-md-4">
		    	<div class="row">
		    		<center>	
		 	    		<h3 class="titulo"><?php echo $_GET['msj']?></h3>
		    		</center>
		    	</div>
		    	<div class="row">
		    		<center>	
		 	    		<h3 class="titulo">Espere un momento y sera redireccionado...</h3>
		    		</center>
		    	</div>
			    
			    <div class="row">
			    	<center>
			    		<img src="img/load.gif" class="redir">
					</center>
			    </div>

			    <div class="row">
			    	<center>
			    		<img src="img/logolater.png" class="redir">
					</center>
			    </div>
		    </div>

		    <div class="col-md-4"></div>

		</div>
	</div>
	
  </body>
</html>