document.addEventListener( 'DOMContentLoaded', function () {
    var main = new Splide( '#main-slider', {
      type      : 'fade',
      fixedHeight : 400,
      rewind    : true,
      pagination: false,
      arrows    : false,
    } ).mount();
  
  
    var thumbnails = new Splide( '#thumbnail-slider', {
      fixedWidth  : 100,
      fixedHeight : 60,
      gap         : 10,
      rewind      : true,
      pagination  : false,
      cover       : true,
      isNavigation: true,
      breakpoints : {
        600: {
          fixedWidth : 60,
          fixedHeight: 44,
        },
      },
    } ).mount();
  
  
    main.sync( thumbnails );
  } );