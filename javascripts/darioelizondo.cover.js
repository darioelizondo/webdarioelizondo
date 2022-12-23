document.addEventListener( 'DOMContentLoaded', onLoadAnimeTextCover(), false );

function onLoadAnimeTextCover() {

	// let textCover = new SplitType( '.cover__title', {
	// 	types: 'lines',
	// 	lineClass: 'cover__title-line'
	// });

	setTimeout( () => {
		// let textCoverHide = document.getElementById( 'coverTitle' );
		// textCoverHide.classList.remove( 'hide' );
		animeTextCover()
	}, 3300 )

}

function animeTextCover() {

	let textCoverLines = document.querySelectorAll( '.cover__line' );
	let linkCover = document.getElementById( 'linkCover' );

	let animeTextCover = anime.timeline({
		easing: 'easeInOutSine',
  		// duration: 1000,
	});

	textCoverLines.forEach( (el) => {
		animeTextCover.add({
			targets: el,
			rotate: [ -60, 0 ],
			translateY: [ -500, 0 ],
			duration: 2000
		}, '-=1600');
	});

	anime({
		targets: linkCover,
		easing: 'easeInOutSine',
		opacity: 1
	});

}