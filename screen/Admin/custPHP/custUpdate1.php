<?php
 $id=$_POST['id'];
 $name=$_POST['name'];
 $email=$_POST['Email'];
 $phone=$_POST['phone'];
 $passwordC=$_POST['password'];
 
 include_once("../../dbConnect.php");
 mysqli_select_db($conn,"dziya98");

$sql = "UPDATE varbite_custregister SET Name = '$name', Email ='$$email', PhoneNo = '$phone', password ='$passwordC'WHERE ID = '$id'";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('UPDATE SUCCESSFULL')</script>" ;
    header("Refresh:0, url='custUpdate.php'");
} else {
  echo "Error updating record: " . $conn->error;
}

?>