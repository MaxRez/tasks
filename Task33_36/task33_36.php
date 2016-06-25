
<?php
/*
Задача №33

Создайте две переменные $a и $b, значения которых будут числами. Выведите максимальное число из этих двух
*/
$a = $_GET['a'];
$b = $_GET['b'];
$d = 20;
//Установили тип переменной в int
settype($a, "integer");
settype($b, "integer");

    if (is_int($a) && is_int($b)){
        if ($a > $b) {
            echo $a." больше ".$b. "<br>";
            var_dump ($a);
        } elseif ($b > $a) {
            echo $b." больше ".$a. "<br>";
            var_dump ($b);
        } else {
            echo "Числа ".$a." и ".$b." равны";
            var_dump ($a, $b);
        }  
    } else {
        echo "Вы ввели не число";
    }
?>


