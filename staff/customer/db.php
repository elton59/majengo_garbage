<?php
$servername='localhost'; 
$username='root';
$password='';
$db='majengo_garbage';







// $servername='localhost';
// $username='yubuntut1_nur';
// $password='#Karibu2030';
// $db='yubuntut_majengo';


// $servername='localhost';
// $username='root';
//  $password='';
// $db='majengo_garbage';





//create connection
$mysqli = new mysqli($servername, $username, $password, $db) or die(mysqli_error($mysqli));
// Check connection
if (!$mysqli) {
    die($mysqli->error);
}
