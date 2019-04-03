<?php

// Get и POST
//Методы, передающие на сервер инфу, введенную пользователем
// POST - скрыт от глаз
// GET - не более 8 кб

//echo "<pre>";
//var_dump($_GET);
//echo "</pre>";
// При такой отправке в адресной строке будет виден запрос: ?text=значение

?>


<?php
//if(isset($_GET['text'])) {
//    //isset - определяет, установлена ли переменная.
//    echo 'Привет';
//    die(); // Прерывает дальнейшее выполнение
//}
?>



<?php
// Для отправки методом POST необходимо в форма промисать method = "post",
// так как по умолчению отправка идет через GET
?>


<!--
<form action="">
    <input type="text" name = "text">
    <input type="text" name = "text2">
    <input type="submit">
</form>
-->


<!--
<h2>Рассмартриваем POST</h2>

<form action="content.php" method = "post">
    <input type="text" name = "username">
    <input type="submit">
</form>
-->

<!--
<h2>Рассматриваем $_REQUEST</h2>

<form action="" method = "post">
    <input type="text" name = "username">
    <input type="submit">
</form>
<?php
    // глбальная переменная request - может содержать в себе и GET и POST и Cookie
    echo "<pre>";
    var_dump($_REQUEST);
    echo "</pre>";
?>
-->




<h2> Даты и время</h2>
<?php
echo time(); // количесво секунд с 1970
//echo microtime(); //
echo date("a"); // необходимы параметры
// Параметры date()
// 'a' 'A' - выведется pm/am
echo date('h:i:s A');
echo date('D l');
echo date('y Y');// гож
echo date('r');// гож
?>












