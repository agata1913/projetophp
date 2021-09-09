<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/pedido.css">
    <title>NhamBurguer</title>
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
    
    <div id="conteudo">
        <h1>O que sua fome está pedindo?</h1>

        <a href="hamb-preco.php"><div class="hmbg">
            <h1>Hambúrguer</h1>
        </div></a>

        <a href="hamb-c-preco.php"><div class="cmb">
        <h1>Combo</h1>
    </div></a>
    <div>
    <button><a href="index.php">Voltar</a></button>
    </div>
</div>
    

    <div id="rodape">
        <?php
            include "rodape.php";
        ?>
    </div>
</div>
</body>
</html>