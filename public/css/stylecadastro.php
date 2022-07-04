<?php header("content-type: text/css"); ?>

html, body{
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100%;
}

body{
    display: flex;
    flex-direction: column;
    background: linear-gradient(90deg, rgba(171,248,231,1) 0%, rgba(135,120,199,1) 100%);
    
}

/* cabeçario*/

header{
    display: flex;
    justify-content: space-between;
    padding: 1% 5%;

}

.menu ul{
    display: flex;
    list-style: none;
}

.menu a{
    text-decoration: none;
    padding: 18px;
}

.menu li{
    display: block;
    text-decoration: none;
}

main{
    display: flex;
    flex-direction: column;
    align-items: center;
}

/*cadastro*/

form{
    display: flex;
    justify-content: center;
    background-color:  rgb(255, 255, 255, .4);
    width: 470px;
    height: 400px;
    border-radius: 5px 5px;
    margin-right: 400px;
}

.cadastro{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.NomeCpf{
    text-align: center;
    display: flex;
    justify-content: space-between;
}

.nome{
    box-sizing: border-box;
    text-align: center;
    margin-right: 50px;
    margin-bottom: 40px;
}

.nome input{
    height: 25px;
    border: 1px solid rgb(112, 108, 108);
    border-radius: 13px;
}

.cpf input{
    height: 25px;
    border: 1px solid rgb(112, 108, 108);
    border-radius: 13px;
}

.InstMatricula{
    text-align: center;
    display: flex;
}

.inst{
    margin-right: 50px;
    margin-bottom: 40px;
}

.inst input{
    height: 20px;
    border: 1px solid rgb(112, 108, 108);
    border-radius: 10px;
}


.matricula input{
    border-radius: 10px;
    border: 1px solid rgb(112, 108, 108);
    height: 20px;
}


.EmailSenha{
    display: flex;
    text-align: center;
}

.email{
    margin-right: 50px;
}

.email input{
    border: 1px solid rgb(112, 108, 108);
    height: 20px;
    border-radius: 10px;
}

.senha input{
    border: 1px solid rgb(112, 108, 108);
    height: 20px;
    border-radius: 10px;
}

.img{
   left: 500px;
   width: 400px;
   height: 450px;
}

.img img{
    width: 100%;
}

.cadastrar{
    border: 1px solid rgb(112, 108, 108);
    margin-top: 40px;
    width: 250px;
    height: 34px;
    border-radius: 50px;
}

.cadastrar:hover{
    
    border: 3px solid rgb(36, 151, 186);
}



