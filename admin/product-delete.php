<?php
include("confs/auth.php");
?>
<?php
 include("confs/config.php");
 $id = $_GET['id'];
 $sql = "DELETE FROM products WHERE id = $id";
 mysqli_query($conn, $sql);
 header("location: product-list.php");
?>