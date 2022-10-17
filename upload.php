<?php 
	ob_start();
    session_start();

	//Check If user is already logged in
	if(isset($_SESSION['email_system']) && isset($_SESSION['password_system']))
	{
        //Includes
        include 'db_con.php';
        include 'includes/header.php';
?>

<?php 
    $errorMessage = "error inserted";
    $successMessage = "successfully inseertt data";

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['upload_file'])) {
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
            echo "<script>alert('You have successfully uploaded the new file');</script>";
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
    <title>Upload Files | System</title>
</head>

<body>
    <!-- Begin Page Content -->
    <div class="container-fluid">
    
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Files</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-download fa-sm text-white-50"></i>
                Generate Report
            </a>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add New Files</h6>
                <br>
                <hr>
            </div>
            <div class="card-body">
                
                <!-- FORM ADD NEW SERVICE -->
                <form method="POST" action="upload.php" enctype="multipart">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="emp_name">File Name</label>
                                <input type="text" class="form-control"  placeholder="Enter your file name" name="file_name" required="true">
                            </div>
                        </div>                        
                    
                        
                    </div>
            
                    <!-- SUBMIT BUTTON -->

                    <button type="submit" name="upload_file" class="btn btn-success" >                            
                        <i class="fa fa-plus"></i>  Upload File
                    </button>

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