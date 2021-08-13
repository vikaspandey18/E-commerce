<?php 
session_start();

if ($_SESSION['no'] == 0) {
	header('Location:login.php');
}
$cartid = $_GET['id'];
$alert = "";
include('include/conn.php');
if (isset($_POST['delete'])) {

  $id = $cartid;

  $query = "DELETE FROM orders WHERE id='$cartid'";
  $query_run = mysqli_query($conn,$query);

  if ($query_run) {
    $alert = "Delete Successfully";
    header('index.php');
  }else{
    $alert = "Failed To Delete";
  }
  
}

include('include/header.php');
include('include/top.php');
 ?>

 <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <?php if ($alert) { ?>
        <div class="alert alert-warning alert-dismissible text-center">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h6><?php echo $alert ?></h6>      
        </div>
        <?php } ?>

        <div class="row">
          <div class="col-12">
            <div class="card">
              <h2 class="text-center">Cart List</h2>
            </div>
          </div>
        </div>

        <table class="table table-bordered rounded" width="50%">
          <?php 
            $query = "SELECT * FROM product WHERE id='$cartid'";
            $query_run = mysqli_query($conn,$query);
            $row = mysqli_fetch_assoc($query_run);
          ?>
          <tr>
            <th>Product Name</th>
            <td><?= $row['name']?></td>
            <td rowspan="5" class="text-center"><img src="<?= $row['image']?>" alt=""></td>
          </tr>

          <tr>
            <th>Product Price</th>
            <td><?= $row['price']?></td>
          </tr>

          <tr>
            <th>Product Quantity</th>
            <td><?= $row['quantity']?></td>
          </tr>

          <tr>
            <th>Delivery Charges</th>
            <td><?= $row['delivery']?></td>
          </tr>

          <tr>
            <th>Total Amount</th>
            <td><?= $row['total']?></td>
          </tr>
        </table>
        <form action="instamojo.php" method="post">
          <input type="hidden" name="name" value="<?php echo $row['name']; ?>">
          <input type="hidden" name="brand" value="<?php echo $row['brand']; ?>">
          <input type="hidden" name="price" value="<?php echo $row['price']; ?>">
          <input type="hidden" name="quantity" value="<?php echo $row['quantity']; ?>">
          <input type="hidden" name="total" value="<?php echo $row['total']; ?>">
          <input type="hidden" name="upload" value="<?php echo $row['image']; ?>">
          <div class="text-center p-4">
            <button type="submit" name="payment" class="btn btn-primary">Check Out</button>
            <input type="hidden" name="deleteid" value="<?php echo $row['id']; ?>">
            <button type="submit" name="delete" onclick="alert('Do You Want To Delete')" class="btn btn-danger">Delete</button> 
          </div>            
          
        </form>
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->





<?php include('include/footer.php'); ?>