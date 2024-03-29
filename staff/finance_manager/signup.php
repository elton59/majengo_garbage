<!DOCTYPE html>
<html lang="en">
<?php
include("../admin/db.php");
?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Create Account</title>

    <!-- Custom fonts for this template-->
    <link href="../../assests/../../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                       <?php
if(isset($_POST['register_finance']))
{
    
    $password = $_POST['adpass'];
    $password2 = $_POST['adpass2'];
 
    $number = preg_match('@[0-9]@', $password);
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);
     
    if(strlen($password) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
     echo "<div class='alert alert-danger'>Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.</div>";
    } 
    else{
        if($password!==$password2) {
            echo "<div class='alert alert-danger'>Passwords do not match</div>";
    } 
    if($password!==$password2) {
        echo "<div class='alert alert-danger'>Passwords do not match</div>";
} 
    
    
    else{
    $ademail=$_POST['ademail'];
    $password = $_POST['adpass'];
    $lname=$_POST['lname'];
    $fname= $_POST['fname'];
    $uname=$_POST['uname'];
    $padress = $_POST['padress'];
    $gender = $_POST['gender'];
    $result2=$mysqli->query("INSERT INTO notification(message) values('$fname cleaner account created successfully')")or die($mysqli->error);
   $result=$mysqli->query("INSERT INTO finance_manager(firstname,lastname,username,email,adress,gender,password) values('$fname','$lname','$uname','$ademail','$padress','$gender','$password') ")or die($mysqli->error);
 
	
		  if($result==1)
	{
		
		echo "
        <script>alert('Account created successfully');
        location.replace('index.php');
         </script>
			  
			  
             
			   ";
         
	}
    else{
       
            
            echo "
            <script>alert('Registration failed');
            location.replace('index.php');
             </script>
                  
                  
                 
                   ";
             
      
    }
	

}
}}?></div>
                                        <h1 class="h4 text-gray-900 mb-4"> Create Account</h1>
                                    </div>
                                    <form class="user" method="post">
                                    <div class="form-group">
                                            <label>Firstname</label>
                                            <input type="text" name="fname" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Firstname">
                                        </div>
                                        <div class="form-group">
                                            <label>LastName</label>
                                            <input type="text" name="lname" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter LastName">
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" name="uname" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Username">
                                        </div>
                                        <div class="form-group">
                                            <label>Physical Address</label>
                                            <input type="text" name="padress" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Physical Address">
                                        </div>
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <select name="gender"  class="form-control "
                                               >
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                                <option value="other">I prefer not to say</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Email Adress</label>
                                            <input type="email"  pattern=".+@gmail\.com" name="ademail" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address">
                                        </div>
                                        <div class="form-group">
                                        <label>Password</label>
                                            <input type="password" name="adpass" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Enter New Password">
                                        </div>
                                        <div class="form-group">
                                        <label>Confirm Pasword</label>
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="confirm password"  name="adpass2">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                               
                                            </div>
                                        </div>
                                        <input type="submit" name="register_finance" class="btn btn-success btn-user btn-block" value="Register">
                                        
 
                                        <hr>
                                       
                                       
                                    </form>
                                    <hr>

                                </div>
                            </div>
                        </div>
                    </div>
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