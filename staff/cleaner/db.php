<?php
$servername='localhost';
$username='root';
 $password='';
$db='majengo_garbage';



// $servername='localhost';
// $username='root';
//  $password='';
// $db='majengo_garbage'

// $servername='localhost';
// $username='yubuntut_nur';
// $password='#Karibu2030';
// $db='yubuntut_majengo';





//create connection
$mysqli =new mysqli($servername, $username, $password,$db)or die(mysqli_error($mysqli));
// Check connection
if (!$mysqli) {
    die($mysqli->error);
   }

?>
