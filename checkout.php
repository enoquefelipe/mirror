
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Checkout Mirror Fashion </title>
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <h1> Ótima escolha! </h1>
        <p> Obrigado por comprar na Mirror Fashion!
            Preencha seus dados para efetivar a compra. </p>

        <h2> Sua compra </h2>
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
    </body>
</html>