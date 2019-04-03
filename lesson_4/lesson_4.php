<style>
    div:after{clear:both; content: ''; display:block}
</style>

<?php
/**
 * Created by PhpStorm.
 * User: filanor
 * Date: 2019-04-03
 * Time: 19:59
 */
error_reporting(E_ALL & ~E_NOTICE);

class Product
{
    public $item;
    public $price;
    public $weight;

    public function __construct($item, $price, $weight)
    {
        $this->item = gettype($item) == 'string' ? $item : 'неверный формат';
        $this->price = (gettype($price) == 'integer'|| gettype($price) == 'double') ? $price : 0;

        $this->weight = (gettype($weight) == 'integer' || gettype($weight) == 'double') ? $weight : 0;
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


$apple = new Product('Яблоко', 100, 1);
$fish = new Product('Рыба', 500, 0.5);
$tomato = new Product(1, '300р', '1кг');

$apple->printProduct();
$fish->printProductNDS();
$tomato->printProduct();