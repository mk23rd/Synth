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

    $name  = $_POST['name'];
    $password  = $_POST['password'];

    $sql = "SELECT * FROM userinfo WHERE Name = '$name' AND Password = '$password';";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0) {
        while($row = mysqli_fetch_assoc($result)){
            echo'<div class="logo-signin">
            <div class="left-image"><img src="Assets/FootLIn.svg" alt=""></div>
            <div class="center-word">Synth</div>
            <div class="right-image"><img src="Assets/FootRIn.svg" alt=""></div>
            </div>';

            echo'<div class = "success-wrapper"></div>';
            echo'<div class = "success-paragraph">Welcome ' . $row['Name'] .'</div>';
            echo'<div class = "success-homebtn"><a href="../Home/home.html">Continue To Home</a></div>';
            $cookie_value = $row['Id'];
            setcookie('userId', $cookie_value, time() + (86400 * 1), "/"); //86400 = 1 day
            $cookie_name = $row['Name'];
            setcookie('userName', $cookie_name, time() + (86400 * 1), "/");
        }
    }
    else{
        echo'<div class="logo-signup">
        <div class="left-image"><img src="Assets/FootLUp.svg" alt=""></div>
        <div class="center-word">Synth</div>
        <div class="right-image"><img src="Assets/FootRUp.svg" alt=""></div>
        </div>';

        echo'<div class = "failure-wrapper"></div>';
        echo'<div class = "failure-paragraph">Account Not Found</div>';
        echo'<div class = "failure-backbtn"><a href="./signup.html"><input type="image" src="Assets/BackUp.svg" alt=""></a></div>';
    }


?>

<style>

*{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

.failure-wrapper{
    /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#79462e+0,79462e+100&1+0,0.81+100 */
background: -moz-linear-gradient(45deg,  rgba(121,70,46,1) 0%, rgba(121,70,46,0.81) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(45deg,  rgba(121,70,46,1) 0%,rgba(121,70,46,0.81) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(45deg,  rgba(121,70,46,1) 0%,rgba(121,70,46,0.81) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#79462e', endColorstr='#cf79462e',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */

    background-repeat: no-repeat;
    height: 100vh;
}

.logo-signup{
    display: flex;
    justify-content: center;
    align-items: center;
    color: #D8DAB3;
    position: absolute;
    top: 100px;
    left: 40%;
}

.logo-signup .center-word{
    font-size: 52px;
    font-weight: 600;
}

.logo-signup .left-image{
    position: relative;
    top: -39px;
    right: 10px;
}

.logo-signup .right-image{
    position: relative;
    top: 39px;
    right: -10px;
}

.failure-paragraph{
    position: absolute;
    font-size: 45px;
    font-weight: 600;
    top: 350px;
    left: 35%;
    color: #D8DAB3;
}

.failure-backbtn{
    position: absolute;
    top: 30px;
    left: 15px;
    width: 30px;
}

.failure-backbtn input{
    width: 60px;
}

.success-wrapper{
                /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#dadbb6+0,ffffff+100 */
background: rgb(218,219,182); /* Old browsers */
background: -moz-linear-gradient(45deg,  rgba(218,219,182,1) 0%, rgba(255,255,255,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(45deg,  rgba(218,219,182,1) 0%,rgba(255,255,255,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(45deg,  rgba(218,219,182,1) 0%,rgba(255,255,255,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#dadbb6', endColorstr='#ffffff',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */

height: 100vh;
background-repeat: no-repeat;

}

.logo-signin{
    display: flex;
    justify-content: center;
    align-items: center;
    color: #79462e;
    position: absolute;
    top: 60px;
    left: 43%;
}

.logo-signin .center-word{
    font-size: 52px;
    font-weight: 600;
}

.logo-signin .left-image{
    position: relative;
    top: -39px;
    right: 10px;
}

.logo-signin .right-image{
    position: relative;
    top: 39px;
    right: -10px;
}

.success-paragraph{
    position: absolute;
    font-size: 45px;
    font-weight: 600;
    top: 250px;
    left: 40%;
    color: #79462e;
}

.success-homebtn{
    position: absolute;
    top: 330px;
    left: 40%;
    width: 300px;
    height: 60px;
    border: none;
    border-radius: 15px;
    font-size: 28px;
    font-weight: 600;
    background-color: #79462e;
}

.success-homebtn a{
    text-decoration: none;
    color: #D8DAB3;
    display: flex;
    justify-content: center;
    position: relative;
    top: 12px;
}


</style>
    
</body>
</html>