<?php

//incluindo o arquivo de conexao
include "conexao.php";

//declaração das variáveis do formulário de cadastro
$nome       = $_POST['nome'];
$email      = $_POST['email'];
$senha      = $_POST['senha'];
$confsenha  = $_POST['repitasenha'];

//O registro vai começar com false por não haver nada registrado
$registro = false;

//Verificação se algum campo está vazio
if($nome != "" && $email != "" && $senha != ""){
    //Verificação se as senhas coincidem
    if($senha != $confsenha){
        echo "<script>alert('Senhas não coincidem');window.history.go(-1);</script>";
    }else{
        $registro = true;
    }
//Se todos os campos não estiverem preenchidos    
}else{
    echo "<script> alert('Preencha todos os campos');window.histpry.go(-1);</script>";
}

//fazendo consulta para pegar usuário por id 
$sql = mysqli_query($link,"SELECT * FROM cliente ORDER BY idcliente DESC LIMIT 1");
while ($linha = mysqli_fetch_array($sql)) {
    $id = $linha['idcliente'];
    $email_user = $linha['email'];
}

/*echo $id;*/

//Se tudo estiver certo no registro, as linhas abaixo mandarão os dados para o banco de dados
if($registro == true && $email != $email_user){
mysqli_query($link,"INSERT INTO cliente(nomecliente,email,senha) VALUES ('$nome','$email','$senha')");
    echo "<p style ='text-align:center; color:#333; padding:5px;'>Usuário cadastrado com sucesso! <br>";
    echo "<a href='index.php'>Início";
    echo "</p>";

}else{
    echo "<script>window.history.go(-1);</script>";
}
?>