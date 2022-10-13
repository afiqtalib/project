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

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>List Employees | System</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">List Employees</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Employees</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#ID</th>
                                            <th>Name</th>
                                            <th>Phone Number</th>
                                            <th>Personal Email</th>
                                            <th>Department</th>
                                            <th>Position</th>
                                            <th>Status</th>
                                            <th>Start date</th>
                                            <th>Email Work</th>
                                            <th>Password</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#ID</th>
                                            <th>Name</th>
                                            <th>Phone Number</th>
                                            <th>Personal Email</th>
                                            <th>Department</th>
                                            <th>Position</th>
                                            <th>Status</th>
                                            <th>Start date</th>
                                            <th>Email Work</th>
                                            <th>Password</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                            $sql = "SELECT * FROM emp";
                                            // $sql2 = "SELECT 'emp_id', 'emp_name', 'emp_phonenum', 'emp_pemail', 'emp_address', 'dept_name', 'emp_position', 'emp_status', 'start_work', 'emp_email', 'emp_pass' FROM 'emp'";
                                            $result = mysqli_query($conn, $sql);
                                            $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

                                            foreach($rows as $emp)
                                            {
                                        ?>
                                        <tr>
                                            <td> <?php echo $emp['emp_id'];?> </td>
                                            <td> <?php echo $emp['emp_name'];?> </td>
                                            <td> <?php echo $emp['emp_phonenum'];?> </td>
                                            <td> <?php echo $emp['emp_pemail'];?> </td>
                                            <td> <?php echo $emp['dept_name'];?> </td>
                                            <td> <?php echo $emp['emp_position'];?> </td>
                                            <td> <?php echo $emp['emp_status'];?> </td>
                                            <td> <?php echo $emp['start_work'];?> </td>
                                            <td> <?php echo $emp['emp_email'];?> </td>
                                            <td> <?php echo $emp['emp_pass'];?> </td>                                            
                                        </tr>
                                        <?php } ?>

                                        <!-- <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                        </tr> -->
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
        </body>

</html>

<?php  
        include 'includes/footer.php';
    }
	else
    {
    	header('Location: login.php');
        exit();
    }
?>