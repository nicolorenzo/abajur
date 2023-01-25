<?php
// Template Name: Case Elementor
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
