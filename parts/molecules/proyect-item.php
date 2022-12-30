<?php 

/**
 * Molecule: Proyect Item
 * 
 * @package Darío Elizondo
 * 
 */ 

$proyect_item = get_field( 'proyect', get_the_ID() );

 ?>

 <div class="proyect-item<?php if (isset( $count ) ) if( $count % 3 == 1 ) { echo ' ' . 'bg--secondary' . ' ' . 'border--secondary'; } elseif( $count % 3 == 2 ) { echo ' ' . 'bg--primary-dark' . ' ' . 'border--primary-dark'; } elseif( $count % 3 == 0 ) { echo  ' ' . 'bg--text' . ' ' . 'border--text'; } ?>" <?php if ( isset( $count_proyects ) ) echo 'style="z-index: ' . $count_proyects . ';"'; ?>>
 	<?php if ( has_post_thumbnail() ): ?>
 		<div class="proyect-item__wrapper-image">
            <a class="proyect-item__link-image" href="<?php the_permalink(); ?>">
                <img class="proyect-item__image image--fluid" src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>">
            </a>
	 	</div>
 	<?php endif ?>
 	<div class="proyect-item__content">
 		<h4 class="proyect-item__title">
            <a class="proyect-item__link" href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
 		</h4>
 		<div class="proyect-item__tags">
 			<span class="proyect-item__tag">
 				<?php echo esc_html( $proyect_item[ 'type_of_proyect' ] ); ?>
 			</span>
 			<span class="proyect-item__tag">
 				<?php echo esc_html( $proyect_item[ 'year' ] ); ?>
 			</span>
 		</div>
 	</div>
 </div>