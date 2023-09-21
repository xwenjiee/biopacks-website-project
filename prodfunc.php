<?php
function product($productID,$productName, $productImg, $productPrice, $productDesc){
    $element = "

    <div class=\"prod\"><a href=\"$productDesc\"class=\"bar2\" ><img class=\"prodimg\" src=\"$productImg\" alt=\"Image1\" ><br>
    $productName<br>
    RM $productPrice
    </a>

    </div>

    ";
    echo $element;
}


