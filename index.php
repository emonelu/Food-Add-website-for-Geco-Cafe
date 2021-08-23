<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geco Cafe</title>
    <link rel="stylesheet" href="/Projects/geco_cafe/CSS/style.css">
</head>
<body>
    <h1>Geco Café</h1>
    <img src="/Projects/geco_cafe/IMG/gecoCafe_logo.jpg" alt="Logo" class="logo">
    <nav>
        <ul>
            <a href="/Projects/geco_cafe/index.php"><li>Home</li></a>
            <a href="/Projects/geco_cafe/order.php"><li>Order</li></a>
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

        <div class="item">
            <img src="/Projects/geco_cafe/IMG/pizza.jpg"> </img>
            <h4>Pizza</h4>
            <a href="/Projects/geco_cafe/order.php" class="button">Order</a>
        </div>

        <div class="item">
            <img src="/Projects/geco_cafe/IMG/burger.jpg"> </img>
            <h4>Burger</h4>
            <a href="/Projects/geco_cafe/order.php" class="button">Order</a>
        </div>

        <div class="item">
            <img src="/Projects/geco_cafe/IMG/beef.jpg"> </img>
            <h4>Beef</h4>
            <a href="/Projects/geco_cafe/order.php" class="button">Order</a>
        </div>

        <div class="item">
            <img src="/Projects/geco_cafe/IMG/platterForOne.jpg"> </img>
            <h4>Platter For One</h4>
            <a href="/Projects/geco_cafe/order.php" class="button">Order</a>
        </div>

        <div class="item">
            <img src="/Projects/geco_cafe/IMG/GrilledMeat.jpg"> </img>
            <h4>Grilled meat</h4>
            <a href="/Projects/geco_cafe/order.php" class="button">Order</a>
        </div>

        <div class="item">
            <img src="/Projects/geco_cafe/IMG/pasta.jpg"> </img>
            <h4>Pasta</h4>
            <a href="/Projects/geco_cafe/order.php" class="button">Order</a>
        </div>
        
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