<?php 

session_start();

if ($_SESSION['id'] == 0) {
	header('location:login.php');
}
$alert = "";
include('include/conn.php');
include('include/header.php');
include('include/sidebar.php');
include('include/top.php');

if (isset($_POST['delete_customer'])) {
	$delete_id = $_POST['delete_id'];

	$sql = "DELETE FROM customer WHERE id = $delete_id";

	$sql_run = mysqli_query($conn,$sql);

	if ($sql_run) {
		$alert = 'Record has been deleted successfully';
	}else{
		$alert = "Failed to delete the record";
	}
}
 ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
        	<?php if ($alert) { ?>
				<div class="alert alert-warning alert-dismissible text-center">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h6><?php echo $alert ?></h6>      
				</div>
			<?php } ?>
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Customer Table</h1>  
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
                            <h3 class="card-title">Summary Of All Customer</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Confirmpassword</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = "SELECT * FROM customer";
                                    $result = mysqli_query($conn, $query);

                                    while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><?php echo $row['password']; ?></td>
                                            <td><?php echo $row['confirmpassword']; ?></td>
                                            <td><?php echo $row['date']; ?></td>
                                            <td>
                                            	<form action="" method="post">
                                            		<input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                            		<button type="submit" name="delete_customer" class="btn btn-danger" onclick="alert('Do you really want to delete')"><i class="far fa-trash-alt"></i></button>
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