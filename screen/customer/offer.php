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
                  <a class='navbar-brand  active' aria-current='page' href='offer.php'>MENU</a>
          <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNavDropdown' aria-controls='navbarNavDropdown' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
          </button>
          <div class='collapse navbar-collapse' id='navbarNavDropdown'>
            <ul class='navbar-nav me-auto mb-2 mb-lg-0' style='margin-left:25%;'>
              <li class='nav-item'>
                <a class='nav-link' aria-current='page' href='statOrder.php'>STATUS ORDER</a>
              </li>
              <li class='nav-item'>
                  <a class='nav-link'  href="traditional.php" aria-current='page' >TRADITIONAL</a>
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
      <center><h3 class='offer'>What We Offer</h3></center>
            

            <center> 
        <div class='card' style='width: 18rem; margin-left:5%;'>
                <img src='../../assest/pic3.png'style='height:250px;' class='card-img-top' >
            <div class='card-body'>
                <h5 class='card-title'>TRADITIONAL</h5>
                <p class='card-text' style='height:150px;'>Traditional foods are foods and dishes that are passed on through generations or which have been consumed for many generations.</p>
                  <a class='btn btn-primary' href="traditional.php">SEE MORE</a>
            </div>
        </div>
        <div class='card' style='width: 18rem; margin-left:5%;'>
                <img src='../../assest/pic4.png' style='height:250px;' class='card-img-top' >
            <div class='card-body'>
                <h5 class='card-title'>WESTERN</h5>
                <p class='card-text' style='height:150px;'>Western cuisine is also known as European cuisine and belongs to European countries and other Western countries at the same time such as Russia, the Americas, Southern Africa, and a couple more. .</p>
                  <a class='btn btn-primary' href='western.php'>SEE MORE</a>
            </div>
        </div>
        <div class='card' style='width: 18rem; margin-left:5%'>
                <img src='../../assest/pic5.png'style='height:250px;' class='card-img-top' >
            <div class='card-body'>
                <h5 class='card-title'>DESSERT</h5>
                <p class='card-text' style='height:150px;'>The term dessert can apply to many confections, such as biscuits, cakes, cookies, custards, gelatins, ice creams, pastries, pies, puddings, sweet soups, and tarts.</p>
                  <a class='btn btn-primary' href='dessert.php'>SEE MORE</a>
            </div>
        </div>
    </center>
  
  </body>
</html>