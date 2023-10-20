<?php
require_once 'config.php';

function loadBanner()
{
    global $conn;

    $query = 'SELECT * FROM `banner`';

    $result = $conn->query($query);

    while ($row = $result->fetch_assoc()) {
        echo "<div class='slider-item'>";
        echo "<img src='" . $row['bannerImage'] . "' alt='women latest fashion sale' class='banner-img'>";
        echo "<div class='banner-content'>";
        echo "<p class='banner-subtitle'>{$row['bannerSubtitle']}</p>";
        echo "<h2 class='banner-title'>{$row['bannerTitle']}</h2>";
        echo "<p class='banner-text'>";
        echo "starting at ₹ <b>{$row['bannerPrice']}</b>.00";
        echo "</p>";
        echo "<a href={$row['bannerUrl']} class='banner-btn'>Shop now</a>";
        echo "</div>";
        echo "</div>";
    }

}

function loadCategory()
{
    global $conn;

    $query = 'SELECT * FROM `category`';

    $result = $conn->query($query);


    while ($row = $result->fetch_assoc()) {

        echo "<div class='category-item'>";
        echo "<div class='category-img-box'>";
        echo "<img src='" . $row['categoryImage'] . "' alt='dress & frock' width='30'>";
        echo "</div>";
        echo "<div class='category-content-box'>";
        echo "<div class='category-content-flex'>";
        echo "<h3 class='category-item-title'>{$row['categoryTitle']}</h3>";
        echo "<p class='category-item-amount'>({$row['categoryNumber']})</p>";
        echo "</div>";
        echo "<a href={$row['categoryUrl']} class='category-btn'>Show all</a>";
        echo "</div>";
        echo "</div>";

    }

}

function loadFashionCat()
{

    global $conn;

    $query = 'SELECT * FROM `fashioncat`';

    $result = $conn->query($query);

    while ($row = $result->fetch_assoc()) {
        echo "<div class='product-showcase'>";
        echo "<h2 class='title'>{$row['catName']}</h2>";
        echo "<div class='showcase-wrapper has-scrollbar'>";
        echo "<div class='showcase-container'>";
        loadItemSmall($row['catName']);
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
}

function loadItemSmall($itemCat)
{

    global $conn;

    $query = "SELECT * FROM `items` where itemCat ='" . $itemCat . "'";

    $result = $conn->query($query);
    while ($row = $result->fetch_assoc()) {
        echo "<div class='showcase'>";
        echo "<a href='#' class='showcase-img-box'>";
        echo "<img src='" . $row['itemImage'] . "'alt='relaxed short full sleeve t-shirt' width='70' class='showcase-img'>";
        echo "</a>";
        echo "<div class='showcase-content'>";
        echo "<a href='#'>";
        echo "<h4 class='showcase-title'>{$row['itemTitle']}</h4>";
        echo "</a>";
        echo "<a href='#' class='showcase-category'>Clothes</a>";
        echo "<div class='price-box'>";
        echo "<p class='price'>₹{$row['salePrice']}</p>";
        echo "<del>₹{$row['usualPrice']}</del>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
}

function loadFeaturedProduct()
{

    global $conn;

    $query = "SELECT * FROM `items` ORDER BY itemId DESC LIMIT 3";

    $result = $conn->query($query);

    while ($row = $result->fetch_assoc()) {

        echo "<div class='showcase-container'>";
        echo "<div class='showcase'>";
        echo "<div class='showcase-banner'>";
        echo "<img src='" . $row['itemImage'] . "' alt='shampoo, conditioner & facewash packs' class='showcase-img'>";
        echo "</div>";
        echo "<div class='showcase-content'>";
        echo "<a href='#'>";
        echo "<h3 class='showcase-title'> {$row['itemTitle']} </h3>";
        echo "</a>";
        echo "<p class='showcase-desc'>";
        echo "{$row['itemDesc']}";
        echo "</p>";
        echo "<div class='price-box'>";
        echo "<p class='price'>₹{$row['salePrice']}</p>";
        echo "<del>₹{$row['usualPrice']}</del>";
        echo "</div>";
        echo "<button class='add-cart-btn'>add to cart</button>";
        echo "</div>";
        echo "</div>";
        echo "</div>";

    }

}

function loadNewProducts()
{
    $count = 12;

    global $conn;

    $query = "SELECT * FROM `items` ORDER BY itemId DESC LIMIT $count";

    $result = $conn->query($query);

    while ($row = $result->fetch_assoc()) {

        echo "<div class='showcase'>";
        echo "<div class='showcase-banner'>";
        echo "<img src='".$row['itemImage']."' alt='Mens Winter Leathers Jackets' width='300' class='product-img default'>";
        echo "<img src='".$row['itemImage']."' alt='Mens Winter Leathers Jackets' width='300' class='product-img hover'>";
        echo "</div>";
        echo "<div class='showcase-content'>";
        echo "<a href='#' class='showcase-category'>${row['itemType']}</a>";
        echo "<a href='#'>";
        echo "<h3 class='showcase-title'>${row['itemTitle']}</h3>";
        echo "</a>";
        echo "<div class='price-box'>";
        echo "<p class='price'>₹${row['salePrice']}</p>";
        echo "<del>₹${row['usualPrice']}</del>";
        echo "</div>";
        echo "</div>";
        echo "</div>";

    }


}

?>
