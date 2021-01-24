<?php
$nama=$_POST["Name"];
$email=$_POST["Email"];
$phone=$_POST["noPhone"];
$location=$_POST["Loc"];
$password=$_POST["password"];
$passwordC=$_POST["passwordC"];


if($password == $passwordC){
    include_once("dbConnect.php");
    mysqli_select_db($conn,"dziya98");
    $query="INSERT INTO varbite_restregister (RestaurantName, Email, Location,PhoneNo, password) VALUES ('$nama', '$email', '$location', '$phone', '$passwordC');";
    
    $run_query=mysqli_query($conn,$query);
    
    if($run_query){
        echo"<script>alert('REGISTER SUCCESS')</script>";
        include("login.html");
    }
    else{
        echo"<script>alert('UNSUCCESS')</script>";
        include("createAccRest.html");
    }
}
else{
    echo"<script>alert('PASSWORD NOT SAME')</script>";
    include("createAccRest.html");
}
?>
