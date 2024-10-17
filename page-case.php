<?php
// Template Name: Case
?>
<?php get_header() ?>
    <header class="section has-background-black-ter is-medium">
      <div class="container">
        <h1 class="title has-text-weight-normal is-size-4 has-text-white mb-4">
          <?php the_field('titulo') ?>
        </h1>
        <div class="intro">
          <p class="is-size-6">
            <?php the_field('premio') ?>
          </p>
          <p class="is-size-6">
            <?php the_field('cliente') ?>
          </p>
        </div>
      </div>
    </header>
    
    <section class="section is-medium">
      <div class="container content">
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
          swiper_container.insertAdjacentHTML('beforeend', '<div class="selo"><img src="<?php the_field('case_selo') ?>"></div><div class="row touch-icon is-flex is-justify-content-center"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/touch-icon.svg" alt="" /></div>');

        </script>
