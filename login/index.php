<?php

require_once('C:\wamp64\www\sistema-de-login\php\login.php');
require_once('C:\wamp64\www\sistema-de-login\php\main.php');

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/814290fa27.js" crossorigin="anonymous"></script>
</head>

<body class="">

    <div class="container">
        <div class="content first-content">
            <div class="content first-column">
                <div class="first-column">
                    <h2 class="title-welcome">Bem vindo!</h2>
                    <p class="description description-primary">Entre com suas informaçoes de login</p>
                    <button id="singin" class=" btn btn-primary ">sing in</button>
                </div>
                <div class="second-column">
                    <h2 class="title title-second">criar conta</h2>
                    <div class="social-midia">
                        <ul class="list-social-midia">
                            <a class="link-social-midia" href="# ">
                                <li class="item-social-midia">
                                    <i class="fa-brands fa-facebook"></i>
                                </li>
                            </a>
                            <a class="link-social-midia" href="# ">
                                <li class="item-social-midia">
                                    <i class="fa-brands fa-google"></i>
                                </li>
                            </a>
                            <a class="link-social-midia" href="# ">
                                <li class="item-social-midia">
                                    <i class="fa-brands fa-linkedin"></i>
                                </li>
                            </a>
                        </ul>
                        <!-- social midia -->
                    </div>

                    <p class="description description-second">ou use seu email para registrar</p>
                    <form class="forms forms-register" action="" method="POST">
                        <label class="label-input" for=" ">
                            <i class="fa-solid fa-user icon-modify"></i>
                        <input type="text" name="nome" placeholder="Nome">
                        </label>

                        <label class="label-input" for=" ">
                            <i class="fa-solid fa-envelope icon-modify"></i>
                            <input type="email" name="email" placeholder="email">
                        </label>

                        <label class="label-input" for=" ">
                            <i class="fa-solid fa-lock icon-modify"></i>
                            <input type="password" name="senha" placeholder="Senha">
                        </label>

                        <button class="btn btn-second" type="submit" name="botao-singup">Sing up</button>

                    </form>


                </div>
                <!-- second column -->
            </div>
            <!-- first-content -->

        </div>

        <div class="content second-content">
            <div class="content first-column">
                <div class="first-column">
                    <h2 class="title-welcome">Ola user!</h2>
                    <p class="descrition description-primary">Entre com seus dados pessoais</p>
                    <button id="singup" class="btn btn-primary ">sing up</button>
                </div>
                <div class="second-column">
                    <h2 class="title title-second ">Entre em sua conta</h2>
                    <div class="social-midia">
                        <ul class="list-social-midia">
                            <a class="link-social-midia" href="# ">
                                <li class="item-social-midia">
                                    <i class="fa-brands fa-facebook"></i>
                                </li>
                            </a>
                            <a class="link-social-midia" href="# ">
                                <li class="item-social-midia ">
                                    <i class="fa-brands fa-google "></i>
                                </li>
                            </a>
                            <a class="link-social-midia" href="# ">
                                <li class="item-social-midia">
                                    <i class="fa-brands fa-linkedin"></i>
                                </li>
                            </a>
                        </ul>
                        <!-- social midia -->
                    </div>

                    <p class="description description-second">ou use seu email para entrar</p>

                    <form class="forms forms-login" action="" method="POST">

                        <label class="label-input" for=" ">
                        <i class="fa-solid fa-envelope icon-modify"></i>
                        <input type="email" name="email" placeholder="Email">
                    </label>

                        <label class="label-input" for=" ">
                        <i class="fa-solid fa-lock icon-modify"></i>
                        <input type="password" name="senha" placeholder="Senha">
                    </label>

                        <button class="btn btn-second" type="submit" name="botaosingin">Sing up</button>
                        <a class="senha" href="# ">esqueceu sua senha?</a>
                    </form>
                    <!-- second column -->
                </div>


                <!-- second-content -->
            </div>
        </div>
        <script src="./js/app.js "></script>
</body>

</html>