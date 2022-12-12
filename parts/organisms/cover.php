<?php 

/**
 * Organism: Cover
 * 
 * @package Darío Elizondo
 * 
 */ 

wp_enqueue_script( 'anime.js' );
wp_enqueue_script( 'darioelizondo.animated-path-cover' );

?>

<div class="cover">
	<div class="cover__inner">
		<?php include TD . '/parts/molecules/animated-path-cover.php'; ?>
	</div>
</div>