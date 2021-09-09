<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/hamb.css">
    <title>Document</title>
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

    <a href="total.php"><div id="conteudo_hmbg">
        <figure>
            <img src="imagens/burguer/dp-cb.jpg">
            <figcaption>Cheeseburguer duplo</figcaption>
        </figure>
    </a>

    <a href="total.php">
        <figure>
        <img src="imagens/burguer/xbacon.jpg">
            <figcaption>X-Bacon</figcaption>
        </figure>
    </a>

    <a href="total.php">
        <figure>
        <img src="imagens/burguer/xsalada.jpg">
            <figcaption>X-Salada</figcaption>
        </figure>
    </a>

    <a href="total.php">
        <figure>
        <img src="imagens/burguer/xegg.jpg">
            <figcaption>X-Egg</figcaption>
        </figure>
    </a>

    <a href="total.php">
        <figure>
        <img src="imagens/burguer/xcalabresa.png">
            <figcaption>X-Calabresa</figcaption>
        </figure>
    </a>

    <a href="total.php">
        <figure>
        <img src="imagens/burguer/xtudo.jpg">
            <figcaption>X-Tudo</figcaption>
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