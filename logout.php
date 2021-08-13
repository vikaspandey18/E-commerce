<?php 
session_start();

include('include/conn.php');

session_unset();

session_destroy();

header('location:login.php');
