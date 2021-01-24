<?php
$foodName=$_POST["foodName"];
$typeFood=$_POST["foodType"];
$decs=$_POST["decs"];
$email=$_POST["Email"];
$price=$_POST['Price'];
$pic=basename($_FILES["Pic"]['name']);

include_once("../../dbConnect.php");
mysqli_select_db($conn,"dziya98");

$query="INSERT INTO varbite_foodmenu (foodName, foodType,decs,Email,foodPic,Price) VALUES ('$foodName', '$typeFood','$decs','$email','$pic',$price)";
      
  $run_query=mysqli_query($conn,$query);
  
  if($run_query){
      echo"<script>alert('ADD SUCCESS')</script>";
      
  }
  else{
      echo"<script>alert('ADD UNSUCCESS')</script>";
      header("Refresh:0, url='../addMenu.php'");
  }
//
$target_dir = "../../../foodPic/";
$target_file = $target_dir . basename($_FILES["Pic"]['name']);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }
  }
  
  // Check if file already exists
  if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  }
  
  // Check file size
 
  
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }
  
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["Pic"]["tmp_name"], $target_file)) {
    //   echo "The file ". htmlspecialchars( basename( $_FILES["Pic"]["name"])). " has been uploaded.";
    	header("Refresh:0, url='../addMenu.php'");
  	
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }
  



?>
