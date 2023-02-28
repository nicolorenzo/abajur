<!DOCTYPE html>
<html class="has-navbar-fixed-top">
  <head>
    <title><?php wp_title(' | ', 'echo', 'right'); ?><?php bloginfo('name'); ?></title>
    <meta name='description' content='<?php the_field('meta_description') ?>'>
    <?php include 'includes/tags.php' ?>
    <?php wp_head() ?>
  </head>
  <body>
    <?php include 'includes/nav.php' ?>