<?php
/**
 * Plugin name: Carrousel
 * Author: RBC
 * Description: Carrousel d'image créé à partir d'une galerie.
 * Author URI: https://github.com/e2194579
 */
function carrousel_31w_enqueue()
{
    $version_css = filemtime(plugin_dir_path(__FILE__) . "style.css");
    $version_js = filemtime(plugin_dir_path(__FILE__) . "script/carrousel.js");

    wp_enqueue_style('carrousel_31w_css', plugin_dir_url(__FILE__) .  "style.css", array(), $version_css);
    wp_enqueue_script('carrousel_31w_js', plugin_dir_url(__FILE__) . "script/carrousel.js", array(), $version_js, true);
}
add_action('wp_enqueue_scripts', 'carrousel_31w_enqueue');

function genere_carrousel(){
    $contenu = "<div class='carrousel'>";
    $contenu .= "<button class='carrousel_fermeture'>X</button>";
    $contenu .= "<figure class='carrousel_img'></figure>";
    $contenu .= "<form class='carrousel_radio'></form>";
    $contenu .= "</div>";

   
    return $contenu;
 }

 add_shortcode('carrousel', 'genere_carrousel');
