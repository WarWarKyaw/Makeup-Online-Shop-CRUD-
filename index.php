<?php
 session_start();
 include("admin/confs/config.php");
 $cart = 0;
 if(isset($_SESSION['cart'])) {
 foreach($_SESSION['cart'] as $qty) {
 $cart += $qty;
 }
 }
 if(isset($_GET['cat'])) {
 $cat_id = $_GET['cat'];
 $products = mysqli_query($conn, "SELECT * FROM products WHERE category_id = 
$cat_id");
 } else {
 $products = mysqli_query($conn, "SELECT * FROM products");
 }
 $cats = mysqli_query($conn, "SELECT * FROM categories");
?>


<!doctype html>
<html>
<head>
 <title>Makeup Store</title>
 <link rel="stylesheet" href="css/UserStyle.css">
</head>
<body>
 <h1>Makeup Store</h1>
 <div class="info">
 <a href="view-cart.php">
 (<?php echo $cart ?>) products in your cart
 </a>
 </div>
 <div class="sidebar">
 <ul class="cats">
 <li>
 <b><a href="index.php">All Categories</a></b>
 </li>
 <?php while($row = mysqli_fetch_assoc($cats)): ?>
 <li>
 <a href="index.php?cat=<?php echo $row['id'] ?>">
 <?php echo $row['name'] ?>
 </a>
 </li>
 <?php endwhile; ?>
 </ul>
 </div>
 <div class="main">
 <ul class="products">
 <?php while($row = mysqli_fetch_assoc($products)): ?>
 <li>
 <img src="admin/covers/<?php echo $row['cover'] ?>" height="150">
 <b>
 <a href="product-detail.php?id=<?php echo $row['id'] ?>" class="title">
 <?php echo $row['title'] ?>
 </a>
 </b>
 <i>$<?php echo $row['price'] ?></i>
 
 <a href="add-to-cart.php?id=<?php echo $row['id'] ?>"
 class="add-to-cart">Add to Cart</a>
 </li>
 <?php endwhile; ?>
 </ul>
 </div>
 <div class="footer">
 &copy; <?php echo date("Y") ?>. All right reserved.
 </div>
</body>
</html>