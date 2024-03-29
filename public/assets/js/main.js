$(document).ready(function () {
    $(".owl-one").owlCarousel({
        responsiveClass: true,
        autoHeight: true,
        // autoplay : true , 
        // autoplayTimeout : 4000,
        // loop : true , 
        // smartSpeed : 1000,
        responsive: {
            0: {
                items: 1,
                nav: true
            }
        }
    });
});

$(document).ready(function () {
    $(".owl-two").owlCarousel({
        // responsiveClass: true,
        // autoHeight:true,
        // autoplay : true , 
        // autoplayTimeout : 4000,
        // loop : true , 
        // smartSpeed : 1000,
        margin : 3,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            500: {
                items: 2,
                nav: true
            },
            767:{
                items: 3,
                nav: true
            },
            991:{
                items: 4,
                nav: true
            }
        }
    });
});


$(document).ready(function () {
    $(".owl-three").owlCarousel({
        center: true,
        loop:true,
        // responsiveClass: true,
        // autoHeight:true,
        // autoplay : true , 
        // autoplayTimeout : 4000,
        // loop : true , 
        // smartSpeed : 1000,
        margin:10,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            500: {
                items: 2,
                nav: true
            },
            767:{
                items: 3,
                nav: true
            }
        }
    });
});

$(document).ready(function () {
    $(".owl-four").owlCarousel({
        center: true,
        loop:true,
        // responsiveClass: true,
        // autoHeight:true,
        // autoplay : true , 
        // autoplayTimeout : 4000,
        // loop : true , 
        // smartSpeed : 1000,
        margin:10,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            500: {
                items: 2,
                nav: true
            },
            767:{
                items: 3,
                nav: true
            }
        }
    });
});