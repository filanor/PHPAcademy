<?php
    echo "<h1>Привет PHP</h1>";
    //echo "Привет PHP";


// Создание переменных

$first = "Я первая переменная";

// вывод в двойных ковычках выведет на экран значение переменной
echo "$first <br>";

// вывод в одинарных ковычках выведет на экран название переменной
echo '$first';




// вывод нескольких переменных

$name = 'Олег';
$surname = 'Иванов';


// через конконтиначию
echo '<br>' . $name . ' ' . $surname ;
// через двойные кавычки
echo "<br> $name $surname";



// Операторы
$x = 4;
$y = 3;

echo $x + $y . "<br>";
echo $x - $y . "<br>";
echo $x / $y . "<br>";
echo $x * $y . "<br>";

$x +=2;
echo $x;
echo '<br>';

//инкремент
$x++;
echo $x;
echo '<br>';
//инкремент
$x--;
echo $x;
echo '<br>';


$abc = "яблоки";
// конкантинация
$abc .= ' - это фрукт';



// Условие
if ($x > $y){
    echo "Больше";
} else {
    echo "Меньше";
}













/*================================================================================
===========================           Урок 2         ==============================
/*================================================================================*/

// протые типы данных

$text = 'Академия верстки';

echo gettype($text) . '<bt>'; // string

$num = 555.11;
echo gettype($num) . '<bt>'; // double

$bool = true;
echo gettype($bool) . '<bt>'; // boolean

var_dump((bool) $text); // проверка на булевое значение
// В php ложью являются: 0, пустая строка, пустой массив, переменные которым не присвоино значение


//NULL тип данных говорящий, что переменной нет, либо что ей не присвоено никакое значение
$n;
echo gettype($n) . '<br>'; // NULL



// Объекты
class ForTest {};
$objectTest = new ForTest();
echo gettype($objectTest) . '<br>'; // object



// Массивы
//Два метода записи. Второй предпостительнее
$fruits = array('orange', 'apple', 'peach');
$fruits = ['orange', 'apple', 'peach'];

echo $fruits[0] . '<br>';
$fruits[3] = 'pineapple'; // добавляем в массив

echo $fruits . '<br>'; // выведет не массив, а только его тип (array)

//для вывода массива на экран:
var_dump($fruits);
//array(4) { [0]=> string(6) "orange" [1]=> string(5) "apple" [2]=> string(5) "peach" [3]=> string(9) "pineapple" }

echo '<br>';

echo print_r($fruits);
//Array ( [0] => orange [1] => apple [2] => peach [3] => pineapple )




//Два вида массивов простой (тот что выше - $fruits) и ассоциативный :
$arr = ['dog'=>'Rex', 'cat'=>'Bersik'];
echo '<br>';
echo $arr['dog'];

$arrMany = [
    [1, 2, 3],
    ['text', 'test2']
];

echo "<br>" . $arrMany[1][1]; //test2





/*================================================================================
===================      Условные операторы         ==============================
/*================================================================================*/

$name = "Anton";

if ($name == 'Oleg') {
    echo 'Добрый день';
} else if ($name == 'Artem') {
    echo 'Добрый вечер';
} else {
    echo 'Доброе утро';
}



// тернарный оператор для присваивания значений
$text = $name==true ? 1 : 2;


$num = 3;
switch ($num) {
    case 1:
        echo "Num равен 1";
        break;
    case 2:
        echo "Num равен 2";t
        break;
    case 3:
        echo "Num равен 3";
        break;
    default:
        echo "Num по дефолту";
        break;
}





/*================================================================================
=================================      циклы      =================================
/*================================================================================*/


$num = 10;
while ($num < 15) {
    echo $num . <br>;
    $num++;
}


do{
    echo $num;
} while ($num > 20);
//в любом случае будет минимум 1 итерация

for(i = 0; i < 10; i++) {
    if($i == 3) {
        breal;
    }
    echo $i . '<br>';
}
// break - прервет цикл
// continue - прервет итерацию

$arr = [1, 2, 3];
// когда нужны только значения
foreach ($arr as $value) {
    echo $value . '<br>';
}
//когда нужен и ключ и значение
foreach ($arr as $key=>$value) {
    echo$key . ' ' . $value . '<br>';
}
//




/*================================================================================
=================================      функции      ==============================
/*================================================================================*/


function hello ($a, $b) {
    //тут тело функции
    echo $a + $b;
}

hello(5,3);






























?>