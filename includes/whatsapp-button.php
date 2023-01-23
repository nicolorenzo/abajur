<?php $home = get_page_by_title('Início')->ID; ?>
<a
  id="whatsapp-button"
  href="https://wa.me/<?php the_field('numero_whatsapp', $home); ?>?text=Ol%C3%A1%2C%20Abajur."
  target="_blank"
  class="button is-link"
>
  <span class="icon">
    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/whatsapp-icon.svg" alt="" />
  </span>
</a>
