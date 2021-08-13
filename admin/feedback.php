<?php

session_start();

include('include/conn.php');
if ($_SESSION['id'] == 0) {
  header('location:login.php');
}
$alert = "";
include('include/header.php');
include('include/top.php');
include('include/sidebar.php');

if (isset($_POST['delete'])) {

  $id = $_POST['deleteinput'];

  $query = "DELETE FROM feedback WHERE id = '$id'";
  $query_run = mysqli_query($conn, $query);

  if ($query_run) {
    $alert = "Delete Successfully";
  } else {
    $alert = "Cannot Be Deleted";
  }
}
?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-6">
          <h1>Feedback</h1>
        </div>
        <div class="col-6">
          <ol class="breadcrumb float-right">
            <li class="breadcrumb-item">Feedback</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
    <?php if ($alert) { ?>
      <div class="alert alert-warning alert-dismissible text-center">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h6><?php echo $alert ?></h6>
      </div>
    <?php } ?>

  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Feedback Table</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php

                  $query = "SELECT * FROM feedback";
                  $query_run = mysqli_query($conn, $query);

                  if (mysqli_num_rows($query_run) > 0) {

                    foreach ($query_run as $row) { ?>
                      <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['subject'] ?></td>
                        <td><?php echo $row['message'] ?></td>
                        <td><?php echo $row['date'] ?></td>
                        <td>
                          <form method="POST" action="">
                            <input type="hidden" name="deleteinput" value="<?php echo $row['id'] ?>">
                            <button class="btn btn-danger" name="delete" onclick="alert('Do You Want to Delete')" type="submit"><i class="far fa-trash-alt"></i></button>
                          </form>
                        </td>
                      </tr>

                  <?php }
                  } else {
                    echo 'No Record has found';
                  }

                  ?>
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
  <!-- /.content -->
</div>





<?php include('include/footer.php'); ?>