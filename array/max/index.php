<?php

    require("../lib/findMax.php");

    $item = $_GET["item"];

    echo "Максимальный элемент = " .findMax($items);
?>