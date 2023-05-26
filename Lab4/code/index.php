<?php
function SuperGet(){

require __DIR__ . '/vendor/autoload.php';



$client = new Google_Client();
$client->setApplicationName('G');
$client->setScopes([Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');
$client->setAuthConfig(__DIR__ . '/credentials.json');

$service = new Google_Service_Sheets($client);

$range = 'A:D';


$spreadsheetId = '';//Здесь должен быть идентификатор

$response = $service->spreadsheets_values->get($spreadsheetId, $range);
return($response);

}
   
 
?>

<!doctype html>
<html lang = "en">
    <meta charset = "UTF-8">
    <meta name = "viewport"
    content ="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     <div id="form">
      <form action ="save.php" method= "post">
        <label for = "email">Email</label>
        <input type = "email" name = "email" required>
        <label for = "category">Category</label>


        <?php
$masq = array();
$masq[0] = 'comics';
$masq[1]='books';
$masq[2]='copybooks';
$masq[3]='notebooks';
$masq[4]='other';

 
?>
<select name = "category" required>
   


   
    <?php foreach ($masq as $s): ?>
        <option value = <?php echo $s; ?>><?php echo $s; ?></option>
    <?php endforeach; ?>




 </select>
    <label for = "title">Title</label>
  
    <input type = "text" name = "title" required>
   
    <label for = "description">Description</label>
    <textarea rows = "3" name = "description"></textarea>

    <input type = "submit" value = "Save">
      </form>

<div id = "table">
    <table>
        <thead>
        <th>Category</th>
        <th>Email</th>
            <th>Title</th>
            <th>Description</th>
</thead>


<?php  $errt =0; $ma = SuperGet();?>
<?php for($i =0; $i< count ($ma); $i++): ?>
    <?php for($j =0; $j< count ($ma[$i]); $j =$j +4): ?>
<tbody>


    <tr>
    
    
        <td><?php echo $ma[$i][$j];
        ?></td>
        <td><?php echo $ma[$i][$j+1];
        ?></td>
        <td><?php echo $ma[$i][$j+2];
        ?></td>
        <td><?php echo $ma[$i][$j+3];
        ?></td>
    <?php endfor; ?>
    <?php endfor; ?>


</tr>
</tbody>


</table>


    </div >
</body>
</html>