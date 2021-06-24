<?php
session_start();
include('include/conn.php');

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
            $_SESSION['register'] = "You Have Register Successfully";
            header('Location:login.php');
            session_unset();
        }
    } else {
        $_SESSION['register'] = "Password and Retype Password Does Not Match";
    }
}
