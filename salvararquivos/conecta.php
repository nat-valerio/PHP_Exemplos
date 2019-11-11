
<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "salvar-arquivo";

    $conecta = new mysqli($servidor, $usuario, $senha, $banco);

    //verifica se há erro
    if($conecta->connect_error){ 
        die("Não foi possível conectar: " . $conecta->connect_error);
    }