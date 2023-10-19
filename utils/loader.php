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


?>
