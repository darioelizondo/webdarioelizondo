document.addEventListener( 'DOMContentLoaded', textTyping, false );

function textTyping() {

	let textTyping = [];
	let fieldTyping = document.querySelectorAll( '.socle-field p' );

	fieldTyping.forEach( (element) => {
		item = element.innerHTML;
		textTyping.push( item );
	} )

	console.log( textTyping );

	const typing = new TypeIt( '#socleTitle', {
		strings: textTyping,
		breakLines: false,
		lifeLike: true,
		// nextStringDelay: 500,
		loop: true
	}).go();

}