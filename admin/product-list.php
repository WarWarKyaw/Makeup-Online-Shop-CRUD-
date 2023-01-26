<?php
include("confs/auth.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link rel="stylesheet" href="css/AdminStyle.css">
    <style>
        ul.menu {
        list-style: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background: #cc828b;
        }
        ul.menu li {
        float: left;
        border-right: 1px solid #1ABC9C;
        }
        ul.menu a {
        display: block;
        padding: 10px 20px;
        text-decoration: none;
        color: #fff;
        }
        ul.menu a:hover {
        /* background: #1ABC9C; */
        background:#f58d85;
        }
   span{
    color:red;
    margin-bottom: 5px;
   }
   div{ width:700px;
    text-align: justify;
}
.btn{
    margin-top:5px;
}
    </style>

</head>
<body>
    <h1>Product List</h1>
    <ul class="menu">
        <li><a href="product-list.php">Manage Products</a></li>
        <li><a href="category-list.php">Manage Categories</a></li>
        <li><a href="orders.php">Manage Orders</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>

    <?php
    include("confs/config.php");

    $result = mysqli_query($conn, "
    SELECT products.*, categories.name
    FROM products LEFT JOIN categories
    ON products.category_id = categories.id
    ORDER BY products.created_date DESC
    ");
    ?>
    <ul class="products">
    <?php while($row = mysqli_fetch_assoc($result)): ?>
    <li>
    <img src="covers/<?php echo $row['cover'] ?>" 
    alt="productImage" align="right" height="140">
    <b><?php echo $row['title'] ?></b><br>
    <i>-Brand: <?php echo $row['brand'] ?></i><br>
    <small>-Category: <?php echo $row['name'] ?>)</small><br>
    <span>-Price:$<?php echo $row['price'] ?></span>
    <div><?php echo $row['information'] ?></div>
    <a href="product-edit.php?id=<?php echo $row['id'] ?>" class="btn edit">Edit</a>
   
    <a onclick="return confirm('Are you sure you want to delete this entry?')" href="product-delete.php?id=<?php echo $row['id'] ?>" class="btn del">Delete</a>
    <br><hr>
    <br></li>
    <?php endwhile; ?>
    </ul>
    <a href="product-new.php" class="new">New Product</a>


    
    

    
</body>
</html>
