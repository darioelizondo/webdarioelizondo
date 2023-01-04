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
                <div class="cover__wrapper-caption">
                    <p class="cover__caption">
                        Check some proyects
                    </p>
                </div>
                <div class="cover__inner-proyects">
                    <?php 
                        $args = array(
                            'post_type'      => 'proyects',
                            'posts_per_page' => 3,
                            'order'          => 'DESC',
                            'orderby'        => 'date',
                            'post__in'       => $group[ 'proyects' ]
                        );
                        $proyects = new WP_Query( $args );
                        $count = 1;
                        $count_proyects =  $proyects->post_count;

                        if ( $proyects->have_posts() ) : while( $proyects->have_posts() ) : $proyects->the_post();

                            include TD . '/parts/molecules/proyect-item.php';

                            $count++;
                            $count_proyects--;

                        endwhile;
                        wp_reset_postdata();
                        unset( $count );
                        endif;
                     ?>
                </div>
                <div class="cover__wrapper-arrows">
                    <a id="arrowBack" class="cover__arrow" href="#">
                        <img class="cover__icon-arrow" src="<?php echo TDU . '/images/svgs/arrow-right.svg'; ?>">
                    </a>
                    <a id="arrowNext" class="cover__arrow" href="#">
                        <img class="cover__icon-arrow" src="<?php echo TDU . '/images/svgs/arrow-right.svg'; ?>">
                    </a>
                 </div>
            </div>
        </div>
    <?php endif ?>
</div>