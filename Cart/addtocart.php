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
        $id = $_GET['id'];
        $quantity=$_POST['quantity'];

        if(empty($id) || empty($quantity)){
            header("Location: ../Checkout/checkout.html?id=$id");
        }
        else{
            $sqlall = "SELECT Id,Name,Price,Quantity FROM addproducts where Id = $id;";
        $resultall = mysqli_query($conn, $sqlall);
        $resultCheckall = mysqli_num_rows($resultall);

        if($resultCheckall > 0) {
            while($row = mysqli_fetch_assoc($resultall)){  
                $name=$row['Name'];
                $price=$row['Price'];
                $dbQuantity=$row['Quantity'];

            }
        }

        if (isset($_COOKIE['userId'])) {
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
                    /* $dbMoney = $dbMoney-$totalPrice;

                    $sql="UPDATE userinfo
                    SET Money = $dbMoney
                    WHERE Id=$userid;";
                    
                    mysqli_query($conn, $sql);

                    $remainingQuantity = $dbQuantity-$quantity;

                    $sql="UPDATE addproducts
                    SET Quantity = $remainingQuantity
                    WHERE Id=$id;"; */

                    $sql = "INSERT INTO cart (userId, productId, quantityCart) VALUES ('$userid','$id', '$quantity');";

                    /* $sql = "INSERT INTO cart (userId, productId, quantityCart)
                            SELECT ui.Id, ap.Id
                            FROM userInfo ui
                            JOIN addProducts ap ON ui.user_id = ap.user_id
                            WHERE userId  = '$userId' , productId = '$id', quantityCart = '$quantity';"; */

                    mysqli_query($conn, $sql);

                    header("Location: ../Product/product.html");
                    /* header("Location: Post Checkout/purchased.html?id=$id"); */

                }else if($dbQuantity<$quantity){
                    header("Location: ../Checkout/Post Checkout/nostock.html");  
                }
                else if($dbMoney<$totalPrice){
                    header("Location: ../Checkout/Post Checkout/nomoney.html"); 
                }
            }
            


        } else {
            // The cookie is not set or has expired
            header("Location: ../Sign Up/signup.html");

        }

        }
        

    ?>

    
</body>
</html>