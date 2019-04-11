<?php
/**
 * Created by PhpStorm.
 * User: filanor
 * Date: 2019-04-11
 * Time: 22:26
 */

// Класс, отвечающий за работу с базой данных

class DataBase
{
    private $db_login = 'root';
    private $db_password = 'root';
    private $db_host= 'localhost:8889';
    private $db_name = 'shortLink';
    private $db;

    public function __construct()
    {

        $this->db = new PDO("mysql:host=localhost; 
                               dbname={$this->db_name}; 
                               charset=utf8", $this->db_login, $this->db_password);
        //проверяем, сеществует ли таблица
        if(!$this->ifExist($this->db)){
            $this->db->query("CREATE TABLE links (id INT AUTO_INCREMENT PRIMARY KEY,
                                                      oldLink VARCHAR(200) NOT NULL,
                                                      newLink VARCHAR(10) NOT NULL)");
        }
    }

    // Приватная функция, проверяет, существует ли таблица
    private function ifExist()
    {
        try {
            $result = $this->db->query("SELECT 1 FROM links LIMIT 1");
        } catch (Exception $e) {
            return FALSE;
        }
        return $result !== FALSE;
    }

    // Добавляет в БД ссылки
    public function db_insert($oldLink, $newLink)
    {
        $this->db->query("INSERT INTO links (oldLink, newLink) VALUES ('{$oldLink}', '{$newLink}')");
    }

    // Функция Получает данные из ДБ
    public function db_select($link)
    {
        $rez =  $this->db->query("SELECT * FROM links WHERE newLink = '{$link}'")->fetch();
        return $rez['oldLink'];

    }

    // Функция проверяет, есть ли уже ссылка в БД
    public function linkExist($link)
    {
        $rez = $this->db->query("SELECT * FROM links WHERE oldLink = '{$link}'")->fetch();
        return $rez['newLink'];
    }

}
