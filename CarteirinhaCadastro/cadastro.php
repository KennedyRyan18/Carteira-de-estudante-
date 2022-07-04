<?php
    require_once('conexao.php');

    //session
    session_start();
    
        

    //coleta de dados
    $instituição = @$_POST['insti'];
    $matricula = @$_POST['matricula'];

    $nome = @$_POST['nome'];
    $cpf = @$_POST['cpf'];
    
    $email = @$_POST['Email'];
    $senha = @$_POST['senha'];

    //tabela intituição

    $sql1 = "INSERT INTO tbinstituicao (matricula, nome_instituicao) VALUES ('$matricula', '$instituição')";
    $rs1 = mysqli_query($connect, $sql1);

    //tabela login

    if( strlen( $email ) > 0 && strlen($senha) > 0 )
    {  
      $sql2 = "INSERT INTO tblogin (email, senha ) values ( '$email', '$senha' )";
      $rs2 = mysqli_query($connect, $sql2);
    }

    // $sql2 = "INSERT INTO tblogin (email, senha) VALUES ('$email', '$senha')";
    // $rs2 = mysqli_query($connect, $sql2);


    // tabela estudante

    $sql3 = "INSERT INTO tbestudante (cpf, matricula, nome) VALUES ('$cpf', '$matricula', '$nome')";
    $rs3 = mysqli_query($connect, $sql3);

   

        //alertas

        if (isset($_POST['btn'])):
            $aviso = array();
            $erros = array();
            $email = mysqli_escape_string($connect, $_POST['Email']);
            $senha = mysqli_escape_string($connect, $_POST['senha']);
            $instituição = mysqli_escape_string($connect, $_POST['insti']);
            $matricula =  mysqli_escape_string($connect, $_POST['matricula']);
            $nome = mysqli_escape_string($connect, $_POST['nome']);
            $cpf = mysqli_escape_string($connect, $_POST['cpf']);
            
            if(empty($email) or empty($senha) or empty($instituição) or empty($matricula) or empty($nome) or empty($cpf)):
                $erros[] = "<li class = alerta> O cadastro precisa ser preenchido </li>";
            endif;
        endif;

        
    
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <link rel="stylesheet" href="stylecadastro.php">
    <title>Cadastro</title>

         <!-- mascara para cpf -->

         <script>
          function mascara(i){
   
            var v = i.value;
            
            if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
                i.value = v.substring(0, v.length-1);
                return;
            }
            
            i.setAttribute("maxlength", "14");
            if (v.length == 3 || v.length == 7) i.value += ".";
            if (v.length == 11) i.value += "-";

            }
         </script>

   
</head>
<body>

    <header>
        <div class="logo">
            <h2>Carteirinha</h2>
        </div>
        <nav class="menu">
            <ul>
                <li><a href="#">Duvidas?</a></li>
                <li><a href="#">Email</a></li>
                <li class="login"><a href="/login/index.html">Login</a></li>
            </ul>
        </nav>
    </header>

    <main>

      
       
        <form class="" method="POST">

            
            <div class="cadastro"> 
            <?php
             if ($rs1 && $rs2 && $rs3):
                echo "<li class = alerta> Casdastro concluido, Muito Obrigueido </li>";
            endif;
           
            ?>
            <?php
             if(!empty($erros)):
                foreach ($erros as $erro):
                     echo $erro;
                endforeach;
             endif;

            
            ?>
                <h1>Cadastro da carteirinha</h1>

                <div class="NomeCpf">
                    <div class="nome">
                        <label for="text">Nome</label>
                        <br>
                        <input type="text" name="nome" id="nome">
                    </div>

                    <div class="cpf">
                        <label for="text">CPF</label>
                        <br>
                        <input type="text" name="cpf" id="cpf" oninput="mascara(this)"> 
                     </div>
                </div>
                
                <div class="InstMatricula">
                    <div class="inst">
                        <label for="text">Intituição educacional</label>
                        <br>
                        <input type="text" name="insti" id="insti">
                    </div>

                    <div class="matricula">
                        <label for="number">matricula</label>
                        <br>
                        <input type="text" id="matricula" name="matricula" maxlength="11">
                    </div>
                </div>

                <div class="EmailSenha">
                     <div class="email">
                        <label for="email">Email</label>
                        <br>
                        <input type="email" name="Email" id="Email" require = "required">
                    </div>

                    <div class="senha">
                        <label for="password">Senha</label>
                        <br>
                        <input type="password" name="senha" id="myInput" maxlength="10">
                    </div>
                </div>

                <div>
                    <input type="submit" class="cadastrar" name="btn" value="cadastrar" />
                </div>
            </div>

            

        </form>
    </main>
   
    
</body>
</html>