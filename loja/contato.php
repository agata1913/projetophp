<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/contato.css">
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
        <div id="box_form">
        <form action="contatar.php" method="POST">
            <label class="legenda">Nome:</label></br>
            <input type="text" name="nome" class="campos" required></br>

            <label class="legenda">E-mail:</label></br>
            <input type="email" name="email" class="campos" required></br>
            
            <label class="legenda">Assunto:</label></br>
            <input type="text" name="assunto" class="campos"></br>

            <label class="legenda">Conteúdo:</label></br>
            <textarea name="conteudo" class="campo2" placeholder="Digite em no máximo 140 caracteres" maxlength="140"></textarea></br>
            <input type="submit" value="Enviar" class="bt_enviar">
        </form>
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