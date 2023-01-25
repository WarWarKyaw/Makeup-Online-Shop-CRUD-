<?php
session_start();
if (!isset($_SESSION['cart'])) {
    header("location: index.php");
    exit();
}
include("admin/confs/config.php");

?>
<!doctype html>
<html>

<head>
    <title>View Cart</title>
    <link rel="stylesheet" href="css/UserStyle.css">
    <style>
        /* .remove {
  color: #fff;
  background-color: #dc3545;
  border-color: #dc3545;
  display: inline-block;
    font-weight: 300;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    padding: 0.3rem 0.7rem;
    font-size: 0.8rem;
    line-height: 1.5;
    border-radius: 0.25rem;
    width: 70px;
    transition: background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    padding: 10px;
} */

        .counter {
            width: 100px;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .counter input {
            width: 30px;
            border: 0;
            line-height: 30px;
            font-size: 20px;
            text-align: center;
            background: #0052cc;
            color: #fff;
            appearance: none;
            outline: 0;
        }

        .counter span {
            display: block;
            font-size: 25px;
            padding: 0 10px;
            cursor: pointer;
            color: #0052cc;
            user-select: none;
        }
    </style>
    <!-- <script type="text/javascript">
        function increaseCount(a, b) {
            var input = b.previousElementSibling;
            var value = parseInt(input.value, 10);
            value = isNaN(value) ? 0 : value;
            value++;
            input.value = value;

        }

        function decreaseCount(a, b) {
            var input = b.nextElementSibling;
            var value = parseInt(input.value, 10);
            if (value > 1) {
                value = isNaN(value) ? 0 : value;
                value--;
                input.value = value;


            }

        }
    </script>
 -->

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
                            <input type="text" value="<?php echo $qty ?>">
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

<!-- <script>
    function remove() {
        document.getElementById($id).innerHTML = "";
    }
</script> -->