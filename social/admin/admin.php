<?php

session_start();

if ($_SESSION['id'] == 0) {
    header('location:login.php');
}
include('include/conn.php');
include('include/header.php');
include('include/top.php');
include('include/sidebar.php');

$alert = "";

if (isset($_POST['delete'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM admin WHERE id = '$id'";
    $sql_run = mysqli_query($conn, $sql);

    if ($sql_run) {
        $alert = "Data has been deleted";
    } else {
        $alert = "Failed to delete";
    }
}
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Admin Detail</h1>
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
                            <h3 class="card-title">Admin</h3>
                            <?php if ($alert) { ?>
                                <div class="alert alert-warning alert-dismissible text-center">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <h6><?php echo $alert ?></h6>
                                </div>
                            <?php } ?>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = "SELECT * FROM admin";
                                    $result = mysqli_query($conn, $query);

                                    while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['username']; ?></td>
                                            <td><?php echo $row['password']; ?></td>
                                            <td>
                                                <form action="" method="POST">
                                                    <input type="hidden" value="<?= $row['id']; ?>">
                                                    <button type="submit" name="delete" onclick="alert('Do you want to delete')" class="btn btn-danger">Delete</button>
                                                </form>
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