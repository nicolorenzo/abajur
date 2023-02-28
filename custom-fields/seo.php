<?php
  add_action('cmb2_admin_init', 'cmb2_fields_seo');
  
  function cmb2_fields_seo() {
    $cmb = new_cmb2_box([
      'id' => 'seo_box',
      'title' => 'SEO',
      'object_types' => ['page']
      // ,
      // 'show_on' => [
      //   'key' => 'page-template',
      //   'value' => ['page-contato.php','page-case.php','page-home.php','page-portfolio.php','page-sobre.php','page-trabalhe-conosco.php']
      // ],
    ]);

    $cmb->add_field([
      'name' => 'Meta description',
      'id' => 'meta_description',
      'type' => 'textarea',
    ]);
    
  };
?>