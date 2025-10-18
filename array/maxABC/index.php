<?php

    require("../lib/findMax.php") ;


    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];

    $array = [$a ,$b , $c];
    


    echo "Максимульное значени = " .findMax($array);
?>