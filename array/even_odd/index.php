<?php
    $even = $_GET['even'];
    $odd = $_GET['odd'];

    $result = [];

    for ($i = 0; $i < $even; $i++) {
        $n = rand();
        $result[] += ($n + $n % 2);
    }

    for ($i = 0; $i < $even; $i++) {
        $n = rand();
        $result[] += ($n + ($n + 1) % 2);
    }

?>