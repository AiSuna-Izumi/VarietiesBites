<?php
$id=$_POST['id'];
$stat=$_POST['status'];

include_once("../dbConnect.php");
mysqli_select_db($conn,"dziya98");

$sql = "UPDATE varbite_getstatus SET  status='$stat' WHERE ID = '$id'";
if ($conn->query($sql) === TRUE) {
    echo"<script>alert('SUCCESS')</script>";
    header("Refresh:0, url='orderPend.php'");
} else {
  echo "Error updating record: " . $conn->error;
  header("Refresh:0, url='orderPend.php'");
}



?>