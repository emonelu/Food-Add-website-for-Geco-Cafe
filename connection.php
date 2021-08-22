<?php

$dbhost="localhost"; //define the local host

$dbuser="root";

$dbpass="";

$dbname="geco_cafe_database";



$con = mysqli_connect("$dbhost", "$dbuser", "$dbpass", "$dbname");

if($con -> connect_error)
{
    die("Not connected".$con->connect_error);
}
// else{
//     echo"Connected succesfully";
// };
?>