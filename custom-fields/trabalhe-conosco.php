<?php
  add_action('cmb2_admin_init', 'cmb2_fields_trabalhe_concosco');
  
  function cmb2_fields_trabalhe_concosco() {
    $cmb = new_cmb2_box([
      'id' => 'trabalhe_concosco_box',
      'title' => 'Trabalhe Concosco',
      'object_types' => ['page'],
      'show_on' => [
        'key' => 'page-template',
        'value' => 'page-trabalhe-conosco.php'
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
  }
?>