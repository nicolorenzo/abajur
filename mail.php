<?php

  // use PHPMailer\PHPMailer\PHPMailer;

  // require_once 'phpmailer/Exception.php';
  // require_once 'phpmailer/PHPMailer.php';
  // require_once 'phpmailer/SMTP.php';

  // $mail = new PHPMailer(true);
  // $alert = '';

  // if(isset($POST['submit'])) {
  //   $mensagem = $_POST['mensagem'];
  //   $nome = $_POST['nome'];
  //   $email = $_POST['email'];
  //   $telefone = $_POST['telefone'];
  //   $linkedin = $_POST['linkedin'];
  //   $portfolio = $_POST['portfolio'];

  //   try {
  //     $mail->isSMTP();
  //     $mail->Host = 'smtp.gmail.com';
  //     $mail->SMTPAuth = true;
  //     $mail->Username = 'nicolorenzo.abajur@gmail.com';
  //     $mail->Password = $secret;
  //     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
  //     $mail->Port = '587';

  //     $mail->setFrom('nicolorenzo.abajur@gmail.com');
  //     $mail->addAddress('nicolorenzo@live.com');

  //     $mail->isHTML(true);
  //     $mail->Subject = 'Contato - Trabalhe Conosco';
  //     $mail->Body = "
  //       $mensagem<br>
  //       $nome<br>
  //       $email<br>
  //       $telefone<br>
  //       $linkedin<br>
  //       $portfolio
  //     ";

  //     $mail->send();
  //     $alert = '
  //       <div class="notification is-success">
  //         <button class="delete"></button>
  //         Mensagem enviada com sucesso!
  //       </div>
  //     ';
  //   } catch(Exception $error) {
  //     $alert = '
  //       <div class="notification is-success">
  //         <button class="delete"></button>
  //         '.$e->getMessage().'
  //       </div>
  //     ';
  //   }
  // }
  include 'phpmailer/secret.php';
  $alert = '';
  //Include required PHPMailer files
	require 'phpmailer/PHPMailer.php';
	require 'phpmailer/SMTP.php';
	require 'phpmailer/Exception.php';
//Define name spaces
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
//Create instance of PHPMailer
	$mail = new PHPMailer();
//Set mailer to use smtp
	$mail->isSMTP();
//Define smtp host
	$mail->Host = "smtp.gmail.com";
//Enable smtp authentication
	$mail->SMTPAuth = true;
//Set smtp encryption type (ssl/tls)
	$mail->SMTPSecure = "tls";
//Port to connect smtp
	$mail->Port = "587";
//Set gmail username
	$mail->Username = "nicolorenzo.abajur@gmail.com";
//Set gmail password
	$mail->Password = $secret;
//Email subject
	$mail->Subject = "Test email using PHPMailer";
//Set sender email
	$mail->setFrom('nicolorenzo.abajur@gmail.com');
//Enable HTML
	$mail->isHTML(true);
//Attachment
	// $mail->addAttachment('img/attachment.png');
//Email body
	$mail->Body = "<h1>This is HTML h1 Heading</h1></br><p>This is html paragraph</p>";
//Add recipient
	$mail->addAddress('nicolorenzo@live.com');
//Finally send email
	if ( $mail->send() ) {
		$alert = '
        <div class="notification is-success">
          <button class="delete"></button>
          Mensagem enviada com sucesso!
        </div>
      ';
	}else{

    $alert = '
        <div class="notification is-danger">
          <button class="delete"></button>
          Erro
        </div>
      ';
		// echo "Message could not be sent. Mailer Error: "{$mail->ErrorInfo};
	}
//Closing smtp connection
	$mail->smtpClose();

?>