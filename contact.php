<?php 
session_start();

if ($_SESSION['no'] == 0) {
	header('Location:login.php');
}

include('include/conn.php');
include('include/header.php');
include('include/top.php');

$alert = '';

if (isset($_POST['feedback'])) {

    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $email =mysqli_real_escape_string($conn,$_POST['email']);
    $subject = mysqli_real_escape_string($conn,$_POST['subject']);
    $message = mysqli_real_escape_string($conn,$_POST['message']);
    $date = date("Y-m-d");

    $query = "INSERT INTO feedback (name,email,subject,message,date)
                VALUES('{$name}','{$email}','{$subject}','{$message}','{$date}')";

    $query_run = mysqli_query($conn,$query);

    if ($query_run) {
        $alert = 'Thank You For Your Feedback';
    }else{
        $alert = 'Sorry For Inconvience';
    }

}
 ?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
    	<?php if ($alert) { ?>
        <div class="alert alert-warning alert-dismissible text-center">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h6><?php echo $alert;?></h6>
        </div>
    <?php } ?>

      <!-- Default box -->
      <div class="card">
        <div class="card-body row">
          <div class="col-sm-5 text-center d-flex align-items-center justify-content-center">
            <div class="">
              <h2>Social<strong>Team</strong></h2>
              <p class="lead mb-5">123 Feedback Ave, Township, 12345<br>
                Phone: +1234567890
              </p>
            </div>
          </div>
          <div class="col-sm-7">
          	<form action="" method="post">
          		<div class="form-group">
		            <label for="inputName">Name</label>
		            <input type="text" id="inputName" name="name" class="form-control" required />
            	</div>
	            <div class="form-group">
	              <label for="inputEmail">E-Mail</label>
	              <input type="email" id="inputEmail" name="email" class="form-control" required />
	            </div>
	            <div class="form-group">
	              <label for="inputSubject">Subject</label>
	              <input type="text" id="inputSubject" name="subject" class="form-control" required />
	            </div>
	            <div class="form-group">
	              <label for="inputMessage">Message</label>
	              <textarea id="inputMessage" name="message" class="form-control" rows="4" required></textarea>
	            </div>
	            <div class="form-group">
	              <input type="submit" name="feedback" class="btn btn-primary" value="Send message">
	            </div>
          	</form>
          </div>
        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



 <?php include('include/footer.php'); ?>