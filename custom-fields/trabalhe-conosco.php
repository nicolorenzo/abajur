<?php
  add_action('cmb2_admin_init', 'cmb2_fields_trabalhe_concosco');
  
  function cmb2_fields_trabalhe_concosco() {
    $cmb = new_cmb2_box([
      'id' => 'trabalhe_concosco_box',
      'title' => 'Contato',
      'object_types' => ['page'],
      'show_on' => [
        'key' => 'page-template',
        'value' => ['page-contato.php', 'page-trabalhe-conosco.php']
      ],
    ]);

    $cmb->add_field([
      'name' => 'Título',
      'id' => 'titulo',
      'type' => 'text',
    ]);

    $cmb->add_field([
      'name' => 'Sub Título',
      'id' => 'sub_titulo',
      'type' => 'textarea',
    ]);

    $cmb->add_field([
      'name' => 'E-mail de envio',
      'id' => 'email_from',
      'type' => 'text',
    ]);

    $cmb->add_field([
      'name' => 'Assunto do e-mail',
      'id' => 'assunto',
      'type' => 'text',
    ]);

    $cmb->add_field([
      'name' => 'Senha do e-mail de envio',
      'id' => 'email_secret',
      'type' => 'text',
    ]);

    $cmb->add_field([
      'name' => 'E-mail de recebimento',
      'id' => 'email_to',
      'type' => 'text',
    ]);

    $cmb->add_field([
      'name' => 'Chave Captcha Cliente',
      'id' => 'client_key',
      'type' => 'text',
    ]);

    $cmb->add_field([
      'name' => 'Chave Captcha Servidor',
      'id' => 'server_key',
      'type' => 'text',
    ]);
  }
?>