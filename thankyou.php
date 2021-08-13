<?php
session_start();
include('include/conn.php');
if ($_SESSION['no'] == 0) {
  header('location:login.php');
}
include('include/header.php');
include('include/top.php');

$paymentid = $_GET['payment_id'];
$payment_request = $_GET['payment_request_id'];
// [payment_status] => Credit;
$status = $_GET['payment_status'];
$personname = $_SESSION['name'];
$cemail = $_SESSION['cemail'];
$date = date("Y-m-d");

if ($status == "Credit") {

    $sql = "INSERT INTO `orders`(`personname`, `email`, `paymentid`, `paymentrequest`, `status`, `date`) VALUES ('{$personname}','{$cemail}','{$paymentid}','{$payment_request}','{$status}','$date')";
    $sql_run = mysqli_query($conn,$sql);

}else{
  echo 'Transaction Failed';
}

?>

    <h3 class="text-center p-4">Payment Details</h3>
        <div class="container w-50">
          <div class="table-responsive">
            <table class="table table-bordered table-hover">
              <tr>
                <th>Name</th>
                <th><?= $personname; ?></th>
              </tr>
              <tr>
                <th>Email</th>
                <td><?= $cemail; ?></td>
              </tr>
              <tr>
                <th>Payment Id</th>
                <td><?= $paymentid; ?></td>
              </tr>
              <tr>
                <th>Payment Request</th>
                <td><?= $payment_request ;?></td>
              </tr>
              <tr>
                <th>Payment Status</th>
                <td><?= $status ;?></td>
              </tr>
            </table>
            
          </div>
          
        </div>

