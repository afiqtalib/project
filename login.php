<?php
	session_start();

	// IF THE USER HAS ALREADY LOGGED IN
	if(isset($_SESSION['email_system']) && isset($_SESSION['password_system']))
	{
		header('Location: index.php');
		exit();
	}
	// ELSE
	include 'db_con.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> MySystem- Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- //Extra JS FILES -->
    <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>

</head>

<!-- PHP SCRIPT WHEN SUBMIT -->

<?php

    if( $_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login']))
    {
        $email = ($_POST['email']);
        $password = ($_POST['password']);
        // $hashedPass = md5($password);

        $sql = "SELECT * FROM admin WHERE email='$email' AND password='$password' ";
        $query=mysqli_query($conn,$sql);
        $num=mysqli_fetch_array($query);

        if($num>0) {
            $_SESSION['email_system'] = $email;
            $_SESSION['password_system'] = $password;
            $_SESSION['admin_name'] = $num['admin_name'];
            // $_SESSION['admin_id'] = $num['admin_id'];
            $_SESSION['admin_id'] = $sql['admin_id'];
            header("location:index.php");
            exit();
        }
        else { ?>                    
            <div class="messages">
                <?php           
                    echo '<script type="text/javascript">sweetAlert("Incorrect email/password !"," Your login is failed","error")</script>';        
                ?>       
            </div>
        <?php
        }
    }
?>
<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <!--COLUMN IMAGE LOGIN PAGE -->
                            <div class="col-lg-6 d-none d-lg-block">
                                <img src="https://source.unsplash.com/450x555" alt="bg-login" style="background-position: center;  background-size:cover;">
                            </div>
                            <!-- COLUMN FORM LOGIN -->
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">My System!</h1>
                                    </div>
                                    <form class="user" method="POST" action="login.php" >
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="username@gmail.com">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <!-- Button Login -->
                                        <button type="submit" name="login" class="btn btn-primary btn-user btn-block">Login</button>
                                        <hr>
                                        <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a>
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

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>