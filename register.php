<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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

         

            if ($_SERVER['REQUEST_METHOD'] == "POST")
            {
                //something was posted
               $user_name= $_POST['user_name']; //user name or user id, something must work 
            
               $password = $_POST['password'];

                if(!empty($user_name) && !empty($password) && !is_numeric($user_name)) // deleted the email 
               {
                    $user_id = random_num(150);
                    $query ="insert into users (user_id, user_name, password) values('$user_id','$user_name', '$password')";
                    mysqli_query($con, $query); 

                    header("Location: /Projects/geco_cafe/logInPage.php");
                    die;

               } 
               else
               {
                   echo "Please enter valide information";
               } 
            }   
        ?>
    </div>

    <div class="form-box">
        <div class ="button-box">
            <div id="buttonRegister"></div>
            <a href="/Projects/geco_cafe/logInPage.php"><button type="button" class="toggle-button" onclick="login()">Log In</button>
            </a>
            <a href="/Projects/geco_cafe/register.php">  <button type="button" class="toggle-button" onclick="register()"
           >Sign up</button>  </a>
        </div>
       
        <form class="register" method="post">
            <input type="text" class="form-field" name="user_name" placeholder="Email" 
            required>
            <!-- <input type="text" class="form-field" name ="name" placeholder="Name" 
            required> comment this one for the moment-->
            <input type="text" class="form-field" name="password" placeholder="Enter Password" 
            required>
            <input type="checkbox" class="check-box"><span>Remember Password</span>
            <button type="submit" class="submit-button">Register</button>
        </form>


       
    </div>

    <div>
        
    </div>
    

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