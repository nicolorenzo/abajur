<?php
  add_action('cmb2_admin_init', 'cmb2_fields_case');
  
  function cmb2_fields_case() {
    $cmb = new_cmb2_box([
      'id' => 'case_box',
      'title' => 'Case',
      'object_types' => ['page'],
      'show_on' => [
        'key' => 'page-template',
        'value' => 'page-case.php'
      ],
    ]);

    $cmb->add_field([
      'name' => 'Título',
      'id' => 'titulo',
      'type' => 'text',
    ]);
    
    $cmb->add_field([
      'name' => 'Prêmio',
      'id' => 'premio',
      'type' => 'text',
    ]);
    
    $cmb->add_field([
      'name' => 'Cliente',
      'id' => 'cliente',
      'type' => 'text',
    ]);
    
    $cmb->add_field([
      'name' => 'Selo',
      'id' => 'case_selo',
      'type' => 'file',
      'options' => [
        'url' => false,
      ]
    ]);
  }
?>