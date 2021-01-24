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
  <center><form method="POST" class="loginForm" action="PHP/addFood.php" enctype="multipart/form-data">
          <br>Food Name * <br>
          <input class="form1" type="text" name="foodName" placeholder="Food Name"/>
          <div class="form__group" >
                Food Type<br>
                <input  type="radio" id="foodType" name="foodType" value="Western">
                <label for="Western">Western</label> 
                <input type="radio" id="foodType" name="foodType" value="Traditional"><label
                    for="Traditional">Traditional</label>
                <input type="radio" id="foodType" name="foodType" value="Dessert"><label
                    for="Dessert">Dessert</label>
            </div>
          Description *
          <input class="form1" type="text" name="decs" placeholder="Food Description"/>
          Restaurant Email * <br>
          <input class="form1 " type="text" name="Email" placeholder="Restaurant Email"/> 
          Price *
          <input class="form1 " type="text" name="Price" placeholder="Price"/> <Br>
          Food Image <br>
          <input type="file" name="Pic" id="Pic">
         
          <center><input class="submit" type="submit" value="ADD MENU"/>
          </center>  
        </form></center>