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

    $sql2 = "INSERT INTO tblogin (email, senha) VALUES ('$email', '$senha')";
    $rs2 = mysqli_query($connect, $sql2);


    // tabela estudante

    $sql3 = "INSERT INTO tbestudante (cpf, matricula, nome) VALUES ('$cpf', '$matricula', '$nome')";
    $rs3 = mysqli_query($connect, $sql3);

    if ($rs1 && $rs2 && $rs3) {
        echo " cliente registrado";
    }else {
        echo "erro";
    }

    
    

        // if ($connect->query($sql) === TRUE) {
        // echo "New record created successfully";
        // } else {
        // echo "Error: " . $sql . "<br>" . $connect->error;
        // }

        // $connect->close();



    
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <link rel="stylesheet" href="/css/cadastro.css">
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

    <main>
       
        <form class="" method="POST">

            <h1>Cadastro da carteirinha</h1>

            <div class="carteirinha"> 

                <div>
                <label for="text">Intituição educacional</label>
                <br>
                <input type="text" name="insti" id="insti">
                </div>

                <div>
                    <label for="text">Nome</label>
                    <br>
                    <input type="text" name="nome" id="nome">
                </div>

                <div>
                <label for="text">CPF</label>
                <br>
                    <input type="text" name="cpf" id="cpf" oninput="mascara(this)"> 
                </div>

            <div>
                <label for="number">matricula</label>
                <br>
                <input type="text" id="matricula" name="matricula" maxlength="11">
            </div>

            <div>
                <label for="email">Email</label>
                <br>
                <input type="email" name="Email" id="Email">
            </div>

            <div class="senha">
                <label for="password">Senha</label>
                <br>
               <input type="password" name="senha" id="myInput" maxlength="10">
            </div>

            <div>
                <input type="submit" value="Cadastrar">
            </div>
            </div>

            

        </form>
    </main>
   
    
</body>
</html>