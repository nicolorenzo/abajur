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
        function showCases($categoria, $case) {
          echo '<a href="'.home_url().$case['case_link'].'" class="card animate">
                  <picture>
                    <img src="'.$case['case_thumb'].'" alt="" />
                  </picture>
                  <div class="card-text animate">
                    <h3 class="title is-5 has-text-white">'.$case['case_titulo'].'</h3>
                    <p class="subtitle is-6 mb-2 has-text-white">
                    '.$case['case_sub_titulo'].'
                    </p>
                    <button class="button is-link is-small is-rounded">
                      <span>Saiba mais</span>
                    </button>
                  </div>
                </a>';
        }
          $cases = get_field('cases');
          foreach($cases as $case) {
            $categorias = $case['case_categorias'];
            foreach($categorias as $categoria) {
              if ($categoria == 'Social Media') {
                showCases($categoria, $case);
          /* ?>
                <a href="<?php echo home_url(); ?><?php echo $case['case_link'] ?>" class="card animate">
                  <picture>
                    <img src="<?php echo $case['case_thumb'] ?>" alt="" />
                  </picture>
                  <div class="card-text animate">
                    <h3 class="title is-5 has-text-white"><?php echo $case['case_titulo'] ?></h3>
                    <p class="subtitle is-6 mb-2 has-text-white">
                    <?php echo $case['case_sub_titulo'] ?>
                    </p>
                    <button class="button is-link is-small is-rounded">
                      <span>Saiba mais</span>
                    </button>
                  </div>
                </a>
          <?php  */
              }
            }
            
          }
          $categorias = $cases[0]['case_categorias'];
            foreach($categorias as $categoria) {
              echo $categoria;
            }
        ?> 
        </div>
      </div>
    </section>

    <?php get_footer() ?>

