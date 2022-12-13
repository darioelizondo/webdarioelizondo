document.addEventListener('DOMContentLoaded', animatedLogo, false );

function animatedLogo() {

	let pathEls = document.querySelectorAll( '.logo__path' );
	let pathLetters = document.querySelector( '.logo__path-letters' );

	let animeLogo = anime.timeline({
		easing: 'easeInOutSine',
  		duration: 1000,
	});

	animeLogo.add({
		targets: pathEls,
		strokeDashoffset: [anime.setDashoffset, 0],
		delay: (el, i) => { return i * 500 }
	}).add({
		targets: pathLetters,
		translateY: [100, 0]
	},'-=1300')

}