<?php
  
   include('db.php');
 

   $user=$_SESSION['admin'];

   

   $sql = "select * from admin where email = '$user' ";

   $ses_sql=mysqli_query($mysqli,$sql);

   

    while($row =$ses_sql->fetch_assoc())

    {   

   $login_session = $row['email'];

   }

   if(!isset($_SESSION['admin'])){

      header("location: index.php");

      die();

   }
   

  

?>