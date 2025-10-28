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

        $userid = $_COOKIE['userId'];

        $sqlall = " SELECT c.cartId, ap.Id, ap.Price, ap.Quantity, c.quantityCart, ui.Money
                    FROM cart c
                    JOIN addproducts ap 
                    JOIN userinfo ui
                    ON c.productId = ap.Id AND c.userId = ui.Id
                    WHERE c.userId  = '$userid';";

        $resultall = mysqli_query($conn, $sqlall);
        $resultCheckall = mysqli_num_rows($resultall);

        if($resultCheckall > 0) {
            $finalPrice = 0;
            while($row = mysqli_fetch_assoc($resultall)){ 
                $remainingQuantity = 0;
                $id = $row['Id']; 
                $dbMoney = $row['Money'];
                $quantityCart = $row['quantityCart'];
                $price=$row['Price'];
                $totPrice = $quantityCart * $price;
                $finalPrice = $finalPrice + $totPrice;

                $dbQuantity=$row['Quantity'];

                if($dbQuantity<$quantityCart){

                    header("Location: ../Checkout/Post Checkout/nostock.html");

                }
                else{
                    if($dbMoney>=$finalPrice && $dbQuantity>=$quantityCart){

                        $remainingQuantity = $dbQuantity - $quantityCart;
    
                        $sql="UPDATE addproducts
                        SET Quantity = $remainingQuantity
                        WHERE Id=$id;";
    
                        mysqli_query($conn, $sql);
                        /* header("Location: Post Checkout/purchased.html?id=$id"); */
    
                    }
                }
            }









            if($dbMoney>=$finalPrice && $dbQuantity>=$quantityCart){
            $dbMoney = $dbMoney-$finalPrice;

            $sql="UPDATE userinfo
            SET Money = $dbMoney
            WHERE Id=$userid;";
                    
            mysqli_query($conn, $sql);

            $sql="DELETE From cart
                  WHERE userId = $userid;";
                    
            mysqli_query($conn, $sql);
        
            }

            if($dbMoney>=$finalPrice && $dbQuantity>=$quantityCart){
                

                header("Location: cart-purchased.html?id=$id");
            }
            else if($dbMoney<$finalPrice){
                header("Location: ../Checkout/Post Checkout/nomoney.html");
            }

        }



        /* if (isset($_COOKIE['userId'])) {
            $userid = $_COOKIE['userId'];
            
    
            // echo "User ID: " . $userid;
            $sqlall = "SELECT Money FROM userinfo where Id = $userid;";
            $resultall = mysqli_query($conn, $sqlall);
            $resultCheckall = mysqli_num_rows($resultall);
            $totalPrice=0;
            if($resultCheckall > 0) {
                while($row = mysqli_fetch_assoc($resultall)){  
                    $dbMoney=$row['Money'];
                    
                    

                }

                $totalPrice=$price*$quantity;
                if($dbMoney>=$totalPrice&&$dbQuantity>=$quantity){
                    $dbMoney = $dbMoney-$totalPrice;

                    $sql="UPDATE userinfo
                    SET Money = $dbMoney
                    WHERE Id=$userid;";
                    
                    mysqli_query($conn, $sql);

                    $remainingQuantity = $dbQuantity-$quantity;

                    $sql="UPDATE addproducts
                    SET Quantity = $remainingQuantity
                    WHERE Id=$id;";

                    mysqli_query($conn, $sql);
                    header("Location: Post Checkout/purchased.html?id=$id");

                }else if($dbQuantity<$quantity){
                    header("Location: Post Checkout/nostock.html");  
                }
                else if($dbMoney<$totalPrice){
                    header("Location: Post Checkout/nomoney.html"); 
                }
            }
            


        } else {
            // The cookie is not set or has expired
            header("Location: ../Sign Up/signup.html");

        } */

        //}
        

    ?>
    
</body>
</html>