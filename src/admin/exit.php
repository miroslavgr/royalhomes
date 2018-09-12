<?php
     if(isset($_SESSION['isAdmin'])){
        unset($_SESSION['isAdmin']);
    }
    
    header("location: ../index.php");  
    
?>