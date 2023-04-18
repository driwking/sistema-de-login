<?php

@require_once('connection-db.php');

if(isset($_POST['botaosingin'])):
    if(!empty($_POST['email']) && !empty($_POST['senha'])):
        echo "<p>tudo certo</p>";
        function consulta($consulta) {

            global $resultado;
            $resultado = mysqli_query($GLOBALS['connect'],$consulta); 
            $resultado = mysqli_num_rows($resultado);

        }

        $email = mysqli_escape_string($connect,$_POST['email']);
        $senha = md5(mysqli_escape_string($connect,$_POST['senha']));
        $consultaValor = "SELECT email FROM users WHERE email = '$email'";
        consulta($consultaValor);


        
        if($resultado == true):
            
            $consultaValor = "SELECT * FROM users WHERE email = '$email' AND password ='$senha'";
            consulta($consultaValor);

            if($resultado == true) {
                echo "entrou";
                header('location: /sistema-de-login/login/home.html');
                mysqli_close($connect);
            }elseif($resultado == false) {
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