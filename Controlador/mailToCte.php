<?php
require_once 'swift/lib/swift_required.php';
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
?>