<?php
/**
 * Created by PhpStorm.
 * User: Максим
 * Date: 11.06.2016
 * Time: 7:50
 */
    $day = $_GET['day'];

    switch ($day) {
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
            echo "Это рабочий день.";
            break;
        case 6:
            echo "Это выходной день.";
            break;
        case 7:
            echo "Это выходной день.";
            break;
        default:
            echo "Неизвестный день.";
    }
