<?php

    $num1 = $_GET["n1"];
    $num2 = $_GET["n2"];

    if($num1 > $num2){
        echo $num1;
    }
    else{
        echo $num2;
    }
?>