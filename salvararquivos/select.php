<?php

    include('conecta.php');

    $sql = "SELECT * FROM Pessoas";
    $resultado = $conecta->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pessoas</title>
    <style>
    table, tr, th{
        border: 2px solid black;
        border-collapse: collapse;
    }
    td, th{
            padding: 5px;
    }
    th{
        background-color: #99ddff;
        color: black;
    }
    </style>
</head>
<body>

    <h1>Pessoas cadastradas</h1>
    <table>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Foto</th>
            <th>Ação</th>
        </tr>
        <?php include('criarlinha.php')?>
    </table>
</body>
</html>

<?php 
    $conecta->close();
?>