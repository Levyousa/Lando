
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
    /*
    var owl = $('.owl-carousel');
    owl.owlCarousel();

    $('#seta-left').click(function () {
        owl.trigger('prev.owl.carousel');
    });

    $('#seta-right').click(function () {
        owl.trigger('next.owl.carousel');
    });
    */

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

    $(function () {

        $(".thumbnails .item").on("click", function () {

            $("video").attr({
                "src": "mp4/" + $(this).data('video') + ".mp4",
                "data-poster": "images/" + $(this).data('video') + ".jpg"
            });

        });

        $("#volume").on("mousemove", function () {

            $("video")[0].volume = parseFloat($(this).val());

        });

        $("#btn-play-pause").on("click", function () {

            var video = $("video")[0];

            if ($(this).hasClass("btn-success")) {

                $(this).text("STOP");

                video.play();

            } else {

                $(this).text("PLAY");
                video.pause();

            }

            $(this).toggleClass("btn-success btn-danger");

        });

        const player = new Plyr('#player');

    });


});

