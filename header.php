<!DOCTYPE html>
<html>
  <head>
    <title><?php wp_title(' | ', 'echo', 'right'); ?><?php bloginfo('name'); ?></title>
    <?php include 'includes/tags.php' ?>
    <?php wp_head() ?>
  </head>
  <body>
    <?php include 'includes/nav.php' ?>