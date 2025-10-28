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
        /* $quantity=$_POST['quantity']; */

        

        $sqlall = "DELETE FROM cart where productId = $id;";
        $resultall = mysqli_query($conn, $sqlall);

        header("Location: ./cartpc.html"); 
        /* $resultCheckall = mysqli_num_rows($resultall);

        if($resultCheckall > 0) {
            while($row = mysqli_fetch_assoc($resultall)){  

            }
        } */

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

    ?>

 <a href="./cartphone.html"></a>   
</body>
</html>