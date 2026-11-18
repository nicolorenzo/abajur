<?php
// Template Name: Sobre
?>
<?php get_header() ?>
<header class="section has-background-black-ter is-medium">
  <div class="container">
    <h1 class="title has-text-weight-normal is-size-4 has-text-white mb-4">
      <?php the_field('titulo') ?>
    </h1>
    <p class="is-size-6 intro has-text-white">
      <?php the_field('sub_titulo') ?>
    </p>
  </div>
</header>
<section id="sobre" class="section is-medium">
  <div class="container content">
    <!-- <div class="columns is-flex-wrap-wrap">
      <div class="column is-full is-half-widescreen">
          <div class="swiper sobre">
            <div class="swiper-wrapper">
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
            <div class="row touch-icon is-flex is-justify-content-center">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/touch-icon.svg" alt="" />
              </div>
            <div class="swiper-pagination"></div>
          </div>
      </div>
    </div> -->
    <?php 
          if(have_posts()) {
            while(have_posts()) {
              the_post();
              the_content();
            }
          }
        ?>
  </div>
</section>

<?php get_footer() ?>
<script type='text/javascript'>
          let swiper_container= document.querySelector('.swiper-container');
          swiper_container.insertAdjacentHTML('beforeend', '<div class="row touch-icon is-flex is-justify-content-center"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/touch-icon.svg" alt="" /></div>');

        </script>
