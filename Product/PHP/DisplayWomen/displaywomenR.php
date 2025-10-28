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

$sqleven = "SELECT Id,Name,Price,Image FROM addproducts WHERE Gender = 'female' AND Id % 2 = 0;";
$resulteven = mysqli_query($conn, $sqleven);
$resultCheckeven = mysqli_num_rows($resulteven);

if($resultCheckeven > 0) {
    while($row = mysqli_fetch_assoc($resulteven)){
        echo'<a href="..\Checkout\checkout.html?id='.$row['Id'].'">';
        echo '<div class="display6">'.

        '<img src="data:image/png;charset=utf8;base64,'. base64_encode($row['Image']) .'";"/>'

        .'</div>'."<br>";
        echo '<div class="name2">' . $row['Name'] . '</div>' ."<br>";
        echo '<div class="price2"> $ ' . $row['Price'] . '. <span>99</span>' . '</div>' ."<br>";
        echo'</a>';
        echo '<div class="img2"><img src="Assets/Plus.svg" alt=""></div>';
    }
}

?> 

<style>

a{
        text-decoration: none;
    }

    .display6{
        position: relative;
        top: 135px;
        left: 245px;
        background-color: #7A615A;
        width: 160px;
        height: 210px;
        border-radius: 30px;
        z-index: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: -50px;
    }

    .display6 img{
        background-size: contain;
        width: 130px;
    }

    .name2{
    position: relative;
    top: 140px;
    left: 245px;
    font-size: 12px;
    color: #79462E;
    font-weight: 600;
    }

    .price2{
    position: relative;
    left: 245px;
    top: 125px;
    color: #88614F;
    font-size: 20px;
    font-weight: 600;
    position: relative;
    }

    .price2 span{
    font-size: 19px;
    position: relative;
    bottom: 5px;
    right: 5px;
    }

    .img2 img{
    position: relative;
    top: 65px;
    left: 365px;
    width: 40px;
    z-index: 1;
    }


</style>

</body>
</html>