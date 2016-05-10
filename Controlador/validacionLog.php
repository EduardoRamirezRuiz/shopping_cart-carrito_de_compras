<?php
	session_start();
	require('../modelo/clientes_class.php');
	require_once 'swift/lib/swift_required.php';

	if($_GET['opc']==1){
		$mail=$_POST['inputEmail'];
		$pasw=$_POST['inputPassword'];

		$pass=md5($pasw);

		$objCte=new Clientes('','','','','',$mail,'','');
		$con_log=$objCte->loginADO();
		if($con_log->fields[1]==$pass){
			$_SESSION['nomusr']=$con_log->fields[0];
			$_SESSION['mail']=$mail;
			$msj="Inicio de sesion correcto&pag=index";
	    	header("Location:../Vista/redir.php?msj=".$msj);
	    }
	    else{
	    	$msj="eMail o contraseña incorrectos&pag=login";
	    	header("Location:../Vista/redir.php?msj=".$msj);
	    }
	}
	if($_GET['opc']==2){
		$_SESSION = array();
		if (ini_get("session.use_cookies")) {
		    $params = session_get_cookie_params();
		    setcookie(session_name(), '', time() - 42000,
		        $params["path"], $params["domain"],
		        $params["secure"], $params["httponly"]
		    );
		}
		session_destroy();
		$msj="Sesion cerrada&pag=index";
	    	header("Location:../Vista/redir.php?msj=".$msj);
	}
	if($_GET['opc']==3){
		$mail=$_POST['inputEmail'];
		$objCte=new Clientes('','','','','',$mail,'','');
		$check=$objCte->checkMail();
		if($check->fields[0]==$mail){
			$update=$objCte->updCount();
			if($update){
				$con_pwd=$objCte->getPassToMail();
				$transport = Swift_SmtpTransport::newInstance(gethostbyname('smtp.gmail.com'), 465,'ssl')
			  		->setUsername('luuaronn@gmail.com')
			  		->setPassword('12<12<12<');

			    $mailer = Swift_Mailer::newInstance($transport);
			    $message = Swift_Message::newInstance('Cel4U Contraseña Actualizada') //asunto
			      ->setFrom(array('luuaronn@gmail.com' => 'Cel4U')) 
			      ->setTo($mail) //(array('luuaronn@gmail.com'=> 'A name'))
			      ->setBody('Estimado cliente esta es su nueva contrasena que debe usar junto a su correo para acceder a Cel4u es: '.$con_pwd.'. Gracias por su preferencia.')
			    ;
			    $result = $mailer->send($message);
				$msj="Se ha enviado una nueva contraseña a su correo&pag=login";
		    	header("Location:../Vista/redir.php?msj=".$msj);
			}
			else{
				$msj="ERROR, Disculpe y reintetelo por favor&pag=olvidar";
	    		header("Location:../Vista/redir.php?msj=".$msj);
			}
		}
		else{
			$msj="El eMail ingresado no se encuentra&pag=olvidar";
	    	header("Location:../Vista/redir.php?msj=".$msj);
		}
		
	}

?>