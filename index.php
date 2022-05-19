<?php

    include "app/Product.php";
    include "app/include/database.php";

    $arrProd = [];

    $arrDbProduct = selectAll("productlist");
    foreach ($arrDbProduct as $arrInside){
        $arrProd[] = new Product($arrInside['id'],$arrInside['name'],$arrInside['description'],$arrInside['image'],$arrInside['price'],$arrInside['count']);
    }

    $arrBasket = [];
    $arrDbBasket = joinTables();

    foreach ($arrDbBasket as $arrInside){
        $arrBasket[] = new Product($arrInside['id'],$arrInside['name'],$arrInside['description'],$arrInside['image'],$arrInside['price'],$arrInside['count']);
    }
