<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="updateprod.css">
</head>
<body>
    <h1>Admin</h1>
    <h3>Update Existing Products</h3>
    <div class="links">
        <a href="./insert.php">Add Product</a>
        <a href="./updateprod.php">Update Product</a>
        <a href="./updateuse.php">Update User</a>
    </div>


<form action="./updateproduct.inc.php" method="POST" enctype="multipart/form-data">
        <label for="id" class="id">Insert the Id of the Product to Update</label> <br>
        <input type="text" name="id"  id="id" placeholder="Id">
        <br>

        <label for="name">Name of Product</label> <br>
        <input type="text" name="name"  id="name" placeholder="Name">
        <br>

        <label for="price">Price of Product</label> <br>
        <input type="text" name="price"  id="price" placeholder="Price">
        <br>

        <label for="quantity">Quantity of Product</label> <br>
        <input type="text" name="quantity"  id="quantity" placeholder="Quantity">
        <br>

        <label for="category">Category of Product</label> <br>
        <select id="category" name="category">
            <option value="jacket">Jacket</option>
            <option value="bag">Bag</option>
            <option value="belt">Belt</option>
        </select>
        <br>

        <label for="gender">Gender</label> <br>
        <select id="gender" name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        <br>

        <label for="image">Image</label>
        <input type="file" name="image" id="image">

        <button type="submit" name="submit" id="submit">Update Product</button>
    </form>
    
</body>
</html>