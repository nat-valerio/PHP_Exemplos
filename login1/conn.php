<?php

    $servername = "localhost";
    $username = "root";
    $password = '';
    $dbname = 'ti-33';

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error){
        die("Erro ao estabelecer conexão com o banco de dados");

    }