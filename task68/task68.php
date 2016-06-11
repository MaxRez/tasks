<?php
/**
 * Created by PhpStorm.
 * User: Максим
 * Date: 10.06.2016
 * Time: 15:16
 */
    $number = $_GET['number'];
    $digital = $_GET ['digital'];
    $sum = 0;

    if (is_numeric($number) && is_numeric($digital)) {
        for ($i = 0; $i <= strlen($number) - 1; $i++) {
            if ($digital == $number[$i]) {
                $sum++;
            }
        }
        if ($sum == 0) {
            echo "Цифра ".$digital." не встречается в числе ".$number;
        } else {
            echo "Цифра " . $digital . " в числе " . $number . " встречается " . $sum . " раз";
        }
    } else {
        echo "Вы ввели не число!";
    }