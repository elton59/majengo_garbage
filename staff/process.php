<?php

include("admin/db.php");


/* #############################
            Admin Portal
   #############################
*/
//Create feedback
if(isset($_POST['createfeedback']))
{
  
    $fdmessage=$_POST['fdmessage'];
    $fdreceiver=$_POST['fdreceiver'];
    $fdemail=$_POST['fdemail'];
 
  

    $result=$mysqli->query("INSERT INTO feedback(message,receiver,email) values('$fdmessage','$fdreceiver','$fdemail')")or die($mysqli->error);

    if($result)
    {
        echo
        "<script>alert('operation successfull');
        window.location.replace('admin/editfeedback.php')
        </script>
        ";
    }
    else

    echo"<script>Alert('operation Failed');
        window.location.replace('admin/editfeedback.php')
        </script>
        ";
}
//Edit feedback
if(isset($_POST['editfeedback']))
{
    $id=$_POST['id'];
    $fdreply=$_POST['fdreply'];
    $fdemail=$_POST['fdemail'];

  
   $result=$mysqli->query("UPDATE feedback SET reply='$fdreply',email='$fdemail', status='read' where id='$id'") or die($mysqli->error);

    if($result)
    {
        echo
        "<script>alert('operation sucessfully');
        window.location.replace('admin/editfeedback.php')
        </script>
        ";
    }
    else

    echo"<script>Alert('operation Failed');
        window.location.replace('admin/editfeedback.php')
        </script>
        ";


}
//delete feedback
if(isset($_GET['rfeedbackid']))
{
    $id=$_GET['rfeedbackid'];
    $result=$mysqli->query("delete from feedback where id='$id'") or die($mysqli->error);
    if($result)
    {
        echo
        "<script>alert('operation sucessfully');
        window.location.replace('admin/editfeedback.php')
        </script>
        ";
    }
    else

    echo"<script>alert('operation Failed');
        window.location.replace('admin/editfeedback.php')
        </script>
        ";
}

// admin login
if(isset($_POST['login']))
{
    session_start();
    $ademail=$_POST['ademail'];
    $adpass=$_POST['adpass'];
  
   $result=$mysqli->query("SELECT * from admin where email='$ademail' AND password='$adpass' limit 1")or die($mysqli->error);
   $row=$result->fetch_assoc();
   $_SESSION['admin']=$ademail;
	$count=mysqli_num_rows($result);
		  if($count==1)
	{
		
		echo "<script>
              alert('login success')
			  location.replace('admin/main.php');
			   </script>
             
			   ";
         
	}
	elseif($count!==1)
{
		echo "<script>alert('login Failed')
location.replace('admin/index.php');
 </script>

		 ";
	}
}

/* #############################
            cutomers Portal
   #############################
*/
// customer login
if(isset($_POST['customer_login']))
{
    session_start();
    $ademail=$_POST['ademail'];
    $adpass=$_POST['adpass'];
  
   $result=$mysqli->query("SELECT * from clients where email='$ademail' AND password='$adpass' and account_status='approved' limit 1")or die($mysqli->error);
   $row=$result->fetch_assoc();
   $_SESSION['admin']=$ademail;
	$count=mysqli_num_rows($result);
		  if($count==1)
	{
		
		echo "<script>
              alert('login success')
			  location.replace('customer/main.php');
			   </script>
             
			   ";
         
	}
	elseif($count!==1)
{
		echo "<script>alert('login Failed')
location.replace('customer/index.php');
 </script>

		 ";
	}
}

//request service

if(isset($_POST['Request_Service']))
{
    
    $service_name=$_POST['service_name'];
   
    $pickup_location=$_POST['pickup_location'];
    $client_id=$_POST['client_id'];
    $service_charge=$_POST['service_charge'];
   
    if( $client_type=$_POST['client_type'])
   
    {  
          
    if($client_type=='mattress_cleaning')
    {
     $charge=$service_charge*1;
    }
    else
    if($client_type=='carpet_cleaning')
    {
     $charge=$service_charge*1;
    }
    else
    if($client_type=='house_cleaning_service')
    {
     $charge=$service_charge*1;
    }
    else
    if($client_type=='post_construction_cleaning')
    {
     $charge=$service_charge*2;
    }
    else
    if($client_type=='event_cleaning_service')
    {
     $charge=$service_charge*3;
    }else
    if($client_type=='office_cleaning')
    {
     $charge=$service_charge*3;
    }}
  
   $result=$mysqli->query("INSERT INTO requested_services(service_name,client_id,pickup_location,client_type,total_cost) VALUES('$service_name','$client_id','$pickup_location','$client_type','$charge')") or die($mysqli->error);
 


		  if($result==1)
	{
		
		echo "<script>
              alert('request sent succesfully')
              location.replace('customer/main.php');
			   </script>
             
			   ";
         
	}
	else
{
		echo "<script>alert('Oops enrollment Failed')
location.replace('customer/main.php');
 </script>

		 ";
	}




}
//make payment

