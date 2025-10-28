<?php
session_start();
?>


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

echo'<h1>Searched Results ...</h1>';
echo'<div class = "back-btn"><a href="../product.html"><img src="../Assets/BackIn.svg" alt=""></a></div>';

include_once './Connection/dbh.inc.php';

$search = $_POST['search'];

$sql = "SELECT * FROM addproducts WHERE Name = '$search';";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0) {

    while($row = mysqli_fetch_assoc($result)){

        /* $cookie_search = $row['Name'];  
        setcookie('userSearch', $cookie_search, time() + (86400 * 1), "/");
        echo $cookie_search; */


        $_SESSION["searched"] = $row['Name'];
        echo $_SESSION["searched"];
    }
}


header("Location: ../product.html");

?> 
</body>
</html>