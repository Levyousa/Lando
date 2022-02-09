<?php include_once('header.php'); ?>

<section>
    <div class="container" id="produtos-container">
        <div id="destaque-prod" class="owl-carousel owl-theme">
            <div class="item">
                <div class="row">
                    <div class="col-sm-6 col-imagem">
                        <img src="img/produtos/moto-x.png" alt="moto-x">

                    </div>

                    <div class="col-sm-6 col-descricao">
                        <h2> Smartphone Motorola Moto X Play Dual Chip Android 5.1 </h2>
                        <div class="box-valor">
                            <div class="text-noboleto arial-cinza">No boleto</div>
                            <div class="text-por arial-cinza">Por</div>
                            <div class="text-real text-roxo">R$</div>
                            <div class="text-valor text-roxo">1.259</div>
                            <div class="text-centavos text-roxo">,10</div>
                            <div class="text-parcelas arial-cinza">ou ate 8x de R$174,88</div>
                            <div class="text-total arial-cinza">total a prazo de R$1.399,00</div>
                        </div>
                        <a href="#" class="btn btn-compra text-roxo"><i class="fas fa-shopping-cart"></i> Compre agora </a>

                    </div>

                </div>
            </div>
            <div class="item">
                <div class="row">
                    <div class="col-sm-6 col-imagem">
                        <img src="img/produtos/moto-x.png" alt="moto-x">

                    </div>

                    <div class="col-sm-6 col-descricao">
                        <h2> Smartphone Motorola Moto X Play Dual Chip Android 5.1 </h2>
                        <div class="box-valor">
                            <div class="text-noboleto arial-cinza">No boleto</div>
                            <div class="text-por arial-cinza">Por</div>
                            <div class="text-real text-roxo">R$</div>
                            <div class="text-valor text-roxo">1.259</div>
                            <div class="text-centavos text-roxo">,10</div>
                            <div class="text-parcelas arial-cinza">ou ate 8x de R$174,88</div>
                            <div class="text-total arial-cinza">total a prazo de R$1.399,00</div>
                        </div>
                        <a href="#" class="btn btn-compra text-roxo"><i class="fas fa-shopping-cart"></i> Compre agora </a>

                    </div>

                </div>
            </div>

        </div>
        <button class="btn btn-default" id="btn-destaque-prev"><i class="fas fa-angle-left"></i></button>
        <button class="btn btn-default" id="btn-destaque-next"><i class="fas fa-angle-right"></i></button>
    </div>

    <div id="promocoes" class="container-fluid">

        <div class="row">
            <div class="col-md-2">

                <div class="box-promocao">
                    <p>Escolha por desconto</p>
                </div>


            </div>
            <div class="col-md-10">

                <div class="row">
                    <div class="col-md-3">
                        <div class="box-promocao">
                            <div class="text-ate">Ate</div>
                            <div class="text-numero">40</div>
                            <div class="text-porcento">%</div>
                            <div class="text-off">off</div>
                        </div>

                    </div>


                    <div class="col-md-3">
                        <div class="box-promocao">
                            <div class="text-ate">Ate</div>
                            <div class="text-numero">60</div>
                            <div class="text-porcento">%</div>
                            <div class="text-off">off</div>
                        </div>

                    </div>


                    <div class="col-md-3">
                        <div class="box-promocao">
                            <div class="text-ate">Ate</div>
                            <div class="text-numero">80</div>
                            <div class="text-porcento">%</div>
                            <div class="text-off">off</div>
                        </div>

                    </div>

                    <div class="col-md-3">
                        <div class="box-promocao">
                            <div class="text-ate">Ate</div>
                            <div class="text-numero">85</div>
                            <div class="text-porcento">%</div>
                            <div class="text-off">off</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<?php include_once("footer.php") ?>

<script>
    $("#destaque-prod").owlCarousel({

        autoplay: 10000,

        items: 1,

        singleItem: true

    });

    var owl = $("#destaque-prod");



    owl.owlCarousel();

    $('#btn-destaque-prev').on("click", function() {
        owl.trigger('prev.owl.carousel');

    });
    $('#btn-destaque-next').on("click", function() {
        owl.trigger('next.owl.carousel');
    });
</script>