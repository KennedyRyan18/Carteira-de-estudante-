<?php header("content-type: text/css"); ?>
html, body{
    width: 100%;
    margin: 0;
    padding: 0;
}
body{
    width: 100%;
    display: flex;
    flex-direction: column;
    background-color:#ffff;
}

/*header*/


header{
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 2% 5%;
}

.logo{
    display: block;
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

/*Main*/

main{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
.content-main{
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    background-color: #c1d8e0 ;
    width: 1100px;
    height: 450px;
    border-radius: 20px;
}

.img-cart{
    display: block;
}

.conteudo h2{
    width: 400px;
}

/*Button*/

.button{
    display: block;
    text-decoration: none;
}

.button div p{
    font-size: 1.2em;
    color: #3a788c;
    font-weight: 700;
}

.button div{
    display: flex;
    justify-content: center;
    align-items: center;
    border: 2px solid transparent;
    color: black;
    background-color: white;
    text-align: center;
    width: 200px;
    height: 40px;
    border-radius: 20px;
    margin: 0 60px;
    transition: all .4s;
}

.button div:hover{
    /* background-color: #3a788c; */
    border: 2px solid #3a788c;
    transition: all .4s;
}

