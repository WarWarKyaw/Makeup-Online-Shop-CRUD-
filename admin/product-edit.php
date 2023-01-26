<?php
include("confs/auth.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Editing</title>
    <style>
        form label {
        display: block;
        margin-top: 8px;
        }
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
    </style>
   <link rel="stylesheet" href="css/AdminStyle.css">

</head>
<body>
    <?php
    include("confs/config.php");
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM products WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
    ?>
    <h1>Edit Book</h1>
    <ul class="menu">
        <li><a href="product-list.php">Manage Products</a></li>
        <li><a href="category-list.php">Manage Categories</a></li>
        <li><a href="orders.php">Manage Orders</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>

    <form action="product-update.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
    <label for="title">Product Title</label>
    <input type="text" name="title" id="title"
    value="<?php echo $row['title'] ?>">
    <label for="brand">Brand</label>
    <input type="text" name="brand" id="brand"
    value="<?php echo $row['brand'] ?>">
    <label for="info">Information</label>
    <textarea name="info" id="info"><?php echo $row['information'] ?></textarea>
    <label for="price">Price</label>
    <input type="text" name="price" id="price"
    value="<?php echo $row['price'] ?>">
    <label for="categories">Category</label>
    <select name="category_id" id="categories">
    <option value="0">-- Choose --</option>
    <?php
    $categories = mysqli_query($conn, "SELECT id, name FROM categories");
    while($cat = mysqli_fetch_assoc($categories)):
    ?>
    <option value="<?php echo $cat['id'] ?>"
    <?php if($cat['id'] == $row['category_id']) echo "selected" ?> >
    <?php echo $cat['name'] ?>
    </option>
    <?php endwhile; ?>
    </select>
    <br><br>
    <img src="covers/<?php echo $row['cover'] ?>" alt="productImage" height="150">
    <label for="cover">Change Cover</label>
    <input type="file" name="cover" id="cover">
    <br><br>
    <input type="submit" value="Update Product">
    <a href="product-list.php">Back</a>
    </form>
</body>
</html>