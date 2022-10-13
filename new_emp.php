<?php 
	ob_start();
    session_start();

	//Check If user is already logged in
	if(isset($_SESSION['email_system']) && isset($_SESSION['password_system']))
	{
        //Includes
        include 'db_con.php';
?>
<?php
    // include 'Includes/functions/functions.php'; 
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
        $emp_address = $_POST["emp_address"];
        $dept_name = $_POST["dept_name"];
        $emp_position = $_POST["emp_position"];
        $emp_status = $_POST["emp_status"];
        $start_work = $_POST["start_work"];
        $emp_email = $_POST["emp_email"];
        $emp_pass =$_POST["emp_pass"];

        
        // QUERY FOR ADD NEW SERVICE TO DATABASE
        $sql = "INSERT INTO emp (emp_name, emp_phonenum, emp_pemail, emp_address, dept_name, emp_position, emp_status, start_work, emp_email, emp_pass) VALUE ('$emp_name', '$emp_phonenum', '$emp_pemail', '$emp_address', '$dept_name', '$emp_position', '$emp_status', '$start_work', '$emp_email', '$emp_pass' )";
        $query=mysqli_query($conn, $sql);
        if ($query){
            echo "<script>alert('You have successfully inserted the new emp data');</script>";
            // echo "<script type='text/javascript'> document.location ='barbers.php'; </script>";
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
                <br>
                <h6 class="m-0 font-weight-bold text-danger">Admin need to add new Employee</h6>
            </div>
            <div class="card-body">
                
                <!-- FORM ADD NEW SERVICE -->
                <form method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="emp_name">Employee Name</label>
                                <input type="text" class="form-control"  placeholder="Employee Name" name="emp_name" required="true">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="emp_phonenum">Phone Number</label>
                                <input type="text" class="form-control" placeholder="0184254524" name="emp_phonenum" required="true" maxlength="11" pattern="[0-9]+">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="emp_pemail">Email</label>
                                <input type="email" class="form-control" placeholder="ali@gmail.com" name="emp_pemail" required="true">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control"  placeholder="Address" name="emp_address" required="true">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="dept">Department</label>
                                <select class="custom-select" name="dept_name">
                                    <option value="Creative & Design">Creative & Design</option>
                                    <option value="IT & Web Development">IT</option>
                                    <option value="Human Resources">Human Resources</option>
                                    <option value="Marketing">Marketing</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="position">Position</label>
                                <input type="text" class="form-control"  placeholder="Position" name="emp_position" required="true">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="custom-select" name="emp_status">
                                    <option value="Full-Time">Full-Time</option>
                                    <option value="Contract">Contract</option>
                                    <option value="Intern">Intern</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Startwork">Start Work</label>
                                <input type="date" class="form-control" placeholder="DD/MM/YYYY" name="start_work" required="true">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="emp_username">Email</label>
                                <input type="text" class="form-control" placeholder="pmsb.name" name="emp_email" required="true">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="emp_password">Password</label>
                                <input type="text" class="form-control" placeholder="Emp Password" value="12345" name="emp_pass" required="true">
                            </div>
                        </div>

                    </div>
                
                    <!-- SUBMIT BUTTON -->

                    <button type="submit" name="add_new_emp" class="btn btn-primary">Add New Employee</button>

                </form>
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