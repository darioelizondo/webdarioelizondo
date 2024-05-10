import { animateText } from "./darioelizondo.about-me.js";

const isInViewport = () => {

    const inViewport = ( element ) => {
        const bounding = element.getBoundingClientRect();
        return (
            bounding.top >= 0 &&
            bounding.left >= 0 &&
            bounding.bottom <= ( window.innerHeight || document.documentElement.clientHeight ) &&
            bounding.right <= ( window.innerWidth || document.documentElement.clientWidth )
        );
    };
    
    // Event listener for elements
    window.addEventListener( 'scroll', () => {

        // Elements to animate
        const aboutMe = document.getElementById( 'aboutMeText' );
        if ( inViewport( aboutMe ) ) {
            animateText();
        }

    });

}

document.addEventListener( 'DOMContentLoaded', isInViewport, false );