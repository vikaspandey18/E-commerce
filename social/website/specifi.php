<?php
session_start();

if ($_SESSION['no'] == 0) {
  header('Location:login.php');
}
$prodetail_id = $_GET['id'];

include('include/conn.php');
include('include/header.php');
include('include/top.php');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <?php
      $query = "SELECT * FROM product WHERE id='$prodetail_id'";
      $query_run = mysqli_query($conn, $query);

      $row = mysqli_fetch_assoc($query_run);

    ?>
    <div class="row ">
      <div class="card-group">
        
      <div class="col-sm-5">
        <div class="card p-5">
          <img src="<?php echo $row['image'] ?>" style="max-height: 500px;" alt="prduct_detail" class="img-fluid">
        </div>
      </div>
      <div class="col-sm-7">
        <div class="card p-5">
          <div class="card-header">
            <h1>Mobile Phone Review</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis rerum minus nisi sed odit, ratione id ex in, maxime amet.</p>
          </div>
          <div class="card-body">
            <h2 class="font-weight-bold">Details</h2>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>Delivery Charges</th>
                    <th>Total</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['cata']; ?></td>
                    <td><?php echo $row['quantity']; ?></td>
                    <td><?php echo $row['delivery']; ?></td>
                    <td><?php echo $row['total']; ?></td>
                  </tr>
                </tbody>
              </table>
            </div>
              <br>
              <div class="bg-secondary text-white">
                <h3>Total - $<?php echo $row['total']; ?></h3>
                <p>EX Total : $<?php echo $row['total']; ?></p>
              </div>

              <div class="mt-4">
                <div class="btn btn-primary btn-flat">
                  <i class="fas fa-cart-plus fa-lg mr-2"></i>
                  <a href="cart.php?$<?php echo $row['id']; ?>" class="text-white">Add to Cart</a>
                </div>
              </div>


              <div class="mt-4 product-share">
                <a href="#" class="text-gray">
                  <i class="fab fa-facebook-square fa-2x"></i>
                </a>
                <a href="#" class="text-gray">
                  <i class="fab fa-twitter-square fa-2x"></i>
                </a>
                <a href="#" class="text-gray">
                  <i class="fas fa-envelope-square fa-2x"></i>
                </a>
                <a href="#" class="text-gray">
                  <i class="fas fa-rss-square fa-2x"></i>
                </a>
              </div>
          </div>
        </div>
      </div>
      </div>
    </div>

    <div class="container row mt-4">
      <nav class="w-100">
        <div class="nav nav-tabs" id="product-tab" role="tablist">
          <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Description</a>
          <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Comments</a>
          <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="false">Rating</a>
        </div>
      </nav>
      <div class="tab-content p-3" id="nav-tabContent">
            <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae condimentum erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed posuere, purus at efficitur hendrerit, augue elit lacinia arcu, a eleifend sem elit et nunc. Sed rutrum enim a erat fringilla sollicitudin ultrices vel metus.
            </div>
            <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab">
              Vivamus rhoncus nisl sed venenatis luctus. Sed condimentum risus ut tortor feugiat laoreet. Suspendisse potenti. Donec et finibus sem, ut commodo lectus. Cras eget neque dignissim, placerat orci interdum, venenatis odio. vel, tincidunt ipsum.
            </div>
            <div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab">
              Cras ut ipsum ornare, aliquam ipsum non, posuere elit. In hac habitasse platea dictumst. Aenean elementum leo augue, id fermentum risus efficitur vel. Nulla iaculis malesuada scelerisque. Praesent vel ipsum felis. Ut molestie, purus aliquam placerat sollicitudin, mi ligula euismod neque, non bibendum nibh neque
            </div>
          </div>
    </div>


  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->



<?php include('include/footer.php'); ?>