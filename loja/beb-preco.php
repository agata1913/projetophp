<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bebidas.css">
    <title>Bebidas</title>
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
    <a href="acomp-preco.php"><div id="conteudo_bebidas">
        <figure>
            <img src="imagens/bebidas/coca2.jpg">
            <figcaption>Coca-Cola</figcaption>
        </figure>
    </a>

    <a href="acomp-preco.php">
        <figure>
        <img src="imagens/bebidas/pepsi.jpg">
            <figcaption>Pepsi</figcaption>
        </figure>
    </a>

    <a href="acomp-preco.php">
        <figure>
        <img src="imagens/bebidas/guarana.jpg">
            <figcaption>Guaraná Antarctica</figcaption>
        </figure>
    </a>

    <a href="acomp-preco.php">
        <figure>
        <img src="imagens/bebidas/fanta-laranja.jpg">
            <figcaption>Fanta laranja</figcaption>
        </figure>
    </a>

    <a href="acomp-preco.php">
        <figure>
        <img src="imagens/bebidas/fanta-uva.jpeg">
            <figcaption>Fanta uva</figcaption>
        </figure>
    </a>

    <a href="acomp-preco.php">
        <figure>
        <img src="imagens/bebidas/ice-tea.jpg">
            <figcaption>Ice Tea pêssego</figcaption>
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