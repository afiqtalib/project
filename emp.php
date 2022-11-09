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
                            <!-- ADD NEW SERVICE BUTTON -->
                            <a href="new_emp.php" class="btn btn-success btn-md" style="margin-bottom: 10px;">
                                <i class="fa fa-user-plus"></i> 
                                Add New Emp
                            </a>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>#ID</th>
                                            <th>Name</th>
                                            <th>Phone Number</th>
                                            <th>Personal Email</th>
                                            <th>Age</th>
                                            <th>Department</th>
                                            <th>Position</th>
                                            <th>Status</th>
                                            <th>Start date</th>
                                            <th>Email Work</th>
                                            <th>Password</th>
                                            <th>Profile Img</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>#ID</th>
                                            <th>Name</th>
                                            <th>Phone Number</th>
                                            <th>Personal Email</th>
                                            <th>Age</th>
                                            <th>Department</th>
                                            <th>Position</th>
                                            <th>Status</th>
                                            <th>Start date</th>
                                            <th>Email Work</th>
                                            <th>Password</th>
                                            <th>Profile Img</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                            $sql = "SELECT * FROM emp";
                                            $result = mysqli_query($conn, $sql);
                                            $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
                                            $count=1;
                                            foreach($rows as $emp)
                                            {
                                        ?>
                                        <tr>
                                            <td> <?php echo $count++;?> </td>
                                            <td> <?php echo $emp['emp_id'];?> </td>
                                            <td> <?php echo $emp['emp_name'];?> </td>
                                            <td> <?php echo $emp['emp_phonenum'];?> </td>
                                            <td> <?php echo $emp['emp_pemail'];?> </td>
                                            <td> <?php echo $emp['emp_age'];?> </td>
                                            <td> <?php echo $emp['dept_name'];?> </td>
                                            <td> <?php echo $emp['emp_position'];?> </td>
                                            <td> <?php echo $emp['emp_status'];?> </td>
                                            <td> <?php echo $emp['start_work'];?> </td>
                                            <td> <?php echo $emp['emp_email'];?> </td>
                                            <td> <?php echo $emp['emp_pass'];?> </td>
                                            <td class="justify-content-center"> <img src="./uploads/employees/<?php echo $emp['emp_img']; ?>" width="100px"> </td>     
                                            <td>
                                                <li class="list-inline-item"  data-toggle="tooltip" title="Edit profile">
                                                    <button class="btn btn-success btn-sm rounded-10" type="button" data-toggle="modal" data-target="#" data-placement="top">
                                                        <a href="profile.php?emp_id=<?php echo $emp['emp_id']; ?> " style="color: white;">
                                                            <i class="fas 	fa-user-edit fa-lg "></i>
                                                        </a>
                                                    </button>
                                                </li>
                                            </td>                                         
                                        </tr>
                                        <?php } ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Page filter table -->
            <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
            <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
            
            <!-- Page filter table -->
            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/fixedheader/3.2.3/js/dataTables.fixedHeader.min.js"></script>

            <script>
                $(document).ready(function () {
                    // Setup - add a text input to each footer cell
                    $('#dataTable thead tr')
                        .clone(true)
                        .addClass('filters')
                        .appendTo('#dataTable thead');
                
                    var table = $('#dataTable').DataTable({
                        lengthChange: false,
                        dom: 'Bfrtip',
                        buttons: [
                            'copy', 'csv', 'excel', 'pdf', 'print'
                        ], 
                        orderCellsTop: true,
                        fixedHeader: true,
                        initComplete: function () {
                            var api = this.api();
                
                            // For each column
                            api
                                .columns()
                                .eq(0)
                                .each(function (colIdx) {
                                    // Set the header cell to contain the input element
                                    var cell = $('.filters th').eq(
                                        $(api.column(colIdx).header()).index()
                                    );
                                    var title = $(cell).text();
                                    $(cell).html('<input type="text" placeholder="' + title + '" />');
                
                                    // On every keypress in this input
                                    $(
                                        'input',
                                        $('.filters th').eq($(api.column(colIdx).header()).index())
                                    )
                                        .off('keyup change')
                                        .on('change', function (e) {
                                            // Get the search value
                                            $(this).attr('title', $(this).val());
                                            var regexr = '({search})'; //$(this).parents('th').find('select').val();
                
                                            var cursorPosition = this.selectionStart;
                                            // Search the column for that value
                                            api
                                                .column(colIdx)
                                                .search(
                                                    this.value != ''
                                                        ? regexr.replace('{search}', '(((' + this.value + ')))')
                                                        : '',
                                                    this.value != '',
                                                    this.value == ''
                                                )
                                                .draw();
                                        })
                                        .on('keyup', function (e) {
                                            e.stopPropagation();
                
                                            $(this).trigger('change');
                                            $(this)
                                                .focus()[0]
                                                .setSelectionRange(cursorPosition, cursorPosition);
                                        });
                                });
                        },
                    });
                });
            </script>
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