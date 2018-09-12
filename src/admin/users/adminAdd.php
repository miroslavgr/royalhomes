<?php
$path = $_SERVER['DOCUMENT_ROOT'].'/project1/src/';
$path .= 'databaseConfig.php';
   include($path);
   $conn = getConn();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 

      $sql = "INSERT INTO users (username, password)
           VALUES ('$myusername', '$mypassword'); ";
    if ($conn->query($sql) === TRUE) {
        echo "Operation is successfull";
    } else {
        echo "Error operation record: " . $conn->error;
    }
    mysqli_close($conn);
    header("location: ../../adminPage.php"); 
    }  
 
   
?>