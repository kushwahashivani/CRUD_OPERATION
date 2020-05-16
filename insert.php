<?php
include("connection.php");
error_reporting(0);
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
  background-color: #2196f3;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #1565c0;
}
input[type=button] {
  width: 100%;
  background-color: #2196f3;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=button]:hover {
  background-color: #1565c0;
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
    <input type="text"  name="rollno" value="">

    <label for="lname">Name</label>
    <input type="text" name="studentname" value="">

    <label for="lname">Class</label>
    <input type="text" name="class" value="">
 
  
    <input type="submit" name="submit" value="Submit">
    <input type="button" name="display" value="Display" onclick="window.location.href='http://localhost/CRUD_OPERATION/display.php'" />
  </form>
</div>

<?php
    if($_GET['submit'])
    {
        $rn = $_GET['rollno'];
        $sn = $_GET['studentname'];
        $cl = $_GET['class'];

        if($rn!="" && $sn!="" && $cl!="")
        { 
            $query = "INSERT INTO student VALUES (' $rn', '$sn', '$cl')";
            $data=mysqli_query($conn,$query);

               if($data)
                {
                echo "Data Inserted into Dtabase.<a href='display.php'>Check the List Here</a>";
                }
        }
                else
                {
                echo "All Fiels are Required.<a href='display.php'>Check the List Here</a>";
                }
    }

?>

</body>
</html>
