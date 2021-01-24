<?php 
    include_once("../dbConnect.php");
    mysqli_select_db($conn,"dziya98");
    session_start();
    $email = $_SESSION['login_user'];
    $loc=$_POST['location'];
    $phone =$_POST['phone'];
    $stat ="PENDING";
    
    
    $query1="SELECT Id,Customer,Food,restEmail,Price FROM varbite_getorder";
    $result = $conn->query($query1);

    while($row = $result->fetch_assoc()) {
        
            $query="INSERT INTO varbite_getstatus (Customer,FoodName,PhoneNo,Location,Status,restEmail,price) VALUES ('".$row["Customer"]."','".$row["Food"]."','$phone','$loc','$stat','".$row["restEmail"]."',".$row["Price"].")";
            $run_query=mysqli_query($conn,$query);
            if($run_query){
                $delete = "DELETE FROM varbite_getorder WHERE Id=".$row["Id"]."";
                if ($conn->query($delete) === TRUE) {
                    // echo "<script>alert('Your Delete ID=$id is successfull')</script>" ;
                    // header("Refresh:0, url='cartList.php'");
                  } 
                  else {
                    echo "Error deleting record: " . $conn->error;
                  }
            }
            else{
            echo"<script>alert('ADD UNSUCCESS')</script>";
	    header("Refresh:0, url='cart.php'");
            }
    
    }
    echo"<script>alert('SUCCESS SUBMIT ORDER')</script>";
    include('offer.php');


?>
