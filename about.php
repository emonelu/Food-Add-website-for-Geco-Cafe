<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
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
   
         //  $user_data = check_login($con);


       
        ?>
    </div>

        <h3>Music cafe / Coffee bistro / Gastrobar / Bookshop / Cool place</h3>
        <img src="/Projects/geco_cafe/IMG/aboutUs.jpg" alt="aboutUs">
        <h3>Where to find us?</h3>
        <h3>Junction mbaazi avenue and kingara road, at Geco Car Wash, Lavington</h3>
        <h3>Phone number:</h3>
        <h1>0792489449</h1>
<!-- add the google maps to the website-->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.802663648281!2d36.759607315265086!3d-1.2928369359992429!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1a15c286211f%3A0x812758e2a39ca688!2sGeco%20Caf%C3%A9!5e0!3m2!1sen!2ske!4v1625436532793!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

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