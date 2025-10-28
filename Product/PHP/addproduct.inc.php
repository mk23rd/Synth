<?php

include_once './Connection/dbh.inc.php';

    // If file upload form is submitted 
$statusMsg = ''; 
if(isset($_POST["submit"])){ 
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif','svg'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
             
            $name  = $_POST['name'];
            $price  = $_POST['price'];
            $quantity  = $_POST['quantity'];
            $category  = $_POST['category'];
            $gender  = $_POST['gender'];
            $imgContent = addslashes(file_get_contents($image));

                if(empty($name) || empty($price) || empty($quantity) || empty($category) || empty($gender) || empty($imgContent) || $quantity<=0 || $price<=0){
    
                }
                else{
                    $sql = "INSERT INTO addproducts (Name, Price, Quantity, Category, Gender, Image) VALUES ('$name', '$price', '$quantity', '$category', '$gender', '$imgContent');";
            
                    mysqli_query($conn, $sql);

                }
            
            if($sql){  
                $statusMsg = "File uploaded successfully."; 
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
}

echo $statusMsg;

header("Location: insert.php");
?>