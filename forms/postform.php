<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário</title>
</head>
<body>

    <form action="postresultado.php" method="POST">
        <div>
            <label for="">Nome: </label>
            <input type="text" name="nome" id="form-nome">
        </div>
        <div>
            <label for="">Email: </label>
            <input type="text" name="email" id="form-email">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
    
</body>
</html>