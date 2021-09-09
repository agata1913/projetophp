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
    <a href="molhos-preco.php"><div id="conteudo_acomp">
        <figure>
            <img src="imagens/acomp/nuggets.jpg">
            <figcaption>Nuggets</figcaption>
        </figure>
    </a>

    <a href="molhos-preco.php">
        <figure>
        <img src="imagens/acomp/batata-frita.jpg">
            <figcaption>Batata-frita</figcaption>
        </figure>
    </a>

    <a href="molhos-preco.php">
        <figure>
        <img src="imagens/acomp/fritas-nuggets.jpg">
            <figcaption>Batata-frita com nuggets</figcaption>
        </figure>
    </a>

    <a href="molhos-preco.php">
        <figure>
        <img src="imagens/acomp/batata-cheddar-bacon.jpg">
            <figcaption>Batata-frita com cheddar e bacon</figcaption>
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