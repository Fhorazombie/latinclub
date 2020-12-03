<?php

require_once("includes/default_template.php");

function activar_subtitulos_plugin(){

	require_once ('includes/activar_subtitle.php');

}

add_action( 'after_setup_theme', 'activar_subtitulos_plugin' ); 

if (class_exists('MultiPostThumbnails')) {

new MultiPostThumbnails(array(
'label' => 'Imagen de categoria de juego',
'id' => 'secondary-image',
'post_type' => 'page'
 ) );

 }



 add_filter('the_content', 'wpse_ad_content');

 function wpse_ad_content($content)
 {
     if (!is_single()) return $content;
     $paragraphAfter = 3;
     $content = explode("</p>", $content);
     $new_content = '';
     for ($i = 0; $i < count($content); $i++) {
         if ($i == $paragraphAfter) {
             $new_content.= '	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
								<!-- Latinclub -->
								<ins class="adsbygoogle"
								     style="display:block"
								     data-ad-client="ca-pub-9071400572064394"
								     data-ad-slot="5317675068"
								     data-ad-format="auto"></ins>
								<script>
								(adsbygoogle = window.adsbygoogle || []).push({});
								</script>';
         }

         $new_content.= $content[$i] . "</p>";
     }

     return $new_content;
 }


 ?>