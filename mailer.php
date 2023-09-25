<?php
  error_reporting(E_ERROR | E_PARSE);
  require 'PHPMailer/src/Exception.php';
  require 'PHPMailer/src/PHPMailer.php';
  require 'PHPMailer/src/SMTP.php';

  // include 'PHPMailer/secret.php';
  
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;

  function message() {
    $mensagem = $_POST['mensagem'];
    $nome = $_POST['nome'];
    $form_email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $linkedin = $_POST['linkedin'];
    $portfolio = $_POST['portfolio'];
    $empresa = $_POST['empresa'];
    $fields = array("Mensagem"=>$mensagem, "Nome"=>$nome, "E-mail"=>$form_email, "Telefone"=>$telefone, "LinkedIn"=>$linkedin, "Portfólio"=>$portfolio, "Empresa"=>$empresa) ;
    $message = '';
    foreach ($fields as $field=>$field_value){
      if(!empty($field_value)){
        $message .= "<p>{$field}: {$field_value}</p>";
      };
    };
    return $message;
  };

  $email = new PHPMailer();
  $email->isSMTP();
  $email->Host = "smtp.gmail.com";
  $email->SMTPAuth = "true";
  $email->SMTPSecure = "tls";
  $email->Port ="587";
  $email->Username = get_field('email_from');
  $email->Password = get_field('email_secret');
  $email->Subject = get_field('assunto');
  $email->isHTML(true);
  $email->CharSet = 'UTF-8';
  $email->setFrom(get_field('email_from'));
  $email->addAttachment($_FILES['file']['tmp_name'], $_FILES['file']['name']);
  $email->Body = message();
  $email->addAddress(get_field('email_to'));

  $captcha = $_POST['g-recaptcha-response'];
  
  if(isset($_POST['submit'])) {
      $res = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".get_field('server_key')."&response=".$captcha."&remoteip=".$_SERVER["REMOTE_ADDR"]));
      if($res->success) {
        if($email->Send()){
          $alert = '<div class="notification is-success">
            Enviado com sucesso!
          </div>';
        }else{
          $alert = '<div class="notification is-danger">
            '.$email->ErrorInfo.'</div>';
        }
      } else {
        $alert = '<div class="notification is-danger">'.
          'Confirme que você não é um robô!'.'
        </div>';
      }
    // if($email->Send()){
    //   $alert = '<div class="notification is-success">
    //     <button class="delete"></button>
    //     E-mail enviado com sucesso!
    //   </div>';
    // }else{
    //   $alert = '<div class="notification is-danger">
    //     <button class="delete"></button>'.$email->ErrorInfo.'</div>';
    // }
    
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