<?php

function arrayUnique($arr){
    for ($i = 0; $i < count($arr); $i++){
        for ($j = $i + 1; $j < count($arr); $j++){
            if($arr[$i] === $arr[$j]){
                unset($arr[$j]);
            }
        }
    }
    return $arr;
}

print_r(arrayUnique([123,123,56,23,6782,56,89]));


