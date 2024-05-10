<?php 

/**
 * Organisms: Modules
 * 
 * @package Darío Elizondo
 * 
 */ 

?>

<div class="modules">
	<?php
		$module_count = 1;

		if( have_rows( 'modules' ) ) : while( have_rows( 'modules' ) ) : the_row( 'modules' );

			if ( get_row_layout() == 'cover' ) require TD . '/parts/organisms/cover.php';
			if ( get_row_layout() == 'socle' ) require TD . '/parts/organisms/socle.php';
			if ( get_row_layout() == 'about_me' ) require TD . '/parts/organisms/about-me.php';

			$module_count++;
		endwhile;
		endif;
	?>
</div>