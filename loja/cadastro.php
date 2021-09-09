<?php
include "conexao.php";

$nome       = $_POST['nome'];
$email      = $_POST['email'];
$senha      = $_POST['senha'];
$confsenha  = $_POST['repitasenha'];
$foto       = $_FILES['foto'] ['name'];
$tipo       = $_FILES['foto'] ['type'];

/*
echo "Nome: $nome<br>";
echo "E-mail: $email<br>";
echo "Senha: $senha<br>";
echo "Confirme a senha: $confsenha<br>";
echo "Foto: $foto<br>";
echo "Tipo: $tipo<br>";
*/
$registro = false;
if($nome != "" && $email != "" && $senha != ""){
    if($senha != $confsenha){
        echo "<script>alert('Senhas não coincidem');window.history.go(-1);</script>";
    }else{
        $registro = true;
    }
    
}else{
    echo "<script> alert('Preencha todos os campos');window.histpry.go(-1);</script>";
}

$sql = mysqli_query($link,"SELECT * FROM cliente ORDER BY idcliente DESC LIMIT 1");
while ($linha = mysqli_fetch_array($sql)) {
    $id = $linha['idcliente'];
}

echo $id;

?>