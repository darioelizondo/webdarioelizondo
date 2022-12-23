<?php 

/**
 * Function: Menus
 * 
 * @package Darío Elizondo
 * 
 */ 



function darioelizondo_add_menus() {
	register_nav_menu( 'main_menu', 'Main Menu' );
}
add_action( 'init', 'darioelizondo_add_menus' );


// Custom Walker

class DarioElizondo_Menu_Walker extends Walker_Nav_Menu {

    function start_el( &$output, $item, $depth=0, $args=[], $id=0 ) {


        $output .= "<li class='" .  implode( " ", $item->classes ) . " hide'>";

        if ( $args->walker->has_children ) {

            $output .= '<a class="menu__link menu__has-child" href="' . $item->url . '" data-title="' . $item->title . '" target="' . $item->target . '">';

        } else {

            $output .= '<a class="menu__link" href="' . $item->url . '" data-title="' . $item->title . '" target="' . $item->target . '">';

        }

        if ( $depth == 0 ) {

            $output .= '<span class="menu__count"></span>';

        }
 
        $output .= '<span class="menu__link-title">' . $item->title . '</span>';
 
        if ( $item->url && $item->url != '#' ) {

            $output .= '</a>';

        } else {

            $output .= '</span>';

        }
 
    }

}