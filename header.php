<!DOCTYPE html>
<html>
  <head>
    <title><?php wp_title(' | ', 'echo', 'right'); ?><?php bloginfo('name'); ?></title>
    <meta name='description' content='<?php the_field('meta_description') ?>'>
    <?php include 'includes/tags.php' ?>
    <?php wp_head() ?>
  </head>
  <body>
    <?php if ( function_exists( 'gtm4wp_the_gtm_tag' ) ) { gtm4wp_the_gtm_tag(); } ?>
    <?php include 'includes/nav.php' ?>