<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Salvar Imagem</title>
    <style>
        form{
            margin: auto;
            border: 2px solid #000000;
            padding: 1em;
        }
    </style>
</head>
<body>
    
    <!--<form action="update.php?id=<?php echo $linha['id'] ?>" method="post">-->

    <form action="update.php?id=<?php echo $linha['id']?>" method="post" enctype="multipart/form-data">

        <h1>Faça seu cadastro para acessar o sistema</h1>
        
        <div>
            <label for="NomeForm">Nome: </label>
            <input type="text" name="nome" value="">
        </div>

        <br>

        <div>
            <label for="EmailForm">Email: </label>
            <input type="email" name="nome" value="">
        </div>

        <br>
        
        <div>
            Selecione uma imagem: 
            <input type="file" name="imagemUpload" value="Procurar..." accept="image/png, image/jpeg">
            <input type="submit" value="Salvar Imagem" name="submit">
        </div>

        <br>

        <div>
            <input type="submit" value="Salvar">
        </div>
    </form>

</body>
</html>