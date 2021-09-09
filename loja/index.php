<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
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
        <?php
            include "../loja/inicial/conteudo.php";
        ?>
    </div>
    
    <div id="rodape">
        <?php
            include "rodape.php";
        ?>
    </div>
</div>
</body>
</html>