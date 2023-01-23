<?php 
  function responsive_video_function($atts, $content = null) {
    return '
      <div class="video-container">
        <iframe
          src="'.$content.'"
          frameborder="0"
          allow="accelerometer; autoplay; encrypted-media; gyroscope;"
          allowfullscreen></iframe>
      </div>
    ';
  };

  function columns_function($atts, $content = null) {
    $attributes = shortcode_atts([
      'class' => ''
    ], $atts);

    return '
      <div class="columns '.$attributes['class'].'">
        '.do_shortcode($content).'
      </div>
    ';
  };

  function column_function($atts, $content = null) {
    $attributes = shortcode_atts([
      'class' => ''
    ], $atts);

    return '
      <div class="column case-column '.$attributes['class'].'">
        <div class="container content">
          '.do_shortcode($content).'
        </div>
      </div>
    ';
  };

  add_shortcode('columns', 'columns_function');

  add_shortcode('column', 'column_function');

  add_shortcode('responsive_video', 'responsive_video_function');
?>