<?php
    $id =$_POST['id'];
    $name= $_POST['RestName'];
    $Email=$_POST['Email'];
    $Location=$_POST['Loc1'];
    $phone=$_POST['phone'];
    $passwordC=$_POST['password'];

    include_once("../dbConnect.php");
    
    // echo $Location;
    $query="INSERT INTO varbite_restaurant(RestaurantName,Email,Location,noPhone,password) VALUES ('$name', '$Email','$Location','$phone','$passwordC')";

    $run_query=mysqli_query($conn,$query);

    if($run_query){
        $delete = "DELETE FROM varbite_restregister WHERE ID=$id";
        if ($conn->query($delete) === TRUE) {
            // echo "<script>alert('Your Delete ID=$id is successfull')</script>" ;
            header("Refresh:0, url='PHP/listRestPending.php'");
          } 
          else {
            echo "Error deleting record: " . $conn->error;
          }
    }
    else{
        echo"<script>alert('FIRST UNSUCCESS')</script>";
    }

    
?>