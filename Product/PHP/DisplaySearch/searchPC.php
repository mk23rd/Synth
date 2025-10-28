<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
include_once 'dbh.inc.php';

error_reporting(E_ERROR | E_PARSE);

$searched = $_SESSION["searched"];

if(empty($searched)){


$sqlall = "SELECT Id,Name,Price,Image FROM addproducts;";
$resultall = mysqli_query($conn, $sqlall);
$resultCheckall = mysqli_num_rows($resultall);

if($resultCheckall > 0) {
    echo '<div class="product-container">';
    while($row = mysqli_fetch_assoc($resultall)){
        if($row['Id']%2==0){
            
            echo '<div class="product">';

            echo '<a href="..\Checkout\checkout.html?id='.$row['Id'].'">';
            echo '<img class="product-img-one" src="data:image/png;charset=utf8;base64,'. base64_encode($row['Image']) .'";"/>';
            
            echo '<div class="product-desc">';
            echo '<p class="product-name">' . $row['Name'] . '</p>';
            echo '<p class="product-price"> $ ' . $row['Price'] . '. <span>99</span>' . '</p>'.'</div>';
            echo '</a>';
            echo '</div>';

        }else{

            echo '<div class="product">';

            echo '<a href="..\Checkout\checkout.html?id='.$row['Id'].'">';
            echo '<img class="product-img-two" src="data:image/png;charset=utf8;base64,'. base64_encode($row['Image']) .'";"/>';
    
            echo '<div class="product-desc">';
            echo '<p class="product-name">' . $row['Name'] . '</p>';
            echo '<p class="product-price"> $ ' . $row['Price'] . '. <span>99</span>' . '</p>'.'</div>';
            echo '</a>';
            echo '</div>';
        }
       
    }
    echo '</div>';
}

}




else{

$sqlall = "SELECT Id,Name,Price,Image FROM addproducts WHERE Name = '$searched';";
$resultall = mysqli_query($conn, $sqlall);
$resultCheckall = mysqli_num_rows($resultall);

if($resultCheckall > 0) {
    echo '<div class="product-container">';
    while($row = mysqli_fetch_assoc($resultall)){
        if($row['Id']%2==0){
            
            echo '<div class="product">';

            echo '<a href="..\Checkout\checkout.html?id='.$row['Id'].'">';
            echo '<img class="product-img-one" src="data:image/png;charset=utf8;base64,'. base64_encode($row['Image']) .'";"/>';
            
            echo '<div class="product-desc">';
            echo '<p class="product-name">' . $row['Name'] . '</p>';
            echo '<p class="product-price"> $ ' . $row['Price'] . '. <span>99</span>' . '</p>'.'</div>';
            echo '</a>';
            echo '</div>';

        }else{

            echo '<div class="product">';

            echo '<a href="..\Checkout\checkout.html?id='.$row['Id'].'">';
            echo '<img class="product-img-two" src="data:image/png;charset=utf8;base64,'. base64_encode($row['Image']) .'";"/>';
    
            echo '<div class="product-desc">';
            echo '<p class="product-name">' . $row['Name'] . '</p>';
            echo '<p class="product-price"> $ ' . $row['Price'] . '. <span>99</span>' . '</p>'.'</div>';
            echo '</a>';
            echo '</div>';
        }
       
    }
    echo '</div>';
}

session_unset();

}

?>

<style>
    .product{
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


    .product .product-img-two{
    width: 100%;
    height: 90%;
    border-radius: 20px;
    background-color: #88543B;
    object-fit: contain;   
}
</style>


</body>
</html>