<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="updateuse.css">
</head>
<body>
    <h1>Admin</h1>
    <h3>Update Existing Users</h3>
    <div class="links">
        <a href="./insert.php">Add Product</a>
        <a href="./updateprod.php">Update Product</a>
        <a href="./updateuse.php">Update User</a>
    </div>


<form action="./updateuser.inc.php" method="POST" enctype="multipart/form-data">
        <label for="id" class="id">Insert the Id of the User to Update</label> <br>
        <input type="text" name="id"  id="id" placeholder="Id">
        <br>

        <label for="name">Name of User</label> <br>
        <input type="text" name="name"  id="name" placeholder="Name">
        <br>

        <label for="email">Email of User</label> <br>
        <input type="email" name="email" id="email" placeholder="Email" class="email-signup">
        <br>

        <label for="password">Password of User</label> <br>
        <input type="password" name="password" id="password" placeholder="Password" class="pass-signup">
        <br>

        <label for="number">Money of User</label> <br>
        <input type="number" name="money" id="money" placeholder="Money" min="25" class="money-signup">
        <br>

        <button type="submit" name="submit" id="submit">Update User</button>
    </form>
    
</body>
</html>