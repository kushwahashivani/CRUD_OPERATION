<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="curd_operation";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if ($conn)
 {
     echo " ";
}
else
{
     die("Connection failed: " .mysqli_connect_error());  
}
?>