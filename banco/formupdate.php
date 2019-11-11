<?php 
    include('conn.php');

    $id = $_GET['id'];

    $sql = "SELECT * FROM  pessoas WHERE id='$id'";

    $resultado = $conn->query($sql); //está pegando um metodo

    //num_rows propriedade do objeto
    if($resultado->num_rows > 0){
        $linhas = true;
        $linha = $resultado->fetch_assoc();
    }
    else{
        $linhas = false;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FormUpdate</title>
</head>
<body>
    <header><h1>Formulário para atualização</h1></header>
    <main>
        <h2><?php echo $linhas?"":"Nenhum resultado encontrado"?></h2>
        <form action="update.php?id=<?php echo $linha['id'] ?>" method="post">
            <div>
                <!--?:para separar booleanos-->
                <label for="NomeForm">Nome</label>
                <input type="text" name="nome" value="<?php echo $linhas?$linha['nome']:"" ?>">
            </div>
            <div>
                <label for="SobrenomeForm">Sobrenome</label>
                <input type="text" name="sobrenome" value="<?php echo $linhas?$linha['sobrenome']:"" ?>">
            </div>
            <div>
                <input type="submit" value="Salvar">
            </div>
        </form>
    </main>
    <footer></footer>
    
</body>
</html>