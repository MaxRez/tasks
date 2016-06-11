<?php
/**
 * Created by PhpStorm.
 * User: Максим
 * Date: 08.06.2016
 * Time: 22:32
 */

/*Cycle FOR implementation
    for ($i = 1; $i <= 100; $i++) {
       $b = $i % 2; //echo $b;
       if ($b = 0) {
            echo $i. " <br>";
       }
    }
*/

/*Cycle WHILE implementation
    $i = 1;
    while ($i <= 100) {
        $b = $i % 2;
        if ($b < 1) {
            echo $i. "<br>";
        }
        $i++;
    }
*/
//Cycle DO WHILE implementation
    $i = 1;
    do {
        $b = $i % 2;
        if ($b < 1){
            echo $i. "<br>";
        }
        $i++;
    }
    while ($i <= 100);
?>