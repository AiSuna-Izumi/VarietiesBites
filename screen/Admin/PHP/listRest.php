<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../../../assest/vblogo.png">
    <link rel="stylesheet" href="../../styles.css">
    <link rel="stylesheet" href="../../../css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pathway+Gothic+One&display=swap" rel="stylesheet"> 

  </head>
<?php
        include_once("../../dbConnect.php");
        $sql="SELECT Id,RestaurantName,Email,Location,noPhone,password FROM varbite_restaurant";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
           // output data of each row
           echo "
           <div class='tbl-header'>
             <table>
               <thead>
                 <tr>
                   <th style='width:10px;' ><center>Id</center></th>
                   <th><center>Restaurant Name</center></th>
                   <th><center>Email</center></th>             
                   <th><center>Phone No</center></th>
                   <th><center>Location</center></th>
                   <th><center>Password</center></th>
                 </tr>
               </thead>
             </table>
           </div>";
        while($row = $result->fetch_assoc()) {
         echo "
         <table >
         <tr>
          <form method='post' action='approveRest.php'>
            <td style='width:10px;' ><input type='hidden' name='id' value=".$row["Id"]."><center>".$row["Id"]."</center></td>
            <td ><input type='hidden' name='RestName' value=".$row["RestaurantName"]."><center>".$row["RestaurantName"]."</center></td>
            <td ><input type='hidden' name='Email' value=".$row["Email"]."><center>".$row["Email"]."</center></td>
            <td ><input type='hidden' name='phone' value=".$row["noPhone"]."><center>".$row["noPhone"]."</center></td>
            <td ><input type='hidden' name='Loc' value=".$row["Location"]."><center>".$row["Location"]."</center></td>
            <td ><input type='hidden' name='password' value=".$row["password"]."><center>".$row["password"]."</center></td>
          </tr>
          </table>
          ";
          }
        } 
        else {
          echo "<div class='tbl-header'>
          <table >
          <thead>
          <tr>
          <th><center>Id</center></th>
          <th><center>Restaurant Name</center></th>
          <th><center>Email</center></th>
          <th><center>Phone No</center></th>
          <th><center>Location</center></th>
          <th><center>Password</center></th>
          <th><center>Accept</center></th>
          </tr>
          </thead>
          </table>
        </div>";
        }
        echo "<div class='tbl-content>
        <table cellpadding='0' cellspacing='0' border='0'>
          
        </table>
      </div>

</div>
";
        
        
$conn->close();

?>