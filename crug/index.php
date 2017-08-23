<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 24.08.2017
 * Time: 0:33
 */
echo "<h1>Hello Word</h1>";



?>

<style>
    h1{
        color: #f20000;
        font: bold 3em Arial, san-serif;
    }
    form{
        max-width: 140px;
        padding: 1%;
        display: block;
    }
    input{
        padding: 1%;
        margin: 1% 0;
    }
</style>
<form action="index.php" method="post">
    <input type="text" name="name" placeholder="Ваше имя">
    <input type="text" name="description" placeholder="Описание...">
    <input type="text" name="created_at">
    <input type="submit" value="Отправить">
</form>