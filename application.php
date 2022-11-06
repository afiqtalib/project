<?php 
	ob_start();
    session_start();

	//Check If user is already logged in
	if(isset($_SESSION['email_system']) && isset($_SESSION['password_system']))
	{
        //Includes
        include 'db_con.php';
        include 'includes/header.php';

    //Extra JS FILES
    // echo "<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>";
?>

<?php 
    $errorMessage = "error inserted";
    $successMessage = "successfully inseertt data";

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_new_emp'])) {
        $emp_name = $_POST["emp_name"];
        $emp_phonenum = $_POST["emp_phonenum"];
        $emp_pemail = $_POST["emp_pemail"];
        $emp_age = $_POST["emp_age"];
        $emp_address = $_POST["emp_address"];
        $dept_name = $_POST["dept_name"];
        $emp_position = $_POST["emp_position"];
        $emp_status = $_POST["emp_status"];
        $start_work = $_POST["start_work"];
        $emp_email = $_POST["emp_email"];
        $emp_pass =$_POST["emp_pass"];

        
        // QUERY FOR ADD NEW EMPLOYEES TO DATABASE
        $sql = "INSERT INTO emp (emp_name, emp_phonenum, emp_pemail, emp_age, emp_address, dept_name, emp_position, emp_status, start_work, emp_email, emp_pass) VALUE ('$emp_name', '$emp_phonenum', '$emp_pemail', '$emp_age', '$emp_address', '$dept_name', '$emp_position', '$emp_status', '$start_work', '$emp_email', '$emp_pass' )";
        $query=mysqli_query($conn, $sql);
        if ($query){
            echo "<script>alert('You have successfully inserted the new emp data');</script>";
            echo "<script type='text/javascript'> document.location ='emp.php'; </script>";
        }
        else
        {
          echo "<script>alert('Something Went Wrong. Please try again');</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Emp</title>
</head>

<body>
    <!-- Begin Page Content -->
    <div class="container-fluid">
    
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Employees</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-download fa-sm text-white-50"></i>
                Generate Report
            </a>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add New Employee</h6>
            </div>
            <div class="card-body">
                
                <!-- FORM ADD NEW SERVICE -->
                <form method="POST">
                    <div class="row">
                        
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="dept">Type of Leave</label>
                                <select class="custom-select" name="dept_name">
                                    <option value="">Choose Type of Leave</option>
                                    <option value="">Sakit (MC)</option>
                                    <option value="">Cuti Tahunan</option>
                                    <option value="">Emergency Leave</option>
                                    <option value="">Tanpa Gaji</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="Startwork">From Date</label>
                                <input type="date" class="form-control" placeholder="DD/MM/YYYY" name="start_work" required="true">
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="Startwork">To Date</label>
                                <input type="date" class="form-control" placeholder="DD/MM/YYYY" name="start_work" required="true">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="emp_age">Duration</label>
                                <input type="number" class="form-control" placeholder="Enter total days" name="emp_age" required="true" maxlength="2" pattern="[1-9]+">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="address">Reasons</label>
                                <input type="text" class="form-control"  placeholder="Enter Your Reason" name="emp_address" required="true" height="150px">
                            </div>
                        </div>
                    </div>
                
                    <!-- SUBMIT BUTTON -->

                    <button type="submit" name="add_new_emp" class="btn btn-success mr-2" >                            
                        <i class="fa fa-plus"></i>  New Employee
                    </button>   
                    <br><br>
                    <a href="#" class="btn btn-primary btn-user btn-block">
                        Register Account
                    </a>
                    <br><br>
                    <a href="listApp.php" class="btn btn-warning btn-md">
                        <i class="fa fa-user-alt-slash"></i> 
                        Cancel
                    </a>
                </form>

            </div>
        </div>
    </div>

        <div class="container">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                        <div class="col-lg-7">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                </div>
                                <form class="user">
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <label for="Startwork">To Date</label>
                                            <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                                placeholder="First Name">
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="Startwork">To Date</label>
                                            <input type="text" class="form-control form-control-user" id="exampleLastName"
                                                placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                            placeholder="Email Address">
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleRepeatPassword" placeholder="Repeat Password">
                                        </div>
                                    </div>
                                    <a href="login.html" class="btn btn-primary btn-user btn-block">
                                        Register Account
                                    </a>
                                    <hr>
                                    <a href="index.html" class="btn btn-google btn-user btn-block">
                                        <i class="fab fa-google fa-fw"></i> Register with Google
                                    </a>
                                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                        <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                    </a>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="login.html">Already have an account? Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>

<?php 
    //Include Footer
?>

<?php  
        include 'includes/footer.php';
}
	else
    {
    	header('Location: login.php');
        exit();
    }
?>