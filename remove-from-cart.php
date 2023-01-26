
<?php
session_start();
$id = $_GET['id'];

if ($_SESSION['cart'][$id]<=1) {
    unset($_SESSION['cart'][$id]);
} else {
    $_SESSION['cart'][$id]--;
}

header("location:view-cart.php");
?>
