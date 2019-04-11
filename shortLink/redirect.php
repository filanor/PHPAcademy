<?php
/**
 * Created by PhpStorm.
 * User: filanor
 * Date: 2019-04-11
 * Time: 21:05
 */
require_once ('dbwork.php');


// если есть GET запрос
if ($_GET['link'])
{
    $link = $_GET['link'];

    //подключаемся к БД, и получаем оригинал ссылки
    $db = new DataBase();

    // перенаправляем
    header('Location:' . $db->db_select($link));
}