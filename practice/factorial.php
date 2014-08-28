<?php
/**
 * Funcion para calcular el factorial de un numero positivo.
 * @param int $num
 * @return int
 */
function factorial($num)
{
    if ($num < 2){
        return 1;
    } else {
        return ($num * factorial($num - 1));
    };
};

