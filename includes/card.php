<?php 
  $cases = get_field('cases');
  if(get_the_ID() == get_page_by_title('Início')->ID) {
    $cases = get_field('cases', get_page_by_title('Portfólio')->ID);
    $firstThreeElements = array_slice($cases, 0, 3);
    $cases = $firstThreeElements;
  };
  if(isset($cases)) {
    foreach($cases as $case) {
?> 
  <a href="<?php echo home_url(); ?><?php echo $case['case_link'] ?>" class="card">
    <picture class="mb-2">
      <div class="row selo">
        <?php if(isset($case['case_selo'])) { ?>
          <img src="<?php echo $case['case_selo'] ?>" alt="">
        <?php
        } ?>
        <?php if(isset($case['case_status'])) { ?> 
          <button class="button is-rounded is-small is-black">
            <span>
              <?php echo $case['case_status'] ?>
            </span>
          </button>
        <?php
        } ?>
      </div>
      <img src="<?php echo $case['case_thumb'] ?>" alt="" />
    </picture>
    <h3 class="title is-5 has-text-black"><?php echo $case['case_titulo'] ?></h3>
    <p class="subtitle is-6 mb-2">
    <?php echo $case['case_sub_titulo'] ?>
    </p>
    <button class="button is-link is-small is-rounded">
      <span>Saiba mais</span>
    </button>
  </a>
<?php
    }
  }
?>