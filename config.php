<?php
require 'vendor/autoload.php';

$connection = new MongoDB\Client;
 
$db = $connection->test;
?>
