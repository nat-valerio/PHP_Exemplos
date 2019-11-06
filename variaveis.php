<?php

    //Toda variavel comeca com $, no php nao tem tipo de variavel//
    $num1 = 10;
    $num2 = 20;

    $resultado = $num1 + $num2;
    echo "Resultado:" . $resultado;

    $frase = "Algum texto";

    echo "<br>";

    echo $frase;
    echo "<br>";

    echo "Escrevendo $frase";
   

    $numDecimal = 10.6;

    $carros = array('fusca', 'voyage', 'escort', 'kadett');

    echo "<br>";

    echo $carros[0];

    $condicao = true; //valor booleano (true e false)

    echo "<br>";

    echo $condicao;

    $x = 25.20;
    $int_cast = (int)$x;
    echo "<br>";
    echo $int_cast;

    $n1 = 2;
    $n2 = 3;
    echo "<br>";

    echo $n1 + $n2; /*Operadores de soma, multiplicacao, divisao e subtracao (% da o resultado do resto de uma divisao, 
                        utilizado para saber se o numero eh par ou impar).*/

    echo $n1 ** $n2; //potencia

    

    $status = ($condicao) ? "Verdadeiro" : "Falso"; //Um jeito de imprimir um booleano na tela
    echo "<br>";
    echo $status;

