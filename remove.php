
<?php
session_start();
$id = $_POST['id'];
unset($_SESSION['cart'][$id]);
header("location:view-cart.php");
?>
