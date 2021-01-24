<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../../assest/vblogo.png">
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    
    <link href="https://fonts.googleapis.com/css2?family=Pathway+Gothic+One&display=swap" rel="stylesheet"> 
</head>
<?php

include_once("../dbConnect.php");
mysqli_select_db($conn,"dziya98");
session_start();
$email = $_SESSION['login_user'];
$sql="SELECT Id,Customer,FoodName,PhoneNo,Location,Status,restEmail,price FROM varbite_getstatus";

$result = $conn->query($sql);
$result1= mysqli_query($conn,"SELECT SUM(price) AS totalsum FROM varbite_getstatus WHERE Email= '$email'");
// $row = mysqli_fetch_assoc($result1); 
// $sum = $row['totalsum'];

if ($result->num_rows > 0) {
   // output data of each row
   echo "<section>
   
   <div class='tbl-header'>
     <table cellpadding='0' cellspacing='0' border='0'>
       <thead>
         <tr>
          <th style='width:10px;'><center>Id</center></th>
          <th><center>Food Name</center></th>
          <th><center>Customer</center></th>
          <th><center>Customer Phone No</center></th>
          <th style='width:100px;'><center>Location</center></th>
          <th style='width:80px;'><center>Price</center></th>
          <th style='width:100px;'><center>Status</center></th>
          <th><center>Food Status</center></th>
          <th><center>Accept</center></th>
         
         </tr>
       </thead>
     </table>
   </div>";
while($row = $result->fetch_assoc()) {
  if ("".$row["restEmail"]."" == $email){
 echo "
 <table cellpadding='0' cellspacing='0' border='0'>
 <tr>
 <form method='post' action='statProc.php' method='post' >

    <td style='width:10px;' ><input type='hidden' name='id' value=".$row["Id"]."><center>".$row["Id"]."</center></td>
    <td ><input type='hidden' name='foodName' value=".$row["FoodName"]."><center>".$row["FoodName"]."</center></td>
    <td ><input type='hidden' name='Customer' value=".$row["Customer"]."><center>".$row["Customer"]."</center></td>
    <td ><input type='hidden' name='PhoneNo' value=".$row["PhoneNo"]."><center>".$row["PhoneNo"]."</center></td>
    <td style='width:100px;'><input type='hidden' name='location' value=".$row["Location"]."><center>".$row["Location"]."</center></td>
    <td style='width:80px;'><input type='hidden' name='price' value=".$row["price"]."><center>RM ".$row["price"]."</center></td>
    <td style='width:100px;'><input type='hidden' name='status' value=".$row["Status"]."><center>".$row["Status"]."</center></td>
    <td >
    <input  type='radio' id='status' name='status' value='Prepare'>
    <label for='Prepare'>Preapare</label> <br>
    <input type='radio' name='status' value='On Delivery'><label
        for='On Delivery'>On Delivery</label><br>
    <input type='radio' name='status' value='Succes'><label
        for='Success'>Success</label></td>
    <td><center><input class='btn' value='ACCEPT' type='submit'/></form></center></td>  
 </tr>
  </table>
  ";
  }
}
// echo "
// <table cellpadding='0' cellspacing='0' border='0'>
// <tr>
//    <td class='yuran' ><center>TOTAL</center></td>";
//    echo ("<td class='yuran'><center></t>RM $sum</center></td>
// </tr>
//  </table>
//  ");
}else {
  echo "<div class='tbl-header'>
  <table cellpadding='0' cellspacing='0' border='0'>
  <thead>
    <tr>
    <th style='width:10px;'><center>Id</center></th>
          <th><center>Food Name</center></th>
          <th><center>Customer</center></th>
          <th><center>Customer Phone No</center></th>
          <th style='width:100px;'><center>Location</center></th>
          <th style='width:80px;'><center>Price</center></th>
          <th><center>Status</center></th>
          <th><center>Food Status</center></th>
          <th><center>Accept</center></th>
    </tr>
  </thead>
  </table>
</div>";
}
echo "<div class='tbl-content'>
<table cellpadding='0' cellspacing='0' border='0'>
  
</table>
</div>
</section>
</div>
";


$conn->close();

?>