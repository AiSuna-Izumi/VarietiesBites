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

        mysqli_select_db($conn,"dziya98");

        $sql="SELECT Id,Name,Email,PhoneNo,Password FROM varbite_custregister";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
           // output data of each row
           echo "<section>
           <div class='tbl-header'>
             <table cellpadding='0' cellspacing='0' border='0'>
               <thead>
                 <tr>
                 <th style='width:10px;'><center>Id</center></th>
                   <th><center>Name</center></th>
                   <th><center>Email</center></th>             
                   <th><center>Phone No</center></th>
                   <th><center>Password</center></th>
                 <th><center>Delete</center></th>
                 
                 </tr>
               </thead>
             </table>
           </div>";
        while($row = $result->fetch_assoc()) {
         echo "
         <table cellpadding='0' cellspacing='0' border='0'>
         <tr>
         <form method='post' action='custRemove1.php' method='post' >
         <td style='width:10px;' ><input type='hidden' name='id' value=".$row["Id"]."><center>".$row["Id"]."</center></td>
         <td ><input type='hidden' name='name' value=".$row["Name"]."><center>".$row["Name"]."</center></td>
         <td ><input type='hidden' name='Email' value=".$row["Email"]."><center>".$row["Email"]."</center></td>
         <td ><input type='hidden' name='phone' value=".$row["PhoneNo"]."><center>".$row["PhoneNo"]."</center></td>
         <td ><input type='hidden' name='password' value=".$row["Password"]."><center>".$row["Password"]."</center></td>
            <td><center><input class='btn' value='Delete' type='submit'/></form></center></td>  
         </tr>

      
          </table>
          ";
          }
        }else {
          echo "<div class='tbl-header'>
          <table cellpadding='0' cellspacing='0' border='0'>
          <thead>
            <tr>
            <th style='width:10px;'><center>Id</center></th>
            <th><center>Name</center></th>
            <th><center>Email</center></th>             
            <th><center>Phone No</center></th>
            <th><center>Password</center></th>
          <th><center>Delete</center></th>
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