if(isset($_POST['make_payment']))
{
    

    $client_id=$_POST['client_id'];
    $request_id=$_POST['request_id'];
    $service_cost=$_POST['service_cost'];
    $transaction_id=$_POST['transaction_id'];
   
    $result2=$mysqli->query("UPDATE requested_services set subscription_status='processing_request' where id='$request_id'");
   $result=$mysqli->query("INSERT INTO payments(transaction_id,userid,amount,request_id) VALUES('$transaction_id','$client_id','$service_cost','$request_id')") or die($mysqli->error);
 


		  if($result==1)
	{
		
		echo "<script>
              alert('payment sent successfully')
			  location.replace('customer/view_payments.php');
			   </script>
             
			   ";
         
	}
	else
{
		echo "<script>alert('Oops! operation Failed')
location.replace('customer/view_payments.php');
 </script>

		 ";
	}

}

/* ################################
            Service Manager Portal
   ################################
*/

// service manager login

if(isset($_POST['service_manager_login']))
{
    session_start();
    $ademail=$_POST['ademail'];
    $adpass=$_POST['adpass'];
  
   $result=$mysqli->query("SELECT * from service_manager where email='$ademail' AND password='$adpass' and account_status='approved' limit 1")or die($mysqli->error);
   $row=$result->fetch_assoc();
   $_SESSION['admin']=$ademail;
	$count=mysqli_num_rows($result);
		  if($count==1)
	{
		
		echo "<script>
              alert('login success')
			  location.replace('service_manager/main.php');
			   </script>
             
			   ";
         
	}
	elseif($count!==1)
{
		echo "<script>alert('login Failed')
location.replace('service_manager/index.php');
 </script>

		 ";
	}
}
//enroll service
if(isset($_POST['Enroll_Service']))
{
    
    $sname=$_POST['sname'];
    $s_exdate=$_POST['s_exdate'];
    $semail=$_POST['semail'];
    $scost=$_POST['scost'];
  
   $result=$mysqli->query("INSERT INTO services(service_name,expiry_date,cost,service_manager_email) VALUES('$sname','$s_exdate','$scost','$semail')") or die($mysqli->error);
 


		  if($result==1)
	{
		
		echo "<script>
              alert('service enrolled succesfully')
			  location.replace('service_manager/view_services.php');
			   </script>
             
			   ";
         
	}
	else
{
		echo "<script>alert('Oops enrollment Failed')
location.replace('service_manager/enroll_services.php');
 </script>

		 ";
	}




}
/* #############################
            Finance Manager Portal
   #############################
*/
// finance manager login

if(isset($_POST['finance_manager_login']))
{
    session_start();
    $ademail=$_POST['ademail'];
    $adpass=$_POST['adpass'];
  
   $result=$mysqli->query("SELECT * from finance_manager where email='$ademail' AND password='$adpass' and account_status='approved' limit 1")or die($mysqli->error);
   $row=$result->fetch_assoc();
   $_SESSION['admin']=$ademail;
	$count=mysqli_num_rows($result);
		  if($count==1)
	{
		
		echo "<script>
              alert('login success')
			  location.replace('finance_manager/main.php');
			   </script>
             
			   ";
         
	}
	elseif($count!==1)
{
		echo "<script>alert('login Failed')
location.replace('finance_manager/index.php');
 </script>

		 ";
	}
}
/* #############################
            Garbage Collector Portal
   #############################
*/
// garbage  collector  login
// finance manager login

if(isset($_POST['garbage_collector_login']))
{
    session_start();
    $ademail=$_POST['ademail'];
    $adpass=$_POST['adpass'];
  
   $result=$mysqli->query("SELECT * from garbage_collectors where email='$ademail' AND password='$adpass' and account_status='approved' limit 1")or die($mysqli->error);
   $row=$result->fetch_assoc();
   $_SESSION['admin']=$ademail;
	$count=mysqli_num_rows($result);
		  if($count==1)
	{
		
		echo "<script>
              alert('login success')
			  location.replace('garbage_collector/main.php');
			   </script>
             
			   ";
         
	}
	elseif($count!==1)
{
		echo "<script>alert('login Failed')
location.replace('garbage_collector/index.php');
 </script>

		 ";
	}
}
/* #############################
  Cleaners  Portal
   #############################
*/
// cleaner  login


if(isset($_POST['cleaner_login']))
{
    session_start();
    $ademail=$_POST['ademail'];
    $adpass=$_POST['adpass'];
  
   $result=$mysqli->query("SELECT * from cleaner where email='$ademail' AND password='$adpass' and account_status='approved' limit 1")or die($mysqli->error);
   $row=$result->fetch_assoc();
   $_SESSION['admin']=$ademail;
	$count=mysqli_num_rows($result);
		  if($count==1)
	{
		
		echo "<script>
              alert('login success')
			  location.replace('cleaner/main.php');
			   </script>
             
			   ";
         
	}
	elseif($count!==1)
{
		echo "<script>alert('login Failed')
location.replace('cleaner/index.php');
 </script>

		 ";
	}
}



?>
