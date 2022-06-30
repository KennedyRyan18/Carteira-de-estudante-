<?php header("content-type: text/css"); ?>

html{
    width: 100%;
    height: 100%;
}

body{
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    margin: 0;
    padding: 0;
    background: rgb(171,248,231);
    background: linear-gradient(90deg, rgba(171,248,231,1) 0%, rgba(135,120,199,1) 100%);
}


main{
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100vh;
}

form{
    display: block;
}

.login{
    margin: auto;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    background-color: white;
    border-radius: 30px;
    width: 330px;
    height: 330px;
    box-shadow: 10px 10px 8px rgba(31, 92, 132, 0.554);
}

.login h1{
    margin-top: 40px;
}

.eml{
    display: block;
    margin-top: 16px;
    margin-bottom: 20px;
}

.snh{
    display: block;
    margin-top: 10px;
}
.email{
    display: block;
    width: 200px;
    border-style: none;
    border-bottom: 1px solid rgb(153, 152, 152);
    outline: none;
    text-align: center;
}

.senha{
    display: block;
    outline: none;
    border-style: none;
    border-bottom: 1px solid rgb(153, 152, 152);
    text-align: center;
}

.btn{
    color: wheat;
    background-color: rgb(58, 39, 231) ;
    border: none;
    margin-top: 30px;
    width: 125px;
    height: 45px;
    border-radius: 20px;
    font-size: 1em;
    box-shadow: 0 3px 5px rgb(111, 110, 110);
    transition: ease .3s;
}

.btn:hover{
    width: 114px;
    transition :ease-out .3s;
}

.alerta{
    list-style: none;
    color: rgb(157, 5, 5);
    text-align: center;
    font-size: 1.4em;
    margin-bottom: 10px;
    font-weight: 800;
}