<?php
/**
 * Created by PhpStorm.
 * User: filanor
 * Date: 2019-04-02
 * Time: 17:58
 */

require_once ('header.php');
?>

<h2>Рассматриваем $_REQUEST</h2>

<?php
// глбальная переменная request - может содержать в себе и GET и POST и Cookie
echo "<pre>";
var_dump($_REQUEST);
echo "</pre>"

?>

    <form action="" method = "post">
        <input type="text" name = "username">
        <input type="submit">
    </form>








    <h2> Даты и время</h2>
    <pre>
<?php
echo "
echo time(); // количесво секунд с 1970
echo date('a'); // необходимы параметры
// Параметры date()
// 'a' 'A' - выведется pm/am
echo date('h:i:s A');
echo date('D l');
echo date('y Y');// гож
echo date('r');// гож
";
?>
</pre>

<p>Минусы: короткий урок</p>

<?php
require_once ('footer.php');