
document.addEventListener("DOMContentLoaded", function () {
    const searchBtn = document.querySelector(".searchbtn");
    const searchForm = document.querySelector("#flisearchform");
    if (searchBtn && searchForm) {
        searchBtn.addEventListener("click", function (event) {
            event.preventDefault(); 
            
            if (searchForm.style.display === "block") {
                searchForm.style.display = "none"; 
            } else {
                console.log('chay roi ')
                searchForm.style.display = "block"; 
            }
        });
    }
});
$("#totop,#bttop,.bttop").click(function() {
    $("html,body").animate({
        scrollTop: 0
    }, 800);
    return !1
});
$(document).ready(function () {
    var slider = $('#lazySliderUniqueID');
    slider.slick({
        lazyLoad: 'ondemand', // ondemand progressive anticipated
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        dots: false,
        prevArrow: false,
        nextArrow: false,
    })

    // On swipe event
    $(slider).on('swipe', function(event, slick, direction){
        //console.log(direction);
        if($('.slide-text').hasClass('animate__animated')) {
            $('.slide-text').addClass('animate__fadeInRight ');
            setTimeout(() => {
                $('.slide-text').removeClass('animate__fadeInRight');
            }, 1600);
        }
    });

    $(slider).on('beforeChange', function(event, slick, currentSlide, nextSlide){
        //console.log(currentSlide);
        if($('.slide-text').hasClass('animate__animated')) {
            $('.slide-text').addClass('animate__fadeInRight ');
            setTimeout(() => {
                $('.slide-text').removeClass('animate__fadeInRight');
            }, 1600);
        }
    });
});


