<?php

    include('conn.php');

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $id = $_GET['id'];

    $sql = "UPDATE Pessoas SET nome='$nome', sobrenome='$sobrenome' WHERE id=''";

    $conn->query($sql);

    $conn->close();

    header('Location: select.php');