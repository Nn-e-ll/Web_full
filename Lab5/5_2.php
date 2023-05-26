<?php
require_once __DIR__ . '/connect-database.php';

function goToHome():void{
    header(header: 'Location: 5_1.php');
    exit();
}

if(false === isset($_POST["email"],$_POST["category"],$_POST["title"],$_POST["description"])){
    goToHome();
}

$email = $_POST['email'];
$title = $_POST['title'];
$description = $_POST['description'];
$category = $_POST['category'];

//$connection = getDBConnection();
$connection = new mysqli("localhost", "login", "password", "web");
if(mysqli_connect_errno())
{
    printf("Подключение к серверу MySQL невозможно. Код ошибки: %s\n", mysqli_connect_error());
    exit;
}

$connection->query("INSERT INTO ad (email, title, description, category) VALUES ('$email', '$title', '$description', '$category')");
$connection->close();
goToHome();
?>