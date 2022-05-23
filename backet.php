<? include_once "./public/template/header.php"?>
    <main id="components">
        <div class="container">
            <div class="card my-5 shadow">
                <div class="card-body">
                    <div class="row">


<?php
    include "index.php";
    $url1 = parse_url($_SERVER['REQUEST_URI']);


    if (!empty($url1['query']) && !empty($arrProd[$url1['query']]) ){
        echo '<h1>You added product to cast</h1>';

        $value = $url1['query'];

        if ($arrProd[$value]->getCounts() > 0) {
            print_r($arrProd[$value]->getCounts());
            $query = "INSERT INTO `backet` (`product_id`) VALUES ($value)";
            $res = $connection->prepare($query);
            $res->execute();




            $sql = "SELECT `count` FROM `productlist` WHERE `id` = 2;";
            $query = $connection->prepare($sql);
            $query->execute();
            checkError($query);
            $countOfProd = $query->fetch();
            $counter = $countOfProd['count'];
            $counter -= 1;
            $sql = "UPDATE `productlist` SET `count` = $counter WHERE `productlist`.`id` = $value;";
            $query = $connection->prepare($sql);
            $query->execute();
            $arrProd[$value]->sellProd();

        }
}

    for($i = 0; $i < count($arrBasket); $i++) {
        echo '<div class="card" style="width: 18rem;">';
        echo "<img src='". $arrBasket[$i]->getImage() ."' class='card-img-top' alt='...'>" .
            '<div class="card-body">';
        echo "<h5 class='card-title'>". $arrBasket[$i]->getName() ."</h5>";
        echo "<p class='card-text'>". $arrBasket[$i]->getDescription() ."</p>";
        echo "<a @click=\"minus\" href='delete.php?".$arrBasket[$i]->getId()."' class='btn btn-primary' @click='decriment();'>Delete from cast</a></div></div>";

    }
?>

  </div>
                </div>
            </div>
        </div>
    </main>

<?php include_once "./public/template/footer.php";