$(document).ready(function () {
  $(".owl-carousel-testimonial").owlCarousel({
    loop: false,
    nav: true,
    responsiveClass: true,
    dots: false,
    margin: 30,
    responsive: {
      0: {
        items: 1,
      },
      320: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 3,
      },
      1500: {
        items: 4,
      },
    },
  });
});


$(document).ready(function () {
  $(".owl-carousel-blog").owlCarousel({
    loop: false,
    nav: true,
    responsiveClass: true,
    dots: false,
    margin: 30,
    responsive: {
      0: {
        items: 1,
      },
      320: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1200: {
        items: 3,
      },
      1500: {
        items: 4,
      },
    },
  });
});

$(document).ready(function () {
  $(".owl-carousel-client").owlCarousel({
    loop: false,
    nav: true,
    dots: false,
    margin: 30,
    autoWidth:true,
    items:6
  });
});

$(document).ready(function () {
  $(".owl-carousel-team").owlCarousel({
    loop: false,
    nav: true,
    responsiveClass: true,
    dots: false,
    margin: 30,
    responsive: {
      0: {
        items: 1,
      },
      320: {
        items: 1,
      },
      600: {
        items: 2,
      },
      768: {
        items: 3,
      },
      1200: {
        items: 3,
      },
      1500: {
        items: 4,
      },
    },
  });
});