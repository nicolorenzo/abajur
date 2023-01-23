<?php
  add_action('cmb2_admin_init', 'cmb2_fields_sobre');
  
  function cmb2_fields_sobre() {
    $cmb = new_cmb2_box([
      'id' => 'sobre_box',
      'title' => 'Sobre',
      'object_types' => ['page'],
      'show_on' => [
        'key' => 'page-template',
        'value' => 'page-sobre.php'
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
    
    // $paragrafos = $cmb->add_field([
    //   'name' => 'Texto',
    //   'id' => 'paragrafos',
    //   'type' => 'group',
    //   'repeatable' => true,
    //   'options' => [
    //     'group_title' => 'Parágrafo {#}',
    //     'add_button' => 'Adicionar Parágrafo',
    //     'remove_button' => 'Remover Parágrafo',
    //     'sortable' => true,
    //   ]
    // ]);

    // $cmb->add_group_field($paragrafos, [
    //   'name' => 'Parágrafo',
    //   'id' => 'paragrafo',
    //   'type' => 'wysiwyg',
    // ]);
  }
?>