<?php

// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "adminroot";
$dbname = "botdelivery";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica a conexão
if (!$conn) {
    //echo "Erro na conexão: " . mysqli_connect_error();
}else{
    //echo "Conexão bem-sucedida";
}
?>