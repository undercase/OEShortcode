<?php
/*
Plugin Name: OE Shortcode
Plugin URI: http://wordpress.org/extend/plugins/#
Description: This is a plugin to create an shortcode for event forms.
Author: Thomas Hobohm
Version: 0.1
Author URI: https://thomashobohm.com/
*/

// [event_form]
function event_form_shortcode($atts) {
  // Start output buffer
  ob_start();

  $attributes = shortcode_atts(array(
    'id' => ''
  ), $atts);

  ?>

  <div id="bbox-root"></div>
  <script type="text/javascript">
    window.bboxInit = function() {
      bbox.showForm("<?php echo $attributes['id']; ?>");
    }
    (function() {
      var e = document.createElement('script');
      e.async = true;
      e.src = 'https://bbox.blackbaudhosting.com/webforms/bbox-min.js';
      document.getElementsByTagName('head')[0].appendChild(e);
    }());
  </script>

  <?php

  // Return output buffer
  $output = ob_get_contents();
  ob_end_clean();

  return $output;
}

wp_enqueue_style('myprefix-style', plugins_url('index.css', __FILE__));
add_shortcode('event_form', 'event_form_shortcode');
