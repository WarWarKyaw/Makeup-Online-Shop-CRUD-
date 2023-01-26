<?php
session_start();
if (!isset($_SESSION['cart'])) {
    header("location: index.php");
    exit();
}
include("admin/confs/config.php");

?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>View Cart</title>
    <link rel="stylesheet" href="css/UserStyle.css">
    <style>
        span{
            width: 25px;
         padding:13px;
           background: #cc828b;
           border-radius: 2px;
        
        }
        .down, .up{
            font-size:1.5rem;
            /* font-weight:bold; */
        }
        input[type=submit]{
            padding: 5px 15px;
            border-radius: 2px;
        }

    </style>


</head>


<body>
    <h1>View Cart</h1>
    <div class="sidebar">
        <ul class="cats">
            <li><a href="index.php">&laquo; Continue Shopping</a></li>
            <li><a href="clear-cart.php" class="del">&times; Clear Cart</a></li>
        </ul>
    </div>
    <div class="main">
        <table>
            <tr>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Unit Price</th>
                <th>Price</th>
            </tr>
            <?php
            $total = 0;
            foreach ($_SESSION['cart'] as $id => $qty) :
                $result = mysqli_query($conn, "SELECT title, price FROM products WHERE id=$id");
                $row = mysqli_fetch_assoc($result);
                $total += $row['price'] * $qty;
            ?>

                <tr>
                    <td>
                        <form action="remove.php" method="post">
                            <input type="hidden" name="id" value="<?php echo  $id ?>">
                            <?php echo $row['title'] ?><br>
                            <input type="submit" name="remove" class="remove" value="Remove" />

                        </form>
                    </td>
                    <td>
                        <div class="counter">

                            <a href="remove-from-cart.php?id=<?php echo $id ?>" class="down">-</a>
                            <span><?php echo $qty ?></span>
                            <a href="increase-quantity.php?id=<?php echo $id ?>" class="up">+</a>

                        </div>

                    </td>
                    <td>$<?php echo $row['price'] ?></td>
                    <td>$<?php echo $row['price'] * $qty ?></td>


                </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="3" align="right"><b>Total:</b></td>
                <td>$<?php echo $total; ?></td>
            </tr>
        </table>


        <div class="order-form">
            <h2>Order Now</h2>
            <form action="submit-order.php" method="post">
                <label for="name">Your Name*</label>
                <input type="text" name="name" id="name" required>
                <label for="email">Email*</label>
                <input type="email" name="email" id="email" required>
                <label for="phone">Phone*</label>
                <input type="tel" placeholder="09*********" name="phone" id="phone" pattern="[0-9]{10,11}" required>
                <label for="address">Address*</label>
                <textarea name="address" id="address" required></textarea>
                <input type="hidden" name="total" value="<?php echo $total ?>">
                <br><br>
                <input type="submit" value="Submit Order">
                <a href="index.php">Back</a>
            </form>
        </div>
    </div>
    <div class="footer">
        &copy; <?php echo date("Y") ?>. All right reserved.
    </div>


</body>


</html>

