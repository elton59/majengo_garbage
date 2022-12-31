<?php
session_start();
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
    <div class="sidebar-brand-text mx-3">Admin <sup></sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="main.php">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>
<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="main2.php">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Interactions Dashboard</span></a>
</li>


<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
User Management
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#users"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>users</span>
    </a>
    <div id="users" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
      
            <a class="collapse-item" href="view_finance.php">Finance Manager</a>
            <a class="collapse-item" href="view_service_manager.php">Service Manager</a>
            <a class="collapse-item" href="view_cleaner.php">Cleaner</a>
            <a class="collapse-item" href="view_garbage_collector.php">Garbage Collector</a>
           
            <a class="collapse-item" href="view_clients.php">clients</a>






    </div>
</li>
<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>



</ul>
<!-- End of Sidebar -->
