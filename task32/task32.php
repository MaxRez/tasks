<?php
$a = $_GET['a'];
$b = $_GET['b'];
$operator = $_GET['operator'];
    if ($operator == '+') {
        echo "Сумма чисел равна ". ($a + $b);
    } elseif ($operator == '-'){
        echo "Разница чисел равна ". ($a - $b);
    } elseif ($operator == '*') {
        echo "Произведение чисел равно ". ($a * $b);
    } elseif ($operator == '/' && $b == 0) {
        echo "На ноль делить нельзя"; {
            echo "Произведение чисел равно " . ($a / $b);
        }
    } elseif ($operator == '%') {
        echo "Остаток от деления ". ($a % $b);
    }
?>


