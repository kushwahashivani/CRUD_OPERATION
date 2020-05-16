<?php
include("connection.php");

$query = "INSERT INTO student VALUES ('5', 'Aadi', 'MCA')";
$data=mysqli_query($conn,$query);

if($data)
{
    echo "Data Inserted into Dtabase";
}

?>