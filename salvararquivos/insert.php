<?php
    include('conecta.php');

    $id = $_GET['id'];
    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $imagem = $_GET['imagem'];

    $sql = "INSERT INTO Pessoas (id, nome, email, imagem) VALUES ('$id','$nome', '$email', '$imagem')";

    if($conecta->query($sql) == TRUE){
        echo "Dado inserido com sucesso!";
    }else{
        echo "Erro: " . $conecta->error;
    }
?>