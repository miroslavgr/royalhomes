<?php
   $path = $_SERVER['DOCUMENT_ROOT'].'/project1/src/';
   $path .= 'databaseConfig.php';
      include($path);
      $conn = getConn();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
     // $action = $_POST['actionUser'];
      $id = mysqli_real_escape_string($conn,$_POST['id']);
      $arType = mysqli_real_escape_string($conn,$_POST['arType']);

      $sql = "UPDATE area_type
           SET type = '$arType'
           WHERE id = $id; ";
    if ($conn->query($sql) === TRUE) {
        echo "Operation is successfull";
    } else {
        echo "Error operation record: " . $conn->error;
    }
    mysqli_close($conn);
    header("location: ../../adminPage.php");      
    }  
 
   
?>