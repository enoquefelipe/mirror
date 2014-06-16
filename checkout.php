
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Checkout Mirror Fashion </title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>

        <div class="container">
            
            <div class="jumbotron">
                <div class="container">
                    <!-- h1 e p que já tínhamos -->
                    <h1> Ótima escolha! </h1>
                    <p>
                        Obrigado por comprar na Mirror Fashion!
                        Preencha seus dados para efetivar a compra.
                    </p>
                </div>
            </div>


            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Sua compra</h2>
                </div>

                <div class="panel-body">
                    <img src="img/produtos/foto<?= $_POST["id"] ?>-<?= $_POST["cor"] ?>.png" alt="<?= $produto["nome"] ?>" class="img-thumbnail img-responsive">
                    <dl>
                        <dt> Produto </dt>
                        <dd><?php echo $_POST["nome"] ?> </dd>
                        <dt>Preço R$</dt>
                        <dd><?php echo $_POST["preco"] ?></dd>
                        <dt>Cor</dt>
                        <dd><?php echo $_POST["cor"] ?> </dd>
                        <dt>Tamanho</dt>
                        <dd><?php echo $_POST["tamanho"] ?> </dd>
                    </dl>
                </div>

            </div>
        </div>


    </body>
</html>