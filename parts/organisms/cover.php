<?php 

/**
 * Organism: Cover
 * 
 * @package Darío Elizondo
 * 
 */ 

wp_enqueue_script( 'darioelizondo.cover' );

$group = get_sub_field( 'cover' );

?>

<div class="cover module--<?php echo $module_count; ?>">
    <?php include TD . '/parts/molecules/animated-path-cover.php'; ?>
    <?php if ( isset($group) ): ?>
        <div class="cover__inner">
            <div class="cover__wrapper-content">
                <div class="cover__content">
                    <h1 id="coverTitle" class="cover__title">
                        <?php echo $group[ 'text' ]; ?>
                    </h1>
                    <a id="linkCover" class="cover__link" href="<?php echo esc_attr( $group[ 'button' ] ); ?>">
                        <span class="cover__link-text"><?php echo esc_html( $group[ 'button_text' ] ); ?></span><img class="cover__link-icon" src="<?php echo TDU . '/images/svgs/arrow-right.svg'; ?>">
                    </a>
                </div>
            </div>
            <div class="cover__wrapper-proyects">
                <?php 
                    $args = array(
                        'post_type'     => 'proyects',
                        'post_per_page' => 3,
                        'order'         => 'DESC',
                        'orderby'       => 'date',
                        'post__in'      => $group[ 'proyects' ]
                    );
                    $proyects = new WP_Query( $args );

                    if ( $proyects->have_posts() ) : while( $proyects->have_posts() ) : $proyects->the_post();

                        include TD . '/parts/molecules/proyect-item-cover.php';

                    endwhile;
                    wp_reset_postdata();
                    endif;
                 ?>
            </div>
        </div>
    <?php endif ?>
</div>