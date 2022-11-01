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
    error_reporting(0); 
    $statusMessage = '';
    $targetDir = "uploads/";

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['upload'])) {
        if (!empty($_FILES["upload_img"]["name"])) {
            $file_name = basename($_FILES["upload_img"]["name"]);
            $target_filePath = $targetDir . $file_name;
            $file_type = pathinfo($target_filePath, PATHINFO_EXTENSION);

            // Allow certain file formats
            $allow_types = array('jpg','png','jpeg','pdf');
            if(in_array($file_type, $allow_types)) {

                // upload file/img to server 
                if(move_uploaded_file($_FILES["upload_img"]["tmp_name"], $target_filePath)) {
                    $sql = "INSERT INTO image (filename) VALUES ('$file_name')";
                    $query = mysqli_query($conn, $sql);

                    if($query) {
                        $statusMessage = "The file/image " .$file_name. " has been uploaded successfully";
                    }
                    else {
                        $statusMessage = "The file/image has been uploaded failedd!!";
                    } 
                }
                else {
                    $statusMessage = "Error upload the files/images";
                }
            }
            else {
                $statusMessage = "Sorry!!! The file/image only JPG JPEG PDF PNG";
            }
        }
        else {
            $statusMessage = "Fill the form & Select a file / image to upload!";
        }

        // $filename = $_FILES["upload_img"]["name"];
        // $tempname = $_FILES["upload_img"]["tmp_name"];
        // $folder = "./uploads/" . $filename;
        
        // QUERY FOR ADD NEW SERVICE TO DATABASE
        // $sql = "INSERT INTO image (filename) VALUES ('$filename')";
        // mysqli_query($conn, $sql);

        // Now let's move the uploaded image into the folder: image
        // if (move_uploaded_file($tempname, $folder)) {
        //     $statusMessage = "The file/image has been uploaded Successfully";
        // } 
        // else {
        //     $statusMessage = "The file/image has been uploaded failedd!!";
        // }       
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
            </div>
            <div class="card-body">

                <!-- Message upload files/images -->
                <?php   if(!empty($statusMessage)) { ?>
                    <p class="text-light text-center bg-danger font-weight-bold border border-danger rounded-pill shadow-sm py-4"> <?php echo $statusMessage ?></p>
                <?php }  ?>

                <!-- FORM ADD NEW SERVICE -->
                <form method="POST" action="upload.php" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="emp_name">Image Name</label>
                                <input type="text" class="form-control"  placeholder="Enter your file name" name="img_name">
                            </div>
                        </div>                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="emp_name">Upload File/Image</label>
                                <input type="file" class="form-control"  placeholder="" name="upload_img">
                            </div>
                        </div>     
                        
                    </div>

                    <!-- <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="emp_name">File/Image has been uploaded</label>
                                    <?php
                                        $query = " SELECT * FROM image ";
                                        $result = mysqli_query($conn, $query);
                                
                                        while ($data = mysqli_fetch_assoc($result)) {
                                        ?>
                                            <br>
                                            <?php echo $data['id']; ?>
                                            <img style="width: 50%;" class="center" src="./uploads/<?php echo $data['filename']; ?>">
                                            <br><hr><br>
                                        <?php
                                        }
                                    ?>
                            </div>
                        </div> 
                    </div> -->

                    <div class="grid-container">
                        <div class="section_heading">
                            <h5 style="color: blue; ">File/Image has been uploaded</h5>
                        </div>
                        <div class="row m-3">
                            <?php
                                $sql = "SELECT * FROM image";
                                $result = mysqli_query($conn, $sql);
                                while ($data =  mysqli_fetch_assoc($result)) {
                            ?>
                                <div class="card col-3 border-info shadow-lg mr-3 mt-3 flex-flow bg-gradient-primary">
                                    <img src="./uploads/<?php echo $data['filename']; ?>" class="card-img-top rounded p-3 mx-auto d-block" alt="Team Member" style="width: 70%;">
                                    <div class="card-body text-center text-dark">
                                        <h6 class="card-title text-light"> <?php echo $data ['id'];?> </h6>
                                        <hr style="color: white;">
                                        <p class="card-text text-light"><?php echo $data ['filename'];?> </p>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>

                    <!-- SUBMIT BUTTON -->

                    <button type="submit" name="upload" class="btn btn-success" >                            
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