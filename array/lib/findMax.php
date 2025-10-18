<?php
function  findMax(array $array): int| float {
        return array_reduce(
            $array,
            function($max, $curr) {
                return $curr > $max ? $curr : $max;
            }
        );
    }
?>