<?php
session_start();
if (!empty($_SESSION)) {
    echo 'Имя пользователя: ',$_SESSION['name'], "<br>";
    echo 'Фамилия пользователя: ',$_SESSION['surname'], "<br>";
    echo 'Возраст пользователя: ',$_SESSION['age'], "<br>";
}
?>
