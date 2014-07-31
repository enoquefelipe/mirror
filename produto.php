<?php
$conexao = mysqli_connect("localhost", "root", "", "wd43");
$dados = mysqli_query($conexao, "SELECT * FROM produtos WHERE id = $_GET[id]");
$produto = mysqli_fetch_array($dados);

$cabecalho_title = "Produto da Mirror Fashion";
$cabecalho_css = '<link rel="stylesheet" href="css/produto.css">';
$cabecalho_css = '<link rel="stylesheet" href="css/estilos.css">';
?>

<link rel="stylesheet" href="css/produto.css">

<?php include("_cabecalho.php"); ?>

<form action="checkout.php" method="POST">
    <div class="produto-back">
        <div class="container">
            <div class="produto">

                <h1> <?= $produto["nome"] ?> </h1>
                <div class="fb-like" data-href="http://mirrorfashion.net/loja"
                     data-send="false" data-layout="box_count"
                     data-width="58" data-show-faces="false"></div>
                <input type="hidden" name="nome" value="<?= $produto["nome"] ?>">

                <p> <h2>Por apenas <?= $produto["preco"] ?> </h2> </p>
                <input type="hidden" name="preco" value="<?= $produto["preco"] ?>">
                <input type="hidden" name="id" value="<?= $produto["id"] ?>">

                <fieldset class="cores">
                    <legend>Escolha a cor:</legend>
                    <input type="radio" name="cor" value="verde" id="verde" checked>
                    <label for="verde">
                        <img src="img/produtos/foto<?= $produto["id"] ?>-verde.png" alt="verde">
                    </label>
                    <input type="radio" name="cor" value="rosa" id="rosa">
                    <label for="rosa">
                        <img src="img/produtos/foto<?= $produto["id"] ?>-rosa.png" alt="rosa">
                    </label>
                    <input type="radio" name="cor" value="azul" id="azul">
                    <label for="azul">
                        <img src="img/produtos/foto<?= $produto["id"] ?>-azul.png" alt="azul">
                    </label>
                </fieldset>

                <fieldset class="tamanhos">
                    <legend>Escolha o tamanho:</legend>
                    <input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho">
                    <output for="tamanho" name="valortamanho"></output>
                </fieldset>
                <input type="submit" class="comprar" value="Comprar">

            </div>
            <div class="detalhes">

                <h2>Detalhes do produto</h2>

                <p><?= $produto["descricao"] ?> </p>

                <table>
                    <thead>
                        <tr>
                            <th>Característica</th>
                            <th>Detalhe</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Modelo</td>
                            <td>Cardigã 7845</td>
                        </tr>
                        <tr>
                            <td>Material</td>
                            <td>Algodão e poliester</td>
                        </tr>
                        <tr>
                            <td>Cores</td>
                            <td>Azul, Rosa e Verde</td>
                        </tr>
                        <tr>
                            <td>Lavagem</td>
                            <td>Lavar a mão</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</form>

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "http://connect.facebook.net/pt_BR/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<?php include("_rodape.php"); ?>
<script src="js/jquery.js"></script>
<script src="js/produto.js"></script>