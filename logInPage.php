<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
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

      // $user_data = check_login($con); this line sims to give the error Not Found Apache/2.4.48 (Win64) OpenSSL/1.1.1k PHP/8.0.7 Server at localhost Port 80

        if ($_SERVER['REQUEST_METHOD'] == "POST")
        {
            //something was posted
           $user_id= $_POST['email'];
         
           $password = $_POST['password'];

            if(!empty($email) && !empty($passwprd) && !is_numeric($email))
           {
               //read from the database
                $query ="select * from users where user_name = '$user_name' limit 1" ;
               $result = mysqli_query($con, $query);

               if($result)
               {
                if($result && mysqli_num_rows($result) > 0)
                        {
                            $user_data = mysqli_fetch_assoc($result);
                            if($user_data['password'] === $password)
                            {
                                $_SESSION['user_id'] = $user_data['user_id'];
                                header("Location: index.php");
                                die;
                            }
                        }
               }
                
               echo "Wrong credentials";
           } 
           else{
               echo "Please enter valide information";
           } 
        }


       
        ?>
    </div>



<!-- Make a login/register page -->
<div class="super">
    <div class="form-box">
        <div class ="button-box">
            <div id="buttonLogIn"></div>
            <a href="/Projects/geco_cafe/logInPage.php"><button type="button" class="toggle-button" onclick="login()">Log In</button>
            </a>
            <a href="/Projects/geco_cafe/register.php">  <button type="button" class="toggle-button" onclick="register()"
           >Sign up</button>  </a>
        </div>
        <form class="login" method="post">
            <input type="text" class="form-field" name="email" placeholder="Email" 
            required>
            <input type="text" class="form-field" name="password" placeholder="Enter Password" 
            required>
            <input type="checkbox" class="check-box"><span>Remember Password</span>
            <button type="submit" class="submit-button">Log in</button>
        </form>



       
    </div>

    <div>
        
    </div>


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