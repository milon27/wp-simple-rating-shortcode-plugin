<?php
/**
 * Plugin Name: M27 Rating Shortcode
 * Plugin URI:  https://milon27.com/
 * Description: Rating Shortcode plugin use: [m27rating]5[/m27rating].
 * Version:     1.0.0
 * Author:      milon27
 * Author URI:  https://milon27.com/
 * Text Domain: rating-shortcode
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */


//[foobar]
// function foobar_func( $atts ){
// 	return "foo and bar";
// }
// add_shortcode( 'foobar', 'foobar_func' );


add_shortcode( 'm27rating' , 'm27rating_function');

function m27rating_function( $atts, $content = null ) {
	

    $html='<div style="display:flex;gap:2px;color:#FFC107;">';
    
    for($x = 0; $x < $content; $x++) {
        $html.=' <i class="fas fa-fw fa-star"></i> ';
    }

    $html.='</div>';

    return $html;
}
