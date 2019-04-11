<?php
/**
 * Created by PhpStorm.
 * User: filanor
 * Date: 2019-04-05
 * Time: 01:11
 */


error_reporting(E_ALL & ~E_NOTICE);

abstract class Product
{
    public $item;
    public $price;
    public $weight;
    private static $count = 0;

    public function __construct($item, $price, $weight)
    {
        $this->item = gettype($item) == 'string' ? $item : 'неверный формат';
        $this->price = (gettype($price) == 'integer'|| gettype($price) == 'double') ? $price : 0;
        $this->weight = (gettype($weight) == 'integer' || gettype($weight) == 'double') ? $weight : 0;
        self::$count++;
        $this->showImage();
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

    public function showImage()
    {
        echo "<div style='width: 300px;margin: 50px auto;'>
              <div style = 'width:100px; height:100px; background-image: url(candy.jpeg);background-size: contain'></div>
              </div>
        ";
    }

}


$candy = new Candy('Аленка', 100, 0.1);
$candy->getCount();


$choco = new Chocolate('Аленка', 100, 0.1, 1500);
$choco->getCount();

