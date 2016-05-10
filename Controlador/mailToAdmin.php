<?php
  require_once 'swift/lib/swift_required.php';
  require_once "../Controlador/recaptchalib.php";
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
      $transport = Swift_SmtpTransport::newInstance(gethostbyname('smtp.gmail.com'), 465,'ssl')
    		->setUsername('luuaronn@gmail.com')
    		->setPassword('12<12<12<');

      $mailer = Swift_Mailer::newInstance($transport);
      $message = Swift_Message::newInstance('Comentario Cel4u') //asunto
        ->setFrom(array('luuaronn@gmail.com' => 'LuuAronn')) 
        ->setTo('luuaronn@gmail.com') //(array('luuaronn@gmail.com'=> 'A name'))
        ->setBody('Comentario desde Cel4u: '.$_POST['comment'].' atte: '.$_POST['h_mailcte'])
      ;
      $result = $mailer->send($message);
      $msj="Correo enviado correctamente&pag=contacto";
      header("Location:../Vista/redir.php?msj=".$msj);
    } else {
      $msj="Error de captcha&pag=contacto";
      header("Location:../Vista/redir.php?msj=".$msj);
    }
?>
