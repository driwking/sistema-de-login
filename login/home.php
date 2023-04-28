<?php

// conexao
require_once('C:\wamp64\www\sistema-de-login\php\connection-db.php');

// sessao
session_start(); 

// verificaçao
if(!isset($_SESSION['logado'])):
    header('location: index.php');
endif;

mysqli_close($connect);

?>



    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>web</title>
    </head>

    <body>
        <h1>hello <?php echo $_SESSION['nome_usuario'];?> !</h1>
        <a href="/sistema-de-login/php/logout.php">Sair</a>
    </body>

    </html>