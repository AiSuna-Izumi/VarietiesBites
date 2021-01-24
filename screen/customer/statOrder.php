<?php
   include('session.php');
?>
<html lang="en">
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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    

  </head>
  <body style="background-color:#B45008;">

  <nav class='navbar navbar-expand-lg navbar-light'style='background-color:#FDB936 ;'>
        <div class='container-fluid'>
          <a class='navbar-brand' href='../../index.html'><img src='../../assest/vblogo.png' href='#home' style='height: 30px; width: 30px;'></a>
          <a class='nav-link  ' aria-current='page' href='logout.php' style='font-size: 20px; color:black;'>LOGOUT</a>
                  <a class='navbar-brand  ' aria-current='page'href='offer.php'>MENU</a>
          <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNavDropdown' aria-controls='navbarNavDropdown' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
          </button>
          <div class='collapse navbar-collapse' id='navbarNavDropdown'>
            <ul class='navbar-nav me-auto mb-2 mb-lg-0' style='margin-left:25%;'>
              <li class='nav-item'>
                <a class='nav-link active' aria-current='page' href='statOrder.php'>STATUS ORDER</a>
              </li>
              <li class='nav-item'>
                  <a class='nav-link'  href="traditional.php" aria-current='page' >TRADITIONAL</a>
              </li>
              <li class='nav-item'>
                  <a class='nav-link' aria-current='page' href="western.php">WESTERN</a>
              </li>
              <li class='nav-item'>
                <a class='nav-link '  aria-current='page' href="dessert.php">DESSERT</a>
              </li>
              <li class='nav-item'>
                <a class='nav-link' aria-current='page' href="cart.php">CART</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>   
      <center><h3 class='offer'>ORDER STATUS</h3></center>


      <?php

include_once("../dbConnect.php");
mysqli_select_db($conn,"dziya98");

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
          <th><center>Customer Phone No</center></th>
          <th ><center>Location</center></th>
          <th ><center>Price</center></th>
          <th ><center>Status</center></th>
          <th ><center>Order Receive</center></th>
          
         
         </tr>
       </thead>
     </table>
   </div>";
while($row = $result->fetch_assoc()) {
  if ("".$row["Customer"]."" == $email){
 echo "
 <table cellpadding='0' cellspacing='0' border='0'>
 <tr>
 <form method='post' action='receive.php' method='post' >
    <td style='width:10px;' ><input type='hidden' name='id' value=".$row["Id"]."><center>".$row["Id"]."</center></td>
    <td ><input type='hidden' name='foodName' value=".$row["FoodName"]."><center>".$row["FoodName"]."</center></td>
    <td ><input type='hidden' name='PhoneNo' value=".$row["PhoneNo"]."><center>".$row["PhoneNo"]."</center></td>
    <td ><input type='hidden' name='location' value=".$row["Location"]."><center>".$row["Location"]."</center></td>
    <td ><input type='hidden' name='price' value=".$row["price"]."><center>RM ".$row["price"]."</center></td>
    <td><input type='hidden' name='status' value=".$row["Status"]."><center>".$row["Status"]."</center></td>
    <td><center><input class='btn' value='RECEIVE' type='submit'/></form></center></td>
    
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
          <th ><center>Location</center></th>
          <th ><center>Price</center></th>
          <th ><center>Status</center></th>
          
         
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
      

      
   
    

    
  </body>
</html>