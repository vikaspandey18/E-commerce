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
    <section class="content-header">
        <div class="container-fluid">
            <?php if ($_SESSION['msg']) { ?>
                <div class="alert alert-warning alert-dismissible text-center">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h6><?php echo $_SESSION['msg'] ?></h6>
                </div>
            <?php } ?>
            <div class="row mb-2">
                <div class="col-6">
                    <h1>Add Product</h1>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item">
                            <a href="allproduct.php" class="btn btn-secondary">All Product</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <form method="POST" action="adddetailproduct.php" enctype="multipart/form-data">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <input type="text" name="product" class="form-control" placeholder="Product Name" required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <input type="text" name="cata" class="form-control" placeholder="Description" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <input type="text" name="brand" class="form-control" placeholder="Brand" required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <input type="text" name="quantity" class="form-control" placeholder="Quantity" required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <input type="text" name="price" class="form-control" placeholder="Price" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <input type="text" name="delivery" class="form-control" placeholder="Delivery Charges" required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <input type="text" name="total" class="form-control" placeholder="Total" required>
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
            <div class="form-group">
                <input type="submit" name="submit" value="Add Product" class="btn btn-primary">
                <a href="addproduct.php" class="btn btn-secondary">Cancel</a>
            </div>

        </div>
    </form>
</div>
<?php
include('include/footer.php');
?>