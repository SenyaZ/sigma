<?php

    include "index.php";
    for($i = 0; $i < count($arrProd); $i++) {
        echo '<div class="card" style="width: 18rem;">';
            echo "<img src='". $arrProd[$i]->getImage() ."' class='card-img-top' alt='...'>" .
                '<div class="card-body">';
            echo "<h5 class='card-title'>". $arrProd[$i]->getName() ."</h5>";
            echo "<p class='card-text'>". $arrProd[$i]->getDescription() ."</p>";
            echo "<a href='backet.php?".$arrProd[$i]->getId()."' class='btn btn-primary' @click=\"plus()\"'>Add to cast</a></div></div>";

    }

?>
