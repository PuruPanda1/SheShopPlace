<!DOCTYPE html>
<html lang="en">

<?php
session_start()
?>

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

    <link href='https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <link rel="stylesheet" href="./assets/css/cartcss.css">

</head>

<body class='snippet-body'>


<div class="h-screen w-screen bg-gray-300">
    <div class="py-12">
        <div class="max-w-md mx-auto bg-gray-100 shadow-lg rounded-lg  md:max-w-5xl">
            <div class="md:flex ">
                <div class="w-full p-4 px-5 py-5">

                    <div class="md:grid md:grid-cols-3 gap-2 ">

                        <div class="col-span-2 p-5">

                            <h1 class="text-xl font-medium ">Shopping Cart</h1>

                            <?php
                            require_once "utils/loader.php";
                            require_once "config.php";

                            $ids = $_SESSION['cart'];
                            $count = 0;

                            foreach ($ids as $id) {
                                $count = $count + 1;
                            }

                            if ($count == 0) {
                                echo 'empty cart';
                            } else {

                                foreach ($ids as $id) {
                                    loadItemInCart($id);
                                }

                            }
                            ?>

                            <div class="flex justify-between items-center mt-6 pt-6 border-t">
                                <div class="flex items-center cursor-pointer" onclick="redirectToHomePage()">
                                    <i class="fa fa-arrow-left text-sm pr-2"></i>
                                    <span class="text-md  font-medium text-blue-500">Continue Shopping</span>
                                </div>

                                <div class="flex justify-center items-end">
                                    <span class="text-sm font-medium text-gray-400 mr-1">Subtotal:</span>
                                    <span class="text-lg font-bold text-gray-800 ">
                                        <?php
                                        $ids = $_SESSION['cart'];
                                        $count = 0;

                                        foreach ($ids as $id) {
                                            $count = $count + 1;
                                        }
                                        $total = 0;
                                        if ($count == 0) {
                                            echo 'empty cart';
                                        } else {
                                            global $conn;

                                            foreach ($ids as $productId) {
                                                $query = "SELECT * FROM `items` WHERE itemId = ${productId}";

                                                $result = $conn->query($query);

                                                while ($row = $result->fetch_assoc()) {
                                                    $total = $total + $row['salePrice'];
                                                }

                                            }

                                        }
                                        echo $total;
                                        ?>
                                    </span>

                                </div>

                            </div>


                        </div>
                        <div class=" p-5 bg-gray-800 rounded overflow-visible">

                            <span class="text-xl font-medium text-gray-100 block pb-3">Card Details</span>

                            <span class="text-xs text-gray-400 ">Card Type</span>

                            <div class="overflow-visible flex justify-between items-center mt-2">


                                <div class="rounded w-52 h-28 bg-gray-500 py-2 px-4 relative right-10">

                                    <span class="italic text-lg font-medium text-gray-200 underline">VISA</span>

                                    <div class="flex justify-between items-center pt-4 ">

                                        <span class="text-xs text-gray-200 font-medium">****</span>
                                        <span class="text-xs text-gray-200 font-medium">****</span>
                                        <span class="text-xs text-gray-200 font-medium">****</span>
                                        <span class="text-xs text-gray-200 font-medium">****</span>

                                    </div>

                                    <div class="flex justify-between items-center mt-3">

                                        <span class="text-xs  text-gray-200">Giga Tamarashvili</span>
                                        <span class="text-xs  text-gray-200">12/18</span>
                                    </div>


                                </div>


                                <div class="flex justify-center  items-center flex-col">

                                    <img src="https://img.icons8.com/color/96/000000/mastercard-logo.png" width="40"
                                         class="relative right-5"/>
                                    <span class="text-xs font-medium text-gray-200 bottom-2 relative right-5">mastercard.</span>

                                </div>

                            </div>


                            <div class="flex justify-center flex-col pt-3">
                                <label class="text-xs text-gray-400 ">Name on Card</label>
                                <input type="text"
                                       class="focus:outline-none w-full h-6 bg-gray-800 text-white placeholder-gray-300 text-sm border-b border-gray-600 py-4"
                                       placeholder="Giga Tamarashvili">
                            </div>


                            <div class="flex justify-center flex-col pt-3">
                                <label class="text-xs text-gray-400 ">Card Number</label>
                                <input type="text"
                                       class="focus:outline-none w-full h-6 bg-gray-800 text-white placeholder-gray-300 text-sm border-b border-gray-600 py-4"
                                       placeholder="****     ****      ****      ****">
                            </div>


                            <div class="grid grid-cols-3 gap-2 pt-2 mb-3">

                                <div class="col-span-2 ">

                                    <label class="text-xs text-gray-400">Expiration Date</label>
                                    <div class="grid grid-cols-2 gap-2">

                                        <input type="text"
                                               class="focus:outline-none w-full h-6 bg-gray-800 text-white placeholder-gray-300 text-sm border-b border-gray-600 py-4"
                                               placeholder="mm">
                                        <input type="text"
                                               class="focus:outline-none w-full h-6 bg-gray-800 text-white placeholder-gray-300 text-sm border-b border-gray-600 py-4"
                                               placeholder="yyyy">

                                    </div>


                                </div>

                                <div class="">
                                    <label class="text-xs text-gray-400">CVV</label>
                                    <input type="text"
                                           class="focus:outline-none w-full h-6 bg-gray-800 text-white placeholder-gray-300 text-sm border-b border-gray-600 py-4"
                                           placeholder="XXX">

                                </div>

                            </div>


                            <button class="h-12 w-full bg-blue-500 rounded focus:outline-none text-white hover:bg-blue-600"
                                    onclick="redirectToCheckout()">
                                Check Out
                            </button>


                        </div>


                    </div>


                </div>
            </div>
        </div>
    </div>
</div>


<script>
    function redirectToCheckout() {
        // window.location.href = `utils/checkout.php`;
        window.location.href = `checkout.php`;
    }

    function redirectToHomePage() {
        window.location.href = `index.php`;
    }
</script>

<!--
  - custom js link
-->
<script type='text/javascript' src='https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js'></script>
<script type='text/javascript' src='#'></script>
<script type='text/javascript' src='#'></script>
<script type='text/javascript' src='#'></script>
<script type='text/javascript'>#</script>
<script type='text/javascript'>var myLink = document.querySelector('a[href="#"]');
    myLink.addEventListener('click', function (e) {
        e.preventDefault();
    });</script>


</body>

</html>

