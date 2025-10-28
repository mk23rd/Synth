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

    include_once './dbh.inc.php';
    $id = $_GET['id'];

    $sqlodd = "SELECT Id,Name,Price,Quantity,Image FROM addproducts WHERE Id = $id;";
    $resultodd = mysqli_query($conn, $sqlodd);
    $resultCheckodd = mysqli_num_rows($resultodd);

    if($resultCheckodd > 0) {
        while($row = mysqli_fetch_assoc($resultodd)){
            echo '<div class="image-container">';
            echo '<img src="data:image/png;charset=utf8;base64,'. base64_encode($row['Image']) .'";"/>'; 
            echo'</div>';

            echo'<form action="./buynow.php?id='.$row['Id'].'" method="post">
        
                <label for="quantity" class="label-word">Quantity</label>
                <input type="text" id="quantity" name="quantity" class="input-bar"></br>
                <input type="submit" value="Buy Now" formaction="buynow.php?id='.$row['Id'].'" id="btn-buy" class="btn-buy">
                <input type="image" src="./Assets/Plus.svg" formaction="../Cart/addtocart.php?id='.$row['Id'].'" alt="" class="plus-btn">
  
                </form>';

            echo '<div class="name1">' . $row['Name'] . '</div>' ."<br>";
            echo '<div class="price1"> $ ' . $row['Price'] . '. <span>99</span>' . '</div>' ."<br>";
            echo '<div class="quantity1">' . $row['Quantity'] . ' Items Left In Stock</div>' ."<br>";
        }
    }


?>

<style>

    .btn-buy{
        position: absolute;
        top: 666px;
        left: 30px;
        width: 320px;
        height: 60px;
        background-color: #D69F4F;
        color: #FFFFFF;
        font-size: 25px;
        border-color: transparent;
        border-radius: 15px; 
        z-index: 1;
    }

    .plus-btn{
        z-index: 1;
        width: 60px;
        position: absolute;
        top: 666px;
        left: 370px;
    }

    .input-bar{
        position: absolute;
        top: 360px;
        left: 182px;
        width: 80px;
        height: 35px;
        border: 2px solid #79462E;
        border-radius: 10px;

    }

    .label-word{
        color: #79462E;
        top: 325px;
        left: 190px;
        font-size: 18px;
        font-weight: 600;
        position: absolute;
    }

    .image-container{
        display: flex;
        justify-content: center;
        align-items: center; 
    }

.image-container img{
        background-size: contain;
        width: 170px;
        position: relative;
        top: 20px;
    }

    .name1{
        font-size: 28px;
        color: #79462E;
        font-weight: 600;
        z-index: 1;
        position: absolute;
        top: 340px;
        left: 20px;
    }

    .price1{
        font-size: 28px;
        color: #79462E;
        font-weight: 600;
        z-index: 1;
        position: absolute;
        top: 340px;
        left: 340px;
    }

    .price1 span{
    font-size: 20px;
    position: relative;
    bottom: 8px;
    right: 5px;
    }

    .quantity1{
        color: #D8DAB3;
        position: absolute;
        top: 615px;
        left: 280px;
        z-index: 1;
        font-size: 17px;
        font-weight: 600;
    }

</style>
</body>
</html>