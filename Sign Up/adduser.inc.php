<?php

include_once './dbh.inc.php';

        $name  = $_POST['name'];
        $email  = $_POST['email'];
        $password  = $_POST['password'];
        $money  = $_POST['money'];

        if(empty($name) || empty($email) || empty($password) || empty($money) || $money<=0){
                
        }
        else{
                $sql = "INSERT INTO userinfo (Name, Email, Password, Money) VALUES ('$name', '$email', '$password', '$money');";
            
                mysqli_query($conn, $sql);

        }      

header("Location: signup.html");
?>