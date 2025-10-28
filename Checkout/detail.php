<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    
  </head>
  <body>


    <?php
        
        include_once './dbh.inc.php';
      $id = $_GET['id'];


      $sqlall = "SELECT Id,Name,Price,Quantity,Image FROM addproducts where Id = $id;";
$resultall = mysqli_query($conn, $sqlall);
$resultCheckall = mysqli_num_rows($resultall);

if($resultCheckall > 0) {
    while($row = mysqli_fetch_assoc($resultall)){  
      echo '<section class="details-page">
      <div class="details-image-part">
        <div class="details-image-container">';
          
        echo '<img class="the-picked-image" src="data:image/png;charset=utf8;base64,'. base64_encode($row['Image']) .'";"/>';

        echo '</div>

        <div class="recommendations">';
        
        echo '<p>' . $row['Quantity'] . ' Items Left In Stock</p>' ."<br>";
        echo '</div>
      </div>';

      
      
      echo '<div class="details-description-part">';
      echo '<p class="picked-name"  id="picked-name" >' . $row['Name'] . '</p>';
      
      
      echo '<p> Made From A Quality Leather Material</p>
        <div class="price-N-size">';
      
        echo'<p class="picked-product-price" id="picked-product-price">$ '. $row['Price'].'</p>';

        echo '
        </div>
        <div class="color-N-quantity">';

       
        echo  '<div class="color-picker">
              <p>Choose a color</p>
              <div class="colors">
                  
                  <img src="../Images/Red.png" alt="">
                  <img src="../Images/Green.png" alt="">
                  <img src="../Images/Purple.png" alt="">
              </div>

        </div>
        </div>';
        
        echo '
        <form action="buynow.php?id='.$row['Id'].'" method="post">
        
          
          <div class = "quantity-parent">
          <input type="number" id="quantity" name="quantity" class="quantity" placeholder="Quantity"></br>
          </div>
          <div class = "two-buttons">

            <input type="submit" value="Buy Now" formaction="buynow.php?id='.$row['Id'].'" id="btn-buy-now">
            <input type="submit" value="Add to Cart" formaction="../Cart/addtocart.php?id='.$row['Id'].'" id="btn-add-to-cart">
          
          </div>

        </form>';//this is where it goes when you click add to cart

      echo '
      </div>
    </section>';     
       
    }
}

  ?>
  
  

  <style>

    html{
    background: #dcddbb; /* Old browsers */
    background: -moz-linear-gradient(left,  #dcddbb 1%,#e7e8d0 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(left,  #dcddbb 1%,#e7e8d0 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to right,  #dcddbb 1%,#e7e8d0 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#dadbb7', endColorstr='#f2f2e6',GradientType=1 ); /* IE6-9 */

    }

    section{
      position: absolute;
      top: 100px;
    }

    .details-description-part{
      position: relative;
      top: 30px;
      height: 500px;
    }

    /* #btn-add-to-cart{
      background-color: #D69F4F;
      color: white;
      border: 1px solid #D69F4F;
      border-radius: 30px;
      position: relative;
      left: -90px;
    }
  

    

    #quantity{
      
      border: 1px solid #D69F4F;
      border-radius: 10px;
      width: 165px;
      height: 38px;
    } */
    form{
      display: flex;
      flex-direction: column;
    }

    .quantity-parent{
      display: flex;
      justify-content: center;
      align-items: center;

    }
    #quantity{
      width: 100px;
      height: 30px;
      background-color: white;
      color:#88543B;
      border: 1px solid #88543B;
      border-radius: 5px;
      
      margin-bottom: 10px;
      font-size: 17px;
    } 
    .picked-product-price{
      font-weight: 600;
      color: #79462E;
      font-size: 30px;
      position: relative;
      top: -25px;
    }

    .picked-name{
      font-weight: 600;
      color: #79462E;
      font-size: 30px;
    }

    .color-N-quantity{
      position: relative;
      top: 30px;
    }

    .two-buttons{
      display: flex;
      gap: 15px;
      margin-top: 15px;
    }

    #btn-buy-now{
      width: 170px;
      height: 40px;
      background-color: #D69F4F;
      color: #FFFFFF;
      border: 1px solid #D69F4F;
      border-radius: 10px;
    }


  </style>



    
  </body>


<script src="../../jquery.js"></script>
<script>


</script>
</html>
