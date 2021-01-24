<?php
session_start();
$email = $_SESSION['login_user'];
$Id=$_POST['Id'];

$price =$_POST['Price'];


include('../dbConnect.php');
mysqli_select_db($conn,"dziya98");

$cart ="SELECT Id,foodName,foodType,decs,Email, Price FROM varbite_foodmenu";
$cart1 =$conn->query($cart);
while($row = $cart1->fetch_assoc()) {
    if ("".$row["Id"].""==$Id){
        
        $query="INSERT INTO varbite_tempcart (Email, foodName1,foodType1,price1,emailRest) VALUES ('$email', '".$row["foodName"]."','".$row["foodType"]."','".$row["Price"]."','".$row["Email"]."')";
        $run_query=mysqli_query($conn,$query);
        if($run_query){
            echo"<script>alert('SUCCESS ADD TO CART')</script>";
            // header("Refresh:0, url='western.php'");
            include('offer.php');
        }
        else{
            echo"<script>alert('ADD UNSUCCESS')</script>";
            include('offer.php');
        }
    }

}




?>
