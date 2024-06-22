<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo digital - ANSON</title>
    <link rel="shortcut icon" href="fav/favicon.ico">
    <link rel="stylesheet" href="css/celular.css">
</head>
<body>
    <div id="pagina-container">
        <?php
            include "trechos/header.html";
        ?>
        <section id="slideshow">
            <img src="img/promocao.png" id="promocao">
            <img src="img/seta.png" id="setaEsquerda">
            <img src="img/seta.png" id="setaDireita">
        </section>
        <div id="grid-container">
            <div class="grid-item">
                <div class="grid-produto">
                    <div>
                        <a href="detalhesProduto.php">
                            <img src="img/zeldatotk.jpg" class="imgProduto"/>
                        </a>
                    </div>
                    <div class="txtCentro">
                        <div class="divNome">
                            <a href="detalhesProduto.php">
                                <span class="nomeProd">The Legend of Zelda: Tears of the Kingdom</span>
                            </a>
                        </div>
                        <a href="detalhesProduto.php">
                            <span class="plataforma red">Switch</span>
                        </a>
                        <a href="detalhesProduto.php">
                            <div class="divPreco">
                                <sup class="moeda">R$</sup> <span class="preco">309,89</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="grid-item">
                <div class="grid-produto">
                    <div>
                        <img src="img/eldenring.jpg" class="imgProduto"/>
                    </div>
                    <div class="txtCentro">
                        <div class="divNome">
                            <span class="nomeProd">Elden Ring</span>
                        </div>
                        <span class="plataforma green">Xbox Series X / Xbox One</span>
                        <div class="divPreco">
                            <sup class="moeda">R$</sup> <span class="preco">366,87</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            include "trechos/footer.html";
        ?>
    </div>
</body>
</html>