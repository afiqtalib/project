<?php 
	ob_start();
    session_start();

	//Check If user is already logged in
	if(isset($_SESSION['email_system']) && isset($_SESSION['password_system']) && isset($_SESSION['admin_id']))
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
        $admin_id = $_GET["admin_id"];

        $admin_name = $_POST["admin_name"];
        $admin_phone = $_POST["admin_phone"];
        $admin_email = $_POST["email"];
        $admin_pass =$_POST["password"];

        $filename = $_FILES["ad_img"]["name"];
        $tempname = $_FILES["ad_img"]["tmp_name"];
        $folder = "./uploads/admin/" . $filename;

        // QUERY FOR ADD NEW EMPLOYEES TO DATABASE
        $sql = "UPDATE admin SET admin_name='$admin_name', admin_phone='$admin_phone', email='$admin_email', password='$admin_pass', ad_img='$filename' WHERE admin_id=$admin_id";
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
</head>

<body>
    <!-- Begin Page Content -->
    <div class="container-fluid">
    
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">MY PROFILE</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-download fa-sm text-white-50"></i>
                Generate Report
            </a>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">ADMIn site</h6>
            </div>
            <div class="card-body">

                <!-- Message upload files/images -->
                <?php   if(!empty($statusMessage)) { ?>
                    <p class="text-light text-center bg-success font-weight-bold border border-info rounded-sm shadow-sm py-4"> <?php echo $statusMessage ?></p>
                <?php }  ?>
                
                <!-- FORM ADD NEW SERVICE -->
                <form method="POST" enctype="multipart/form-data">
                    <?php
                        $admin_id = $_GET["admin_id"];
                        $ret=mysqli_query($conn,"SELECT * FROM admin WHERE admin_id='$admin_id'");
                        while ($row=mysqli_fetch_array($ret)) {
                    ?>
                    <input type="hidden" value="<?php echo $row['admin_id']; ?>">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="emp_name">Employee Name</label>
                                <input type="text" value="<?php echo $row['admin_name']; ?>"class="text-dark form-control"  placeholder="Employee Name" name="admin_name">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="emp_phonenum">Phone Number</label>
                                <input type="text" value="<?php echo $row['admin_phone']; ?>" class="form-control" placeholder="0184254524" name="admin_phone" maxlength="11" pattern="[0-9]+">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="emp_pemail">Email</label>
                                <input type="email" value="<?php echo $row['email']; ?>" class="form-control" placeholder="ali@gmail.com" name="email" >
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="emp_password">Password</label>
                                <input type="text" value="<?php echo $row['password'];?>" class="form-control" placeholder="Emp Password" name="password" >
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="emp_name" class="pr-5">Upload Image</label>
                                <img src="./uploads/admin/<?php echo $row['ad_img']; ?>" class="border border-danger" width="100px" height="100px">
                                <input type="file" class="form-control my-3"  placeholder="" value="<?php echo $row['ad_img'];?>" name="ad_img">
                            </div>
                        </div> 
                    </div>
                
                    <!-- SUBMIT BUTTON -->

                    <button type="submit" name="edit_profile" class="btn btn-success" >                            
                        <i class="fa fa-plus"></i>  Edit profile
                    </button>

                    <?php } ?> 

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