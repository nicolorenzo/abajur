<?php
// Template Name: Portfólio
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
    <section id="portfolio" class="section is-medium">
      <div class="container">
        <div class="row"> 
        <?php  
          $cases = get_field('cases'); 
          $categorias = $cases[0]['case_categorias'];
            foreach($categorias as $categoria) {
              echo $categoria;
            }
        ?> 
        </div>
      </div>
    </section>

    <?php get_footer() ?>

