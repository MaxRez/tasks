<?php
/**
 * Created by PhpStorm.
 * User: Максим
 * Date: 09.06.2016
 * Time: 1:43
 */

    $myArray = array(4, 2, 5, 19, 0, 20, 10);
    $e = array(2, 3, 4, 10, 20);
    $a = array();

    foreach ($myArray as $number) {
        foreach ($e as $value) {
            if ($number == $value) {
                $a[] = $number;
            }
        }
    }
    echo "В масиве совпадает числа: " ;
    for ($i = 0; $i < count($a); $i++){
        echo $a[$i]. " ";
    }


