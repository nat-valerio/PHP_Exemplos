<?php

    $json = '{"nome": "Hello World"}';
    $json = file_get_contents("https://api.myjson.com/bins/l3bfy");

    $dado = json_decode($json);

    echo $dado->nome; //ou var_dump($dado);

    echo "<hr>";

    $json = file_get_contents("https://api.myjson.com/bins/qmnda");

    $dados=json_decode($json);

    foreach($dados as $d){
        echo $d->nome . "<br>";
    }
