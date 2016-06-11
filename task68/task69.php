<?php
/**
 * Created by PhpStorm.
 * User: Максим
 * Date: 10.06.2016
 * Time: 17:31
 */
    $numberRand = array();
    $numberRevers = array();
    $numberMax = 0;
    $numberMin = 0;
$numberMaxIndex = 0;
$numberMinIndex = 0;


    //Цикл заполнения массива случайными числами
    for ($i = 0; $i < 10; $i++) {
        $numberRand[] = rand();
        $numberMax = $numberRand[0];
        $numberMin = $numberRand[0];
        //Цикл сравнения в массиве чисел
        for ($n = 0; $n <= $i; $n++) {
            if ($numberRand[$n] > $numberMax) {
                $numberMax = $numberRand[$n];
                $numberMaxIndex = $n;
            }
            elseif ($numberRand[$n] < $numberMin) {
                $numberMin = $numberRand[$n];
                $numberMinIndex = $n;
            }
        }
        echo $numberRand[$i]. "<br>";
    }
    echo "Максимальное число ".$numberMax. "<br> Минимальное число ".$numberMin."<br>";
    //Замена местами наибольшего и наименьшего значения
    $numberRand[$numberMaxIndex] = $numberMin;
    $numberRand[$numberMinIndex] = $numberMax;
    for ($i = 0; $i < 10; $i++) {
        echo $numberRand[$i]. "<br>";
    }

