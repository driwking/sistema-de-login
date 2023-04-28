<?php

session_start();
@require_once('connection-db.php');


if(isset($_POST['botaosingin'])):
    if(!empty($_POST['email']) && !empty($_POST['senha'])):
        echo "<p>tudo certo</p>";
        function consulta($consulta) {

            global $resultado, $resultadoEncontrado;
            $resultado = mysqli_query($GLOBALS['connect'],$consulta); 
            $resultadoEncontrado = mysqli_num_rows($resultado);

        }

        $email = mysqli_escape_string($connect,$_POST['email']);
        $senha = md5(mysqli_escape_string($connect,$_POST['senha']));
        $consultaValor = "SELECT email FROM users WHERE email = '$email'";
        consulta($consultaValor);


        
        if($resultadoEncontrado == true):
            
            $consultaValor = "SELECT * FROM users WHERE email = '$email' AND password ='$senha'";
            consulta($consultaValor);

            if($resultadoEncontrado == true) {
                echo "entrou";
                $dados =  mysqli_fetch_array($resultado, MYSQLI_ASSOC);
                mysqli_close($connect); // fechan a conexao sempre apos a conulta por medidas de segurança. Nao vai interferir, apenas fechar a conexao em aberto
                print_r($dados); // convertendo a query no banco de dados em um array na var $dados
                $_SESSION['logado'] = true; // dizendo que o usuario esta logado no sistema
                $_SESSION['nome_usuario'] = $dados['name']; // atribuindo o id do usuario a uma sessao id
                header('location: /sistema-de-login/login/home.php');   
                
                
            }elseif($resultadoEncontrado == false) {
                echo "login ou senha invalida";
            };

        else:
            echo "email nao cadastrado";
        endif;




    else:

        echo"<p>preencha todos os campos</p>";
    
    endif; //campos vazios

endif; //botao
?>