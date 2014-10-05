<?php

/**
 * Fuction para calcular el factorial de un numero positivo
 * @param type $num
 * @return int
 */
 
function factorial($num)
{
    if($num==0){
        return 1;
    }
    else {
    return   ($num * factorial($num-1)); 
    };
};
?>
