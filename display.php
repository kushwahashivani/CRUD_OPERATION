<style>
    td
    {
    padding:11px;
    }
</style>
<?php
include("connection.php");
error_reporting(0);

$query = "SELECT * FROM student";
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);// display no of rows


    if($total != 0)
    {
        ?>
               
  <table>
      <tr>
        <th>Roll No</th>
        <th>Name</th>
        <th>Class</th>
        <th colspan='2'>Operations</th>
      </tr>

        <?php
       
       while ( $result=mysqli_fetch_assoc($data))
        {
            echo "<tr>
                 <td>". $result['rollno']."</td>
                 <td>".$result['name']."</td>
                 <td>".$result['class']."</td>
                 <td><a href='update.php?rn=$result[rollno]&sn=$result[name]&cl=.$result[class]' >Edit</td>
                 <td><a href='delete.php?rn=$result[rollno]'onclick=' return checkdelete()'>Delete</td>
                 </tr>";
        }
    }
    else
    {
        echo "No Record Found";
    }
?>
  </table>
  <script>
    function checkdelete()
    {
       return confirm("Are you sure you want to delete this data???");
    }
  </script>