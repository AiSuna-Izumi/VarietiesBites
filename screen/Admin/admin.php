<?php
   include("../dbConnect.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['Email']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['Password']); 
      
      $sql = "SELECT Id FROM varbite_adminlogin WHERE Email = '$myusername' and Password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         echo "<script>alert('woi');</script>";
         $_SESSION['login_user'] = $myusername;
         header("location: adminMain.php");
      }else {
         $error = "Your Login Name or Password is invalid";
         echo "<script>alert('$error');</script>";
      }
   }
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
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@1,500&family=Potta+One&family=ZCOOL+XiaoWei&Bodoni+Moda:ital,wght@1,900&Roboto+Mono:ital,wght@1,500&family=Padauk:wght@700&family=Poppins:ital,wght@1,200&display=swap" rel="stylesheet"> <title>Varieties Bite</title>
  </head>
  <body style="background-image: url('../../assest/pic2.png');">

    <nav class="navbar navbar-expand-lg navbar-light fixed-top"style="background-color:#FDB936 ;">
        <div class="container-fluid">
          <a class="navbar-brand" href="../../index.html"><img src="../../assest/vblogo.png" href="#home" style="height: 30px; width: 30px;"></a>
          <a class="navbar-brand" href="../login.html">LOGIN</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left:35%;">
              <li class="nav-item">
                <a class="nav-link  " aria-current="page" href="../customer/custLogin.php">CUSTOMER</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page"  href="admin.php">ADMIN</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../Restaurant/restLogin.php">RESTAURANT MANAGER</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>   

     <center><div class="loginBox">
         <br><br>
         <center><h3 style="color: white;font-family: 'ZCOOL XiaoWei', serif; ">ADMIN</h3></center>
     
         <center><h3 style="color: white;margin-top:20px;font-family: 'ZCOOL XiaoWei', serif; ">Sign In</h3></center>
        
         
         <form method="POST" class="loginForm"  action="">
          Email Address <br>
          <input class="form1" type="text" name="Email" placeholder="Email"/> <Br>
          Password<br>
          <input class="form1" type="password" name="Password" placeholder="password"/><br>
          <center><input class="submit" type	="submit" value="SIGN IN"/>
          </center>  
       
      </form>
     </div></center>

  </body>
</html>