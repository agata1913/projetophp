<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Hambúrgueres</title>
</head>
<body>
 
<div id="geral">
    <div id="topo">
        <?php
            include "topo.php";
        ?>
    </div>

    <div id="menu">
        <?php
            include "menu.php";
        ?>
    </div>
    <a href="total.php"><div id="conteudo_sobre">
        <figure>
            <img src="imagens/sobremesas/pudim.jpg">
            <figcaption>Mini pudim de leite</figcaption>
        </figure>
    </a>

    <a href="total.php">
        <figure>
            <img src="imagens/sobremesas/banana-split.jpg">
            <figcaption>Banana Split</figcaption>
        </figure>
    </a>

    <a href="total.php">
        <figure>
            <img src="imagens/sobremesas/bolo-chocolate.jpg">
            <figcaption>Bolo de chocolate</figcaption>
        </figure>
    </a>

    <a href="total.php">
        <figure>
            <img src="imagens/sobremesas/petit-gateau.jpg">
            <figcaption>Petit Gateau</figcaption>
        </figure>
    </a>
    </div>
    
    <div id="rodape">
        <?php
            include "rodape.php";
        ?>
    </div>
</div>
</body>
</html>