<?php
/*PHPMailer.php*/ 

require_once '../Config/config.php';	

  require_once '../PHPMailer/src/PHPMailer.php';
  require_once '../PHPMailer/src/SMTP.php';
  require_once '../PHPMailer/src/Exception.php';
  

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;  

  $mail = new PHPMailer(true);

  try {
    
    if(empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['mensagem']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      http_response_code(500);
    }

    $name = strip_tags(htmlspecialchars($_POST['nome']));
    $email = strip_tags(htmlspecialchars($_POST['email']));
    $phone = strip_tags(htmlspecialchars($_POST['phone']));
    $mensagem = strip_tags(htmlspecialchars($_POST['mensagem']));

    $mensagemcomplet = (" Mensagem de Usuario  | do Site do Instituo  | <br><br>---------------------------------------------------------------------<br> Nome: $name <br><br> Email: $email <br><br> Numero: $phone <br><br> Mensagem: $mensagem");

    // Crie o e-mail e envie a mensagem


    #$mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Username = 'InstitutoNacionalElisRegina@gmail.com';
    $mail->Password = 'deyvid1303';
    $mail->Port = 465;
    $mail->SMTPDebug = 3;

    $mail->setFrom('InstitutoNacionalElisRegina@gmail.com');
    $mail->addAddress('InstitutoNacionalElisRegina@gmail.com');
    #$mail->addAddress('endereco2@provedor.com.br');

    $mail->isHTML(true);
    $mail->Subject = 'Mensagem do Instituto INER';
    $mail->Body =  $mensagemcomplet;
    #$mail->AltBody = 'Chegou o email teste do Canal TI';

    Mensagens::setMsg('E-mail enviado com sucesso!', 'successMsg');
    
    $mail->send();
    
  } catch (Exception $e) {
    echo $e->getMessage();
    Mensagens::setMsg('Ocorreu um erro ' . $e->getMessage(), 'errorMsg');
  }

  header('Location: ../index.php#Contato');

  