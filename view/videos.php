<?php include_once('header.php') ?>

<link rel="stylesheet" href="lib/plyr/src/sass/plyr.scss">
<section>
    <div id="call-to-action">
        <div id="container">

            <div class="row-text-center">
                <h2>Videos</h2>
                <hr>
            </div>

            <div class="row">

                <video id="player" playinsline controls data-poster="../Orlando/img/high.jpg">
                    <source src="../Orlando/mp4/highlights.mp4" type="video/mp4" />

                </video>

                <input type="range" id="volume" min="0" max="1" step="0.01" value="1">
                <button type="button" id="btn-play-pause" class="btn btn-success">Play</button>

            </div>
        </div>
    </div>
    <div id="news" class="container" style="top: 0">
        <div>
            <h2> Latest news</h2>
            <hr>
        </div>

        <div class="row thumbnails owl-carousel owl-theme">
            <!--Grids de noticias, dividido por 4-->
            <div class="item" data-video="highlights">
                <div class="item-inner">
                    <img src="img/high.jpg" alt="Noticia1">
                    <h3> Highlights </h3>

                </div>
            </div>
            <div class="item" data-video="Orlando_City_Foundation_2015">
                <div class="item-inner">
                    <img src="img/Orlando_City_Foundation_2015.jpg" alt="Noticia1">
                    <h3> Orlando City Foundation </h3>

                </div>
            </div>
            <div class="item" data-video="highlights">
                <div class="item-inner">
                    <img src="img/high.jpg" alt="Noticia1">
                    <h3> Highlights </h3>

                </div>
            </div>
            <div class="item" data-video="Orlando_City_Foundation_2015">
                <div class="item-inner">
                    <img src="img/Orlando_City_Foundation_2015.jpg" alt="Noticia1">
                    <h3> Orlando City Foundation </h3>

                </div>
            </div>

        </div>



</section>

<?php include_once("footer.php"); ?>

<script src="lib/plyr/src/js/plyr.js"></script>
<script>
    $(function() {
        $(".thubmnails .item").on("click", function() {

            $("video").attr({
                "src": "mp4/" + $(this).data('video') + ".mp4",
                "data-poster": "img/" + $(this).data("video") + ".jpg"
            });

        });

        $("#volume").on("mousemove", function() {

            $("video")[0].volume = parseFloat($(this).val());

        });

        $("#btn-play-pause").on("click", function() {
            var video = $("video")[0];

            if ($(this).hasClass("btm-success")) {
                $(this).text("PAUSE");

                video.play();

            } else {

                $(this).text("PLAY");
                video.pause();
            }
            $(this).toggleClass("btn-success btn-danger");
        });
        const player = new Plyr('#Player');

    });
</script>