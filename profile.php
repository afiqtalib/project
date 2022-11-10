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
        <!-- Breadcrum -->
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb" class="bg-light rounded-3 mb-4">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">Profile</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo $_SESSION['admin_name'];?></li>
                </ol>
                </nav>
            </div>
        </div>
            <?php
                $user = $_SESSION['email_system'];
                $sql = "SELECT * FROM admin WHERE email='$user'";
                $result = mysqli_query($conn, $sql);
                $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
                
                foreach($rows as $admin) {        
            ?>
            <!-- PROFILE IMAGES -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <!-- https://source.unsplash.com/featured?technology/200x200 -->
                            <img src="./uploads/admin/<?php echo $admin['ad_img']; ?>" alt="avatar"
                            class="rounded img-fluid" style="width: 350px;">
                            <h5 class="my-3">#ID : <?php echo $admin['admin_id']; ?></h5>
                            <p class="text-muted mb-4">Admin of Employee Self System(ESS)</p>
                            <div class="d-flex justify-content-center mb-2">
                                <!-- <button type="button" class="btn btn-primary mr-3">Follow</button> -->
                                <!-- <button type="button" class="btn btn-outline-primary ms-1">Update</button> -->
                                <a href="profile-edit.php?admin_id=<?php echo $admin['admin_id']; ?> " class="btn btn-outline-primary ms-1">Update</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- PROFILE INFORMATION -->
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Full Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo $admin['admin_name'];?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo $admin['email']; ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Phone</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo $admin['admin_phone']; ?></p>
                                </div>
                            </div>
                            <hr>
                            
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Password</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo $admin['password']; }?></p>
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