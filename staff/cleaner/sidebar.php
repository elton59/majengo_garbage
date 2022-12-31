<?php
session_start();
include("db.php");
?>
 
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
<div id="wrapper">
<div id="wrapper"> 
 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="main.php">
    <div class="sidebar-brand-icon rotate-n-15">
      
    </div>
    <div class="sidebar-brand-text mx-3">Cleaner <sup></sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="main.php">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
Services
</div>

<!-- Nav Item - Pages Collapse Menu -->


<!-- Nav Item - Pages Collapse Menu -->

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#oth"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>Service Requests <span class="btn btn-danger"><?php
        include('session.php');
          $get_user_id = $mysqli->query("SELECT * FROM cleaner where email='$user'");
          $row = $get_user_id->fetch_assoc();
          $u_id = $row['id'];
                                             $query=$mysqli->query("SELECT count(id) as total from requested_services where  subscription_status='subscribed' and assigned_employee_id='$u_id'  order by id desc") or die($mysqli->error);
                                              while($row=$query->fetch_assoc())
                                              {
                                                  $staffcount=$row["total"];
                                                  echo "$staffcount";
                                              }
                         
                                             
                                              
                                            ?></span>
    </a>
    
    <div id="oth" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
       
         <a class="collapse-item" href="view_requested_services.php">View Requests</a>

</li>   
<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>



</ul>
<!-- End of Sidebar -->
