<?php 

include("admin/connect.php");
$select = "SELECT * FROM `product`";
$query = mysqli_query($db,$select);



 ?>

<!DOCTYPE html>
<html>
<head>
	<title> Bleach </title>
	<link rel="stylesheet" type="text/css" href="staylhimn.css">
</head>
<body>
	<div class="main">
		<?php include "header.php"; ?>
		<div class="content">
			<div class="shop">
				<?php 
				if (mysqli_num_rows($query)>0) {
	while ($product = mysqli_fetch_assoc($query)) {?>
		<div class="product">
					<div class="product_image">
						<img src=" <?php echo $product['photo']; ?>" class="nkar"></img>
					</div>
					<h3 class="product_title">
						<?php echo $product['name']; ?>
					</h3>
					<p class="product_prince">
						<?php echo $product['info']; ?>
					</p>
					<p class="product_prince">
						<?php echo $product['price']; ?>
					</p>
					<a class="product_link" href="singl.php">View more</a>
				</div>
	<?php }
}
				 ?>
				<!-- <div class="product">
					<div class="product_image">
						<img src="https://www.books2door.com/cdn/shop/products/young-adult-bleach-volumes-1-21-books-collection-manga-paperback-tite-kubo-1_800x600.jpeg?v=1633727951" class="nkar"></img>
					</div>
					<h3 class="product_title">
						manga
					</h3>
					<p class="product_prince">
						4000 AMD
					</p>
					<a class="product_link" href="singl.php">View more</a>
				</div>
				<div class="product">
					<div class="product_image">
						<img src="https://www.books2door.com/cdn/shop/products/young-adult-bleach-volumes-1-21-books-collection-manga-paperback-tite-kubo-1_800x600.jpeg?v=1633727951" class="nkar"></img>
					</div>
					<h3 class="product_title">
						manga
					</h3>
					<p class="product_prince">
						4000 AMD
					</p>
					<a class="product_link" href="singl.php">View more</a>
				</div>
				<div class="product">
					<div class="product_image">
						<img src="https://www.books2door.com/cdn/shop/products/young-adult-bleach-volumes-1-21-books-collection-manga-paperback-tite-kubo-1_800x600.jpeg?v=1633727951" class="nkar"></img>
					</div>
					<h3 class="product_title">
						manga
					</h3>
					<p class="product_prince">
						4000 AMD
					</p>
					<a class="product_link" href="singl.php">View more</a>
				</div>
				<div class="product">
					<div class="product_image">
						<img src="https://www.books2door.com/cdn/shop/products/young-adult-bleach-volumes-1-21-books-collection-manga-paperback-tite-kubo-1_800x600.jpeg?v=1633727951" class="nkar"></img>
					</div>
					<h3 class="product_title">
						manga
					</h3>
					<p class="product_prince">
						4000 AMD
					</p>
					<a class="product_link" href="singl.php">View more</a>
				</div>
				<div class="product">
					<div class="product_image">
						<img src="https://www.books2door.com/cdn/shop/products/young-adult-bleach-volumes-1-21-books-collection-manga-paperback-tite-kubo-1_800x600.jpeg?v=1633727951" class="nkar"></img>
					</div>
					<h3 class="product_title">
						manga
					</h3>
					<p class="product_prince">
						4000 AMD
					</p>
					<a class="product_link" href="singl.php">View more</a>
				</div>
				<div class="product">
					<div class="product_image">
						<img src="https://www.books2door.com/cdn/shop/products/young-adult-bleach-volumes-1-21-books-collection-manga-paperback-tite-kubo-1_800x600.jpeg?v=1633727951" class="nkar"></img>
					</div>
					<h3 class="product_title">
						manga
					</h3>
					<p class="product_prince">
						4000 AMD
					</p>
					<a class="product_link" href="singl.php">View more</a>
				</div>
				<div class="product">
					<div class="product_image">
						<img src="https://www.books2door.com/cdn/shop/products/young-adult-bleach-volumes-1-21-books-collection-manga-paperback-tite-kubo-1_800x600.jpeg?v=1633727951" class="nkar"></img>
					</div>
					<h3 class="product_title">
						manga
					</h3>
					<p class="product_prince">
						4000 AMD
					</p>
					<a class="product_link" href="singl.php">View more</a>
				</div>
				<div class="product">
					<div class="product_image">
						<img src="https://www.books2door.com/cdn/shop/products/young-adult-bleach-volumes-1-21-books-collection-manga-paperback-tite-kubo-1_800x600.jpeg?v=1633727951" class="nkar"></img>
					</div>
					<h3 class="product_title">
						manga
					</h3>
					<p class="product_prince">
						4000 AMD
					</p>
					<a class="product_link" href="singl.php">View more</a>
				</div>
				<div class="product">
					<div class="product_image">
						<img src="https://www.books2door.com/cdn/shop/products/young-adult-bleach-volumes-1-21-books-collection-manga-paperback-tite-kubo-1_800x600.jpeg?v=1633727951" class="nkar"></img>
					</div>
					<h3 class="product_title">
						manga
					</h3>
					<p class="product_prince">
						4000 AMD
					</p>
					<a class="product_link" href="singl.php">View more</a>
				</div>
				<div class="product">
					<div class="product_image">
						<img src="https://www.books2door.com/cdn/shop/products/young-adult-bleach-volumes-1-21-books-collection-manga-paperback-tite-kubo-1_800x600.jpeg?v=1633727951" class="nkar"></img>
					</div>
					<h3 class="product_title">
						manga
					</h3>
					<p class="product_prince">
						4000 AMD
					</p>
					<a class="product_link" href="singl.php">View more</a>
				</div>
				<div class="product">
					<div class="product_image">
						<img src="https://www.books2door.com/cdn/shop/products/young-adult-bleach-volumes-1-21-books-collection-manga-paperback-tite-kubo-1_800x600.jpeg?v=1633727951" class="nkar"></img>
					</div>
					<h3 class="product_title">
						manga
					</h3>
					<p class="product_prince">
						4000 AMD
					</p>
					<a class="product_link" href="singl.php">View more</a>
				</div>
				<div class="product">
					<div class="product_image">
						<img src="https://www.books2door.com/cdn/shop/products/young-adult-bleach-volumes-1-21-books-collection-manga-paperback-tite-kubo-1_800x600.jpeg?v=1633727951" class="nkar"></img>
					</div>
					<h3 class="product_title">
						manga
					</h3>
					<p class="product_prince">
						4000 AMD
					</p>
					<a class="product_link" href="singl.php">View more</a>
				</div>
				<div class="product">
					<div class="product_image">
						<img src="https://www.books2door.com/cdn/shop/products/young-adult-bleach-volumes-1-21-books-collection-manga-paperback-tite-kubo-1_800x600.jpeg?v=1633727951" class="nkar"></img>
					</div>
					<h3 class="product_title">
						manga
					</h3>
					<p class="product_prince">
						4000 AMD
					</p>
					<a class="product_link" href="singl.php">View more</a>
				</div>
				<div class="product">
					<div class="product_image">
						<img src="https://www.books2door.com/cdn/shop/products/young-adult-bleach-volumes-1-21-books-collection-manga-paperback-tite-kubo-1_800x600.jpeg?v=1633727951" class="nkar"></img>
					</div>
					<h3 class="product_title">
						manga
					</h3>
					<p class="product_prince">
						4000 AMD
					</p>
					<a class="product_link" href="singl.php">View more</a>
				</div>
				<div class="product">
					<div class="product_image">
						<img src="https://www.books2door.com/cdn/shop/products/young-adult-bleach-volumes-1-21-books-collection-manga-paperback-tite-kubo-1_800x600.jpeg?v=1633727951" class="nkar"></img>
					</div>
					<h3 class="product_title">
						manga
					</h3>
					<p class="product_prince">
						4000 AMD
					</p>
					<a class="product_link" href="singl.php">View more</a>
				</div>
				<div class="product">
					<div class="product_image">
						<img src="https://www.books2door.com/cdn/shop/products/young-adult-bleach-volumes-1-21-books-collection-manga-paperback-tite-kubo-1_800x600.jpeg?v=1633727951" class="nkar"></img>
					</div>
					<h3 class="product_title">
						manga
					</h3>
					<p class="product_prince">
						4000 AMD
					</p>
					<a class="product_link" href="singl.php">View more</a>
				</div> -->
			</div> 
		</div>
		<?php include "futer.php"; ?>
	</div>

</body>
</html>