<?php



//С помощью условий и циклов выведите на экран таблицу умножения в удобочитаемом формате

function tab(){
    for ($i = 1; $i <= 10; $i++){
        echo '<span style = "white-space: pre">';
        for ($j = 1; $j<= 10; $j++){
            $b = $i * $j;
            if ($b < 10){
                echo " " . $b . "   ";
            } else if ($b < 100){
                echo " " . $b . "  ";
            } else {
                echo $b;
            }

        }
        echo '</span><br>';
    }
}


//Задайте бесконечный цикл, который будет выводить на экран квадраты чисел с новой строчки.
//Если квадрат числа превысит 100, то прервите цикл и перейдите к метке после цикла,
// //где будет вывод на экран сообщения "Цикл завершен"




function infinity() {
    $i = 1;
    while (true) {
        $sq = $i ** 2;
        if ($sq > 100) {
            goto end;
        }
        echo $sq . '<br>';
        $i++;
    }
    end:
        echo "Цикл завершен";
}




// Напишите функцию, которая будет принимать три аргумента - a, b и c - и возвращать их произведение.
//Значение “c” по умолчанию - 5.

function tripple ($a, $b, $c=5) {
    return $a * $b * $c;
}




//tab();

infinity();

//echo tripple (1,3, 2);

