<?php
/**
 * Created by PhpStorm.
 * User: Максим
 * Date: 12.06.2016
 * Time: 12:12
 */
    $a = 20;
    $b = 0;
    $c = -20;

    var_dump((boolean) $a);
    var_dump((boolean) $b);
    var_dump((boolean) $c);
    /*В типе boolean есть два варианта значений True и False. Все значения включая отрицательные будут - True.
    False - принимает значение только 0, пустой строки или пусты массивов, объектов, особого типа NULL*/

    define ("DAYS_COUNT", 7);
    const MONTH_COUNT = 12;
    echo DAYS_COUNT." ".MONTH_COUNT;