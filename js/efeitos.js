
$(document).ready(function () {
    $("#input-search").on("focus", function () {

        $("li.search").addClass("ativo");
    }).on("blur", function () {

        $("li.search").removeClass("ativo");

    });
    $(".thumbnails").owlCarousel({
        loop: true,
        margin: 12,
        // nav:true,
        // navText: ["Anterior", "Proximo"],
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 3
            },
            1200: {
                items: 4

            }
        }

    });
    /*Setas das noticias*/
    var owl = $('.owl-carousel');
    owl.owlCarousel();

    $('#seta-left').click(function () {
        owl.trigger('prev.owl.carousel');
    });

    $('#seta-right').click(function () {
        owl.trigger('next.owl.carousel');
    });

    /*botões no mobile*/
    $('#bars').click(function () {
        $('header').toggleClass("open-menu");

    });

    $('#close, #menu-mobile-mask').click(function () {
        $('header').removeClass("open-menu");
    });

    $('#search').click(function () {
        $('header').toggleClass("open-search");
    });
    /*
    $('#search').click(function () {
        $('header').removeClass("open-search");
    });
    */



});

