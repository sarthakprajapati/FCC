<?php 
require_once './vendor/autoload.php';

header('Content-Type: application/csv');
header('Content-Disposition: attachment; filename=form1.csv');
header('Pragma: no-cache');

$database   = "form1";
$colName    = "RELEARN";
$connection = new MongoDB\Client();
$collection = $connection->$colName->$database;

$cursor     = $collection->find();
foreach($cursor as $cur)
   echo '"'.$cur['firstname'].'","'.$cur['middlename'].'","'.$cur['lastname'].'","'.$cur['address'].'","'.$cur['state'].'","'.$cur['zip'].'","'.$cur['mobile'].'","'.$cur['alternate'].'","'.$cur['email']."\"\n";
 ?>