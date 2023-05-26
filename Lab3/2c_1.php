<?php
session_start();
if (!empty($_GET)) {
    $_SESSION['array'] = $_GET;
}
?>

<form action="" method="GET">
    <label for = "name">Ваше имя</label>
        <input name="name" required><br>
    <label for = "surname">Ваша фамилия</label>
	    <input name="surname" required><br>
    <label for = "age">Ваш возраст</label>
        <input name="age" required><br>
    <label for = "city">Город проживания</label>
        <input name="city" required><br>
    <label for = "phone">Номер телефона</label>
        <input name="phone" required><br>
	<input type="submit"><br>
</form>
