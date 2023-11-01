<div class="navbar-end">
<?php
	$menu_pt = 'Menu';
	$menu_en = 'Menu ingles';

	if (strpos($_SERVER['REQUEST_URI'], '/en') == false) {
		$menu = $menu_pt;
	} else {
		$menu = $menu_en;
	}

	$args = array(
		'menu' => $menu,
		'container' => false
	);
	wp_nav_menu( $args );
?>
  <!-- <a href="./" class="navbar-item"> Início </a>
  <a href="sobre.php" class="navbar-item"> Sobre </a>
  <a href="portfolio.php" class="navbar-item"> Portfólio </a>
  <a href="trabalhe-conosco.php" class="navbar-item"> Trabalhe Conosco </a>
  <a href="contato.php" class="navbar-item"> Contato </a> -->
</div>
