<?php
include_once("../dbConnect.php");

mysqli_select_db($conn,"dziya98");


    $Email = $_POST['Email'];
    $password = $_POST['Password'];
    
    $query = $connection->prepare("SELECT * FROM varbite_restaurant WHERE Email=:Email");
    $query->bindParam("Email", $Email, PDO::PARAM_STR);
    $query->execute();

    $query1 = $connection->prepare("SELECT * FROM varbite_restaurant WHERE Password=:Password");
    $query1->bindParam("Password", $password, PDO::PARAM_STR);
    $query1->execute();

    $result1 = $query1->fetch(PDO::FETCH_ASSOC);
    $result = $query->fetch(PDO::FETCH_ASSOC);

    if (!$result) {
        echo "<script>alert('Wrong Username and Password')</script>" ;
            include_once("../restLogin.html");
    } else {
        if (!$result1) {
            echo "<script>alert('Wrong Password')</script>" ;
            include_once("../restLogin.html");
        } else {
            include("restaurantMain.php");
        }
    }

?>
