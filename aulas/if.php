<?php
    //$hora = date("H");
    
    $hora = $_GET["horaAtual"];

    if($hora < 12){
        echo "Bom dia! >-<";
    }
    elseif($hora < 18){
        echo "Bom tarde! XD";
    }
    else{
        echo "Boa noite! :D";
    }