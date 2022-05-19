<?php
    include_once "./public/template/header.php";
    include "index.php";
    $url1 = parse_url($_SERVER['REQUEST_URI']);


    if (!empty($url1['query'])){
        echo '<h1>You delete product</h1>';

        $value = $url1['query'];
            $query = "DELETE FROM `backet` WHERE `backet`.`product_id` = $value";
            $res = $connection->prepare($query);
            $res->execute();
    }

    echo "<a href='backet.php' class='btn btn-primary'>Back to basket</a>";
