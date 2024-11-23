<?php
// Template Name: Home
?>
<?php get_header() ?>
<header class="hero">
  <div class="hero-body" style="flex-wrap: wrap">
    <div class="container">
      <div class="columns is-mobile">
        <div class="column header-text is-half is-full-mobile">
          <h2 class="title is-size-4 mb-2">15 anos de propaganda e estratégia:</h2>
          <p class="is-size-6 has-text-weight-normal has-text-white mb-4">
            Mais histórias em menos tempo.
          </p>    
          <a href="sobre" class="button is-rounded is-small is-link">
            <span>Saiba mais</span>
          </a>
        </div>
      </div>        
    </div> 
    <div class="scroll-button is-flex is-justify-content-center is-full-width">
      <a href="#portfolio">
        <img
          src="<?php echo get_stylesheet_directory_uri() ?>/images/scroll-down-icon.svg"
          alt=""
        />
      </a>
    </div>   
  </div>
  <!-- Swiper -->
  <div class="swiperHeader">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
          <picture>
            <source media="(max-width:580px)" srcset="<?php echo get_home_url() ?>/wp-content/uploads/2024/11/abajur_campanha_15_anos_background_mobile_05.jpg">
            <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/11/abajur_campanha_15_anos_background_05.jpg" />
          </picture> 
        </div>
      <div class="swiper-slide">
        <picture>
          <source media="(max-width:580px)" srcset="<?php echo get_home_url() ?>/wp-content/uploads/2024/11/abajur_campanha_15_anos_background_mobile_04.jpg">
          <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/11/abajur_campanha_15_anos_background_04.jpg" />
        </picture> 
      </div>
      <div class="swiper-slide">
        <picture>
          <source media="(max-width:580px)" srcset="<?php echo get_home_url() ?>/wp-content/uploads/2024/11/abajur_campanha_15_anos_background-mobile-02.jpg">
          <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/11/abajur_campanha_15_anos_background-02.jpg" />
        </picture> 
      </div>
      <div class="swiper-slide">
        <picture>
          <source media="(max-width:580px)" srcset="<?php echo get_home_url() ?>/wp-content/uploads/2024/11/abajur_campanha_15_anos_background-mobile.jpg">
          <img src="<?php echo get_home_url() ?>/wp-content/uploads/2024/11/abajur_campanha_15_anos_background.jpg" alt="">
        </picture>
      </div>
    </div>
  </div>
</header>
<section id="portfolio" class="section is-medium portfolio-home">
  <div class="container">
    <h2 class="title is-size-4 has-text-white"><?php the_field('texto_portfolio') ?></h2>
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
      <span>Ver mais</span>
    </a>
  </div>
</section>

<section id="trabalhe-conosco" class="section is-medium has-text-centered"  style="background-image: url(<?php the_field('trabalhe-conosco_bg')?>)">
  <div class="container">
    <h2 class="title is-size-4 has-text-white"><?php the_field('texto_trabalhe_conosco') ?></h2>
    <a href="trabalhe-conosco" class="button is-white is-rounded">
      <span>Preencha o formulário</span>
    </a>
  </div>
</section>

<section
  id="clientes"
  class="section is-medium has-text-centered"
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
