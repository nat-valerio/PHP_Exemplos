<?php  
    //$arquivo = fopen("novo.arquivo.txt", "w") or die("Não é possivel encontrar o arquivo"); Sobrescreve um arquivo
    $arquivo = fopen("novo.arquivo.txt", "a") or die("Não é possivel encontrar o arquivo"); //escreve abaixo

    $texto = "Aula de LINUX!!\n"; /*\N PULA LINHA*/
    fwrite($arquivo, $texto);

    $texto = "Aula de PHP!!\n";    
    fwrite($arquivo, $texto);
    
    fclose($arquivo);
?>