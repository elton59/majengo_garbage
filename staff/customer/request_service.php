<?php
include("sidebar.php");
include("topbar.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Request For Service</title>

    <!-- Custom fonts for this template -->
    <link href="../../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../../assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

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
                    <h1 class="h3 mb-2 text-gray-800"></h1>
                    <div class="invinsible">
                        <p class="mb-4 invisible" type="hidden">DataTables is a third party plugin that is used to generate the demo table below.
                            For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>
                    </div>
                    <!-- DataTales Example -->
                    <?php 
$result=$mysqli->query("select * from services where service_name='garbage_collection'")or die($mysqli->error);

while( $row=$result->fetch_array())
{

    $service_name=$row['service_name'];
    $expiry_date=$row['expiry_date'];
    $service_cost=$row['cost'];


   
}
$result2=$mysqli->query("select * from clients where email='$user'")or die($mysqli->error);


while( $row2=$result2->fetch_assoc())
{
    $client_id=$row2['id'];   
}

?> 
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Service Requestor</h6>
                        </div>
                        
                        <div class="card-body">
                            <p><u>Charges</u></p>
                            <hr/>
                            <p>Post construction Collecton:@ ksh 2000</p>
                            <p>event Garbage Collection:@ ksh3000</p>
                            <p>Office Garbage_collection: @ ksh 3000</p>                         
                            <p>House Garbage Collection:@ ksh 1000</p>
                            <hr/>
                            <div class="table-responsive">
                                <form method="POST" action="../process.php">
                                    <label>Service Name</label>
                                     
                                    <div class="form-group">
                                        <input  class="form-control" type="text" placeholder="service Name" value="<?php echo $service_name?>" name="service_name" required readonly>
                                      
                                        </select>
                                    </div>
   
</div>

                                   
<div class="form-group">
    <input class="form-control" type="hidden" name="service_charge" placeholder="input service cost" value="<?php echo $service_cost?>" required readonly />
</div>
                                   
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" name="client_id" placeholder="email" value="<?php echo $client_id ?>" required readonly />
                                    </div>
                                    <label>Client Type</label>

<div class="form-group">
    <select class="form-control" name="client_type" required>
        <option value="office_cleaning">Office Garbage Collection</option>
        <option value="house_cleaning_service">House Garbage Collection</option>
        <option value="post_construction_cleaning">Post Construction Garbage Collection</option>
        <option value="event_cleaning_service">Event Garbage Collection</option>
    </select>
</div>
<label> Location</label>

<div class="form-group">
<input class="form-control" value=""  name="pickup_location"
/>
</div>

                                    <div class="form-group">
                                        <input class="from control btn btn-info" type="submit" value="Request Service" name="Request_Service" />



                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">

                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../../assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../../assets/js/demo/datatables-demo.js"></script>

</body>

</html>