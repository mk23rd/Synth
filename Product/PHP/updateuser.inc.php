<?php

include_once './Connection/dbh.inc.php';

$id = $_POST['id'];
$name  = $_POST['name'];
$email  = $_POST['email'];
$password  = $_POST['password'];
$money  = $_POST['money'];

if(empty($name) || empty($email) || empty($password) || empty($money) || $money<=0){
    
}
else{
    $sql = "UPDATE userinfo SET Name = '$name', email = '$email', password = '$password', money = '$money' WHERE Id = '$id';";
            
    mysqli_query($conn, $sql);
}

header("Location: updateuse.php");
?>