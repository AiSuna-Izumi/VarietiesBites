<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../../assest/vblogo.png">
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pathway+Gothic+One&display=swap" rel="stylesheet"> 

  </head>
  
  <?php
        include_once("../dbConnect.php");
        mysqli_select_db($conn,"dziya98");
        session_start();
        $email = $_SESSION['login_user'];
        $sql="SELECT Email,foodName1,Id,price1,emailRest FROM varbite_tempcart";

        $result = $conn->query($sql);
        $result1= mysqli_query($conn,"SELECT SUM(price1) AS totalsum FROM varbite_tempcart WHERE Email= '$email'");
        $row = mysqli_fetch_assoc($result1); 
        
        $sum = $row['totalsum'];

        if ($result->num_rows > 0) {
           // output data of each row
           echo "<section>
           
           <div class='tbl-header'>
             <table cellpadding='0' cellspacing='0' border='0'>
               <thead>
                 <tr>
                  <th style='width:10px;'><center>Id</center></th>
                  <th><center>Food Name</center></th>
                  <th><center>Price</center></th>
                  <th><center>Accept</center></th>
                 
                 </tr>
               </thead>
             </table>
           </div>";
        while($row = $result->fetch_assoc()) {
          if ("".$row["Email"]."" == $email){
         echo "
         <table cellpadding='0' cellspacing='0' border='0'>
         <tr>
         <form method='post' action='accept.php' method='post' >

            <td style='width:10px;' ><input type='hidden' name='id' value=".$row["Id"]."><center>".$row["Id"]."</center></td>
            <td ><input type='hidden' name='foodName' value=".$row["foodName1"]."><center>".$row["foodName1"]."</center></td>
            <td ><input type='hidden' name='price' value=".$row["price1"]."><center>".$row["price1"]."</center></td>
            
            <input type='hidden' name='email1' value=".$row["emailRest"].">
            <input type='hidden' name='email' value=".$row["Email"].">
            <td><center><input class='btn' value='ACCEPT' type='submit'/></form></center></td>  
         </tr>
          </table>
          ";
          }
        }
        echo "
        <table cellpadding='0' cellspacing='0' border='0'>
        <tr>
           <td class='yuran' ><center>TOTAL</center></td>";
           echo ("<td class='yuran'><center></t>RM $sum</center></td>
        </tr>
         </table>
         ");
        }else {
          echo "<div class='tbl-header'>
          <table cellpadding='0' cellspacing='0' border='0'>
          <thead>
            <tr>
          
            <th style='width:10px;'><center>Id</center></th>
            <th><center>Food Name</center></th>
            <th><center>Price</center></th>
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