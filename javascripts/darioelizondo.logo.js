document.addEventListener('DOMContentLoaded', animatedLogo, false );

function animatedLogo() {

	let pathEls = document.querySelectorAll( '.logo__path' );
	let pathLetters = document.querySelectorAll( '.logo__path-letters' );
	let animeLogo = anime.timeline({
		easing: 'easeInOutSine',
  		duration: 1000,
	});

	animeLogo.add({
		targets: pathEls,
		strokeDashoffset: [anime.setDashoffset, 0],
		delay: (el, i) => { return i * 500 }
	});

	pathLetters.forEach( function(path) {
		animeLogo.add({
			targets: path,
			translateY: [100, 0],
			duration: 2000
		},'-=1950');
	});

}