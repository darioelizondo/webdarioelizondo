<?php 

/**
 * Molecule: Menu 
 * 
 * @package Darío Elizondo
 * 
 */
wp_enqueue_script( 'anime.js' );
wp_enqueue_script( 'darioelizondo.menu' );

 ?>

 <div id="menu" class="menu">
 	<div class="menu__background"></div>
 	<div class="menu__inner">
 		<?php include TD . '/parts/atoms/logo.php'; ?>
	 	<?php include TD . '/parts/atoms/close.php'; ?>
		<div id="menuWrapper" class="menu__wrapper">
			<?php wp_nav_menu( array(
		 		'menu'            => 'main_menu',
		 		'container_class' => 'menu__list',
		 		'menu_class'      => 'menu__nav',
		 		'echo'            => true,
		 		'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
		 		'depth'           => 0,
		 		'walker'          => new DarioElizondo_Menu_Walker,
		 	) ); ?>
		</div>
 	</div>
 </div>