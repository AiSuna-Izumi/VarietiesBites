<?php
   include('session.php');
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../../assest/vblogo.png">
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    

  </head>
  <body style="background-color:#B45008;">

  <nav class='navbar navbar-expand-lg navbar-light'style='background-color:#FDB936 ;'>
        <div class='container-fluid'>
          <a class='navbar-brand' href='../../index.html'><img src='../../assest/vblogo.png' href='#home' style='height: 30px; width: 30px;'></a>
          <a class='nav-link  ' aria-current='page' href='logout.php' style='font-size: 20px; color:black;'>LOGOUT</a>
                  <a class='navbar-brand  ' aria-current='page' href='offer.php'>MENU</a>
          <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNavDropdown' aria-controls='navbarNavDropdown' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
          </button>
          <div class='collapse navbar-collapse' id='navbarNavDropdown'>
            <ul class='navbar-nav me-auto mb-2 mb-lg-0' style='margin-left:25%;'>
              <li class='nav-item'>
                <a class='nav-link' aria-current='page' href='statOrder.php'>STATUS ORDER</a>
              </li>
              <li class='nav-item'>
                  <a class='nav-link active'  href="traditional.php" aria-current='page' >TRADITIONAL</a>
              </li>
              <li class='nav-item'>
                  <a class='nav-link' aria-current='page' href="western.php">WESTERN</a>
              </li>
              <li class='nav-item'>

                <a class='nav-link' style='border:none; background-color:transparent;' aria-current='page' href="dessert.php">DESSERT</a>
           
              </li>
              <li class='nav-item'>
              <form method='POST'  action='cart.php'>
              <input type='hidden' name='Email' value=".$row["Email"].">
                <input class='nav-link' style='border:none; background-color:transparent;' aria-current='page' type='submit'  value='CART'></input></form>
           
              </li>
            </ul>
          </div>
        </div>
      </nav>   
      <center><h3 class='offer'>TRADITIONAL</h3></center>


      <?php
       include_once("../dbConnect.php");
       mysqli_select_db($conn,"dziya98");

      $food="Traditional";
      $western="SELECT Id,foodName,foodType,decs,Email,foodPic,Price FROM varbite_foodmenu";
        $result = $conn->query($western);

        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
              
            if ("".$row["foodType"]."" == $food){
              echo "
              <div class='card' style='width: 18rem; display:inline-table; height:550px; margin-left:5%; margin-top:2%;'>
              <img src='../../foodPic/".$row["foodPic"]."' class='card-img-top' style='height:300px;'>
              <div class='card-body'>
                <h5 class='card-title'>".$row["foodName"]."</h5>
                <p class='card-text'>".$row["decs"]."</p>
              </div>
              <ul class='list-group list-group-flush'>
                <li class='list-group-item'>".$row["foodType"]."</li>
                <li class='list-group-item'>RM ".$row["Price"]."</li>                
              </ul>
              <form method='POST'  action='cartTemp.php'>
              <input type='hidden' name='Id' value=".$row["Id"].">
              <input type='hidden' name='Price' value=".$row["Price"].">
                <input class='btn btn-primary' style='border:none;  aria-current='page' type='submit'  value='ADD TO CART'></input></form>
            </div>
              ";
            }      
         }
        }

      
      ?>
      

      
   
    

    
  </body>
</html>