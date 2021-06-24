<?php 
$conn = mysqli_connect('localhost','root','','social');

$userid = $_GET['id'];

$sql = "DELETE FROM orders WHERE id = {$userid}";

if (mysqli_query($conn,$sql)) {
	header("Location:order.php");
}else{
	echo "<p>Can't Delete the User Order.</p>";
}

mysqli_close($conn);
?>