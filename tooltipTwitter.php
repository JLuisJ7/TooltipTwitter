<?php
/*
Plugin Name:TooltipTwitter
Plugin URI: https://github.com/JLuisJ7/TooltipTwitter
Description: Este es un plugin que sirve para compartir en twitter cualquier texto que selecciones dentro de la pagina.
Version: 1.0
Author: J. Luis J.
Author URI:
License:GLP2 
*/
?>

<?php 
add_action('wp_head','tooltiptwitter');

function tooltiptwitter()
{

 ?>
    <script>var twitterAccount = "jluisjab";</script>
    <div class="shareTooltip" id="shareTooltip">
        	<div class="tooltipContainer"><a id="sendToTwitter" href="" class="sharingLink twitter"><span></span></a></div>
     </div>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    

 <?php } ?>

<?php
function wpb_adding_styles() {
wp_register_style('my_stylesheet', plugins_url('css/style.css', __FILE__));
wp_enqueue_style('my_stylesheet');
}

add_action( 'wp_enqueue_scripts', 'wpb_adding_styles' );  
?>
 <?php 
/* Registro de nuestro script. */
 function wpb_adding_scripts() {
wp_register_script('my_app_script', plugins_url('js/app.js', __FILE__));
wp_enqueue_script('my_app_script');
}

add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );  
?>
