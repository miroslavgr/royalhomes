<?php
   $path = $_SERVER['DOCUMENT_ROOT'].'/project1/src/';
   $path .= 'databaseConfig.php';
      include($path);
      $conn = getConn();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $id = mysqli_real_escape_string($conn,$_POST['id']);
      
      $sql = "DELETE FROM building_type
      WHERE id='$id'; ";
    if ($conn->query($sql) === TRUE) {
        echo "Operation is successfull";
    } else {
        echo "Error operation record: " . $conn->error;
    }
    mysqli_close($conn);
    header("location: ../../adminPage.php");     
    }  
 
   
?>