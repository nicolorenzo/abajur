<?php
// Template Name: Case
?>
<?php get_header() ?>
    <header class="section has-background-white is-medium">
      <div class="container">
        <h1 class="title has-text-weight-normal is-size-4 has-text-black mb-4">
          <?php the_field('titulo') ?>
        </h1>
        <div class="intro">
          <p class="is-size-6">
            <?php the_field('premio') ?>
          </p>
          <p class="is-size-6">
            Cliente: <?php the_field('cliente') ?>
          </p>
        </div>
      </div>
    </header>
    
    <section class="section case is-medium">
      <div class="case-columns columns is-multiline">
        <div class="column is-full is-half-desktop">
            <div class="swiper case">
              <div class="selo">
                <img src="<?php the_field('case_selo') ?>" alt="" />
              </div>
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
