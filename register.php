<?php
session_start();
include('include/conn.php');
$alert = "";
if (isset($_POST['register'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirmpassword = mysqli_real_escape_string($conn, $_POST['confirmpassword']);
    $date = date('y-m-d');

    if ($password == $confirmpassword) {

        $query = "INSERT INTO `customer`(`name`, `email`, `password`, `confirmpassword`, `date`)
         VALUES ('{$name}','{$email}','{$password}','{$confirmpassword}','$date')";

        $query_run = mysqli_query($conn, $query);

        if ($query_run) {
            $alert = "You Have Register Successfully Kindly Login";
            header('Location:register.php');
            ;
        }
    } else {
       $alert = "Password and Retype Password Does Not Match";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Social EStore | Registration Page</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="js/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="js/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="js/dist/css/adminlte.min.css">
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="register.php"><b>Social EStore</b></a>
        </div>
    </div>
    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Register a new membership</p>

            <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="name" placeholder="Full name" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="confirmpassword" placeholder="Retype password" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-7">
                        <div class="icheck-primary">
                            <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                            <label for="agreeTerms">
                                I agree to the <a href="#">terms</a>
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-5">
                        <button type="submit" name="register" class="btn btn-primary btn-block">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <a href="login.php" class="text-center">I already have a membership</a>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery -->
    <script src="js/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="js/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="js/dist/js/adminlte.min.js"></script>
</body>

</html>