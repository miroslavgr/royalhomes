<?php
$path = $_SERVER['DOCUMENT_ROOT'].'/project1/src/';
$path .= 'databaseConfig.php';
   include($path);
   $conn = getConn();
   if($_SERVER["REQUEST_METHOD"] == "POST") {

      $bTypeId = mysqli_real_escape_string($conn,$_POST['bType']);
      //sql get bType by id
      $sql = "SELECT * FROM building_type
      WHERE id='$bTypeId'; ";

      $result = $conn->query($sql);
      $row = $result->fetch_assoc();
      $bType = $row["type"];
    
      //date finish
      $bYearFinish = mysqli_real_escape_string($conn,$_POST['bYearFinish']);
      $bMonthFinish = mysqli_real_escape_string($conn,$_POST['bMonthFinish']);
    $bMonth='0';
      if($bMonthFinish<10)
      {
        $bMonth.=$bMonthFinish;
        $bMonthFinish=$bMonth;
      }
      $bDayFinish = "01";
      $dateFinish = $bYearFinish.$bMonthFinish.$bDayFinish;
     
      //date add = current date
      $currDate = date("Y-m-d H:i:s");
     
       //5 price
       $bdPrice = mysqli_real_escape_string($conn,$_POST['bdPrice']);
       //6 price sm
       $bdPriceSM = mysqli_real_escape_string($conn,$_POST['bdPriceSM']);
       //7 square meters
       $bdSM = mysqli_real_escape_string($conn,$_POST['bdSM']);
       //8 floor

      //city location address
      $bCityId = mysqli_real_escape_string($conn,$_POST['bCity']);
     // get city by id sql
        $sql = "SELECT * FROM building_location
        WHERE id='$bCityId'; ";

        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    $bCity = $row["city"];
  
     $bLocationId = mysqli_real_escape_string($conn,$_POST['bLocation']);
     // get location by id sql
        $sql = "SELECT * FROM building_location
        WHERE id='$bLocationId'; ";

        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    $bLocation = $row["location"];
    
     $bAddress = mysqli_real_escape_string($conn,$_POST['bAddress']);
     
     //sale/rent string
     $bSaleRent = mysqli_real_escape_string($conn,$_POST['bSaleRent']);
    
     //int act16
     $bAct16 = mysqli_real_escape_string($conn,$_POST['bAct16']);
     
     //done
     // IMAGES PROCCESS
     // Main image
     $mainImageIs=0;
     $mainImgUrl = "images/";

     if(isset($_FILES['bMainImg'])){
        $errors= array();
        $file_name = $_FILES['bMainImg']['name'];
        if($file_name!=null)
        {
             $mainImageIs+=1;
            $mainImgUrl.=$file_name;
            
            $file_size = $_FILES['bMainImg']['size'];
            
            $file_tmp = $_FILES['bMainImg']['tmp_name'];
            
            $file_type = $_FILES['bMainImg']['type'];
        
        // $file_ext=strtolower(end(explode('.',$_FILES['bMainImg']['name'])));
            $tmp = explode('.', $_FILES['bMainImg']['name']);
            $file_extension = strtolower(end($tmp));
        
            $expensions= array("jpeg","jpg","png");
            
            if(in_array($file_extension,$expensions)=== false){
            $errors[]="extension not allowed, please choose a JPEG or PNG file.";
            }
            
            if($file_size > 6097152) {
            $errors[]='File size must be excately 6 MB';
            }
        
            
            if(empty($errors)==true) {
            move_uploaded_file($file_tmp,"../../images/".$file_name);
            
            echo "Success";
            }else{
            print_r($errors);
            }
        }
     }

     
//other images
$otherImageIs=0;
$otherImageUrl="images/";
 $total = count($_FILES['bOtherImg']['name']);
// Loop through each file
for( $i=0 ; $i < $total ; $i++ ) {

    $errors= array();
        $file_name = $_FILES['bOtherImg']['name'][$i];
        
        if($file_name!=null)
        {
            $otherImageIs+=1;
             $otherImageUrl.=$file_name;
        if(($i+1)!=$total)
        {
            $otherImageUrl.="*images/";
        }
        $file_size = $_FILES['bOtherImg']['size'][$i];
        $file_tmp = $_FILES['bOtherImg']['tmp_name'][$i];
        $file_type = $_FILES['bOtherImg']['type'][$i];
        //$file_ext=strtolower(end(explode('.',$_FILES['bOtherImg']['name'][$i])));
        $tmp = explode('.', $_FILES['bOtherImg']['name'][$i]);
        $file_extension = strtolower(end($tmp));
        
        $expensions= array("jpeg","jpg","png");
        
        if(in_array($file_extension,$expensions)=== false){
           $errors[]="extension not allowed, please choose a JPEG or PNG file.";
        }
        
        if($file_size > 6097152) {
           $errors[]='File size must be excately 6 MB';
        }
        
        if(empty($errors)==true) {
           move_uploaded_file($file_tmp,"../../images/".$file_name);
           echo "Success";
        }else{
           print_r($errors);
        }
    }
}

    //description string big
     $bDescription = mysqli_real_escape_string($conn,$_POST['bDescription']);

     
    if(($mainImageIs==0)&&($otherImageIs==0))
    {
        //debug_to_console($bdSM);
     
        $sql = "INSERT INTO buildings (type,finishDate,addDate,price,price_sm,square_meters,act16,city,location,address,sale_rent,description)
        VALUES ('$bType', '$dateFinish', '$currDate', '$bdPrice', '$bdPriceSM', '$bdSM', '$bAct16','$bCity', 
                 '$bLocation','$bAddress', '$bSaleRent', '$bDescription'); ";
        $conn->query($sql);
       
    }
    elseif(($mainImageIs!=0)&&($otherImageIs==0))
    {

        $sql = "INSERT INTO buildings (type,finishDate,addDate,price,price_sm,square_meters,act16,city,location,address,sale_rent,mainImage,description)
        VALUES ('$bType', '$dateFinish', '$currDate', '$bdPrice', '$bdPriceSM', '$bdSM', '$bAct16','$bCity', 
                 '$bLocation','$bAddress', '$bSaleRent', '$mainImgUrl', '$bDescription'); ";
        $conn->query($sql);

    }
    elseif(($mainImageIs==0)&&($otherImageIs!=0))
    {
        $sql = "INSERT INTO buildings (type,finishDate,addDate,price,price_sm,square_meters,act16,city,location,address,sale_rent,otherImages,description)
        VALUES ('$bType', '$dateFinish', '$currDate', '$bdPrice', '$bdPriceSM', '$bdSM', '$bAct16','$bCity', 
                 '$bLocation','$bAddress', '$bSaleRent', $otherImageUrl', '$bDescription'); ";
        $conn->query($sql);
    }
    elseif(($mainImageIs!=0)&&($otherImageIs!=0))
    {
        $sql = "INSERT INTO buildings (type,finishDate,addDate  ,price,price_sm,square_meters,act16,city,location,address,sale_rent,mainImage,otherImages,description)
        VALUES ('$bType', '$dateFinish', '$currDate', '$bdPrice', '$bdPriceSM', '$bdSM', '$bAct16','$bCity', 
                 '$bLocation','$bAddress', '$bSaleRent', '$mainImgUrl','$otherImageUrl', '$bDescription'); ";
        $conn->query($sql);
    }
    
    mysqli_close($conn);
    header("location: ../../adminBdPage.php"); 
    }  
    
   
?>