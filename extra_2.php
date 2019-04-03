<style>div{content: ''}</style>
<?php
/**
 * Created by PhpStorm.
 * User: filanor
 * Date: 2019-04-03
 * Time: 22:46
 */
date_default_timezone_set('Europe/Moscow');

class Rectangle
{
    public $height;
    public $width;
    public $color;
    private $hour;
    private $minute;
    private $second;
    private $year;
    private $dayOfMonth;

    public function __construct($hours, $minutes)
    {
        $this->minute = (int)date('i');
        $this->hour = (int)date('G');
        $this->second = intval(date('s'));
        $this->year = (int)date('Y');
        $this->dayOfMonth = (int)date('j');

        if ($this->minute % 3 == 0)
        {
            $this->width = $this->hour * 20;
            $this->color = 'red';
            $this->height = $this->dayOfMonth ** 3;
        }
        else if($this->minute % 2 == 0 && $this->minute % 3 != 0)
        {
            $this->width = round(sqrt($this->year)) * 5;
            $this->color = 'yellow';
            $this->height = $this->width;
        }
        else
        {
            $this->width = $this->minute * $this->second;
            $this->color = 'green';
            $this->height = $this->hour ** 2;
        }

    }

    public function printRectangle()
    {
        echo "
            <div style = 'width: 600px;height: 300px; border: 1px solid #e6e6e6; margin: 50px auto'>
                <span style='display: block; width: 100%;font-size:17px;text-align: center;font-weight: bold; line-height: 25px;'>
                Время создания: {$this->hour}:{$this->minute}:{$this->second}, {$this->year} год, 
                {$this->dayOfMonth} День месяца</span>
                
                <div style = 'width: {$this->width}px; height: {$this->height}px; background: {$this->color};margin: 30px auto;'></div>
            </div> 
        ";
    }
}

echo date('G i s');
$obj = new Rectangle(date('G'), date('i') );
$obj->printRectangle();