<?php
  require 'PHPMailer/src/Exception.php';
  require 'PHPMailer/src/PHPMailer.php';
  require 'PHPMailer/src/SMTP.php';

  include 'PHPMailer/secret.php';
  
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;
  
  $mensagem = $_POST['mensagem'];
  $nome = $_POST['nome'];
  $form_email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $linkedin = $_POST['linkedin'];
  $portfolio = $_POST['portfolio'];

  $email = new PHPMailer();
  $email->isSMTP();
  $email->Host = "smtp.gmail.com";
  $email->SMTPAuth = "true";
  $email->SMTPSecure = "tls";
  $email->Port ="587";
  $email->Username = "nicolorenzo.abajur@gmail.com";
  $email->Password = $secret;
  $email->Subject = "Contato Site - Trabalhe Conosco";
  $email->isHTML(true);
  $email->CharSet = 'UTF-8';
  $email->setFrom("nicolorenzo.abajur@gmail.com");
  
  $email->addAttachment($_FILES['file']['tmp_name'], $_FILES['file']['name']);

  $email->Body = '<p>Nome: '.$nome.'</p><p>E-mail: '.$form_email.'</p><p>Telefone: '.$telefone.'</p><p>LinkedIn: '.$linkedin.'</p><p>Mensagem: '.$mensagem.'</p><p>Portfólio: '.$portfolio.'</p>';
  $email->addAddress("nicolorenzo@live.com");
  if(isset($_POST['submit'])) {
    if($email->Send()){
      $alert = '<div class="notification is-success">
        <button class="delete"></button>
        E-mail enviado com sucesso!
      </div>';
    }else{
      $alert = '<div class="notification is-danger">
        <button class="delete"></button>'.$email->ErrorInfo.'</div>';
    }
  }
  $email->smtpClose();

  // require 'sendgrid/vendor/autoload.php';
  // require "sendgrid/secret.php";

  // $email = new \SendGrid\Mail\Mail(); 
  // $email->setFrom("nicolorenzo.abajur@gmail.com", "Abajur");
  // $email->setSubject("Contato Site - Trabalhe Conosco");
  // $email->addTo("nicolorenzo@live.com", "Example User");
  // $email->addContent("text/plain", "and easy to do anywhere, even with PHP");
  // $email->addContent(
  //     "text/html", "<p>Nome: {$nome}</p><p>E-mail: {$form_email}</p><p>Telefone: $telefone</p><p>LinkedIn: $linkedin</p><p>Mensagem: $mensagem</p><p>Portfólio: $portfolio</p>"
  // );
  // $sendgrid = new \SendGrid(SENDGRID_API_KEY);
  // if(isset($_POST['submit'])) {
  //   try {
  //     $response = $sendgrid->send($email);
  //     // print $response->statusCode() . "\n";
  //     // print_r($response->headers());
  //     // print $response->body() . "\n";
  //     $alert = '<div class="notification is-success">
  //       <button class="delete"></button>
  //       E-mail enviado com sucesso!
  //     </div>';
  //   } catch (Exception $e) {
  //     $alert = '<div class="notification is-success">
  //       <button class="delete"></button>'
  //       . $e->getMessage() .
  //     '</div>';
  //   }
  // }
?>