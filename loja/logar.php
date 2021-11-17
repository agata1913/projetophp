<?php
include "conexao.php";

$email = $_POST['email'];
$senha = $_POST['senha'];

if($email != "" && $senha != ""){
    //echo "Logado com sucesso";
    $sql = mysqli_query($link, "SELECT * FROM cliente WHERE email = '$email' && senha = '$senha'");
    $registro = mysqli_num_rows($sql);
    while($linha = mysqli_fetch_array($sql)){
        $senha_user = $linha['senha'];
    }
    if ($registro) {
       session_start();
       $_SESSION['login'] = $email;
       $_SESSION['senha'] = $senha;
       
    }else{
        echo "Você não possui cadastro, deseja se cadastrar?";
        echo "<a href='form-cadastro.php'>Cadastre-se</a>";
    }
}else{
    header('location:login.php?valor=1');
}
?>