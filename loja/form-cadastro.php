<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/form-cadastro.css">
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
            <h1 class="titulo">Cadastre-se</h1>
            <form action="cadastro.php" method="POST" enctype="multipart/form-data">
                <label class="legenda">Nome:</label>
                <input type="text" name="nome" class="campos_cad">
                
                <label class="legenda">E-mail:</label>
                <input type="email" name="email" class="campos_cad">
                
                <label class="legenda">Senha:</label>
                <input type="password" name="senha" class="campos_cad">
                
                <label class="legenda">Digite novamente a senha:</label>
                <input type="password" name="repitasenha" class="campos_cad">
                
                <label class="legenda">Foto:</label>
                <input type="file" name="foto" class="campos_cad">
                
                <input type="submit" value="Cadastrar" class="bt_cad">
                
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