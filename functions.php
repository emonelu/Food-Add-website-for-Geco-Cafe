<?php

function check_login()
{
   if(!isset($_SESSION['user_name']))
   {
    
    header("Location: /Projects/geco_cafe/logInPage.php");
    die;
    
   }

}
  

