<?php
      $path = $_SERVER['DOCUMENT_ROOT'].'/project1/src/';
      $path .= 'databaseConfig.php';
         include($path);
         $conn = getConn();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT * FROM users WHERE username = '$myusername' and password = '$mypassword'";   
      $result = $conn->query($sql);
      if (mysqli_num_rows($result) > 0) {
         $_SESSION['isAdmin']=  $myusername; 
         header("location: ../adminPage.php");   
         }
       else {
         $error = "Your Login Name or Password is invalid";
         mysqli_close($conn);
         header("location: ../admin.php"); 
        } 
       
        
    }  
 
   
?>