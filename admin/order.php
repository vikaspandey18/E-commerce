<?php

session_start();

if ($_SESSION['id'] == 0) {
    header('location:login.php');
}
include('include/conn.php');
include('include/header.php');
include('include/top.php');
include('include/sidebar.php');
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6">
                    <h1>Order Table</h1>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item">
                            <a href="order.php">All Order</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Summary Of All Order</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Payment Id</th>
                                        <th>Payment Request Id</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>Images</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = "SELECT * FROM orders";
                                    $result = mysqli_query($conn, $query);

                                    while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['personname']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><?php echo $row['paymentid']; ?></td>
                                            <td><?php echo $row['paymentrequest']; ?></td>
                                            <td><?php echo $row['status']; ?></td>
                                            <td><?php echo $row['date']; ?></td>
                                            <td><img src="<?php echo $row['image'] ?>" width="150px" height="100px;">
                                            </td>
                                            <td>
                                                <a href="deleteorder.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    <!-- end of while loop -->
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
</div>



<?php include('include/footer.php') ?>