<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="no-cache">
    <title>SheShopPlace - eCommerce Website</title>

    <!--
      - favicon
    -->
    <link rel="shortcut icon" href="./assets/images/logo/favicon.ico" type="image/x-icon">
    <!--
      - custom css link
    -->
    <link rel="stylesheet" href="./assets/css/style-prefix.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <!--    <link rel="stylesheet" href="./assets/css/main.css">-->
    <!--    <link rel="stylesheet" href="./assets/css/util.css">-->
    <!--    <link rel="stylesheet" href="./assets/css/loginform.css">-->


    <!--
      - google font link
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">
</head>
<body>
<?php
require_once "components/header.php";
require_once "config.php";
?>
<section class="ordersection">
    <h2>My Orders</h2>
    <table border=0 class="order_table">
        <tr>
            <th>Date</th>
            <th>Time</th>
            <th>Order No</th>
            <th>Food Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>Status</th>
        </tr>
        <?php
        $userId = $_SESSION['userId'];
        $sql = 'SELECT * FROM `orders` WHERE customerId="'.$userId.'";';
        $result = mysqli_query($conn,$sql);
        $num = mysqli_num_rows($result);
        while($num > 0)
        {
            $row = mysqli_fetch_assoc($result);
            $datetime = explode(" ", $row['orderDate']);
            $date = $datetime[0];
            $time = $datetime[1];
            $orderno = $row['orderId'];
            $foodname = $row['orderId'];
            $price = $row['totalAmount'];
            $qty = 1;
            $total = $row['totalAmount'];
            $status = $row['orderStatus'];

            echo "
                        <tr>
                        <td>$date</td>
                        <td>$time</td>
                        <td>#$orderno</td>
                        <td>$foodname</td>
                        <td>Rs. $price/-</td>
                        <td>$qty pcs.</td>
                        <td>Rs. $total</td>
                        <td>$status</td>
                        </tr>
                    ";
            $num--;
        }
        ?>
    </table>

</section>
</body>
</html>
