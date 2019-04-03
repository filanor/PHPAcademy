<?php
    $date = explode('.', $_GET['date']);
    $date = mktime(0,0,0, $date[1], $date[0], $date[2]);

    if(isset($date)){
        echo "Вам " . floor( (time() - $date) / (60*60*24*365) ). "<br>";
    }
?>

<form action="">
    <input type="text" name = "date">
    <input type="submit">
</form>
