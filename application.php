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
    <div class="container">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 pl-2">Employees</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-download fa-sm text-white-50"></i>
                Generate Report
            </a>
        </div>

        <div class="card o-hidden border-0 shadow-lg m-2">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary text-center">Leave Application Form</h6>
            </div>
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-lg-block">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 font-weight-bold mb-4">Employee Leave Information</h1>
                            </div>
                            
                            <!-- Balance cuti emp -->
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Cuti Sakit (MC)
                                    <span class="badge badge-primary badge-pill">14</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Cuti Tahunan (Annual Leave)
                                    <span class="badge badge-primary badge-pill">12</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Cuti Kecemasan (Emergency Leave)
                                    <span class="badge badge-primary badge-pill">2</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Cuti Tanpa Gaji
                                    <span class="badge badge-primary badge-pill">1</span>
                                </li>
                            </ul>




                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 font-weight-bold mb-4">Leave Application</h1>
                            </div>
                            
                            <!-- FORM ADD NEW SERVICE -->
                            <form class="user" method="POST">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="dept">Type of Leave</label>
                                        <select class=" form-control" name="lv_type">
                                            <option value="">Choose Type of Leave</option>
                                            <option value="Cuti sakit">Cuti Sakit(MC)</option>
                                            <option value="Cuti Tahunan">Cuti Tahunan</option>
                                            <option value="Emergency Leave">Emergency Leave</option>
                                            <option value="Tanpa Gaji">Tanpa Gaji</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="emp_age">Duration (days)</label>
                                        <input type="number" class="form-control" placeholder="" name="duration" required="true" maxlength="2" pattern="[1-9]+">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="emp_age" class="text-small">From date</label>
                                        <input type="date" class="form-control form-control" name="from_date"
                                            id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="emp_age" class="text-small">To date</label>
                                        <input type="date" class="form-control form-control" name="to_date"
                                            id="exampleRepeatPassword" placeholder="Repeat Password">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="emp_age" class="text-small">Reasons</label>
                                    <textarea class="form-control form-control" name="lv_reasons" id="" cols="30" rows="2"></textarea>
                                </div>

                                <a href="#" class="btn btn-primary btn-block">
                                    Apply
                                </a>
                                <a href="#" class="btn btn-facebook btn-block">
                                    Reset
                                </a>

                            </form>

                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
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