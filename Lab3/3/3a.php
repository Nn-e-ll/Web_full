<?php

function Homecoming():void
{
    header(header: 'Location: lab3_3.php');
exit();
}


if(false === isset($_POST['email'],$_POST['category'],$_POST['title'],$_POST['description']))
{
    Homecoming();
}

$email = $_POST['email'];
$category = $_POST['category'];
$title = $_POST['title'];
$description = $_POST['description'];


$filePath = "categories/{$category}/{$title}.txt";
file_put_contents($filePath, $description);


if(false === file_put_contents($filePath, $description))
{
    throw new Exception(message:"Error!");
}
chmod($filePath, 0777);

Homecoming();
?>
