<?php 
require_once('dbwork.php');
// Проверяем есть ли необходимые данные




class ShortLink
{
    public $oldLink = '';
    public $newLink = '';
    private $genRange = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';


    public function __construct($oldLink)
    {
        $this->oldLink = $oldLink;
    }

    // Функция генерирует новую ссылку
    public function generateLink()
    {
        for ($i = 0 ; $i < 7; $i++ ){
            $this->newLink .= $this->genRange[rand(0, strlen($this->genRange)-1)];
        }
        $this->linkToDb($this->oldLink, $this->newLink);
        return $_SERVER['HTTP_REFERER'] . $this->newLink;

    }

    // Функция передает ссылки в БД
    private function linkToDb($oldLink, $newLink)
    {
        $db = new DataBase();

        if ($db->linkExist($oldLink)) {
            $this->newLink = $db->linkExist($oldLink);
        }
        else{
            $db->db_insert($oldLink, $newLink);
        }
    }

}


if ($_POST['link'] && filter_var( $_POST['link'],FILTER_VALIDATE_URL)) {

    $link = new ShortLink($_POST['link']);
    echo $link->generateLink();

}
else{
    echo 'неправильный формат данных';
}