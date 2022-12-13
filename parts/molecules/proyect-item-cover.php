<?php 

/**
 * Molecule: Proyect Item Cover
 * 
 * @package Darío Elizondo
 * 
 */ 

$proyect_item = get_field( 'proyect', get_the_ID() );

 ?>

 <div class="proyect-item-cover">
 	<?php if ( has_post_thumbnail() ): ?>
 		<div class="proyect-item-cover__wrapper-image">
	 		<img class="proyect-item-cover__image image--fluid" src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>">
	 	</div>
 	<?php endif ?>
 	<div class="proyect-item-cover__content">
 		<h4 class="proyect-item-cover__title">
 			<?php the_title(); ?>
 		</h4>
 		<div class="proyect-item-cover__tags">
 			<span class="proyect-item-cover__tag">
 				<?php echo esc_html( $proyect_item[ 'type_of_proyect' ] ); ?>
 			</span>
 			<span class="proyect-item-cover__tag">
 				<?php echo esc_html( $proyect_item[ 'year' ] ); ?>
 			</span>
 		</div>
 	</div>
 </div>