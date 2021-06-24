<?php
session_start();
include('include/conn.php');
if ($_SESSION['id'] == 0) {
    header('location:login.php');
}

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
                    <h1>Product Table</h1>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item">
                            <a href="addproduct.php" class="btn btn-primary btn-small">Add Product</a>
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
                            <h3 class="card-title">Summary Of All Product</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Brand</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Delivery Cha</th>
                                        <th>Total</th>
                                        <th>Images</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = "SELECT * FROM product";
                                    $result = mysqli_query($conn, $query);

                                    while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['cata']; ?></td>
                                            <td><?php echo $row['brand']; ?></td>
                                            <td><?php echo $row['quantity']; ?></td>
                                            <td><?php echo $row['price']; ?></td>
                                            <td><?php echo $row['delivery']; ?></td>
                                            <td><?php echo $row['total']; ?></td>
                                            <td><img src="<?php echo $row['image'] ?>" width="150px" height="100px;">
                                            </td>
                                            <td><?= $row['date']; ?></td>
                                            <td>
                                                <a href="editproduct.php?id=<?php echo $row['id']; ?>" class='btn btn-primary btn-sm'>
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="deleteproduct.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
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
<?php
include('include/footer.php');
?>