<?php
/**
 * Created by PhpStorm.
 * User: filanor
 * Date: 2019-04-04
 * Time: 19:48
 */

// Помимо публичный свойст есть еще приватные и защищенные свойства. приватные доступны только в классе, где они объявленны
// Защищенные доступны в базовых и дочерних классах


// С помощью метки abstract можно создавать абстракные классы.
// От них можно наследоваться, но нельзя создавать элементы такого класса
// С помощью final можно создавать финальные классы, от которых нельзя наследоваться.

class Article
{
    //описываем свойства класса
    public $title;
    public $titleFontSize;
    public $articleBody;
    public $articleBodyFontSize;
    public $border;
    public $bg;

    public function __construct(string $title, string $articleBody, string $border, string $bg, $titleFontSize = 20, $articleBodyFontSize = 10)
    {
        $this->title = $title;
        $this->titleFontSize = $titleFontSize;
        $this->articleBody = $articleBody;
        $this->articleBodyFontSize = $articleBodyFontSize;
        $this->border = $border;
        $this->bg = $bg;
    }

    //создаем методы класса
    public function printArticle()
    {
        echo "<div style = 'border: {$this->border}; background: {$this->bg}; font-size: {$this->articleBodyFontSize}px'>
                <h2 style = 'font-size: {$this->titleFontSize}px'>{$this->title}</h2>
                <span>{$this->articleBody}</span>   
              </div>";
    }
}



// Создадим новые классы, наследую от класса Article с помощью команды extends
class SportArticle extends Article
{
    public $image;
    public function __construct(string $title, string $articleBody, string $border, string $bg, string $image, int $titleFontSize = 20, int $articleBodyFontSize = 10)
    {
        $this->image = $image;
        parent::__construct($title, $articleBody, $border, $bg, $titleFontSize, $articleBodyFontSize);
    }

    //В новых классах будет тотже метов, что и в родителе - printArticle. Он будет у всех с одним названием, но с разной внутренней реализацией - это и есть  полиморфизм
    public function printArticle()
    {
        echo "<div style = 'border: {$this->border}; background: {$this->bg}; font-size: {$this->articleBodyFontSize}px'>
                <h2 style = 'font-size: {$this->titleFontSize}px'>{$this->title}</h2>
                <span>{$this->articleBody}</span>   
                <img src='{$this->image}' alt='Картинка' width='100'
              </div>";
    }
}

class WearhertArticle extends Article
{
    public $temperature;
    public function __construct(string $title, string $articleBody, string $border, string $bg, $temperature, int $titleFontSize = 20, int $articleBodyFontSize = 10)
    {
        parent::__construct($title, $articleBody, $border, $bg, $titleFontSize, $articleBodyFontSize);
        $this->temperature = $temperature;
    }
    public function printArticle()
    {
        echo "<div style = 'border: {$this->border}; background: {$this->bg}; font-size: {$this->articleBodyFontSize}px'>
                <h2 style = 'font-size: {$this->titleFontSize}px'>{$this->title}</h2>
                <span>{$this->articleBody}</span>   
                <span>{$this->temperature}</span>
              </div>";
    }
}

class PoliticsArticle extends Article
{
    public $link;
    public function __construct(string $title, string $articleBody, string $border, string $bg, $linc, int $titleFontSize = 20, int $articleBodyFontSize = 10)
    {
        parent::__construct($title, $articleBody, $border, $bg, $titleFontSize, $articleBodyFontSize);
        $this->link = $linc;
    }
    public function printArticle()
    {
        echo "<div style = 'border: {$this->border}; background: {$this->bg}; font-size: {$this->articleBodyFontSize}px'>
                <h2 style = 'font-size: {$this->titleFontSize}px'>{$this->title}</h2>
                <span>{$this->articleBody}</span>   
                <a href='{$this->link}'>Ссылка</a>
              </div>";
    }
}


$sportsNews = new SportArticle('Заголовок статьи про спорт', 'lorem lorem', '3px solid red', 'white', 'сhoco.jpeg');
$weathersNews = new WearhertArticle('Заголовок статьи про погоду', 'lorem lorem', '3px solid red', 'yellow', '+20');
$politicssNews = new PoliticsArticle('Заголовок статьи про политику', 'lorem lorem', '3px solid red', 'green', 'google.com');

$sportsNews->printArticle();
$weathersNews->printArticle();
$politicssNews->printArticle();