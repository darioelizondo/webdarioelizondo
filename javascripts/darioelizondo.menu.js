document.addEventListener( 'DOMContentLoaded', mainMenu, false );

function mainMenu() {

	var openButton = document.getElementById( 'openMenu' );
	var closeButton = document.getElementById( 'closeButton' );
	var menu = document.getElementById( 'menu' );

	var navigation = document.getElementById( 'menuWrapper' );
	var linksMenu = navigation.querySelectorAll( 'li a' );

	function openMenu() {

		menu.classList.add( 'active' );
		closeButton.classList.add( 'active' );

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