<?php

    //Simulando da uma aplicação do backend

    $carros=array("Brasilia", "Variant", "Kadet", "Monza", "Escort", "Veraneio");

    echo json_encode($carros);

    echo "<hr>";

    $idade = array("Gado"=>18, "Victor"=>35, "Leo"=>17);

    echo json_encode($idade);

    echo "<hr>";

    $pessoas = array(
        array('nome'=>'Rodrigo', 'idade'=>32, 'cpf'=>123456),
        array('nome'=>'Pedro', 'idade'=>22, 'cpf'=>456123),
        array('nome'=>'Andre', 'idade'=>20, 'cpf'=>789456)
    );

    echo json_encode($pessoas);

    echo "<hr>";