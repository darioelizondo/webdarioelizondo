document.addEventListener( 'DOMContentLoaded', animatedPathCover, false );

function animatedPathCover() {

	let pathEls = document.querySelectorAll( '.animated-path-cover__path' );

	pathEls.forEach( (path) => {
		let offset = anime.setDashoffset(path);
		path.setAttribute('stroke-dashoffset', offset);
	} )

	setTimeout( () => {
		pathEls.forEach( (path) => {
			let offset = anime.setDashoffset(path);
			path.setAttribute('stroke-dashoffset', offset);
			anime({
				targets: path,
				strokeDashoffset: [offset, 0],
				duration: anime.random(3000, 5000),
				loop: true,
				direction: 'alternate',
				easing: 'easeInOutSine',
				autoplay: true,
			});
		})
	}, 3000 );
}