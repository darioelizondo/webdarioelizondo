// Animate text
export const animateText = () => {

    const texts = document.querySelectorAll( '.about-me__text' );

    texts.forEach( ( text ) => {
        
        const lines = text.querySelectorAll( '.about-me__main-line' );

        lines.forEach( ( line, index ) => {
            setTimeout( () => {
                line.classList.add( 'active' );
            }, ( index + 1 ) * 200 )
        })

    });

};

// document.addEventListener( 'DOMContentLoaded', animateText, false );