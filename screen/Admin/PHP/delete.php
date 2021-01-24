<?php
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['Email'];
    $location=$_POST['location'];
    $phone=$_POST['phone'];
    $passwordC=$_POST['password'];

    include_once("../../dbConnect.php");
    
    $delete = "DELETE FROM varbite_restaurant WHERE ID=$id";

        if ($conn->query($delete) === TRUE) {
            echo "<script>alert('Your Delete ID=$id is successfull')</script>" ;
            header("Refresh:0, url='restRemove.php'");
          } 
          else {
            echo "Error deleting record: " . $conn->error;
          }
    

    
?>