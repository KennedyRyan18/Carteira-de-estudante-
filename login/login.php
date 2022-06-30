<?php
require_once 'conexao.php';

//session
session_start();

//login

if (isset($_POST['btn'])):
    $erros = array();
    $email = mysqli_escape_string($connect, $_POST['email']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    if(empty($email) or empty($senha)):
        $erros[] = "<li class = alerta> O campo email/senha precisa ser preenchido </li>";
    else:
        $sql = "SELECT email FROM tblogin WHERE email = '$email' ";
        $resultado = mysqli_query($connect, $sql);

        if(mysqli_num_rows($resultado) > 0):

        $sql = "SELECT * FROM tblogin WHERE email = '$email' and senha = '$senha' ";
        $resultado = mysqli_query($connect, $sql);
        
            if(mysqli_num_rows($resultado) == 1):
                $dados = mysqli_fetch_array($resultado);
                $_SESSION['logado'] = true;
                $_SESSION['id_usuario'] = $dados['id'];
                header('location: dados.php');
            else:
                $erros[] = "<li class= alerta> Usuario e senha não conferem </li>";
            endif;
        else:
            $erros[] = "<li class = alerta> Usuario inexistente</li>";
        endif;
    endif;

endif;

?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\stylelogin.php">
    
    <title>Login</title>
    </head>
    <body>

        <main>
            <form method="POST">

                <?php
                    if(!empty($erros)):
                        foreach ($erros as $erro):
                            echo $erro;
                        endforeach;
                    endif;
                ?>


                <div class="login">

            

                    <h1>Login</h1>
                
                    <div class="eml">
                        <label for="email">E-mail</label>
                        <input class="email" type="email" name="email" id="email">
                    </div>

                    <div class="snh">
                        <label for="password">Senha</label>
                        <input class="senha" type="password" name="senha" id="senha " maxlength="10">
                    </div>        

                    <input class="btn" type="submit" name="btn" value="Entrar">
                </div>
            </form>

        </main>
    </body>
</html>