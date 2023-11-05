<?php

session_start();

$ids = $_SESSION['cart'];

foreach ($ids as $id){
    echo "<br>" . $id;
}


?>
