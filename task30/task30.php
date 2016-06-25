<?php
/**
 * Created by PhpStorm.
 * User: Максим
 * Date: 11.06.2016
 * Time: 12:17
 */

    $s = $_GET['s'];
    $t = $_GET['t'];
    $v = $s/$t;
    echo "Скорость автомобиля ".$v." км/ч или ".($v*1000/3600)." м/с.";
    