
<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "ti-33";

    $conn = new mysqli($servidor, $usuario, $senha, $banco);

    //verifica se há erro
    if($conn->connect_error){ 
        die("Não foi possível conectar: " . $conn->connect_error);
    }
    