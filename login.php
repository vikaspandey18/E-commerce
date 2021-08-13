<?php
session_start();
include('include/conn.php');
$alert = "";


if (isset($_POST['save'])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM customer WHERE email = '$email' and password = '$password'";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['no'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['cemail'] = $row['email'];
        header("location:index.php");
    } else {
        $alert = 'Session Login Failed';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="js/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="js/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="js/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">

    <?php if ($alert) { ?>
        <div class="alert alert-warning alert-dismissible text-center">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h6><?php echo $alert ?></h6>
        </div>
    <?php } ?>
    
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="login.php">
                    <h3>Social EStore Login</h3>
                </a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Welcome</p>

                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email" name="email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" name="save" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <p class="mb-0">
                    <a href="register.php" class="text-center">Register a new membership</a>
                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="js/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="js/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="js/dist/js/adminlte.min.js"></script>
</body>

</html>