<?php
include ('db.php');

// admin login
if(isset($_POST['login']))
{

    $ademail=$_POST['ademail'];
    $adpass=$_POST['adpass'];
  
   $result=$mysqli->query("SELECT * from admin where email='$ademail' AND password='$adpass' limit 1")or die($mysqli->error);
   $row=$result->fetch_assoc();
 
	$count=mysqli_num_rows($result);
		  if($count==1)
	{
		
		echo "<script>
              alert('login success');
			  window.location.replace('admin/main.php');
			   </script>
               <p>wassuh</p>
			   ";
	}
	elseif($count!==1)
{
		echo 
		 "<script>alert('login Failed');
         window.location.replace('admin/index.php');
 </script>

		 ";
	
	}
}
?>