<?php
/** ===============================================================================
  Plugin Name: Gymfitness - Location
  Plugin URI: 
  Description: Add leaflet MAP to Contact page
  Version: 1.0.0
  Author: Lounas Ibrahim
  Author URI: #
  Text Domain: gymfitness
  License: GPLv2 or later
  =============================================================================== */
function  gymfitness_leaflet_location(){
    $location = get_field("location");
    ?>
    <div id="location">
        <p><?php get_field("location->'lng'") ?></p>
        <input type="hidden" id="lat" value="<?php echo $location['lat'] ?>" >
        <input type="hidden" id="lng" value="<?php echo $location['lng'] ?>" >
        <input type="hidden" id="zoom" value="<?php echo $location['zoom'] ?>" >
        <input type="hidden" id="address" value="<?php echo $location['address'] ?>" >
    </div>
    <div id="map"></div>
<?php
}
add_shortcode( "gymfitness_location", "gymfitness_leaflet_location" );

function gymfitness_enqueue_leaflet(){
        if(is_page("contact-us")):
            // add leafleft Style
            wp_enqueue_style('leafletcss', 'https://unpkg.com/leaflet@1.7.1/dist/leaflet.css', array(), "1.5.1");

            // add leafleft Style
            wp_enqueue_script( "leafletjs", "https://unpkg.com/leaflet@1.7.1/dist/leaflet.js", array(), "1.5.1", true );    
        
            // add gymfitness leafleft Style
            wp_enqueue_script( "gymfitness-leaflet", plugins_url( "/js/gymfitness-leaflet.js", __FILE__ ) , array("leafletjs"), "1.0.0", true );    

        endif;
    }

add_action( "wp_enqueue_scripts" ,"gymfitness_enqueue_leaflet");

