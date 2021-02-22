$(document).ready(function () {
    let btns = $(".vacancy__item-btn")
    $('.thank__slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        autoplay: true,
        centerPadding: '40px',
        autoplaySpeed: 2500,
        speed: 700,
        prevArrow: "<button class='slider-arrow slider-arrowLeft'> " + $("#icon_left").val()  + "</button>",
        nextArrow: "<button class='slider-arrow slider-arrowRight'>" + $("#icon_right").val() + "</button>",
        responsive: [
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.partners__slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2500,
        speed: 700,
        prevArrow: "<button class='slider-arrow slider-arrowLeft'> " + $("#icon_left").val()  + "</button>",
        nextArrow: "<button class='slider-arrow slider-arrowRight'>" + $("#icon_right").val() + "</button>",
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.services__slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        autoplay: true,
        centerPadding: '40px',

        autoplaySpeed: 2500,
        speed: 700,
        prevArrow: "<button class='slider-arrow slider-arrowLeft'> " + $("#icon_left").val()  + "</button>",
        nextArrow: "<button class='slider-arrow slider-arrowRight'>" + $("#icon_right").val() + "</button>",
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 767,
                settings: "unslick"
            }
        ]
    });

    $('.main__slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2500,
        speed: 700,
        prevArrow: "<button class='background-arrow background-arrow-left'><span class='line'></span>ПРЕД</button>",
        nextArrow: "<button class='background-arrow background-arrow-right'>СЛЕД<span class='line'></span></button>",
    });

    let openAdd = {}
    for(let x = 0;x < btns.length;x++){
        openAdd[x] = false
        $(btns[x]).click(function () {
            if (openAdd[x]) {
                $($('.vacancy__item-content')[x]).fadeOut('fast');
            }
            else {
                $($('.vacancy__item-content')[x]).fadeIn('fast');
            }
            openAdd[x] = openAdd[x] ? false : true
        });
    }
    $('.header__links ul li a').addClass('header__link')
    $('.footer__links ul li a').addClass('footer__link')
});