<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Order</title>
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
        </ul>
    </nav>
    <!-- php -->
<div>
        <?php
           session_start();

           include("connection.php");
        include("functions.php");
         //  $_SESSION;


       
        ?>
    </div>


        <h1>Have it home!</h1>
        <h3>Call us at:</h3>
        <h1>0792489449</h1>


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