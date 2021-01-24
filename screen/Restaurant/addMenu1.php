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
    <link href="https://fonts.googleapis.com/css2?family=Pathway+Gothic+One&display=swap" rel="stylesheet"> 

  </head>
  <body style="background-image: url(../../assest/pic14.png);">

    <nav class="navbar navbar-expand-lg navbar-light sticky-top "style="background-color:#FDB936 ; ">
        <div class="container-fluid">
          <a class="navbar-brand" href="../../index.html"><img src="../../assest/vblogo.png" href="#home" style="height: 40px; width: 40px;"></a>
          <a class="navbar-brand" href="../login.html">Varieties Bites</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left:80%;">
              <li class="nav-item">
                <a class="nav-link  " aria-current="page" href="logout.php" style="font-size: 25px;">LOGOUT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page"  href="admin.html"><img src="../../assest/user.png" style="height: 40px; width: 40px;"></a>
              </li> 
            </ul>
          </div>
        </div>
      </nav>
      
   
      <div class='box001'>
        <div class='box01'style="height:650px;" >
            <p class='dash' >RESTAURANT DASHBOARD</p>
      <?php
        $pic=$_POST['Email'];

        include('../dbConnect.php');
        mysqli_select_db($conn,"dziya98");

        $picture ="SELECT * FROM varbite_restaurant ";
        $result = $conn->query($picture);
        while($row = $result->fetch_assoc()) {
          if ("".$row["Email"]."" == $pic){
          echo "<p class='dash01'>Hello Hi!</p>";
          echo "<p class='dash01'>".$row["RestaurantName"]."</p>";


          echo "
          <div class='dash' style='margin-top: 10px;'>
          <form method='POST'  action='restaurantMain.php'>
            <input type='hidden' name='Email' value=".$row["Email"].">
            <input class='dash2 no'style='' type='submit' value='ORDER'></input></form>
          </div>
          <div class='dash' style='margin-top: 10px;'>
          <form method='POST'  action='menuList.php'>
          <input type='hidden' name='Email' value=".$row["Email"].">
            <input class='dash2 no'style='' type='submit' href='adminRestUpdate.php' value='MENU LIST'></input></form>
          </div>
          <div class='dash' style='margin-top: 10px;'>
          <form method='POST'  action='addMenu1.php'>
            <input type='hidden' name='Email' value=".$row["Email"].">
            <input class='dash2 no'style='color:black;' type='submit' value='ADD MENU'></input></form>
          </div>
<div class='dash' style='margin-top: 10px;'>
          <form method='POST'  action='delete1.php' >
            <input type='hidden' name='Email' value=".$row["Email"].">
            <input class='dash2 no'style='' type='submit' value='DELETE MENU'></input></form>
          </div>";
          }
        }

      ?>
            
          </div>
          
          <div class='box02'>
           <center><div  class='restPend' >
              <h3 style="color:white; font-size: 40px;
                  font-weight: 900;">ADD MENU</h3>
            </div></center>
            <iframe class='theRest' src="addMenu.php">

            </iframe>
            
           

           
          </div>

       
        
    </div>
      

    
  </body>
</html>