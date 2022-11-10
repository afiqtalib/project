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
    error_reporting(0); 
    $statusMessage = '';
    // $targetDir = "uploads/employees/";

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['edit_profile'])) {
        $emp_id = $_GET["emp_id"];
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

        $filename = $_FILES["emp_img"]["name"];
        $tempname = $_FILES["emp_img"]["tmp_name"];
        $folder = "./uploads/employees/" . $filename;

        // QUERY FOR ADD NEW EMPLOYEES TO DATABASE
        $sql = "UPDATE emp SET emp_name='$emp_name', emp_phonenum='$emp_phonenum', emp_pemail='$emp_pemail', emp_age='$emp_age', emp_address='$emp_address', dept_name='$dept_name', emp_position='$emp_position', emp_status='$emp_status', start_work='$start_work', emp_email='$emp_email', emp_pass='$emp_pass', emp_img='$filename' WHERE emp_id='$emp_id' ";
        $query=mysqli_query($conn, $sql);
            
        // Now let's move the uploaded image into the folder: image
        if ($query && move_uploaded_file($tempname, $folder)) {
            $statusMessage = "YES upload the files/images";
            // echo "<script type='text/javascript'> document.location ='emp.php'; </script>";
        }
        else {   
            $statusMessage = "erororrorr try submit again";
            // echo "<script>alert('Something Went Wrong. Please try again');</script>";
        }
            
    }
    else {
        $statusMessage = "";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee | Data</title>
</head>

<body>
    <!-- Begin Page Content -->
    <div class="container-fluid">
    
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">EMP</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-download fa-sm text-white-50"></i>
                Generate Report
            </a>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Emp update</h6>
            </div>
            <div class="card-body">

                <!-- Message upload files/images -->
                <?php   if(!empty($statusMessage)) { ?>
                    <p class="text-light text-center bg-success font-weight-bold border border-info rounded-sm shadow-sm py-4"> <?php echo $statusMessage ?></p>
                <?php }  ?>
                
                <!-- FORM ADD NEW SERVICE -->
                <form method="POST" enctype="multipart/form-data">
                    <?php
                        $emp_id = $_GET["emp_id"];
                        $ret=mysqli_query($conn,"SELECT * FROM emp WHERE emp_id='$emp_id'");
                        while ($row=mysqli_fetch_array($ret)) {
                    ?>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="emp_name">Employee Name</label>
                                <input type="text" value="<?php echo $row['emp_name']; ?>"class="text-dark form-control"  placeholder="Employee Name" name="emp_name" required="true">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="emp_phonenum">Phone Number</label>
                                <input type="text" value="<?php echo $row['emp_phonenum']; ?>" class="form-control" placeholder="0184254524" name="emp_phonenum" required="true" maxlength="11" pattern="[0-9]+">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="emp_pemail">Email</label>
                                <input type="email" value="<?php echo $row['emp_pemail']; ?>" class="form-control" placeholder="ali@gmail.com" name="emp_pemail" required="true">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="emp_age">Age</label>
                                <input type="number" value="<?php echo $row['emp_age']; ?>" class="form-control" placeholder="Enter employee age" name="emp_age" required="true" maxlength="2" pattern="[1-9]+">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" value="<?php echo $row['emp_address']; ?>" class="form-control"  placeholder="Address" name="emp_address" required="true">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="dept">Department</label>
                                <select class="custom-select" name="dept_name">
                                    <option value="<?php echo $row['dept_name']; ?>" ><?php echo $row['dept_name']; ?></option>
                                    <option value="Creative & Design">Creative & Design</option>
                                    <option value="IT & Web Development">IT</option>
                                    <option value="Human Resources">Human Resources</option>
                                    <option value="Marketing">Marketing</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="position">Position</label>
                                <input type="text" value="<?php echo $row['emp_position']; ?>" class="form-control"  placeholder="Position" name="emp_position" required="true">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="custom-select" name="emp_status">
                                    <option value="<?php echo $row['emp_status'];?>" ><?php echo $row['emp_status']; ?></option>
                                    <option value="Full-Time">Full-Time</option>
                                    <option value="Contract">Contract</option>
                                    <option value="Intern">Intern</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="Startwork">Start Work</label>
                                <input type="date" value="<?php echo $row['start_work']; ?>" class="form-control" placeholder="DD/MM/YYYY" name="start_work" required="true">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="emp_username">Email</label>
                                <input type="text" value="<?php echo $row['emp_email']; ?>" class="form-control" placeholder="pmsb.name" name="emp_email" required="true">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="emp_password">Password</label>
                                <input type="text" value="<?php echo $row['emp_pass'];?>" class="form-control" placeholder="Emp Password" value="12345" name="emp_pass" required="true">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="emp_name" class="pr-5">Upload Image</label>
                                <img src="./uploads/employees/<?php echo $row['emp_img']; ?>" class="border border-danger" width="100px" height="100px">
                                <input type="file" class="form-control my-3"  placeholder="" value="<?php echo $row['emp_img'];?>" name="emp_img">
                            </div>
                        </div> 
                        
                        <?php } ?> 
                    </div>
                
                    <!-- SUBMIT BUTTON -->

                    <button type="submit" name="edit_profile" class="btn btn-success" >                            
                        <i class="fa fa-plus"></i>  Edit profile
                    </button>
                    <a href="emp.php" class="btn btn-warning btn-md">
                        <i class="fa fa-user-alt-slash"></i> 
                        Cancel
                    </a>

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