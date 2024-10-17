<nav class="navbar is-fixed-top animate">
  <div class="container">
    <div class="navbar-brand is-flex is-align-items-center">
      <a class="navbar-item" href="<?php echo home_url(); ?>">
        <img
          src="<?php echo get_stylesheet_directory_uri() ?>/images/logo-icon.svg"
          alt="Logotipo Abajur Propaganda"
        />
      </a>
      <span class="navbar-burger open">
        <img
          src="<?php echo get_stylesheet_directory_uri() ?>/images/menu-icon.svg"
        />
      </span>
    </div>
    <div class="navbar-menu animate">
      <?php include 'nav-end.php' ?>
      <span class="navbar-burger close">
        <img
          src="<?php echo get_stylesheet_directory_uri() ?>/images/close-icon.svg"
        />
      </span>
    </div>
  </div>
</nav>
