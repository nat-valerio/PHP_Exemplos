<?php

    $id = $_GET['id'];
    $titulo = '';
    $conteudo = '';

    if($id == "1"){
        $titulo = "Titulo 1";
        $conteudo = "Conteúdo 1";
    }
    elseif($id == "2"){
        $titulo = "Titulo 2";
        $conteudo = "Conteúdo 2";
    }
    elseif($id == "3"){
        $titulo = "Titulo 3";
        $conteudo = "Conteúdo 3";
    }
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Principal</title>
</head>
<body>

    <header>
        <h1><?php echo $titulo; ?></h1>
    </header>
    
    
    <?php include 'menu.php'; ?> 
    <!-- include não interrompe a execução caso o arquivo não seja encontrado-->
    <!-- require interrompe a execução caso o arquivi não seja encontrado-->

    <main>
        <p>
            <?php echo $conteudo; ?>
        </p>
    </main>

    <footer>
        Rodapé do site
    </footer>
    
</body>
</html>