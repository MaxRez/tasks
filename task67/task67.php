<?php

    $numeric = $_GET['char'];
    $sum = 0;
    if (is_numeric($numeric)) {
        for ($i = 0; $i <= strlen($numeric) - 1; $i++) {
            $sum += $numeric[$i];
        }
        echo "Сумма цифр числа ".$numeric." равна ".$sum;  
    } else {
        echo "Введенная строка не является числом!";
    }
