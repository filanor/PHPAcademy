<?php
/**
 * Created by PhpStorm.
 * User: filanor
 * Date: 2019-04-11
 * Time: 00:53
 */

$connection = new PDO('mysql:host=localhost; 
                               dbname=practice_db; 
                               charset=utf8',
    'root',
    'root'
);
$aboutData = $connection->query("SELECT * FROM about")->fetch();
//$aboutData = $aboutData->fetch();
$educationData = $connection->query("SELECT * FROM education");
$languagesData = $connection->query("SELECT * FROM languages");
$interestsData = $connection->query("SELECT * FROM interests");
$career = $connection ->query("SELECT * FROM career");
$careerData = $connection->query("SELECT * FROM aboutCareer")->fetch();
//$careerData = $careerData->fetch();
$skills = $connection->query("SELECT * FROM skills");
$projects = $connection->query("SELECT * FROM projects");


$allComments = $connection->query("SELECT * FROM comments")->fetchAll();
