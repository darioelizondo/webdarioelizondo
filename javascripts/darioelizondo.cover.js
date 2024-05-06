const breakpoint = window.matchMedia( '(max-width:1024px)' );

document.addEventListener( 'DOMContentLoaded', onLoadAnimeTextCover(), false );
document.addEventListener( 'DOMContentLoaded', onLoadAnimeProyectsCover(), false );
document.addEventListener( 'DOMContentLoaded', breakPointChecker(), false );
document.addEventListener( 'DOMContentLoaded', sliderProjects() ,false );

breakpoint.addListener( breakPointChecker );

function onLoadAnimeTextCover() {

	setTimeout( () => {
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

function onLoadAnimeProyectsCover() {

	setTimeout( () => {
		animeProyectsCover()
	}, 3300 )

}

function animeProyectsCover() {

	let proyectsCover = document.querySelector( '.cover__inner-proyects' );
	let captionProyectsCover = document.querySelector( '.cover__wrapper-caption' );

	let animeProyectsCover = anime.timeline({
		easing: 'easeInOutSine',
  		// duration: 1000,
	});

	animeProyectsCover.add({
		targets: proyectsCover,
		opacity: [ 0, 1 ],
		rotate: [ 5, 0 ],
		// scale: [ 0.95, 1 ],
		translateY: [ 100, 0 ],
		translateX: [ 100, 0 ],
		duration: 1000
	});

	anime({
		targets: captionProyectsCover,
		easing: 'easeInOutSine',
		opacity: 1
	});

}

function sliderProjectsHomeMobile() {

	let proyects  = document.querySelectorAll( '.cover__inner-proyects .proyect-item' );
	let arrowBack = document.getElementById( 'arrowBack' );
	let arrowNExt = document.getElementById( 'arrowNExt' );

	proyects[0].classList.add( 'active' );

	arrowBack.addEventListener( 'click', (e) => {

		let activeProyect = document.querySelector( '.cover__inner-proyects .proyect-item.active' );

		activeProyect.classList.remove( 'active' );

		let regEx = /\d+/g;
		let fromIdActiveProject = activeProyect.id.toString();
		let currentNactiveProyect = fromIdActiveProject.match( regEx );

		proyects.forEach( (proyect, index) => {
			if( index+1 == currentNactiveProyect && index+1 == 1 ) {
				proyects[proyects.length-1].classList.add( 'active' );
				return false;
			}
			if( index+1 == currentNactiveProyect && index+1 <= proyects.length ) {
				proyect.previousElementSibling.classList.add( 'active' );
				return false;
			}
		});

		e.preventDefault();

	});

	arrowNext.addEventListener( 'click', (e) => {

		let activeProyect = document.querySelector( '.cover__inner-proyects .proyect-item.active' );

		activeProyect.classList.remove( 'active' );

		let regEx = /\d+/g;
		let fromIdActiveProject = activeProyect.id.toString();
		let currentNactiveProyect = fromIdActiveProject.match( regEx );

		proyects.forEach( (proyect, index) => {
			if( index+1 == currentNactiveProyect && index+1 < proyects.length ) {
				proyect.nextElementSibling.classList.add( 'active' );
				proyect.nextElementSibling.focus();
				return false;
			}
			if( index+1 == currentNactiveProyect && index+1 == proyects.length ) {
				proyects[0].classList.add( 'active' );
				proyects[0].focus();
				return false;
			}
		});

		e.preventDefault();

	});

}

function sliderProjects() {

	const projects = document.querySelectorAll( '.cover__inner-proyects .proyect-item' );

	projects.forEach( ( item ) => {
		item.addEventListener( 'mouseover', () => {
			item.classList.add( 'bringToTheFront' );
		});
		item.addEventListener( 'mouseleave', () => {
			item.classList.remove( 'bringToTheFront' );
		});
	});

}


function breakPointChecker () {

	let activeProyect = document.querySelector( '.cover__inner-proyects .proyect-item.active' );

	if ( breakpoint.matches === true ) {
		sliderProjectsHomeMobile();
	} else if ( activeProyect ) {
		activeProyect.classList.remove( 'active' );
	}
}