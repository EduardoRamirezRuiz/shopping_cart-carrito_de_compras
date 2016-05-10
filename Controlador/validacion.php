<?php
	require_once "../Controlador/recaptchalib.php";
	require('../modelo/clientes_class.php');
	require_once 'swift/lib/swift_required.php';

	$secret = "6LdH2QcTAAAAABQIF4F1lGuzE9ykR0uUjI_lr9Af";
	$response = null;
	$reCaptcha = new ReCaptcha($secret);
	if ($_POST["g-recaptcha-response"]) {
	$response = $reCaptcha->verifyResponse(
	        $_SERVER["REMOTE_ADDR"],
	        $_POST["g-recaptcha-response"]
	    );
	}
	if ($response != null && $response->success) {
	    $nomcte= $_POST['h_nomcte'];
		$apepat= $_POST['h_apepat'];
		$apemat= $_POST['h_apemat'];
		$dircte= $_POST['h_dircte'];
		$telcte= $_POST['h_telcte'];
		$mailcte= $_POST['h_mailcte'];
		$gencte= $_POST['h_sexcte'];
		$edadcte= $_POST['h_edadcte'];
		$objCte=new Clientes($nomcte,$apepat,$apemat,$dircte,$telcte,$mailcte,$gencte,$edadcte);
		$ins=$objCte->insClienteADO();
		if($ins){
			//$con_pwd=$objCte->getPassADO();
			$con_pwd=$objCte->getPassToMail();
			$transport = Swift_SmtpTransport::newInstance(gethostbyname('smtp.gmail.com'), 465,'ssl')
		  		->setUsername('luuaronn@gmail.com')
		  		->setPassword('12<12<12<');

		    $mailer = Swift_Mailer::newInstance($transport);
		    $message = Swift_Message::newInstance('Cel4U Contraseña') //asunto
		      ->setFrom(array('luuaronn@gmail.com' => 'Cel4U')) 
		      ->setTo($mailcte) //(array('luuaronn@gmail.com'=> 'A name'))
		      ->setBody('Estimado cliente esta es su contrasena que debe usar junto a su correo para acceder a Cel4u es: '.$con_pwd.'. Gracias por su preferencia.')
		    ;
		    $result = $mailer->send($message);
			$msj="El registro ha sido exitoso, se ha enviado su contraseña a su correo&pag=registro";
	    	header("Location:../Vista/redir.php?msj=".$msj);
	    }
	    else{
	    	$msj="Error al registrar, compruebe su correo otorgado&pag=registro";
	    	header("Location:../Vista/redir.php?msj=".$msj);
	    }

	  } else {
	  	$msj="Error de captcha&pag=registro";
    	header("Location:../Vista/redir.php?msj=".$msj);
	  }
?>