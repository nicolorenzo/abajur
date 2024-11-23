<?php

  // Funções para Limpar o Header
  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'wlwmanifest_link');
  remove_action('wp_head', 'start_post_rel_link', 10, 0 );
  remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
  remove_action('wp_head', 'feed_links_extra', 3);
  remove_action('wp_head', 'wp_generator');
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action('admin_print_styles', 'print_emoji_styles');

  // Habilitar Menus
  add_theme_support('menus');

  //Shortcodes
  include('custom-shortcodes.php');

  // SEO
  include('custom-fields/seo.php');  
  
  // Funções CMB2
  include('custom-fields/functions.php');

  // Carrossel
  include('custom-fields/carrossel.php');

  // Página Home
  include('custom-fields/home.php');

  // Página Portfólio
  include('custom-fields/portfolio.php');

  // Página Case
  include('custom-fields/case.php');

  // Página Sobre
  include('custom-fields/sobre.php');

  // Página Contato
  // include('custom-fields/contato.php');

  // Página Trabalhe Conosco
  include('custom-fields/trabalhe-conosco.php');

  add_filter( 'oembed_response_data', 'disable_embeds_filter_oembed_response_data_' );
  function disable_embeds_filter_oembed_response_data_( $data ) {
      unset($data['author_url']);
      unset($data['author_name']);
      return $data;
  }

?>