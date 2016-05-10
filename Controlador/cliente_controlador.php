<?php
	session_start();
	require('../modelo/clientes_class.php');
	$nomcte= $_POST['nom'];
	$apepat= $_POST['apetpat'];
	$apemat= $_POST['apetmat'];
	$dircte= $_POST['address'];
	$telcte= $_POST['phone'];
	$mailcte= $_POST['email1'];
	$gencte= $_POST['genero'];
	$edadcte= $_POST['age'];

//	echo "".$this->$nomcte."','".$this->$apepat."','".$this->$apemat."','".$this->$dircte."','".$this->$telcte."','".$this->$mailcte."','".$this->$gencte."','".$this->$edadcte."";

	$objCte=new Clientes($nomcte,$apepat,$apemat,$dircte,$telcte,$mailcte,$gencte,$edadcte);
	switch ($_GET['opc']) 
	{
		case 1: 
			#$objCte->insCliente();
			$objCte->insClienteADO();
		break;
		
		case 2:
			$_SESSION['IDCliente']=$_GET['id'];
			$_SESSION['NOMCliente']=$_GET['nom'];
			header('Location:../vista/clientes.php');
		break;
		case 3:
			$objCte->setIdCte($_SESSION['IDCliente']);
			#$objCte->actCliente();
			$objCte->actClienteADO();

		break;
	}
?>