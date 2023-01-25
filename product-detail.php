<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail</title>
    <link rel="stylesheet" href="css/UserStyle.css">
    <style>
        img{
            width:150px;
            height:300px;
        }
    </style>
</head>
<body>
    <h1>Product Detail</h1>
    <?php
    include("admin/confs/config.php");
    $id = $_GET['id'];
    $products = mysqli_query($conn, "SELECT * FROM products WHERE id = $id");
    $row = mysqli_fetch_assoc($products);
    ?>
    <div class="detail">
    <a href="index.php" class="back">&laquo; Go Back</a>
    <img src="admin/covers/<?php echo $row['cover'] ?>">
    <h2><?php echo $row['title'] ?></h2>
    <i><b><?php echo $row['brand'] ?></b></i>
   <br><br> <b>$<?php echo $row['price'] ?></b>
    <p><?php echo $row['information'] ?></p>
    <a href="add-to-cart.php?id=<?php echo $id ?>" class="add-to-cart">
    Add to Cart
    </a>
    </div>
    <div class="footer">
    &copy; <?php echo date("Y") ?>. All right reserved.
    </div>
</body>
</html>