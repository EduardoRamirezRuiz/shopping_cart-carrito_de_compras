<?php
	session_start();
	require('../modelo/productos_class.php');

	$index;
	switch ($_GET['opc']) {
	 	case 1:
	 			construir();
	 			addCarro();
	 		break;
	 	case 2:
	 			removeCarro();
	 		break;
	 	case 3:
	 			pagar();
	 		break;

	 	default:
	 		# code...
	 		break;
	 }

	 function pagar(){
	 	$objPd=new Productos('');
	 	foreach ($_SESSION['carrito'] as $carro){
	 		//echo "".$carro['idProd']." ".$carro['cte']." ".$carro['cantidad']." ".$_SESSION['total']."";
	 		$con_pd=$objPd->putVenta($carro['idProd'],$carro['cte'],$carro['cantidad'],$carro['total']);
	 	}
	 	unset($_SESSION['carrito']);
	 	header("Location: ../Vista/index.php");
	 }
		
	function construir()
	{
		if(!isset($_SESSION['carrito']))
		{
			$_SESSION['index']=0;
			$_SESSION['carrito'] = null;
		}
		else{
			$_SESSION['index']=$_SESSION['index']+1;
		}
		//$this->carrito = $_SESSION['carrito'];
		return true;
	}

	function addCarro(){
		$objPd=new Productos('');
		$con_pd=$objPd->getOneProducto($_GET['idProd']);

		$articulo=array(
		'cte'=>$_SESSION['mail'],
		'idProd'=>$con_pd->fields[0],
		'cantidad'=>$_POST['cantidad'],
		'precio'=>$con_pd->fields[2],
		'nomprod'=>$con_pd->fields[1],
		'total'=>$_POST['cantidad']*$con_pd->fields[2]);
		$_SESSION['carrito'][$_SESSION['index']]=$articulo;
		calcTotal();
		header("Location: ../Vista/carro.php");
	}
	function calcTotal(){
		$total=0;
		foreach ($_SESSION['carrito'] as $carro){
			$total+=$carro['total'];
		}
		$_SESSION['ttotal']=$total;
	}
	function removeCarro(){
		$index=0;
		foreach ($_SESSION['carrito'] as $carro){
			if($_GET['idProd']==$carro['idProd']){
				echo "string";
				//exit();
				unset($_SESSION['carrito'][$index]);
			}
			$index=$index+1;
		}
		calcTotal();
		header("Location: ../Vista/carro.php");
	}
?>