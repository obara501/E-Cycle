// SHOP SLIDER
document.addEventListener( 'DOMContentLoaded', function () {
    new Splide( '.splide', {
        type        : 'loop',
        autoplay    : true,
        arrows: 'slider',
        perPage: 1
    } ).mount();
} );

var elms = document.getElementsByClassName( 'slideshow__slide' );
for ( var i = 0, len = elms.length; i < len; i++ ) {
	new Splide( elms[ i ] ).mount();
}

// TESTIMONY SLIDER
document.addEventListener( 'DOMContentLoaded', function () {
    new Splide( '#splide', {
        type        : 'loop',
        autoplay    : true,
        arrows: 'slider',
        perPage: 2,
        pauseOnHover : true,
        lazyLoad: true
    } ).mount(); 
} );


var slides = document.getElementsByClassName( 'slide__card' );
for ( var i = 0, len = slides.length; i < len; i++ ) {
	new Splide( slides[ i ] ).mount();
}

