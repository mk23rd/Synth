<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="display.css">
</head>

<body>
    
<?php

include_once 'PHP/Connection/dbh.inc.php';

$sqlodd = "SELECT Id,Name,Price,Image FROM addproducts WHERE Gender = 'male' AND Id % 2 != 0;";
$resultodd = mysqli_query($conn, $sqlodd);
$resultCheckodd = mysqli_num_rows($resultodd);


if($resultCheckodd > 0) {
    while($row = mysqli_fetch_assoc($resultodd)){
        echo'<a href="..\Checkout\checkout.html?id='.$row['Id'].'">';
        echo '<div class="display5">'.

        '<img src="data:image/png;charset=utf8;base64,'. base64_encode($row['Image']) .'";"/>'

        .'</div>'."<br>";
        
        echo '<div class="name1">' . $row['Name'] . '</div>' ."<br>";
        echo '<div class="price1"> $ ' . $row['Price'] . '. <span>99</span>' . '</div>' ."<br>";
        echo'</a>';
        echo '<div class="img1"><img src="Assets/Plus.svg" alt=""></div>';
    }
}


?> 

<style>

a{
        text-decoration: none;
    }

    .display5{
        position: relative;
        top: 175px;
        left: 25px;
        background-color: #88543B;
        width: 160px;
        height: 210px;
        border-radius: 30px;
        margin-top: -50px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .display5 img{
        background-size: contain;
        width: 130px;
    }
    
    .name1{
    position: relative;
    top: 180px;
    left: 25px;
    font-size: 12px;
    color: #79462E;
    font-weight: 600;
    z-index: 1;
    }
    
    
    .price1{
    position: relative;
    left: 25px;
    top: 165px;
    color: #88614F;
    font-size: 20px;
    font-weight: 600;
    position: relative;
    }

    .price1 span{
    font-size: 15px;
    position: relative;
    bottom: 5px;
    right: 5px;
    }

    .img1 img{
    position: relative;
    top: 105px;
    left: 145px;
    width: 40px;
    }
</style>

</body>
</html>