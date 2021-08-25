<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
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
        </ul>
    </nav>
    <!-- php -->
<div>
<h1>cart</h1>
        <?php
           session_start();

           include("connection.php");
           include("functions.php");
   
         //  $user_data = check_login($con);
        ?>
    </div>

    Hello, <?php echo $_SESSION['user_name']; ?>   
    <form method="post">
     <button type="submit" name="empty_cart" class="form_submitbtn" style="float:right;"><i class="fas fa-trash-alt"></i>Empty cart </button><br /><br /><br />
   </form>
    <?php
        if (isset($_POST["empty_cart"])) {
            foreach ($_SESSION["cart"] as $keys => $values) {
                unset($_SESSION["cart"][$keys]);
                header("refresh:0;url=index.php");
            }
        }
    ?> 
    <table>
        <tr class="header-row">
          
          <th style="border-left:0px;" colspan="2">    Product      </th>
          <th>Quantity</th>
          <th>price</th>
          <th>total</th>
          
        </tr>
        <?php
$grand_total = 0;
if (empty($_SESSION["cart"])) {
?>
        <tr class="empty-cart" ><td colspan="5">Cart has no item</td></tr>
      <?php
}
if (!empty($_SESSION["cart"])) {
    $total = 0;
    foreach ($_SESSION["cart"] as $keys => $values) {
?>
            <tr>
              <?php
        $item = $values["item_id"];
        $sql =  "SELECT food_name,foodId,image FROM food WHERE foodId=$item  ";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<td style='border-right:0px;'>
                 <img class=' shopping_image' style='width:10em' src='IMG/" . $row['image'] . "'>
                 </td> ";
                echo "<td style='border-left:0px;'>" . $row["food_name"] . "</td>";
            }
        } else {
            
        }
?>
              <td>
              <a class="quantity-action" href="cart.php?action3=delete&id=<?php echo $values["item_id"]?>"> <i class="fas fa-minus"></i></a>
             <span class="quantity-value"> <?php echo $values["item_quantity"]; ?></span>
              <a class="quantity-action" href="cart.php?action2=add&id=<?php echo $values["item_id"]?>"> <i class="fas fa-plus"></i></a>
             </td><td>
                <?php echo $values["item_price"]; ?>
              </td><td>
                <?php
        $product_total = $values["item_price"] * $values["item_quantity"];
        echo $product_total;
        echo "<a class='delete-cart' href='cart.php?action=delete&id=".$values["item_id"]."'>Remove</a>";
        $grand_total = $grand_total + $product_total;
?>
              </td><td>
                
                
                <br />
                <br />

              </td>
            </tr>
            <?php
    }
}
if (isset($_GET["action"])) {
    if (isset($_GET["action"]) == "delete") {
        foreach ($_SESSION["cart"] as $keys => $values) {
          
            if ($values["item_id"] == $_GET["id"]) {
                unset($_SESSION["cart"][$keys]);
                echo "<script>window.location='cart.php'</script>";
            }
        }
    }
    
}
if (isset($_GET["action2"])) {
  if (isset($_GET["action2"]) == "add") {
    $new=2;
    foreach($_SESSION["cart"] as &$value){
        if($value['item_id'] === $_GET["id"]){
            $value['item_quantity'] = $value['item_quantity'] +1;
            break; // Stop the loop after we've found the item
  
        }
    }
    echo "<script>window.location.replace('cart.php');</script>";
  }
}
if (isset($_GET["action3"])) {
  if (isset($_GET["action3"]) == "delete") {
    $new=2;
    foreach($_SESSION["cart"] as &$value){
        if($value['item_id'] === $_GET["id"]){
          if($value['item_quantity']!=1){
            $value['item_quantity'] = $value['item_quantity'] -1;
          }else if($value['item_quantity']){
            unset($_SESSION["cart"][$keys]);
          }
            break; // Stop the loop after we've found the item
  
        }
    }
    echo "<script>window.location.replace('cart.php');</script>";
  }
}
?>

</form>
      </table>
      <div class="cart-content">
             <form method="post">
               <span>Grand Total(Ksh):</span>
               <input class="grand-total" readonly value="<?php echo  number_format($grand_total, 2, '.', ''); ?>" name="grand_total"/><br>
               <button class="btn button-dark" name="checkout" type="submit">
                  place order
               </button>
             </form>
             <?php
// insert into orders table
// insert into orders table
             $t=time();
             $cart_id=  $_SESSION['user_Id'].$t;

             if(isset($_POST["checkout"])){
               if(!empty($_SESSION["cart"])){
               $grand_total=$_POST["grand_total"];
               $user=$_SESSION['user_Id'];
               $sql="INSERT INTO orders(grandTotal,userId,cartId) VALUES('$grand_total','$user','$cart_id')";
               if(mysqli_query($con,$sql)){
                 // echo "\r\n Record added successfully to user table";
               }
               else{
                 echo "\r\n Record not inserted ".mysqli_error($con);
              }
        // select order Id
        $sql_order = "SELECT orderId FROM orders WHERE cartId='$cart_id' ";
        $result = $con->query($sql_order);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $order = $row["orderId"];
            }
        }
        // add to cart items
        $total = 0;
        foreach ($_SESSION["cart"] as $keys => $values) {
            $product_total = $values["item_price"] * $values["item_quantity"];
            $id = $values["item_id"];
            $quantity = $values["item_quantity"];
            $cart_items = "INSERT INTO cart_items(productId,orderId,quantity,totalPrice) VALUES ('$id','$order','$quantity','$product_total')";
            if (mysqli_query($con, $cart_items)) {
                // echo "\r\n Record added successfully to user table";
                unset($_SESSION["cart"][$keys]);
            } else {
                echo "\r\n Record not inserted " . mysqli_error($con);
            }
?>
                  <script>alert('Your order has been placed');
                      window.location.replace('index.php');</script>";
                  <?php
        }
    } else {
        echo "<script>alert('please add items to cart first')</script>";
    }
}
?>
</body>
</html>