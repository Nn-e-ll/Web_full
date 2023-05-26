<?php


function redirectToHome():void{
    header('Location: index.php');

    exit();
}

if (false === isset($_POST['email'], $_POST['title'], $_POST['description'])){
  
    redirectToHome();
}

$category = $_POST['category'];
$title = $_POST['title'];
$desc = $_POST['description'];
$em = $_POST['email'];





require __DIR__ . '/vendor/autoload.php';



$client = new Google_Client();
$client->setApplicationName('G');
$client->setScopes([Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');
$client->setAuthConfig(__DIR__ . '/credentials.json');

$service = new Google_Service_Sheets($client);

$super =1;
$range = "A:D";
$data = [
    [
        $category,
$title ,
$desc,
$em
    ]
];

$values = new Google_Service_Sheets_ValueRange([
    'values' => $data
]);

$options = [
    'valueInputOption' => 'RAW'
];

$spreadsheetId = '';//Здесь должен быть идентификатор
$response = $service->spreadsheets_values->get($spreadsheetId, $range);
foreach($response as $v){
    $super++;
}
$range = "A{$super}:D{$super}";

$service->spreadsheets_values->update($spreadsheetId, $range, $values, $options);

$response = $service->spreadsheets_values->get($spreadsheetId, $range);

//var_dump($response->getValues());

redirectToHome();