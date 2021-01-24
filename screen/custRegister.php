<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href=".assest/vblogo.png">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@1,500&family=Potta+One&family=ZCOOL+XiaoWei&Bodoni+Moda:ital,wght@1,900&Roboto+Mono:ital,wght@1,500&family=Padauk:wght@700&family=Poppins:ital,wght@1,200&display=swap" rel="stylesheet"> <title>Varieties Bite</title>
  </head>
<?php
$nama=$_POST["Name"];
$email=$_POST["Email"];
$phone=$_POST["noPhone"];
$password=$_POST["password"];
$passwordC=$_POST["passwordC"];


if($password == $passwordC){
    include_once("dbConnect.php");
    mysqli_select_db($conn,"dziya98");
    $query="INSERT INTO varbite_custregister (Name, Email,PhoneNo,Password) VALUES ('$nama', '$email','$phone','$passwordC')";
    
    $run_query=mysqli_query($conn,$query);
    
    if($run_query){
        echo"<script>alert('REGISTER SUCCESS')</script>";
        include("login.html");
    }
    else{
        echo"<script>alert('UNSUCCESS')</script>";
        include("createAcc.html");
    }
}
else{
    echo"<script>alert('PASSWORD NOT SAME')</script>";
    include("createAcc.html");
}
?>
