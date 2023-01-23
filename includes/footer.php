<footer class="footer has-background-primary">
  <div class="container">
    <div class="columns">
      <div class="column">
        <img
          class="mb-5"
          src="<?php echo get_stylesheet_directory_uri() ?>/images/logo.svg"
          alt=""
        />
        <?php include 'nav-end.php' ?>
      </div>
      <div class="column">
        <div class="map">
          <iframe
            width="100%"
            height="300"
            id="gmap_canvas"
            src="https://maps.google.com/maps?q=abajur%20propaganda&t=&z=13&ie=UTF8&iwloc=&output=embed"
            frameborder="0"
            scrolling="no"
            marginheight="0"
            marginwidth="0"
          ></iframe>
        </div>
      </div>
    </div>
  </div>
</footer>
<?php include 'whatsapp-button.php' ?>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<script
  type="text/javascript"
  src="<?php echo get_stylesheet_directory_uri() ?>/lib/main.js"
></script>
