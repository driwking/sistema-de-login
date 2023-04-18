<?php

//conexao com o banco de dados
$servername = "localhost";
$db_name = "login_page";
$username = "root";
$password = "";
$port = "3308";
$connect = mysqli_connect($servername, $username, $password, $db_name, $port);

if(mysqli_connect_error()):
    $erro = mysqli_connect_error();
    echo "<script>console.log($erro)</script>";
else: 
    echo "<script>console.log('Conectado')</script>";
endif;

?>