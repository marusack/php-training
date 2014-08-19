<?php
$arr = [1 => 1];
function fibonacci($n) {
    global $arr;
    if ($n >= 2) {
        $arr[] = 1;
        for ($i = 2; $i < $n ; $i++) {
            $arr[] = ($arr[$i] + $arr[($i - 1)]);
        }
    }
    return $arr;
    }