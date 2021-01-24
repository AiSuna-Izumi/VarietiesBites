<?php
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['Email'];
    $phone=$_POST['phone'];
    $passwordC=$_POST['password'];

    include_once("../../dbConnect.php");
    
    $delete = "DELETE FROM varbite_custregister WHERE ID=$id";

        if ($conn->query($delete) === TRUE) {
            echo "<script>alert('Your Delete ID=$id is successfull')</script>" ;
            header("Refresh:0, url='custRemove.php'");
          } 
          else {
            echo "Error deleting record: " . $conn->error;
          }
    

    
?>