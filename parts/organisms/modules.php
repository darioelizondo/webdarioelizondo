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
		$module_count = 0;

		if( have_rows( 'modules' ) ) : while( have_rows( 'modules' ) ) : the_row( 'modules' );

			if ( get_row_layout() == 'cover' ) require TD . '/parts/organisms/cover.php';

			$module_count++;
		endwhile;
		endif;
	?>
</div>