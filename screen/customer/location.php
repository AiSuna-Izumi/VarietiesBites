<?php
   include('session.php');
?>
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
  <body style="background-image:url('../../assest/pic2.png')">

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
                  <a class='nav-link '  href="traditional.php" aria-current='page' >TRADITIONAL</a>
              </li>
              <li class='nav-item'>
                  <a class='nav-link active' aria-current='page' href="western.php">WESTERN</a>
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
      
      
      <center><div class="loginBox" style='margin-top: 5%; height: 50%;'>
         <center><h3 class='offer' style="color: white;font-family: 'ZCOOL XiaoWei', serif; font-size:45px; color:white;">DELIVERY FORM</h3></center>
        
         <form method="POST" class="loginForm" action="secondFinal.php">
          LOCATION * <br>
          <input class="form1" type="text" name="location" placeholder="Location"/> <Br>
          PHONE NO *<br>
          <input class="form1" type="text" name="phone" placeholder="Phone No"/><br>
         
          <center><input class="submit" type="submit" value="CHECK IN"/>
          </center>  
        </form>
     </div></center>

      
   
    

    
  </body>
</html>