<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../../assest/vblogo.png">
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="../../../css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    
    <link href="https://fonts.googleapis.com/css2?family=Pathway+Gothic+One&display=swap" rel="stylesheet"> 
</head>



  <?php

        include_once("../../dbConnect.php");
        $sql="SELECT foodName,foodType,decs,Email,foodPic,Price FROM varbite_foodmenu";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        
          $count=1;
          while($row = $result->fetch_assoc()) {
              
              echo "
              <div class='card' style='width: 18rem; display:inline-table; height:500px;'>
              <img src='../../../foodPic/".$row["foodPic"]."' class='card-img-top' style='height:300px;'>
              <div class='card-body'>
                <h5 class='card-title'>".$row["foodName"]."</h5>
                <p class='card-text'>".$row["decs"]."</p>
              </div>
              <ul class='list-group list-group-flush'>
                <li class='list-group-item'>".$row["foodType"]."</li>
                <li class='list-group-item'>RM ".$row["Price"]."</li>
                <li class='list-group-item'>Email : ".$row["Email"]."</li>
                
              </ul>
              
            </div>
              ";}
          }
      else {
        echo "<center><h4>YOU NOT UPDATE ANY MENU YET<h4></center>"; 
      }
        
        
$conn->close();

?>