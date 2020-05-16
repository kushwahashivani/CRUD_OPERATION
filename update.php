<?php
include("connection.php");
error_reporting(0);
$_GET['rn'];
$_GET['sn'];
$_GET['cl'];
?>

<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h3><center>PERFORMING CRUD OPERATON</center></h3>

<div>
  <form action="" method="GET">
    <label for="fname">Roll No</label>
    <input type="text"  name="rollno" value="<?php echo $_GET['rn'];?>">

    <label for="lname">Name</label>
    <input type="text" name="studentname" value="<?php echo $_GET['sn'];?>">

    <label for="lname">Class</label>
    <input type="text" name="class" value="<?php echo $_GET['cl'];?>">
 
  
    <input type="submit" name="submit" value="update">
  </form>
</div>

<?php
    if($_GET['submit'])
    {
        $rollno = $_GET['rollno'];
        $name =   $_GET['studentname'];
        $class =  $_GET['class'];
        $query = "UPDATE student SET NAME= '$name' , CLASS='$class' WHERE ROLLNO='$rollno'";
        $data=mysqli_query($conn, $query);
        if($data)
        {
            echo "<font color='green'>Record Updated Sucessfully .<a href='display.php'>Check Updated List Here</a>";
        }
        else
        {
            echo "<font color='red'>Record Not Updated .<a href='display.php'>Check Updated List Here</a>";
    
        }
    }
    else
    {
        echo "<font color='blue'>Click on Update Button to save Changes";
    }

?>

</body>
</html>
