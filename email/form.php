<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enviar email</title>
</head>
<body>

    <div>
        <header>
            <h1>Formulário para envio de emails</h1><hr>
        </header>

        <main>
            <form action="enviar.php" method="post">
                <div>
                    <label for="">Email: </label>
                    <input type="email" id='email' name='email'>
                </div>
                <div>
                    <label for="">Assunto: </label>
                    <input type="text" id='assunto' name='assunto'>
                </div>
                <div>
                    <label for="corpo">Conteúdo: </label>
                    <textarea name="corpo" id="corpo" cols="30" rows="10"></textarea>
                </div>
                <div>
                    <input type="submit" value='Enviar'>
                </div>
            </form>
        </main>
    </div>
    
</body>
</html>