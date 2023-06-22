$(document).ready(function () {
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 2.7,
        loop: true,
        spaceBetween: 0,
        centeredSlides: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        breakpoints: {
            320: {
                slidesPerView: 1.5,
                spaceBetween: 0,
            },
            480: {
                slidesPerView: 2.3,
                spaceBetween: 5,
            },
            768: {
                slidesPerView: 2.5,
            },
            1024: {
                slidesPerView: 2.7,
            },
        },
    });


    setTimeout(function (){
        $('.sub-footer-btn').removeClass('hide');
        $('.floating_btn').removeClass('hide');
    }, 6000);

});