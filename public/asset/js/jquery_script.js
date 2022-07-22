$(document).ready(function(){
    $('.product-brand').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                infinite: true,
                }
            },
            {
                breakpoint: 768,
                settings: {
                slidesToShow: 2,
                slidesToScroll: 2
                }
            },
            {
                breakpoint: 576,
                settings: {
                slidesToShow: 1,
                slidesToScroll: 1
                }
            }
        ]
    })

    $('.product-item').slick({
        dots: false,
        arrows: false,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              autoplay: true,
              autoplaySpeed: 2000,
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
              infinite: true,
              autoplay: true,
              autoplaySpeed: 2000,
            }
          },
          {
            breakpoint: 576,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
              autoplay: true,
              autoplaySpeed: 2000,
            }
          }
        ]
      });

      $('.service-product-item').slick({
        dots: false,
        arrows: false,
        infinite: false,
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 5,
        responsive: [
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              autoplay: true,
              autoplaySpeed: 2000,
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
              infinite: true,
              autoplay: true,
              autoplaySpeed: 2000,
            }
          },
          {
            breakpoint: 576,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
              autoplay: true,
              autoplaySpeed: 2000,
            }
          }
        ]
      });
})