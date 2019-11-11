<?php

    include('conecta.php');

    $id = $_GET['id'];

    $sql="DELETE FROM Pessoas WHERE id='$id'";

    $conecta->query($sql);

    $conecta->close();

    header('Location: select.php');