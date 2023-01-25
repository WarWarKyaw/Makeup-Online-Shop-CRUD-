<?php
session_start();
include("admin/confs/config.php");
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$total=$_POST['total'];
if (empty($name) or empty($email) or empty($phone) or  empty($address)) {
    header("location:view-cart.php?error=1");
    exit();
} else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("location:view-cart.php?error=2");
        exit();
    } elseif (!(preg_match('/^[0-9]{10,11}+$/', $phone))) {
        header("location:view-cart.php?error=3");
        exit();
    } else {
        mysqli_query($conn, "INSERT INTO orders 
                    (name, email, phone, address,total, status, crated_date, modified_date) 
                    VALUES ('$name','$email','$phone','$address','$total', 0, now(), now()) ");
        $order_id = mysqli_insert_id($conn);
        foreach ($_SESSION['cart'] as $id => $qty) {
            mysqli_query($conn, "INSERT INTO order_items 
                        (order_id, product_id, qty) VALUES ($order_id,$id,$qty)
                        ");
        }
    }
    unset($_SESSION['cart']);
}
?>


<!doctype html>
<html>

<head>
    <title>Order Submitted</title>
    <link rel="stylesheet" href="css/UserStyle.css">
</head>

<body>
    <h1>Order Submitted</h1>

    <div class="orderMsg">
        Your order has been submitted. We'll deliver the items soon.
        <a href="index.php" class="done">Book Store Home</a>
    </div>
    <div class="footer">
        &copy; <?php echo date("Y") ?>. All right reserved.
    </div>
</body>

</html>