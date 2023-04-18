<?php
//conectando com o banco de dados
@require_once("connection-db.php");


// verificando envio 
if(isset($_POST['botao-singup'])):

    // verificando se os campos foram preenchidos
    if(!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['senha'])): 
          
        
            //cirando usario na tabela 
            function criandoUsuario($nome,$email,$senha) {
  
                global $sql_inserindo, $resultado; 
                $sql_inserindo = "INSERT INTO users(name, email, password) VALUES('$nome', '$email', '$senha')";//.md5($senha)
                $resultado = mysqli_query($GLOBALS['connect'], $sql_inserindo);
  
         
            };// funciton
    
            $nome = mysqli_escape_string($connect,$_POST['nome']);
            $email = mysqli_escape_string($connect,$_POST['email']);
            $senha = md5(mysqli_escape_string($connect,$_POST['senha']));
            $consulta = "SELECT email FROM users WHERE email = '$email'"; // selecionando dados da tabela users
            $resultado = mysqli_query($connect,$consulta);
            // $resultado = mysqli_num_rows($resultado);
            $resultado = mysqli_num_rows($resultado);   


            if( $resultado == false):

                criandoUsuario($nome,$email,$senha);
                echo "<p>cad ok</p>";

                // header('location: /sistema-de-login/login/home.html'); // acessanod pagina principal apos o cadastro
                // mysqli_close($connect);
            elseif($consulta == true):

                echo "<p>conta ja cadastrado, logue com seu email</p>";
                mysqli_close($connect); 

            endif; //resultado

    else:  

        echo "preencha todos os campos";

    endif; //empty


   
            
        
endif; //isset


 





?>