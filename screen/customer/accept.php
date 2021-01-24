<?php
include_once("../dbConnect.php");
mysqli_select_db($conn,"dziya98");

$id=$_POST['id'];
$customer=$_POST['email'];
$emailRest=$_POST['email1'];
$price=$_POST['price'];
$Food=$_POST['foodName'];


    $query="INSERT INTO varbite_getorder (Customer,Food,restEmail,Price) VALUES ('$customer','$Food','$emailRest','$price')";
    $run_query=mysqli_query($conn,$query);

    if($run_query){
        $delete = "DELETE FROM varbite_tempcart WHERE ID=$id";
        if ($conn->query($delete) === TRUE) {
            // echo "<script>alert('Your Delete ID=$id is successfull')</script>" ;
            header("Refresh:0, url='cartList.php'");

          } 
          else {
            echo "Error deleting record: " . $conn->error;

          }
    }
    else{
        echo"<script>alert('FIRST UNSUCCESS')</script>";
	header("Refresh:0, url='cartList.php'");
    }



?>
