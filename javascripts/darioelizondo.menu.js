document.addEventListener( 'DOMContentLoaded', onLoadAppearMenu, false );
document.addEventListener( 'DOMContentLoaded', mainMenu, false );

function appearMenu() {

	let liMenu = document.querySelectorAll( '.menu__list li' );
	let animeLiMenu = anime.timeline({
		easing: 'easeInOutSine',
	});

	liMenu.forEach( (el) => {
		animeLiMenu.add({
			targets: el,
			translateY: [100, 0],
			duration: 2000
		}, '-=1800');
		el.classList.remove( 'hide' );
	})

}

function appearSocial() {

	let elSocial = document.querySelectorAll( '.social__link' );
	let animeElSocial = anime.timeline({
		easing: 'easeInOutSine',
	});

	elSocial.forEach( (el) => {
		animeElSocial.add({
			targets: el,
			translateY: [100, 0],
			duration: 2000
		}, '-=1800');
		el.classList.remove( 'hide' );
	})

}

function onLoadAppearMenu() {

	setTimeout( () => {
		appearMenu();
	}, 3000 );

	setTimeout( () => {
		appearSocial();
	}, 3500 );

}

function mainMenu() {

	let openButton = document.getElementById( 'openMenu' );
	let closeButton = document.getElementById( 'closeButton' );
	let menu = document.getElementById( 'menu' );

	let navigation = document.getElementById( 'menuWrapper' );
	let linksMenu = navigation.querySelectorAll( 'li a' );

	function openMenu() {

		menu.classList.add( 'active' );
		closeButton.classList.add( 'active' );
		appearMenu();

	}


	openButton.addEventListener( 'click', openMenu );


	function closeMenu() {

		menu.classList.remove( 'active' );
		closeButton.classList.remove( 'active' );

	}

	closeButton.addEventListener( 'click', closeMenu );

	// Close menu when there is on an anchor

	linksMenu.forEach( item => {
		item.addEventListener( 'click', closeMenu );
	});

}