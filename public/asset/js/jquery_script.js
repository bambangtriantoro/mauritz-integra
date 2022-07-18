$(document).ready(function(){
    $('.product-brand').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        prevArrow: false,
        nextArrow: false,
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
})