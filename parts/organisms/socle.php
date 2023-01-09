<?php 

 /**
  * Organism: Socle
  * 
  * @package Darío Elizondo
  * 
  */

  $group = get_sub_field( 'socle' );
  wp_enqueue_script( 'typeit.js' );
  wp_enqueue_script( 'darioelizondo.socle' );

 ?>

 <div class="socle-field">
     <?php echo $group[ 'title' ]; ?>
 </div>

 <div class="socle">
 	<div class="socle__inner">
      <div class="socle__wrapper-title">
        <h3 class="socle__pretitle">
            I'm a
        </h3>
          <h3 id="socleTitle" class="socle__title">
          </h3>
      </div>
      <div class="socle__wrapper-text">
          <p class="socle-text">
              <?php echo esc_html( $group[ 'text' ] ); ?>
          </p>
      </div>
    </div>
 </div>