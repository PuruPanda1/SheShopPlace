<?php
session_start();
//unset($_SESSION['cart']);
//sets the empty array for the cart
$_SESSION['cart'] = [];

require "../vendor/autoload.php";

$secretKey = 'sk_test_51OIAiUSEmsOQoT091xuPrQn0rbrNopx6OTCcKIXZ31ke5xAEkrXa24TTSCHzv7p6epGB2ymm8bzTbQwPTPYAq2VS00HCJcn76t';

\Stripe\Stripe::setApiKey($secretKey);

try {
    $checkoutSession = \Stripe\Checkout\Session::create([
        "mode" => "payment",
        "success_url" => "http://localhost/sheshopplace/sheshopplaye-ecommerce-website/orderPlaced.php",
        "line_items" => [
            [
                "quantity" => 1,
                "price_data" => [
                    "currency" => "inr",
                    "unit_amount" => 2000,
                    "product_data" => [
                        "name" => "T-shirt"
                    ]
                ]
            ]
        ]
    ]);
} catch (\Stripe\Exception\ApiErrorException $e) {
    echo $e;
}

http_response_code(303);
header("Location: " . $checkoutSession->url);



