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
    echo "<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>";
?>

<?php 

    $errorMessage = "error inserted";
    $successMessage = "successfully inseertt data";

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_new_barber'])) {
        $barber_name = $_POST["barber_name"];
        $barber_phonenum = $_POST["barber_phonenum"];
        $barber_email = $_POST["barber_email"];
        $barber_un =$_POST["barber_un"];
        $barber_password =$_POST["barber_password"];

        
        // QUERY FOR ADD NEW SERVICE TO DATABASE
        $query=mysqli_query($conn, "INSERT INTO barbers (barber_name, barber_phonenum, barber_email, barber_un, barber_password) VALUE ('$barber_name', '$barber_phonenum', '$barber_email', '$barber_un', '$barber_password')");
        if ($query){
            echo "<script>alert('You have successfully inserted the new barber data');</script>";
            echo "<script type='text/javascript'> document.location ='barbers.php'; </script>";
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
                                <input type="text" class="form-control"  placeholder="Barber Name" name="emp_name" required="true">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="emp_phonenum">Phone Number</label>
                                <input type="text" class="form-control" placeholder="0184254524" name="emp_phonenum" required="true" maxlength="10" pattern="[0-9]+">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="emp_email">Email</label>
                                <input type="email" class="form-control" placeholder="ali@gmail.com" name="emp_email" required="true">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="dept">Department</label>
                                <select class="custom-select" name="dept_name">
                                    <option value="available">Creative & Design</option>
                                    <option value="unavailable">IT</option>
                                    <option value="unavailable">Human Recourses</option>
                                    <option value="unavailable">Marketing</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="position">Position</label>
                                <input type="text" class="form-control"  placeholder="Position" name="position" required="true">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Startwork">Start Work</label>
                                <input type="date" class="form-control" placeholder="ali@gmail.com" name="start_work" required="true">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="status">Status</label>
                                <input type="radio" class="form-control" value="TEST" name="status" required="true">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="emp_username">Username</label>
                                <input type="text" class="form-control" placeholder="pmsb.name" name="emp_username" required="true">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="emp_password">Password</label>
                                <input type="text" class="form-control" placeholder="Emp Password" value="12345" name="emp_password" required="true">
                            </div>
                        </div>

                    </div>
                
                    <!-- SUBMIT BUTTON -->

                    <button type="submit" name="add_new_barber" class="btn btn-primary">Add Barber</button>

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