<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/login.css">
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
            <h1 class="titulo">Entrar</h1>
            <form action="logar.php" method="POST" enctype="multipart/form-data">
                
                <label class="legenda">E-mail:</label>
                <input type="email" name="email" class="campos_log">
                
                <label class="legenda">Senha:</label>
                <input type="password" name="senha" class="campos_log">
                
                <input type="submit" value="Entrar" class="bt_log">
              
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