<?php

    include('conecta.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $imagem = $_POST['imagem'];


    $sql = "UPDATE Pessoas SET nome='$nome', email='$email', imagem='$imagem' WHERE id=''";

    $conecta->query($sql);

    $conecta->close();

    header('Location: select.php');

    $diretorio = "uploads/";
    $arquivo = $diretorio . basename($_FILES['imagemUpload']['name']);

    $tipo = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));

    if(move_uploaded_file($_FILES['imagemUpload']['tmp_name'], $arquivo)){
        echo "$arquivo salva com sucesso";
    }
    else{
        echo "Não foi possível salvar";
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Imagem salva</title>
</head>
<body>
    <img src="<?php echo $arquivo ?>" alt="">
</body>
</html>