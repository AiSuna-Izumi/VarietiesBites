<?php 
    $id=$_POST['id'];
    

    include_once("../dbConnect.php");
    
    $delete = "DELETE FROM varbite_getstatus WHERE Id=$id";

        if ($conn->query($delete) === TRUE) {
            echo "<script>alert('THANK YOU FOR YOUR PURCHASE')</script>" ;
            header("Refresh:0, url='statOrder.php'");
          } 
          else {
            echo "Error deleting record: " . $conn->error;
            header("Refresh:0, url='statOrder.php'");
          }
    


?>