<?php
/* Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta */

//rand(min,max);
//if else
//in_array
//array_push($array, "q", "4");

$array = [];

while (count($array) < 15 ){
    $number = rand(1, 99);
    if(!in_array($number, $array)){
        array_push($array, $number,);
    };
};
var_dump($array);

?>