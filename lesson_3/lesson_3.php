<?php
/**
 * Created by PhpStorm.
 * User: filanor
 * Date: 2019-04-02
 * Time: 12:16
 */

$differences = ["POST запрос скрыт от глаз пользователя",
    "POST позволяет передавать больший объем информации",
    "POST позволяет передавать мультимедиа"];

echo "<pre>";
foreach ($differences as $item) {
    echo "<p>" . $item . "</p>";
}
echo "</pre>";
echo "<br>";
echo "<br>";
echo "<br>";
?>


<form action="">
    <input type="text" name = "name">
    <input type="text" name = "surname">
    <input type="number" name = "age">
    <input type="submit">
</form>

<?php
    echo "Привет, меня зовут ";
    if(isset($_GET['name'])){
        echo $_GET['name'] . " ";
    }
    if(isset($_GET['surname'])){
        echo $_GET['surname'] . " ";
    }
    if(isset($_GET['age'])){
        echo "мой возраст - " . $_GET['age'];
    }
?>


<form action="" method = "POST">
    <input type="text" name = "name">
    <input type="text" name = "surname">
    <input type="number" name = "age">
    <input type="submit">
</form>

<?php
echo "Привет, меня зовут ";
if(isset($_POST['name'])){
    echo $_POST['name'] . " ";
}
if(isset($_POST['surname'])){
    echo $_POST['surname'] . " ";
}
if(isset($_POST['age'])){
    echo "мой возраст - " . $_POST['age'];
}
?>



















