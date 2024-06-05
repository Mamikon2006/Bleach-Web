<?php 

include("connect.php");
if (isset($_POST['add'])) {
	$name = $_POST['name'];
	$info = $_POST['info'];
	$price = $_POST['price'];
	$photo = $_POST['photo'];

	$insert = "INSERT `product`(`name`,`info`,`price`,`photo`) VALUES('$name','$info','$price','$photo')";
	$query = mysqli_query($db,$insert);
	if ($query) {
		header("location: ../shop.php");
			} else{ echo "error";
		}
}

 ?>


<form action="index.php" method="post">
	
	<input type="text" name="name" placeholder="Name">
	<input type="text" name="info" placeholder="INfo">
	<input type="number" name="price" placeholder="Price">
	<input type="text" name="photo" placeholder="Photo">
	<input type="submit" name="add" value="Add">
</form>