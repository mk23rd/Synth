<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart - Synth</title>
    <link rel="icon" type="image/png" href="../Images/logo.png">
</head>
<body>


<?php

include_once './dbh.inc.php';

error_reporting(E_ERROR | E_PARSE);

$userid = $_COOKIE['userId'];

/* $sqlall = "SELECT userId , productId from user u join product p where u = ;"; */
$sqlall = " SELECT c.cartId, ap.Id, ap.Name, ap.Price, ap.Image, c.quantityCart
            FROM cart c
            JOIN addproducts ap 
            ON c.productId = ap.Id
            WHERE c.userId  = '$userid';";

$resultall = mysqli_query($conn, $sqlall);
$resultCheckall = mysqli_num_rows($resultall);

if($resultCheckall > 0) {
    echo '<div class="cart-container">';
    while($row = mysqli_fetch_assoc($resultall)){

            echo '<div class="cart-item">';

            echo '<img class="cart-img" src="data:image/png;charset=utf8;base64,'. base64_encode($row['Image']) .'";"/>';

            echo '<div class= "cart-description">';   

            echo '<p class="cart-name">' . $row['Name'] . '</p>';
            echo '<p class="cart-quantity">' . $row['quantityCart'] . ' Items</p>';
            echo '<p class="cart-price"> $ ' . $row['Price'] . '. <span>99</span>' . '</p>';

            echo'</div>';

            echo '<a href="./remove.php?id='.$row['Id'].'" class="class-delete"><img src = "./Assets/Minus.svg"/></a>';
            echo '</div>';


            echo'<p class="buy-now"></p>';

            $quantityCart = $row['quantityCart'];
            $price=$row['Price'];
            $totPrice = $quantityCart * $price;
            $finalPrice = $finalPrice + $totPrice;


        }

        echo'<div class="form-wrap">';

        echo'<form action="./cart-buy.php?id=" method="post">';

        echo'<input type="submit" value="Check Out" id="btn-buy" class="btn-buy">';

        echo'<p>Total Price: ' . $finalPrice . '</p>';

        echo'</form>';

        echo'</div>';

    echo'</div>';}
?>

<style>

    .cart-container{
        /* border: 1px solid black; */
        position: relative;
        margin-top: 10px;
        width: 445px;
        height: auto;
        display: flex;
        flex-direction: column;
        gap: 10px;
        padding-left: 10px;
    }

    .cart-item{
        display: flex;
        justify-content: space-between;
        background-color: #dbddb3;
        gap: 30px;
        border-radius: 20px;
    }

    .cart-img{
        width: 90px;
        height: 90px;
        border-radius: 20px;
        background-color: #88543B;
        object-fit: contain;
    }

    .cart-description{
        display: flex;
        background-color: #dbddb3;
        justify-content: center;
        align-items: center;
        gap: 18px;
        font-weight: 600;
        font-size: 17px;
        color: #88543B;
    }

    .class-delete{
        display: flex;
        padding-right: 10px;
    }

    .class-delete img{
        width: 40px;
    }

    .form-wrap{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding-bottom: 15px;
    }

    .btn-buy{
        width: 180px;
        height: 40px;
        background-color: #D69F4F;
        color: #FFFFFF;
        font-size: 17px;
        border-color: transparent;
        border-radius: 15px; 
        z-index: 1;   
    }



    /*     .product{
        position: relative;
        top: 30px;
        z-index: -1;
    }

    .product a{
        text-decoration: none;
        color: #775952;
        font-weight: 600;
        font-size: 18px;
    }


    .product .product-img-one{
    width: 100%;
    height: 90%;
    border-radius: 20px;
    background-color: #88543B;
    object-fit: contain;   
} */
</style>
    
</body>
</html>