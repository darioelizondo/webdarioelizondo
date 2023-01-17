document.addEventListener( 'DOMContentLoaded', textTyping, false );

function textTyping() {

	let fieldTyping = document.getElementById( 'socleTitle' ).dataset.title;
	let textTyping = fieldTyping.split( ',' );

	const typing = new TypeIt( '#socleTitle', {
		strings: textTyping,
		breakLines: false,
		lifeLike: true,
		// nextStringDelay: 500,
		loop: true
	}).go();

}