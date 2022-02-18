<?php include_once('header.php'); ?>

<section ng-controller="destaque-controller">
    <div class="container" id="produtos-container">
        <div id="destaque-prod" class="owl-carousel owl-theme">
            <div class="item" ng-repeat="produto in produtos">
                <div class="row">
                    <div class="col-sm-6 col-imagem">
                        <a href="produto-{{produto.id_prod}}">
                            <img src="img/produtos/{{produto.foto_principal}}" alt="{{produto.nome_prod_longo}}">
                        </a>
                    </div>
                    <div class="col-sm-6 col-descricao">
                        <h2> {{produto.nome_prod_longo}} </h2>
                        <div class="box-valor">
                            <div class="text-noboleto arial-cinza">No boleto</div>
                            <div class="text-por arial-cinza">Por</div>
                            <div class="text-real text-roxo">R$</div>
                            <div class="text-valor text-roxo">{{produto.preco}}</div>
                            <div class="text-centavos text-roxo">,{{produto.centavos}}</div>
                            <div class="text-parcelas arial-cinza">ou ate {{produto.parcela}}x de R${{produto.parcelas}}</div>
                            <div class="text-total arial-cinza">total a prazo de R${{produto.total}}</div>
                        </div>
                        <a href="produto-{{produto.id_prod}}" class="btn btn-compra text-roxo"><i class="fas fa-shopping-cart"></i> Compre agora </a>

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

                <div class="box-promocao box-1">
                    <p>Escolha por desconto</p>
                </div>


            </div>
            <div class="col-md-10">

                <div class="row">
                    <div class="col-md-3">
                        <div class="box-promocao">
                            <div class="text-ate">Até</div>
                            <div class="text-numero">40</div>
                            <div class="text-porcento">%</div>
                            <div class="text-off">off</div>
                        </div>

                    </div>


                    <div class="col-md-3">
                        <div class="box-promocao">
                            <div class="text-ate">Até</div>
                            <div class="text-numero">60</div>
                            <div class="text-porcento">%</div>
                            <div class="text-off">off</div>
                        </div>

                    </div>


                    <div class="col-md-3">
                        <div class="box-promocao">
                            <div class="text-ate">Até</div>
                            <div class="text-numero">80</div>
                            <div class="text-porcento">%</div>
                            <div class="text-off">off</div>
                        </div>

                    </div>

                    <div class="col-md-3">
                        <div class="box-promocao">
                            <div class="text-ate">Até</div>
                            <div class="text-numero">85</div>
                            <div class="text-porcento">%</div>
                            <div class="text-off">off</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="mais-buscados" class="containter">

        <div class="row-text-center title-default-roxo">
            <h2>Mais Buscados</h2>
            <hr>
        </div>
        <div class="row">

            <div class="col-md-3" ng-repeat="produto in buscados">
                <div class="box-produto-info">
                    <a href="produto-{{produto.id_prod}}">
                        <img src="img/produtos/{{produto.foto_principal}}" alt="{{produto.nome_prod_longo}}" class="produto-img">
                        <h3> {{produto.nome_prod_longo}}</h3>
                        <div class="estrelas" data-score="{{produto.media}}"></div>
                        <div class="text-reviews arial-cinza">{{produto.reviews}}</div>
                        <div class="text-qtd-valor text-roxo">{{produto.total}}</div>
                        <div class="text-parc arial-cinza">{{produto.parcela}}x de R${{produto.parcelas}} sem juros</div>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>

<?php include_once("footer.php") ?>
<script>
    angular.module("shop", []).controller("destaque-controller", function($scope, $http) {

        $scope.produtos = [];

        var initCarousel = function() {
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

        };

        $http({
            method: 'GET',
            url: 'produtos'
        }).then(function successCallback(response) {
            $scope.produtos = response.data;

            setTimeout(initCarousel, 500);

        }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
        });

        var initEstrelas = function() {
            $('.estrelas').each(function() {

                $(this).raty({
                    starHalf: 'lib/raty/lib/images/star-half.png',
                    starOff: 'lib/raty/lib/images/star-off.png',
                    starOn: 'lib/raty/lib/images/star-on.png',
                    score: parseFloat($(this).data("score"))
                });

            });

        };

        $http({
            method: 'GET',
            url: 'produtos-mais-buscados'
        }).then(function successCallback(response) {
            $scope.buscados = response.data;
            setTimeout(initEstrelas, 500);
        }, function errorCallback(response) {

        });



    });
</script>