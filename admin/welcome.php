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
        div{
            height: 300px;
            width:auto;
            margin-top:150px;
            text-align: center;
            font-size: 3em;
            font-style: oblique;
            font-weight: 400;
        }
       
    </style>

</head>
<body>

    <h1>Welcome!</h1>
    <ul class="menu">
       
        <li><a href="product-list.php">Manage Products</a></li>
        <li><a href="category-list.php">Manage Categories</a></li>
        <li><a href="orders.php">Manage Orders</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>

   <div>

       Welcome Admin!
   </div>
   
    
</body>
</html>