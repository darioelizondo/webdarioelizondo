<?php 

 /**
  * Organism: About me
  * 
  * @package Darío Elizondo
  * 
  */ 

 ?>

 <div class="about-me">
 	<div class="about-me__inner">
 		<div class="about-me__wrapper-content">
 			<h3 class="about-me__title">
 				<?php echo esc_html( $group[ 'title' ] ); ?>
 			</h3>
 			<div class="about-me__text">
 				<?php echo $group[ 'text' ]; ?>
 			</div>
 		</div>
 		<div class="about-me__wrapper-image">
 			<img class="about-me__image" src="<?php echo esc_attr( $group[ 'image' ] ); ?>">
 		</div>
 	</div>
 </div>