<?php
$path = $_SERVER['DOCUMENT_ROOT'].'/project1/src/';
$path .= 'databaseConfig.php';
   include($path);
   $conn = getConn();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $arType = mysqli_real_escape_string($conn,$_POST['arType']);

      $sql = "INSERT INTO area_type (type)
           VALUES ('$arType'); ";
    if ($conn->query($sql) === TRUE) {
        echo "Operation is successfull";
    } else {
        echo "Error operation record: " . $conn->error;
    }
    mysqli_close($conn);
    header("location: ../../adminPage.php"); 
    }  
    
   
?>