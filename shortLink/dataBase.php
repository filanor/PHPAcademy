<?php

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
        $this->db = new PDO('mysql:host=localhost; 
                               dbname=shortLink; 
                               charset=utf8', $this->db_login, $this->db_password);

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
        //проверяем наличие таблицы
        if(!$this->ifExist($this->db)){
            // создаем таблицу, если ее нет
            $this->db->query("CREATE TABLE links (id INT AUTO_INCREMENT PRIMARY KEY,
                                                      oldLink VARCHAR(200) NOT NULL,
                                                      newLink VARCHAR(10) NOT NULL)");
        }


        $this->db->query("INSERT INTO links (oldLink, newLink) VALUES ('{$oldLink}', '{$newLink}')");
    }

    //Получает данные из ДБ
    public function db_select($link)
    {
        return $this->db->query("SELECT oldLink FROM shortLink WHERE newLink = '{$link}'");
    }

}

?>