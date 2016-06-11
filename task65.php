<?php
/**
 * Created by PhpStorm.
 * User: Максим
 * Date: 09.06.2016
 * Time: 17:00
 */
    //Вертикальный цикл
    for ($i = 1; $i <= 9; $i++) {
        //Горизонтальный цикл
        for ($n = 1; $n <= $i; $n++) {
            echo $i;
        }
        echo "<br>";
    }