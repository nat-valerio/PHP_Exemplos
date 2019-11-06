<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercício 2</title>
</head>
<body>
        <!--<img src="img/baby.jpg" alt="Bebê" width="500px">
        <img src="img/comlicenca.jpg" alt="Brother" width="500px">-->
    
        <?php
            $ano = $_GET["anoAtual"];

            if($ano < 2004){
                echo "Ainda é um bebê $ano";
            }
            else{
                echo "Já é mocinho $ano";
            }
        ?>

    <form action="exercicio2.php">
        <div>
        <?php
            $ano = $_GET["anoAtual"];
            $img = $_POST["imagem"];

            if($ano < 2004){
                echo "Ainda é um bebê $ano";
                $img -> 'img.baby.jpg';
            }
            else{
                echo "Já é mocinho $ano";
                $img -> 'comlicenca.jpg';
            }
        ?>

        </div>
    </form>
    
    
    
</body>
</html>