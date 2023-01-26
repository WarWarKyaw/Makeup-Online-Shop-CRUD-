<?php
include("confs/auth.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category_List</title>
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
        .btn{
            margin-bottom:10px;
        }
        span{
            display:block;
           width:11em!important;
        }
    </style>

</head>
<body>

    <h1>Category List</h1>
    <ul class="menu">
        <li><a href="product-list.php">Manage Products</a></li>
        <li><a href="category-list.php">Manage Categories</a></li>
        <li><a href="orders.php">Manage Orders</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>

    <?php
    include("confs/config.php");
    $result = mysqli_query($conn, "SELECT * FROM categories");
    ?>
    <ul>
    <?php while($row = mysqli_fetch_assoc($result)): ?>
    <table width="15%">
        <tr><th></th></tr>
        <tr>
            <td width="5%">
                <li title="<?php echo $row['remark'] ?>">
                <span class="name"><?php echo $row['name'] ?></span>
            </td>
            <td width="5">
            <a href="category-edit.php?id=<?php echo $row['id'] ?>" class="btn edit">Edit</a>
            </td>
            <td width="5">
            <a onclick="return confirm('Are you sure you want to delete this entry?')" href="category-delete.php?id=<?php echo $row['id'] ?>" class="btn del">Delete</a>
            </td>

        </tr>
    </table>
   </li>
    <?php endwhile; ?>
    </ul>
    <a href="category-new.php" class="new">New Category</a>

    
</body>
</html>