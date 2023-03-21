<?php
include("sidebar.php");
include("topbar.php");
include("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Custom fonts for this template-->
    <link href="../../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

       

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a href="view_garbage_collector.php">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                               New Garbage Collectors </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php
                                            $query=$mysqli->query("SELECT  COUNT(id )  as total from garbage_collectors where account_status='pending'") or die($mysqli->error);
                                             while($row=$query->fetch_assoc())
                                             {
                                            $id=$row["total"];
                                           
                                            echo "$id";
                                             }

                                            ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        
                        <div class="col-xl-3 col-md-6 mb-4">
                        <a href="view_cleaner.php">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                               Cleaning History</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php 
                                             $query=$mysqli->query("SELECT count(id) as total from cleaner where account_status='pending'" ) or die($mysqli->error);
                                              while($row=$query->fetch_assoc())
                                              {
                                                  $staffcount=$row["total"];
                                                  echo "$staffcount";
                                              }
                         
                                             
                                              
                                            ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                                           
                           <!-- Earnings (Monthly) Card Example -->
                    

                          <!-- Earnings (Monthly) Card Example -->
                          <div class="col-xl-3 col-md-6 mb-4">
                            <a href="view_clients.php">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                New  Client</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php 
                                             $query=$mysqli->query("SELECT count(id) as total from clients where account_status='pending'") or die($mysqli->error);
                                              while($row=$query->fetch_assoc())
                                              {
                                                  $staffcount=$row["total"];
                                                  echo "$staffcount";
                                              }
                         
                                             
                                              
                                            ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <a href='view_finance.php'>
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                New finance Manager</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php 
                                             $query=$mysqli->query("SELECT count(id) as total from finance_manager where account_status='pending' order by id='desc'") or die($mysqli->error);
                                              while($row=$query->fetch_assoc())
                                              {
                                                  $staffcount=$row["total"];
                                                  echo "$staffcount";
                                              }
                         
                                             
                                              
                                            ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                                            </a>
                        </div>

                            <div class="col-xl-3 col-md-6 mb-4">
            <a href='view_service_manager'>
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                    service Manager</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php 
                                                $query=$mysqli->query("SELECT count(id) as total from service_manager where account_status='pending' order by id desc") or die($mysqli->error);
                                                while($row=$query->fetch_assoc())
                                                {
                                                    $staffcount=$row["total"];
                                                    echo "$staffcount";
                                                }
                            
                                                
                                                
                                                ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                </a>
                            </div>
                              <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <a href='view_payments.php'>
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Pending Payments</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php 
                                             $query=$mysqli->query("SELECT count(id) as total from payments where payment_status='pending' order by id='desc'") or die($mysqli->error);
                                              while($row=$query->fetch_assoc())
                                              {
                                                  $staffcount=$row["total"];
                                                  echo "$staffcount";
                                              }
                         
                                             
                                              
                                            ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                        <a href="view_cleaner.php">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                               Cleaning History</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php 
                                             $query=$mysqli->query("SELECT count(id) as total from cleaner where account_status='pending'" ) or die($mysqli->error);
                                              while($row=$query->fetch_assoc())
                                              {
                                                  $staffcount=$row["total"];
                                                  echo "$staffcount";
                                              }
                         
                                             
                                              
                                            ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                          <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <a href='task_delegation.php'>
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Task Delegation</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php 
                                             $query=$mysqli->query("SELECT count(requested_services.id) as total from requested_services  where requested_services.subscription_status='subscribed'") or die($mysqli->error);
                                              while($row=$query->fetch_assoc())
                                              {
                                                  $staffcount=$row["total"];
                                                  echo "$staffcount";
                                              }
                         
                                             
                                              
                                            ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                                            </a>
                        </div>
      <!-- Earnings (Monthly) Card Example -->
      <!-- Earnings (Monthly) Card Example -->
    </div>
    
            <!-- End of Main Content -->

           

        </div>
        <!-- End of Content Wrapper -->
 <!-- Footer -->
 <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                      
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../assets/js/sb-admin-2.min.js"></script>

    

</body>

</html>