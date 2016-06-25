<?php
/**
 * Created by PhpStorm.
 * User: Максим
 * Date: 12.06.2016
 * Time: 16:02
 */

    $webLang        = array ('HTML', 'CSS', 'PHP', 'JS', 'JQ');
    $number         = array (1, 20, 15, 17, 24, 35);
    $square         = array (26, 17, 136, 12, 79, 15);
    $arr            = array ('green' => 'зелёный', 'red' => 'красный', 'blue' => 'голубой');
    $nameSalary     = array ('Коля' => '200', 'Вася' => '300', 'Петя' => '400');
    $color          = array ('green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой');
    $number51       = array (2, 5, 9, 15, 0, 42, 5, 9, 15, 0, 4);
    $numberString   = array (1, 2, 3, 4, 5, 6, 7, 8, 9);
    $number60       = array (1, 2, 3, 4, 5, 6, 7, 8, 9);
    $monthArr       = array (
                            'Январь',
                            'Февраль',
                            'Март',
                            'Апрель',
                            'Май',
                            'Июнь',
                            'Июль',
                            'Август',
                            'Сентябрь',
                            'Октябрь',
                            'Ноябрь',
                            'Декабрь'
                            );
    $dayWeek        = array (
                            'Понедельник',
                            'Вторник',
                            'Среда',
                            'Четверг',
                            'Пятница',
                            'Субота',
                            'Воскресенье'
                            );
    $number59       = array (4, 2, 5, 19, 13, 0, 10);
    $colors         = array('red',
                            'yellow',
                            'blue',
                            'gray',
                            'maroon',
                            'brown',
                            'green');

        //Выводим элементы массива $webLang в столбик
        foreach ($webLang as $value) {
            echo $value."<br>";
        }
?>
<hr>
    <?php
        //Выводим сумму элементов массива $number в переменную
        $result = 0;
        foreach ($number as $numberElement) {
            $result += $numberElement;
        }
        echo "Cумма элементов массива: ".$result. "<br>";
    ?>
<hr>
    <?php
        //Выводим сумму вадратов элементов массива $number в переменную
        $resultSquare = 0;
        foreach ($square as $numberSquareElement) {
            $numberSquare = $numberSquareElement * $numberSquareElement;
            $resultSquare += $numberSquare;
        }
        echo "Cумма квадратов элементов массива: ".$resultSquare."<br>";
    ?>
<hr>
    <?php
        //Выводим ключи и элементы массива $arr
        foreach ($arr as $key => $value) {
            echo "Ключи массива: ".$key."<br>";
        }
        foreach ($arr as $key => $value) {
            echo "Элемент массива: ".$value."<br>";
        }
    ?>
<hr>
    <?php
        //Выводим ключи и элементы массива по заданой форме
        foreach ($nameSalary as $key => $value) {
            echo $key." — зарплата ".$value." долларов <br>";
        }
    ?>
<hr>
    <?php
        //Выводим английские и русские названия в разных массивах
        $en[] = array ();
        $ru[] = array ();
        foreach ($color as $key => $value) {
            $en[] = $key;
            $ru[] = $value;
        }
        var_dump($en);
        echo "<br>";
        var_dump($ru);
    ?>
<hr>
    <?php
        //Выводим элементы массива которые больше 3-х но меньше 10-ти
        foreach ($number51 as $value) {
            if ($value > 3 && $value < 10) {
                echo "Элементы массива которые больше 3-х но меньше 10-ти: ".$value."<br>";
            }
        }
    ?>
<hr>
    <?php
        //С помощью цикла foreach создайте из масива строку '123456789'
        $string = '';
        foreach ($numberString as $value) {
            $string = implode($numberString);
        }
        echo $string."<br>";
        var_dump($string);
    ?>
<hr>
    <?php
        //Колличество элементов в массиве
        $count = 1;
        foreach ($number59 as $count => $value) {
            $count ++;
        }
        echo "Колличество элементов в массив: ".$count;
    ?>
<hr>
    <?php
        //Вывести элементы массива по 3 на строке
        foreach ($number60 as $value) {
            if ($value % 3) {
                echo $value.", ";
            } else {
                echo $value."<br><br>";
            }
        }
    ?>
<hr>
    <?php
        //Вывести все месяцы, а текущий месяц выведите жирным
        $month = date("n");
        foreach ($monthArr as $key => $value) {
            if ($key + 1 != $month) {
                echo $value." ";
            } else {
                echo " <b>$value</b> ";
            }
        }
    ?>
<hr>
    <?php
    //Вывести все дни недели, а выходные дни недели вывести жирным
    foreach ($dayWeek as $key => $value) {
        if ($key < 5) {
            echo $value." ";
        } else{
            echo "<b>$value</b> ";
        }
    }
    ?>
<hr>
    <?php
    //Вывести все дни недели и текущий день недели курсивом
    $day = date("N");
    foreach ($dayWeek as $key => $value) {
        if ($key + 1 != $day) {
            echo $value." ";
        } else{
            echo "<i>$value</i> ";
        }
    }
    ?>
<hr>
<?php
    //Вычислить произведение тех элементов, которые больше ноля и у которых парные индексы
    $multiplication = 1;
    $oddArray = array();
    function number_70($multiplication, $oddArray ) {
        $randomArray = array();
        $i = 0;
        while ($i < 10) {
            $randomArray[] = rand(1, 100);
            echo $randomArray[$i]."<br>";
            if ($i % 2 == 0 && $i != 0) {
                $multiplication *= $randomArray[$i];
            } else {
                $oddArray[] = $randomArray[$i];
            }
            $i++;
        }
        echo "Произведение тех элементов у которых парные индексы: ".$multiplication."<br>";
        foreach ($oddArray as $value) {
            echo "Элементы, у которых не парный индекс: ".$value."<br>";
        }
    }
    number_70($multiplication, $oddArray);
?>
<hr>
<?php
    //Выведите столбец чисел от 11 до 33
    $i = 11;
    do {
        echo $i."<br>";
        $i++;
    } while($i <= 33)
?>
<hr>
<?php
//Вывести таблицу умножения с помощью двух циклов for (вложенный цикл)
    for ($i = 2; $i <= 9; $i++) {
        for ($k = 1; $k <= 10; $k++) {
           echo $i." x ".$k." = ".$i*$k. "<br>";
        }
        echo "<br>";
    }
?>
<hr>
    <table border = "1 solid black" rules = "all"  width = "300">
        <?php
            //Вывенсти таблицу со случайными цветами
            $rows = 5;
            $k = 1;
            while ($k <= $rows) {
                $k++;
                echo "<tr></tr>";
                $cols = 5;
                $i = 1;
                while ($i <= $cols) {
                    $randomNumber = rand();
                    foreach ($colors as $key) {
                        $randomColors = rand(0, 6);
                    }
                    $i++;
                    echo '<td align = "center" style ="background-color:'.$colors[$randomColors].'">'.$randomNumber.'</td>';
                }
            }
        ?>
    </table>
<hr>


