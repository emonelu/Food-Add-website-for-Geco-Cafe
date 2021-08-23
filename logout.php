<?php

session_start();

if(isset($_SESSION['user_name']))
{
    unset($_SESSION['user_name']);
}

header("Location: /Projects/geco_cafe/logInPage.php");
die;

