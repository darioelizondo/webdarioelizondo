<?php 

/**
 * Index 
 *
 * @package Darío Elizondo
 * 
 */ 


get_header();


if ( have_posts() ) : while ( have_posts() ) : the_post();

	require TD . '/parts/organisms/modules.php';

endwhile;
endif;

get_footer();