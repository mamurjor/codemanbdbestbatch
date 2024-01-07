<?php


function aboutUs(){
    echo "Hadi is a bad boy";
}

function getinfo(){
    return "Allah Mohan";
}

function priceCal($qty,$price){
    $product_qty = $qty;
    $product_price = $price;
    $product_total_price = $product_price*$product_qty;

    return  $product_total_price;
}


?>