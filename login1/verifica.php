<?php

    session_start();

    include('conn.php');

    $usuario = $_POST['user'];
    $senha = $_POST['password'];

    $sql="SELECT * FROM usuarios WHERE usuarios='$usuario'";

    $resultado = $conn->query($sql);

    if($resultado->num_rows > 0){
        $linha = $resultado->fetch_assoc();
        if($linha["senha"] == md5($senha)){
            echo "Login efetuado com sucesso";
            $_SESSION['login']="true";
            header('Location: index.php');
        }
        else{
            echo "Usuário ou senha inválida";
        }
    }
    else{
        echo "Usuario ou senha inválidos";
    }