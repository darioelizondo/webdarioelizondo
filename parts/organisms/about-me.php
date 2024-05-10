<?php 

 /**
  * Organism: About me
  * 
  * @package Darío Elizondo
  * 
  */

  $group = get_sub_field( 'about_me' );

  wp_enqueue_script_module( 'darioelizondo.about-me' );
  wp_enqueue_script_module( 'darioelizondo.isInViewport' );

 ?>

 <div class="about-me">
 	<div class="about-me__inner global-inner">
 		<div class="about-me__wrapper-content">
 			<h3 class="about-me__title">
 				<?php echo esc_html( $group[ 'title' ] ); ?>
 			</h3>
 			<div id="aboutMeText" class="about-me__text">
 				<?php echo $group[ 'text' ]; ?>
 			</div>
 		</div>
		<?php if( $group[ 'image' ][ 'url' ] ) : ?>
			<div class="about-me__wrapper-image">
				<img class="about-me__image image--fluid" src="<?php echo esc_attr( $group[ 'image' ][ 'url' ] ); ?>">
			</div>
		<?php endif; ?>
 	</div>
 </div>