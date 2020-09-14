<?php

include("config.php");
 

$id = $_GET['id'];
$db->users->deleteOne(array('_id' => new  MongoDB\BSON\ObjectID($id)));
header("Location:index.php");
?>
