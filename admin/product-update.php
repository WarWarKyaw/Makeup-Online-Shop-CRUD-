<?php
include("confs/auth.php");
?>
<?php
 include("confs/config.php");
 $id = $_POST['id'];
 $title = $_POST['title'];
 $brand = $_POST['brand'];
 $information = $_POST['info'];
 $price = $_POST['price'];
 $category_id = $_POST['category_id'];

 $cover = $_FILES['cover']['name'];
 $tmp = $_FILES['cover']['tmp_name'];
if($cover) {
 move_uploaded_file($tmp, "covers/$cover");
 $sql = "UPDATE products SET title='$title', brand='$brand',
 information='$information', price='$price', category_id='$category_id',
 cover='$cover', modified_date=now() WHERE id = $id";
 } else {
 $sql = "UPDATE products SET title='$title', brand='$brand',
 information='$information', price='$price', category_id='$category_id',
 modified_date=now() WHERE id = $id";
 }
 mysqli_query($conn, $sql);
 header("location: product-list.php");
?>