<?php
include("confs/auth.php");
?>
<?php
 include("confs/config.php");
 $id = $_GET['id'];
 $sql = "DELETE FROM categories WHERE id = $id";
 mysqli_query($conn, $sql);
 $sql = "DELETE FROM products WHERE category_id = $id";
 mysqli_query($conn, $sql);

 header("location: category-list.php");
?>
