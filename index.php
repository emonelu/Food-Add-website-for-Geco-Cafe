<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geco Cafe</title>
    <script src="https://kit.fontawesome.com/b2d1a2836c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/Projects/geco_cafe/CSS/style.css">
</head>
<body>
    <h1>Geco Café</h1>
    <img src="/Projects/geco_cafe/IMG/gecoCafe_logo.jpg" alt="Logo" class="logo">
    <nav>
        <ul>
            <a href="/Projects/geco_cafe/index.php"><li>Home</li></a>
            <a href="/Projects/geco_cafe/cart.php"><li>cart</li></a>
            <a href="/Projects/geco_cafe/about.php"><li>About Us</li></a>
            <a href="/Projects/geco_cafe/logout.php"><li>logout</li></a>
        </ul>
    </nav>

<!-- php -->
<div>
<?php
           session_start();
      


        include("connection.php");
        include("functions.php");

        $user_data = check_login();


       
        ?>
    </div>
    Hello, <?php echo $_SESSION['user_name']; ?>


    <section class="items">
    <?php
    
        $sql = "SELECT * FROM `food` ORDER BY `foodId` DESC";
        $result = $con->query($sql);
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
       
        ?>
        <div class="item">
            <?php echo "<img class='table_img' src='IMG/" .$row['image']."' >" ?>
                <h4><?php echo $row['food_name']; ?></h4>
                <h4><?php echo $row['price']; ?></h4>
                
                <?php
                $foodId=$row['foodId'];
                $foodPrice=$row['price'];
                $foodname=$row['food_name'];
                echo "<form method='post' class='product-form'>
                <input type='number'id='quantity' class='quantity' name='quantity' controls='no' value='1'/>
                <input type='hidden' name='foodId' value=$foodId />
                <input type='hidden' name='hidden_price' value=$foodPrice />
                <input type='hi' name='hidden_name' value=$foodname />
                <br />
                <button type='submit' name='add_to_cart' class='btn button-ghost'>Add To cart</button>
              </form>";
                if(isset($_POST['add_to_cart'])){
                    if(isset($_SESSION["cart"])){
                      $item_array_id= array_column($_SESSION["cart"],"item_id");
                      if(!in_array($_GET["id"],$item_array_id)){
                        $count=count($_SESSION["cart"]);
                        $item_array= array(
                          'item_id'=> $_POST["foodId"],
                          'item_name'=> $_POST["hidden_name"],
                          'item_price'=>$_POST["hidden_price"],
                          'item_quantity'=> $_POST["quantity"]
                        );
                        $_SESSION["cart"][$count]=$item_array;
                        echo "<script>window.location='index.php'</script>";
                      }else{
                        echo "<script>alert('item added')</script>";
                      }
                    }else{
                      $item_array = array(
                        'item_id'=> $_POST["foodId"],
                        'item_name'=> $_POST["hidden_name"],
                        'item_price'=>$_POST["hidden_price"],
                        'item_quantity'=> $_POST["quantity"]
                       );
                       $_SESSION["cart"][0]=$item_array;
                       echo "<script>alert('item added')</script>";
                    }
                  }
                ?>
        </div>
   
        <?php
        }
    } else {
        echo "<tr><td>No food in  the database</td></tr>";
    }
        ?>

        
    </section>


    <div class="footer">
        <a href="https://facebook.com/GecoCafe">
            <img src="/Projects/geco_cafe/IMG/facebook.png" alt="facebook" width="70" height="70">
            </a>
            <a href="https://www.instagram.com/geco_cafe/">
                <img src="/Projects/geco_cafe/IMG/instagram.png" alt="instgram" width="70" height="70">
                </a>
           </div>
        
</body>
</html>