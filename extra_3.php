<?php
/**
 * Created by PhpStorm.
 * User: filanor
 * Date: 2019-04-07
 * Time: 21:36
 */


abstract class Alien
{
    const PRISON = "Межгалактическая тюрьма третьего Солнца";
    public static $count = 0;
    public $name;
    public $limbNum;
    public $eyeNum;
    public $skinColor;

    public function __construct($name, $limbNum, $eyeNum, $skinColor)
    {
        $this->name = $name;
        $this->skinColor = $skinColor;
        $this->eyeNum = $eyeNum;
        $this->limbNum = $limbNum;
        self::$count++;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getLimbNum()
    {
        return $this->limbNum;
    }
    public function getEyeNum()
    {
        return $this->eyeNum;
    }
    public function getSkinColor()
    {
        return $this->skinColor;
    }
    public function getPtison()
    {
        return self::PRISON;
    }
    public function getCount()
    {
        return self::$count;
    }
}

class Martian extends Alien
{
    public $slaveEarthman;
    private $number;

    public function __construct($name, $limbNum, $eyeNum, $skinColor, $slaveEarthman)
    {
        parent::__construct($name, $limbNum, $eyeNum, $skinColor);
        $this->slaveEarthman = $slaveEarthman;
        $this->number = $this->getCount();
    }

    public function getSlaves()
    {
        return $this->slaveEarthman;
    }

    public function __toString()
    {
        return "Заключенный № " . $this->number . ", кличка " . $this->getName() . " основные данные: <br> количество глаз:" . $this->getEyeNum() .
            "<br> количество конечностей: " . $this->getLimbNum() . "<br>Цвет кожи: " .$this->getSkinColor() .
            "<br>Известное кол-во рабов: " . $this->getSlaves() . "<br>Место заключения:" . Alien::PRISON . "<br><br>" ;
    }
}


$prison1 = new Martian('Закария', 3, 2, 'red', 10);

echo "Заключенный " . $prison1->getName() . " основные данные: <br> количество глаз:" . $prison1->getEyeNum() .
    "<br> количество конечностей: " . $prison1->getLimbNum() . "<br>Цвет кожи: " .$prison1->getSkinColor() .
    "<br>Известное кол-во рабов: " . $prison1->getSlaves() . "<br><br>";


$prison2 = new Martian('Грог', 10, 1, 'ptktysq', 110);
echo $prison2;

echo Alien::$count . "<br>";
