<?php
/**
 * Created by PhpStorm.
 * User: Максим
 * Date: 12.06.2016
 * Time: 11:29
 */

$a = '78';
$b = 78;

    if ($a == $b) {
        echo "Равны <br>";
    } else {
        echo "Не равны <br>";
    }

    if ($a === $b) {
        echo "Эквивалентны <br>";
    } else {
        echo "Не эквивалентны <br>";
    }