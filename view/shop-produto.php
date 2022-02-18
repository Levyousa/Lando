<?php include_once('header.php'); ?>

<section>

    <div class="container" id="destaque-produtos-container">
        <div id="destaque-prod">

            <div class="row">
                <div class="col-sm-6 col-imagem">
                    <img src="img/produtos/<?= $produto['foto_principal'] ?>" alt="<?= $produto['nome_prod_longo'] ?>">
                </div>

                <div class="col-sm-6 col-descricao">
                    <h2><?= $produto['nome_prod_longo'] ?></h2>
                    <div class="box-valor">
                        <div class="text-noboleto arial-cinza">No boleto</div>
                        <div class="text-por arial-cinza">Por</div>
                        <div class="text-real text-roxo">R$</div>
                        <div class="text-valor text-roxo"><?= $produto['preco'] ?></div>
                        <div class="text-centavos text-roxo">,<?= $produto['centavos'] ?></div>
                        <div class="text-parcelas arial-cinza">ou ate <?= $produto['parcelas'] ?> x de R$<?= $produto['parcela'] ?></div>
                        <div class="text-total arial-cinza">total a prazo de R$<?= $produto['total'] ?></div>
                    </div>
                    <a href="carrinhoAdd-<?= $produto['id_prod']?>" class="btn btn-compra text-roxo"><i class="fas fa-shopping-cart"></i> Compre agora </a>

                </div>
            </div>


        </div>
    </div>



</section>

<?php include_once("footer.php") ?>