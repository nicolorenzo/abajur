<?php
// Template Name: Home
?>
<?php get_header() ?>
<header class="hero is-primary is-large">
  <div class="hero-body">
    <div class="container">
      <h1 class="title is-size-4 has-text-weight-normal">
        <?php the_field('texto_h1') ?>
      </h1>
      <?php
        $home_button = get_field('home_button');
        if(isset($home_button)) {
          foreach($home_button as $button) {
      ?> 
            <a href="<?php echo $button['button_link'] ?>" class="button is-rounded is-small is-link">
              <span><?php echo $button['button_text'] ?></span>
            </a>
      <?php
          }
        }
      ?>
      
      
      <div class="mt-6 is-flex is-justify-content-center is-full-width">
        <a href="#portfolio">
          <img
            src="<?php echo get_stylesheet_directory_uri() ?>/images/scroll-down-icon.svg"
            alt=""
          />
        </a>
      </div>
    </div>
  </div>
</header>
<section id="portfolio" class="section is-medium">
  <div class="container">
    <h2 class="title is-size-4 has-text-black"><?php the_field('texto_portfolio') ?></h2>
    <div class="row">
      <div class="grid">
        <?php include 'includes/card.php' ?>
      </div>
    </div>
  </div>
  <div class="row is-flex is-justify-content-center">
    <a
      href="portfolio"
      class="button is-link is-rounded is-medium has-text-weight-bold"
    >
      <span>Ver portfolio completo</span>
    </a>
  </div>
</section>

<section id="trabalhe-conosco" class="section is-medium has-text-centered">
  <div class="container">
    <h2 class="title is-size-4 has-text-white"><?php the_field('texto_trabalhe_conosco') ?></h2>
    <a href="trabalhe-conosco" class="button is-white is-rounded">
      <span>Preencha o formulário</span>
    </a>
  </div>
</section>

<section
  id="clientes"
  class="section has-background-white is-medium has-text-centered"
>
  <div class="container">
    <h2 class="title is-size-4 has-text-black"><?php the_field('texto_clientes') ?></h2>
    <!-- Slider main container -->
    <div class="row-swiper is-flex is-align-items-center">
      <div class="swiper-button-prev"></div>
      <div class="swiper clientes">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <?php 
                $slider = get_field('carrossel');
                if(isset($slider)) {
                  foreach($slider as $imagem) {
              ?>
                    <div class="swiper-slide">
                      <img src="<?php echo $imagem['imagem'] ?>" />     
                    </div>
              <?php 
                  }
                }
              ?>
        </div>
        <!-- If we need pagination -->
        <!-- <div class="swiper-pagination"></div> -->
      </div>
      <div class="swiper-button-next"></div>
    </div>
  </div>
</section>

<?php get_footer() ?>
