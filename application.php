<?php 
	ob_start();
    session_start();

	//Check If user is already logged in
	if(isset($_SESSION['email_system']) && isset($_SESSION['password_system']) && isset($_SESSION['admin_id']) ) 
	{
        //Includes
        include 'db_con.php';
        include 'includes/header.php';

    //Extra JS FILES
    echo "<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>";
?>

<?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['apply'])) {

        $lv_type = $_POST['lv_type'];
        $from_date = $_POST['from_date'];
        $to_date = $_POST['to_date'];
        $lv_duration = $_POST['lv_duration'];
        $lv_reasons = $_POST['lv_reasons'];

        $admin = $_SESSION['admin_id'];

        
        // QUERY FOR ADD NEW EMPLOYEES TO DATABASE
        $sql = " INSERT INTO cuti (lv_type, from_date, to_date, lv_duration, lv_reasons, admin_id) VALUE ('$lv_type','$from_date','$to_date','$lv_duration','$lv_reasons', '$admin') ";
        $query=mysqli_query($conn, $sql);
        if ($query){
            echo '<script type="text/javascript">sweetAlert("Success !"," Your application is failed","success")</script>';        
        }
        else
        {
            echo '<script type="text/javascript">sweetAlert("Error !"," Your application is failed","error")</script>';        
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

        <!-- CARD LEAVE APPLICATION -->
        <div class="card o-hidden border shadow-sm m-2 mb-3">
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
                                            <option value="Cuti Kecemasan">Cuti Kecemasan</option>
                                            <option value="Tanpa Gaji">Tanpa Gaji</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="emp_age">Duration (days)</label>
                                        <input type="number" class="form-control" placeholder="" name="lv_duration">
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


                                <!-- Button Apply -->
                                <button type="submit" name="apply" class="btn btn-primary btn-block">Submit</button>

                                <button type="reset" name="reset" class="btn btn-primary btn-block">Reset</button>

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

        <!-- Collapsable Card FOR MODULE 1 video-->
        <div class="card o-hidden border shadow-sm m-2 mb-3">
            <!-- Card Header - Accordion -->
            <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                role="button" aria-expanded="true" aria-controls="collapseCardExample">
                <h5 class="m-0 font-weight-bold text-primary">Tajuk Video module 1</h5>
            </a>
            <!-- Card Content - Collapse -->
            <div class="collapse" id="collapseCardExample">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-8">
                            <!-- Nested Row within Card Body -->
                            <div class="embed-responsive embed-responsive-4by3 rounded" style="width: 100%;">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-lg-4 text-justify">
                            <!-- Nested Row within Card Body -->
                            <h1 class="h4 text-gray-900 font-weight-bold mb-4">Tajuk module 1</h1><hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>                        
                    </div>                                        
                </div>
            </div>
        </div>

        <!-- Collapsable Card FOR MODULE 2 video-->
        <div class="card o-hidden border shadow-sm m-2">
            <!-- Card Header - Accordion -->
            <a href="#collapseCard2" class="d-block card-header py-3" data-toggle="collapse"
                role="button" aria-expanded="false" aria-controls="collapseCard2">
                <h5 class="m-0 font-weight-bold text-primary">TAJUK MODULE 2</h5>
            </a>
            <!-- Card Content - Collapse -->
            <div class="collapse" id="collapseCard2">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-8">
                            <!-- Nested Row within Card Body -->
                            <div class="embed-responsive embed-responsive-4by3 rounded" style="width: 100%;">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-lg-4 text-justify">
                            <!-- Nested Row within Card Body -->
                            <h1 class="h4 text-gray-900 font-weight-bold mb-4">Tajuk module 2</h1><hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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