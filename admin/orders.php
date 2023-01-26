<?php include("confs/auth.php") ?>
<!doctype html>
<html>

<head>
    <title>Order List</title>
    <link rel="stylesheet" href="css/AdminStyle.css">
</head>
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
        background: #f58d85;
    }
</style>

<body>
    <h1>Order List</h1>
    <ul class="menu">
        <li><a href="product-list.php">Manage Products</a></li>
        <li><a href="category-list.php">Manage Categories</a></li>
        <li><a href="orders.php">Manage Orders</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
    <?php
    include("confs/config.php");
    $orders = mysqli_query($conn, "SELECT * FROM orders");
    ?>
    <ul class="orders">
        <?php while ($order = mysqli_fetch_assoc($orders)) : ?>
            <?php if ($order['status']) : ?>
                <li class="delivered">
                <?php else : ?>
                <li>
                <?php endif; ?>
                <div class="order">
                    <b><?php echo $order['name'] ?></b>
                    <i><?php echo $order['email'] ?></i>
                    <span><?php echo $order['phone'] ?></span>
                    <p><?php echo $order['address'] ?></p>


                    <?php if ($order['status']) : ?>
                        * <a href="order-status.php?id=<?php echo $order['id'] ?>&status=0">
                            Undo</a>
                    <?php else : ?>
                        * <a href="order-status.php?id=<?php echo $order['id'] ?>&status=1">
                            Mark as Delivered</a>
                    <?php endif; ?>
                </div>
                <div class="items">
                    <?php

                    $order_id = $order['id'];
                    $items = mysqli_query($conn, "SELECT order_items.*, products.title ,products.price
                FROM order_items LEFT JOIN products ON order_items.product_id = products.id 
                WHERE order_items.order_id = $order_id
                ");
                    $total = 0;
                    while ($item = mysqli_fetch_assoc($items)) :

                    ?>
                        <b>
                            <a href="../product-detail.php?id=<?php echo $item['product_id'] ?>">
                                <?php echo $item['title'] ?>
                            </a>
                            (<?php echo $item['qty'] ?>)
                            <?php $unitprice = $item['price'] * $item['qty']; ?>
                            <?php

                            $total += $unitprice; ?>

                        </b>
                    <?php endwhile; ?>

                    <p>Total:$<?php echo $total ?></p>

                </div>
                </li>
            <?php endwhile; ?>
    </ul>
</body>

</html>