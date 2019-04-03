<?php
/**
 * Created by PhpStorm.
 * User: filanor
 * Date: 2019-04-03
 * Time: 19:24
 */

// Создаем класс
//Если у класса есть конструктор, то параметры по умолчанию указываются в нем, а не при описывании свойств
//параметры для которых есть значения по умолчанию должны быть в конце конструктора
class Article
{
    //описываем свойства класса
    public $title;
    public $titleFontSize;
    public $articleBody;
    public $articleBodyFontSize;
    public $border;
    public $bg;

    public function __construct($title, $articleBody, $border, $bg, $titleFontSize = 20, $articleBodyFontSize = 10)
    {
        $this->title = $title;
        $this->titleFontSize = $titleFontSize;
        $this->articleBody = $articleBody;
        $this->articleBodyFontSize = $articleBodyFontSize;
        $this->border = $border;
        $this->bg = $bg;
    }

    //создаем методы класса
    public function printArticle() {
        echo "<div style = 'border: {$this->border}; background: {$this->bg}; font-size: {$this->articleBodyFontSize}px'>
                <h2 style = 'font-size: {$this->titleFontSize}px'>{$this->title}</h2>
                <span>{$this->articleBody}</span>   
              </div>";
    }

}

//$sportsNews = new Article(); // Создаем новый объект класса Article
//$sportsNews2 = new Article();
//$sportsNews3 = new Article();
//Если нет конструктора - так присваиваем свойства
//$sportsNews2->title = "Новость про футбол";
//$sportsNews->bg = 'red';
//$sportsNews2->bg = 'blue';
//$sportsNews->printArticle(); // вызываем метод объекта
//$sportsNews2->printArticle(); // вызываем метод объекта
//$sportsNews3->printArticle(); // вызываем метод объекта

//$test = new Article('Спортивная новость', 20, 'lorem lorem',
 //   14, '2px solid red', yellow);

//$test->printArticle();

$test2 = new Article('Заголовок', 'lorem222', '2px solid green', 'green');
$test2->printArticle();