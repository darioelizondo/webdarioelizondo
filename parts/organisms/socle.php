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

  $data_title = preg_split( "/\r\n|\n|\r/", $group[ 'title' ] );
  $count_title = count( $data_title );

 ?>

<div class="socle">
    <div class="socle__inner">
        <div class="socle__wrapper">
            <div class="socle__wrapper-title">
                <h3 class="socle__pretitle">
                    I'm a
                </h3>
                <h3 id="socleTitle" class="socle__title primary" data-title="<?php foreach ( $data_title as $ntitle => $title ) { echo $title; if ( $count_title > $ntitle + 1 ) { echo ", "; } } ?>">
                </h3>
            </div>
            <div class="socle__wrapper-text">
                <p class="socle__text">
                    <?php echo esc_html( $group[ 'text' ] ); ?>
                </p>
            </div>
        </div>
    </div>
</div>