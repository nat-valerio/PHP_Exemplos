<?php
    $x=0;
    while($x<=10){
        echo "Número: $x <br>";
        $x++;
    }

    echo "<hr>";

    $frase = "Testando a escrita de um texto";

    echo $frase[15];

    //percorre o elemento todo para encontrar a letra x
    $i=0;
    while($frase[$i] != "x"){
        $i++;
    }
    echo "Posição do 'x': $i";