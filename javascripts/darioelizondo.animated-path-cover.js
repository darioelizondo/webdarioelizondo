document.addEventListener( 'DOMContentLoaded', animatedPathCover, false );

function animatedPathCover() {

	let pathEls = document.querySelectorAll( '.animated-path-cover__path' );

	pathEls.forEach( function(path) {
		let offset = anime.setDashoffset(path);
		path.setAttribute('stroke-dashoffset', offset);
		anime({
			targets: path,
			strokeDashoffset: [offset, 0],
			duration: anime.random(2000, 4000),
			// delay: anime.random(0, 2000),
			loop: true,
			direction: 'alternate',
			easing: 'easeInOutSine',
			autoplay: true,
			delay: 3000
		});
	})
}