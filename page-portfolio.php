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
          <?php     
            function showCase($nomeCategoria) {
              $cases = get_field('cases');
              $string='';
              foreach($cases as $case) {
                $categorias = $case['case_categorias'];
                foreach($categorias as $categoria) {
                  switch ($categoria) {
                    case $nomeCategoria:                      
                      $string.= '
                        <a href="'.home_url().$case['case_link'].'" class="swiper-slide card animate">
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
                        </a>
                      ';
                  }
                };
              }
              return $string;
            }
            function showCategory($nomeCategoria) {
              $slug = str_replace(' ', '', $nomeCategoria);
              echo '
                <h2 class="title is-size-4 has-text-white mb-4">'.$nomeCategoria.'</h2>
                <div class="row is-flex is-align-items-center mb-6">
                  <div class="'.$slug.' swiper-button-prev"></div>
                  <div class="swiper portfolio '.$slug.'">
                    <div class="swiper-wrapper">'.
                      showCase($nomeCategoria)
                    .'</div>
                  </div>
                  <div class="'.$slug.' swiper-button-next"></div>
                </div>
                <script type="text/javascript">
                  let swiperPortfolio'.$slug.' = new Swiper(\'.swiper.portfolio.'.$slug.'\', {
                    slidesPerView: \'auto\',
                    spaceBetween: 30,
                    navigation: {
                      nextEl: \''.'.'.$slug.'.swiper-button-next\',
                      prevEl: \''.'.'.$slug.'.swiper-button-prev\',
                    },
                  });
                </script>
              ';
            }
            showCategory('Social Media');
            showCategory('Promo');
            showCategory('Campanha On e off');
            showCategory('Branding');
          ?>
      </div>
    </section>

    <?php get_footer() ?>

