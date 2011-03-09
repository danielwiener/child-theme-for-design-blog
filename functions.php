<?php

/** 
 * @since Luray Design 1.1.
 */
 // add google analytics to footer
 function add_google_analytics() {
 echo '<script type="text/javascript">';
 echo "\n";
 echo '  var _gaq = _gaq || [];'; 
 echo "\n";  
 echo '  _gaq.push(["_setAccount", "UA-19863565-1"]);'; 
 echo "\n";  
 echo '  _gaq.push(["_trackPageview"]);';
 echo "\n";
 echo '  (function() {';
 echo '    var ga = document.createElement("script"); ga.type = "text/javascript"; ga.async = true;';
 echo '    ga.src = ("https:" == document.location.protocol ? "https://ssl" : "http://www") + ".google-analytics.com/ga.js";';
 echo '    var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ga, s);';
 echo '  })();';
 echo "\n";
 echo '</script>';
 }
 add_action('wp_footer', 'add_google_analytics');

?>