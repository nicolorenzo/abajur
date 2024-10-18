<?php
  add_action('cmb2_admin_init', 'cmb2_fields_portfolio');

  function cmb2_fields_portfolio() {
    $cmb = new_cmb2_box([
      'id' => 'portfolio_box',
      'title' => 'Portfólio',
      'object_types' => ['page'],
      'show_on' => [
        'key' => 'page-template',
        'value' => 'page-portfolio.php'
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
      'type' => 'text',
    ]);

    $cases = $cmb->add_field([
      'name' => 'Cases',
      'id' => 'cases',
      'type' => 'group',
      'repeatable' => true,
      'options' => [
        'group_title' => 'Case {#}',
        'add_button' => 'Adicionar Case',
        'remove_button' => 'Remover Case',
        'sortable' => true,
      ]
    ]);

    $cmb->add_group_field($cases, [
      'name' => 'Título',
      'id' => 'case_titulo',
      'type' => 'text',
    ]);

    $cmb->add_group_field($cases, [
      'name' => 'Subtítulo',
      'id' => 'case_sub_titulo',
      'type' => 'text',
    ]);

    $cmb->add_group_field($cases, [
      'name' => 'Link',
      'id' => 'case_link',
      'type' => 'text',
    ]);

    $cmb->add_group_field($cases, [
      'name' => 'Imagem',
      'id' => 'case_thumb',
      'type' => 'file',
      'options' => [
        'url' => false
      ]
    ]);

    $cmb->add_group_field($cases, [
      'name'    => 'Categorias',
      'id'      => 'case_categorias',
      'type'    => 'multicheck',
      'options' => array(
          'Social Media' => 'Social Media',
          'Promo' => 'Promo',
          'Campanha On e off' => 'Campanha On e off',
          'Branding' => 'Branding',
          'Digital' => 'Digital',
      ),
  ] );
  };
?>