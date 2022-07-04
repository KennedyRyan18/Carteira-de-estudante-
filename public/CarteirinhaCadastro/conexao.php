<?php
$servername = "us-cdbr-east-05.cleardb.net";
$username = "b201ddc6abe7ea";
$password = "05d3598d";
$db_name = "heroku_28d4118fc6643ce";

$connect = mysqli_connect($servername, $username, $password, $db_name);

if(mysqli_connect_error()):
    echo "falha na conexão: ".mysqli_connect_error();
endif;
?>