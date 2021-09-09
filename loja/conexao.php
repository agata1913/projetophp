<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "dbnhamburguer";

$link = mysqli_connect($host, $user, $password, $db);
$banco = mysqli_connect_errno();

/*if ($banco == true) {
    echo "Erro na conexão";
} else {
    echo "Conectado com sucesso";
}
*/
?>