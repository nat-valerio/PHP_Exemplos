<?php
    include('conn.php');

    $nome = $_GET['nome'];
    $sobrenome = $_GET['sobrenome'];
    $nascimento = $_GET['nasc'];

    //Para salvar datas é: ano, mes e dia
    $sql = "INSERT INTO Pessoas (nome, sobrenome, nascimento) VALUES ('$nome', '$sobrenome', '$nascimento')";

    //query é um comando em sql com INSERT INTO, VALUES E ETC...
    if($conn->query($sql) == TRUE){
        echo "Dado inserido com sucesso!";
    }
    else{
        echo "Erro: ". $conn->error;
    }

    $conn->close();



