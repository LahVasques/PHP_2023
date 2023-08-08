<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "cafebistro";

    //criação da conexão
    $conn = new mysqli($servername, $username, $password, $databasename);

    //verificando a conexão
    if(!$conn){
        die("conexão falhou".mysql_connect_error());
    }
?>