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
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    

  </head>
  <body style="background-color:#B45008;">

  <nav class='navbar navbar-expand-lg navbar-light'style='background-color:#FDB936 ;'>
        <div class='container-fluid'>
          <a class='navbar-brand' href='../../index.html'><img src='../../assest/vblogo.png' href='#home' style='height: 30px; width: 30px;'></a>
          <a class='nav-link  ' aria-current='page' href='logout.php' style='font-size: 20px; color:black;'>LOGOUT</a>
                  <a class='navbar-brand  aria-current='page' href='offer.php'>MENU</a>
          <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNavDropdown' aria-controls='navbarNavDropdown' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
          </button>
          <div class='collapse navbar-collapse' id='navbarNavDropdown'>
            <ul class='navbar-nav me-auto mb-2 mb-lg-0' style='margin-left:25%;'>
              <li class='nav-item'>
                <a class='nav-link' aria-current='page' href='statOrder.php'>STATUS ORDER</a>
              </li>
              <li class='nav-item'>
                  <a class='nav-link '  href="traditional.php" aria-current='page' >TRADITIONAL</a>
              </li>
              <li class='nav-item'>
                  <a class='nav-link' aria-current='page' href="western.php">WESTERN</a>
              </li>
              <li class='nav-item'>

                <a class='nav-link' aria-current='page' href="dessert.php">DESSERT</a>
           
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
      <center><h3 class='offer'>CART</h3></center>

      <div style='widht:100%;flex-direction:row;'>

      <center><iframe src='cartList.php' style='width:40%; height:500px;'></iframe>
      <iframe src='submit.php' style='width:40%;height:500px; position:fixed-top;'></iframe></center>
      <center><a class='btn btn-primary' href='location.php'style='width:300px; background-color:#E8BF65; color:black; font-size:25px;'  aria-current='page' >SUBMIT ORDER</a></center>
      </div>
 
   
    

    
  </body>
</html>