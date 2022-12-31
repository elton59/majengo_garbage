<?php
$servername='localhost';
$username='root';
 $password='';
$db='majengo_garbage';




//create connection
$mysqli =new mysqli($servername, $username, $password,$db)or die(mysqli_error($mysqli));
// Check connection
if (!$mysqli) {
    die($mysqli->error);
   }

?>
