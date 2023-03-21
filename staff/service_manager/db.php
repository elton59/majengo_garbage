<?php
$servername='localhost'; $username='yubuntu1_nur'; $password='#Karibu2030'; $db='yubuntu_majengo';









//create connection
$mysqli =new mysqli($servername, $username, $password,$db)or die(mysqli_error($mysqli));
// Check connection
if (!$mysqli) {
    die($mysqli->error);
   }

?>
