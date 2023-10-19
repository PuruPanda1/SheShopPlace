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


<!--  <div class="overlay" data-overlay></div>-->

<!--
  - MODAL
-->
<!---->
<!--  <div class="modal" data-modal>-->
<!---->
<!--    <div class="modal-close-overlay" data-modal-overlay></div>-->
<!---->
<!--    <div class="modal-content">-->
<!---->
<!--      <button class="modal-close-btn" data-modal-close>-->
<!--        <ion-icon name="close-outline"></ion-icon>-->
<!--      </button>-->
<!---->
<!--      <div class="newsletter-img">-->
<!--        <img src="./assets/images/newsletter.png" alt="subscribe newsletter" width="400" height="400">-->
<!--      </div>-->
<!---->
<!--      <div class="newsletter">-->
<!---->
<!--        <form action="#">-->
<!---->
<!--          <div class="newsletter-header">-->
<!---->
<!--            <h3 class="newsletter-title">Subscribe Newsletter.</h3>-->
<!---->
<!--            <p class="newsletter-desc">-->
<!--              Subscribe the <b>SheShopPlace</b> to get latest products and discount update.-->
<!--            </p>-->
<!---->
<!--          </div>-->
<!---->
<!--          <input type="email" name="email" class="email-field" placeholder="Email Address" required>-->
<!---->
<!--          <button type="submit" class="btn-newsletter">Subscribe</button>-->
<!---->
<!--        </form>-->
<!---->
<!--      </div>-->
<!---->
<!--    </div>-->
<!---->
<!--  </div>-->


<!--
  - NOTIFICATION TOAST
-->
<!---->
<!--  <div class="notification-toast" data-toast>-->
<!---->
<!--    <button class="toast-close-btn" data-toast-close>-->
<!--      <ion-icon name="close-outline"></ion-icon>-->
<!--    </button>-->
<!---->
<!--    <div class="toast-banner">-->
<!--      <img src="./assets/images/products/jewellery-1.jpg" alt="Rose Gold Earrings" width="80" height="70">-->
<!--    </div>-->
<!---->
<!--    <div class="toast-detail">-->
<!---->
<!--      <p class="toast-message">-->
<!--        Someone in new just bought-->
<!--      </p>-->
<!---->
<!--      <p class="toast-title">-->
<!--        Rose Gold Earrings-->
<!--      </p>-->
<!---->
<!--      <p class="toast-meta">-->
<!--        <time datetime="PT2M">2 Minutes</time> ago-->
<!--      </p>-->
<!---->
<!--    </div>-->
<!---->
<!--  </div>-->


<!--
  - HEADER
-->

<?php
require_once "components/header.php"
?>


<!--
  - MAIN
-->

<main>

    <!--
      - BANNER
    -->

    <?php
    require_once "components/banner.php"
    ?>

    <!--
      - CATEGORY
    -->

    <?php
    require_once "components/category.php"
    ?>

    <!--
      - PRODUCT
    -->

    <?php
    //    require_once "components/productContainer.php"
    ?>

    <!--
      - TESTIMONIALS, CTA & SERVICE
    -->

    <div>

        <div class="container">

            <?php
            //                require_once "components/testimonals.php"
            ?>


        </div>

    </div>


    <!--
      - BLOG -- for future if needed!
    -->

    <?php
    //    require_once "components/productContainer.php"
    ?>

</main>


<!--
  - FOOTER
-->

<?php
    require_once "components/footer.php"
?>

<!--
  - custom js link
-->
<script src="./assets/js/script.js"></script>

<!--
  - ionicon link
-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>