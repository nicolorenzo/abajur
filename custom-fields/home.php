<?php
  add_action('cmb2_admin_init', 'cmb2_fields_home');
  
  function cmb2_fields_home() {
    $cmb = new_cmb2_box([
      'id' => 'home_box',
      'title' => 'Home',
      'object_types' => ['page'],
      'show_on' => [
        'key' => 'page-template',
        'value' => 'page-home.php'
      ],
    ]);

    $cmb->add_field([
      'name' => 'Video background',
      'id' => 'video_bg',
      'type' => 'file',
      'options' => [
        'url' => false
      ]
    ]);

    $cmb->add_field([
      'name' => 'Texto Cabeçalho',
      'id' => 'texto_h1',
      'type' => 'textarea',
    ]);

    $button = $cmb->add_field([
      'name' => 'Botão',
      'id' => 'home_button',
      'type' => 'group',
      'options' => [
        'add_button' => 'Adicionar Botão',
        'remove_button' => 'Remover Botão',
      ]
    ]);

    $cmb->add_group_field($button, [
      'name' => 'Texto',
      'id' => 'button_text',
      'type' => 'text',
    ]);

    $cmb->add_group_field($button, [
      'name' => 'Link',
      'id' => 'button_link',
      'type' => 'text',
    ]);

    $cmb->add_field([
      'name' => 'Texto Seção Portfólio',
      'id' => 'texto_portfolio',
      'type' => 'text',
    ]);

    $cmb->add_field([
      'name' => 'Texto Seção Trabalhe Conosco',
      'id' => 'texto_trabalhe_conosco',
      'type' => 'text',
    ]);

    $cmb->add_field([
      'name' => 'Texto Seção Clientes',
      'id' => 'texto_clientes',
      'type' => 'text',
    ]);

    $cmb->add_field([
      'name' => 'Número WhatsApp',
      'id' => 'numero_whatsapp',
      'type' => 'text',
    ]);
    
  };
?>