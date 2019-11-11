<?php

    include('conecta.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $imagem = $_POST['imagem'];


    $sql = "UPDATE Pessoas SET nome='$nome', email='$email', imagem='$imagem' WHERE id=''";

    $conecta->query($sql);

    $conecta->close();

    header('Location: select.php');