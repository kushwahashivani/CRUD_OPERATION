<?php
include("connection.php");
$rollno = $_GET['rn'];
$query = "DELETE FROM student WHERE ROLLNO='$rollno'";
$data = mysqli_query($conn,$query);

if($data)
{
    echo "<script>alert('Record Deleted')</script>";
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/CRUD_OPERATION/display.php">
    <?php
    
}
else
{
    echo "<font color='red'>Sorry, Delete Process Failed";
}

?>