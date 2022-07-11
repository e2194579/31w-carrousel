<?php 
 /**
 * Plugin name: Carrousel
 * Description: Carrousel d'images créé à partir d'une galeried'images
 * Author: RBC
 * Author URI: https://github.com/e2194579
 * Plugin URI: https://github.com/e2194579/31w-carrousel.git
 */

function carrousel_31w_enqueue()
{
    $version_css = filemtime(plugin_dir_path(__FILE__) . "style.css");
    $version_js = filemtime(plugin_dir_path(__FILE__) . "script/carrousel.js");
    //var_dump(__FILE__); die()
    wp_enqueue_style(   'carrousel_31w_css', 
                        plugin_dir_url( __FILE__)  . "style.css",
                        array(),
                        $version_css);

    wp_enqueue_script(  'carrousel_31w_js', 
                        plugin_dir_url( __FILE__) . "script/carrousel.js",
                        array(),
                        $version_js,
                        true);
}
add_action('wp_enqueue_scripts', 'carrousel_31w_enqueue');

function genere_carrousel(){
    /////////////////////////////////////// HTML
    // Le conteneur du carrousel
    $contenu = '<div class="carrousel">';
    // Le bouton fermeture
    $contenu .= '<button class="carrousel__fermeture">X</button>';
    // Le conteneur d'images
    $contenu .= '<figure class="carrousel__figure"></figure>';
    // Le formulaire des radio bouton pour naviguer d'une image à l'autre
    $contenu .= '<form class="carrousel__radio"></form>';
    $contenu .= '</div> <!-- fin du carrousel -->';
   
    return $contenu;
}

add_shortcode('carrousel', 'genere_carrousel');
