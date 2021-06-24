<?php
session_start();

include('include/conn.php');

if (isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($conn, $_POST['product']);
    $cata = mysqli_real_escape_string($conn, $_POST['cata']);
    $brand = mysqli_real_escape_string($conn, $_POST['brand']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
    $delivery = mysqli_real_escape_string($conn, $_POST['delivery']);
    $total = mysqli_real_escape_string($conn, $_POST['total']);
    $date = date("y-m-d");

    $target_dir = 'productimg/';
    $target_file = $target_dir . basename($_FILES['image']['name']);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if ($_FILES['image']['size'] < 2000000 && ($imageFileType == 'jpg' || $imageFileType == 'jpeg' || $imageFileType == 'png' || $imageFileType == 'gif')) {

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
            $query = "INSERT INTO `product`(`name`, `cata`, `brand`, `quantity`, `price`, `delivery`, `total`, `image`,`date`) 
                    VALUES ('{$name}','{$cata}','{$brand}','{$quantity}','{$price}','{$delivery}','{$total}','{$target_file}','{$date}')";

            if (mysqli_query($conn, $query)) {
                $_SESSION['msg'] = 'Product added succefully';
                header('location:addproduct.php');
            } else {
                $_SESSION['msg'] = 'Failed';
                header('location:addproduct.php');
            }
        } else {
            $_SESSION['msg'] = 'Images uploaded Failed';
            header('location:addproduct.php');
        }
    } else {
        $_SESSION['msg'] = 'Image size should be less 2mb';
        header('location:addproduct.php');
    }
}



if (isset($_POST['update'])) {
    $editid = $_POST['editid'];
    $name = mysqli_real_escape_string($conn, $_POST['product']);
    $cata = mysqli_real_escape_string($conn, $_POST['cata']);
    $brand = mysqli_real_escape_string($conn, $_POST['brand']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
    $delivery = mysqli_real_escape_string($conn, $_POST['delivery']);
    $total = mysqli_real_escape_string($conn, $_POST['total']);

    $target_dir = 'productimg/';
    $target_file = $target_dir . basename($_FILES['image']['name']);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if ($_FILES['image']['size'] < 2000000 && ($imageFileType == 'jpg' || $imageFileType == 'jpeg' || $imageFileType == 'png' || $imageFileType == 'gif')) {

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
            $query = "UPDATE `product` SET `name`='{$name}',`cata`='{$cata}',`brand`='{$brand}',`quantity`='{$quantity}',`price`='{$price}',`delivery`='{$delivery}',`total`='{$total}',`image`='{$target_file}' WHERE id = '$editid' ";

            if (mysqli_query($conn, $query)) {
                $_SESSION['del'] = 'Product Updated succefully';
                header('location:allproduct.php');
            } else {
                $_SESSION['del'] = 'Failed';
                header('location:allproduct.php');
            }
        } else {
            $_SESSION['del'] = 'Images uploaded Failed';
            header('location:allproduct.php');
        }
    } else {
        $_SESSION['del'] = 'Image size should be less 2mb';
        header('location:allproduct.php');
    }
}
