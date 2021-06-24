<?php 
$conn = mysqli_connect('localhost','root','','social');

$userid = $_GET['id'];

$sql = "DELETE FROM product WHERE id = {$userid}";

if (mysqli_query($conn,$sql)) {
	header("Location:allproduct.php");
}else{
	echo "<p>Can't Delete the user Record.</p>";
}

mysqli_close($conn);
?>