<?php 
  $cases = get_field('cases');
  if(get_the_ID() == get_page_by_title('Início')->ID) {
    $cases = get_field('cases', get_page_by_title('Portfólio')->ID);
    $firstSixElements = array_slice($cases, 0, 6);
    $cases = $firstSixElements;
  } /* elseif (get_the_ID() == get_page_by_title('Home')->ID) {
    $url = get_url().'/en/portfolio';
    $cases = get_field('cases', url_to_postid($url));
      $firstSixElements = array_slice($cases, 0, 6);
      $cases = $firstSixElements;
  }; */
  if(isset($cases)) {
    foreach($cases as $case) {
?> 
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
<?php
    }
  }
?>