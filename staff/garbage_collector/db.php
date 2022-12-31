<?php

;
//  $servername='localhost';
//  $username='id19663311_majengo';
//  $password='r$yhnq#x)2]h\LJ$';
//  $db='majengo_garbage';
 $servername='localhost';
 $username='yubuntut_nur';
 $password='#Karibu2030';
$db='yubuntut_majengo';
// ;





//create connection
$mysqli =new mysqli($servername, $username, $password,$db)or die(mysqli_error($mysqli));
// Check connection
if (!$mysqli) {
    die($mysqli->error);
   }

?>
