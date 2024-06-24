<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Legend of Zelda: Tears of the Kingdom - ANSON</title>
    <link rel="shortcut icon" href="fav/favicon.ico">
    <link rel="stylesheet" media="only screen and (orientation: landscape)" href="css/pc.css">
    <link rel="stylesheet" media="only screen and (orientation: portrait)" href="css/celular.css">
    <link rel="stylesheet" media="only screen and (orientation: portrait) and (min-width: 580.5px)" href="css/tablet.css">
    <link rel="stylesheet" media="only screen and (orientation: landscape) and (min-width: 1920.5px)" href="css/tv.css">
</head>
<body>
    <div id="pagina-container">
        <?php
            include "trechos/header.html";
        ?>
        <div id="grid-produto">
            <a href="index.php">
                <div id="grid-voltar">
                    <div>
                        <img src="img/voltar.png" id="imgVoltar">
                    </div>
                    <div id="txtVoltar">
                        <span>Voltar</span>
                    </div>
                </div>
            </a>
            <img src="img/zeldatotk.jpg" id="imgDetalhes">
            <div>
                <div id="divNome">
                    <span id="nomeProd">The Legend of Zelda: Tears of the Kingdom</span>
                </div>
                <div id="grid-plat-preco">
                    <span class="plataforma red" id="plataforma">Switch</span>
                    <div id="divPreco">
                        <sup id="moeda">R$</sup> <span id="preco">309,89</span>
                    </div>
                </div>
                <p>
                    <span id="titleDetalhes">Detalhes do produto</span>
                </p>
                <p>
                    <strong>Data de Lançamento:</strong> <span>12 de maio de 2023</span>
                </p>
                <p>
                    <strong>Desenvolvedora:</strong> <span>Nintendo</span>
                </p>
                <p>
                    <strong>Distribuidora:</strong> <span>Nintendo</span>
                </p>
                <p>
                    <strong>Gênero:</strong> <span>Aventura, Ação, RPG</span>
                </p>
            </div>
        </div>
        <?php
            include "trechos/footer.html";
        ?>
    </div>
</body>
</html>