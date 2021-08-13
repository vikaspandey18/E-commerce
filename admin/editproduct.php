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

    <?php if ($_SESSION['del']) { ?>
        <div class="alert alert-warning alert-dismissible text-center">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h6><?php echo $_SESSION['del'] ?> <?php unset($_SESSION['del']) ?></h6>
        </div>
    <?php } ?>

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Product</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="allproduct.php" class="btn btn-danger">Back</a></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <form method="POST" action="adddetailproduct.php" enctype="multipart/form-data">
        <div class="card-body">
            <div class="row">
                <?php

                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $query = "SELECT * FROM product WHERE id='$id' ";

                    $run = mysqli_query($conn, $query);

                    if (mysqli_num_rows($run) > 0) {
                        foreach ($run as $row) { ?>
                            <input type="hidden" name="editid" value="<?php echo $row['id'] ?>">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="product" value="<?php echo $row['name'] ?>" class="form-control" placeholder="Product Name" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="cata" value="<?php echo $row['cata'] ?>" class="form-control" placeholder="Description" required>
                                </div>
                            </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <input type="text" name="brand" value="<?php echo $row['brand'] ?>" class="form-control" placeholder="Brand" required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <input type="text" name="quantity" value="<?php echo $row['quantity'] ?>" class="form-control" placeholder="Quantity" required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <input type="text" name="price" value="<?php echo $row['price'] ?>" class="form-control" placeholder="Price" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <input type="text" name="delivery" value="<?php echo $row['delivery'] ?>" class="form-control" placeholder="Delivery" required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <input type="text" name="total" value="<?php echo $row['total'] ?>" class="form-control" placeholder="Total" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-check-label" for="productImg">Upload Product Image</label><br><br>
                        <input type="file" name="image" class="form-control-file" required>
                    </div>
                </div>
            </div>

<?php }
                    } else {
                        echo '<h1>No record Found</h1>';
                        die();
                    }
                }
?>

<div class="form-group">
    <input type="submit" name="update" value="Update" class="btn btn-primary">
    <a href="editproduct.php" class="btn btn-secondary">Cancel</a>
</div>

        </div>
    </form>
</div>
<?php
include('include/footer.php');
?>