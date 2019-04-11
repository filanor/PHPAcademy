<?php
/**
 * Created by PhpStorm.
 * User: filanor
 * Date: 2019-04-05
 * Time: 16:05
 */

// Константы привязываются к классу и неизменны
// без знака $ и большими буквами

class User
{
    const  MARK = 123; //константа
    public static  $login = 'test'; // статическая переменная
    // К статическим переменным, как и к константам, доступ имеет сам класс
    // и вызовы схожи

    public function getMark()
    {
        echo User::MARK; // способ 1
        echo self::MARK; // способ 2 (через обращение к самому себе)
    }

    //Статические методы доступны и классу и его объектам
    public static function getLogin()
    {
        echo self::$login;
    }
}

$abc = new User();

// обратиться к ним обычным методам невозможно, так как они доступны основному классу а не дочерним
//такой код не сработает
//echo $abc->MARK;

//для вызова константы нужно:
//echo User::MARK;

//либо с помощью методов класса:
$abc->getMark();



// Статические методы и свойства
// такой выхов даст ошибку
// echo $abc->login
// такой будет работать:
echo User::$login;

// В отличие от констант статические переменные можно изменять
User::$login = 'test2';
echo  User::$login;


echo $abc->getMark(); // будет работать
echo User::getLogin() // как и этот





// Магические методы

class User2
{
    private $test = 123;
    // магический метод геттер. Геттер вызывается автоматически, если мы пытаемся обратиться к
    // приватному ствойству
    public function __get($name)
    {
        echo "Нельзя обратиться к свойству $name"// TODO: Implement __get() method.
    }


    //  сеттер - вызывается при попытка присвоить значение свойству которго нет
    public function __set($name, $value)
    {
        echo "вы не можете присвоить значение $value несуществующему свойству $name"// TODO: Implement __set() method.
    }


    // Вызывается при попытке обратиться к несуществующему методу
    public function __call($name, $arguments)
    {
        echo "Метода с именем $name не существуеты"// TODO: Implement __call() method.
    }


    // вызывается при попытке вывести элемент класса на экран. без него echo $item выдаст ошибку
    // должен возвращать строку
    public function __toString()
    {
        return "Это объект класса User с приватным свойством test и значением 123"// TODO: Implement __toString() method.
    }

}

$item = new User2();
echo $item->$test; // выведет сообщение из геттера. Если бы его не было то выдалась бы фатальная ошибка
echo $item->$somethong; // тоже самое




// Интерфейсы - класс в котором все методы являются публичными и абстрактными. Абстрактный метод - метод без тела
interface iPrint
{
    public function printSmth();
}

interface iTest
{
    public function getTest();
}



// при расширении класса каким-то интерфейсом мы обязаны создать все методы этого интерфейса
class User3 implements iPrint, iTest
{
    public function printSmth()
    {
        echo 123 . "<br>"; // TODO: Implement printSmth() method.

    }

    // метод из интефейса достаточно объявить. он не обязан что-либо выполнять
    public function getTest()
    {
        // TODO: Implement getTest() method.
    }

}