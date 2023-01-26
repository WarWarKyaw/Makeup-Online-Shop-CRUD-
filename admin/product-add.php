<?php
include("confs/auth.php");
?>
<?php
 include("confs/config.php");
 $title = $_POST['title'];
 $brand = $_POST['brand'];
 $information = $_POST['info'];
 $price = $_POST['price'];
 $category_id = $_POST['category_id'];
 $cover = $_FILES['cover']['name'];
 $tmp = $_FILES['cover']['tmp_name'];
 if($cover) {
 move_uploaded_file($tmp, "covers/$cover");
 }

 $sql = "INSERT INTO products (
 title, brand, information, price, category_id,
 cover, created_date, modified_date
 ) VALUES (
 '$title', '$brand', '$information', '$price',
 '$category_id', '$cover', now(), now()
 )";
 mysqli_query($conn, $sql);
 header("location: product-list.php");
?>
