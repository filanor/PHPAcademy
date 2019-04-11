<?php
/**
 * Created by PhpStorm.
 * User: filanor
 * Date: 2019-04-05
 * Time: 01:11
 */


error_reporting(E_ALL & ~E_NOTICE);


// Создаем интерфейсы
interface iNotEmpty
{
    public function notEmpty();
}

interface iToZero
{
    public function toZero();
}

interface iTest
{
    public function test();
}


abstract class Product implements iNotEmpty, iToZero, iTest
{
    public $item;
    public $price;
    public $weight;
    private static $count = 0;
    public const YEAR_START = 2000;
    public static $company = "Шокофарма";

    public function __construct($item, $price, $weight)
    {
        $this->item = gettype($item) == 'string' ? $item : 'неверный формат';
        $this->price = (gettype($price) == 'integer'|| gettype($price) == 'double') ? $price : 0;
        $this->weight = (gettype($weight) == 'integer' || gettype($weight) == 'double') ? $weight : 0;
        self::$count++;
        $this->showImage();
    }

    // функция для интефейса iNotEmpty
    public function notEmpty()
    {
        echo "<br>Создано " . self::$count . "элементов";// TODO: Implement notEmpty() method.
    }

    // функция для интефейса iToZero
    public function toZero()
    {
        self::$count = 0;// TODO: Implement toZero() method.
    }

    // функция для интефейса iTest
    public function test()
    {
        echo "Я живой!!";// TODO: Implement test() method.
    }


    // статическая функция
    public static function showCompanyInfo()
    {
        echo "Шоколадная фабрика " . self::$company . " основанна в  " . self::YEAR_START;
    }

    public abstract function showImage();


    public function getCount()
    {
        echo self::$count;
    }

    public function printProduct()
    {
        echo "<div style='width: 300px;margin: 50px auto; border: 1px solid #e6e6e6;'>
                <div style = 'border-bottom: 1px solid #e6e6e6; padding: 10px'>
                    <span style = 'width:50%;display:block;float:left'>Название</span>
                    <span style = 'width:50%;display:block;float:right'>{$this->item}</span>
                </div>
                <div style = 'border-bottom: 1px solid #e6e6e6; padding: 10px'>
                    <span style = 'width:50%;display:block;float:left'>Вес</span>
                    <span style = 'width:50%;display:block;float:right'>{$this->weight}</span>
                </div>
                <div style = 'border-bottom: 1px solid #e6e6e6; padding: 10px'>
                    <span style = 'width:50%;display:block;float:left'>Цена</span>
                    <span style = 'width:50%;display:block;float:right'>{$this->price}</span>
                </div>
            </div>";
    }

    public function printProductNDS()
    {
        $ndsFree = round($this->price - $this->price * (20/120),2);
        echo "<div style='width: 300px;margin: 50px auto; border: 1px solid #e6e6e6;'>
                <div style = 'border-bottom: 1px solid #e6e6e6; padding: 10px'>
                    <span style = 'width:50%;display:block;float:left'>Название</span>
                    <span style = 'width:50%;display:block;float:right'>{$this->item}</span>
                </div>
                <div style = 'border-bottom: 1px solid #e6e6e6; padding: 10px'>
                    <span style = 'width:50%;display:block;float:left'>Вес</span>
                    <span style = 'width:50%;display:block;float:right'>{$this->weight}</span>
                </div>
                <div style = 'border-bottom: 1px solid #e6e6e6; padding: 10px'>
                    <span style = 'width:50%;display:block;float:left'>Цена c НДС</span>
                    <span style = 'width:50%;display:block;float:right'>{$this->price}</span>
                </div>
                <div style = 'border-bottom: 1px solid #e6e6e6; padding: 10px'>
                    <span style = 'width:50%;display:block;float:left'>Цена без НДС</span>
                    <span style = 'width:50%;display:block;float:right'>{$ndsFree}</span>
                </div>
            </div>";
    }
}


class Chocolate extends Product
{
    public $colory;

    public function __construct($item, $price, $weight, int $colory)
    {
        parent::__construct($item, $price, $weight);
        $this->colory = $colory;
    }

    public function __set($name, $value)
    {
        echo "Извините, у вас нет прав доступа для изменения $name";// TODO: Implement __set() method.
    }


    public function showImage()
    {
        echo "<div style='width: 300px;margin: 50px auto;'>
              <div style = 'width:200px; height:200px; background-image: url(сhoco.jpeg);background-size: contain'></div>
              </div>
        ";
    }

}

class Candy extends Product
{
    public function __construct($item, $price, $weight)
    {
        parent::__construct($item, $price, $weight);
    }

    public function __get($name)
    {
        echo "Нет доступа к свойству $name";// TODO: Implement __get() method.
    }

    public function showImage()
    {
        echo "<div style='width: 300px;margin: 50px auto;'>
              <div style = 'width:100px; height:100px; background-image: url(candy.jpeg);background-size: contain'></div>
              </div>
        ";
    }

    public static function showCompanyInfo() {
        parent::showCompanyInfo();
    }

}


$candy = new Candy('Аленка', 100, 0.1);
$candy->getCount();


$choco = new Chocolate('Аленка', 100, 0.1, 1500);
$choco->getCount();
echo "<br>";
echo "<br>" . Product::showCompanyInfo() . "<br>";
echo $candy->showCompanyInfo();
$candy->notEmpty();
