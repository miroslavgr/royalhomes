<?php
$path = $_SERVER['DOCUMENT_ROOT'].'/project1/src/';
$path .= 'databaseConfig.php';
   include($path);
   $conn = getConn();
   if($_SERVER["REQUEST_METHOD"] == "POST") {

    // 1 building ID
      $arBdId = mysqli_real_escape_string($conn,$_POST['arBd']);
      // 2 area type
      $arTpId = mysqli_real_escape_string($conn,$_POST['arTp']);

      $sql = "SELECT * FROM area_type
      WHERE id='$arTpId'; ";

      $result = $conn->query($sql);
      $row = $result->fetch_assoc();
      $arType = $row["type"];
      
      //3 date finish
      $sql = "SELECT * FROM buildings
      WHERE id='$arBdId'; ";

        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
      $dateFinish = $row["finishDate"];
     
      //4 date add = current date
      $currDate = date("Y-m-d H:i:s");
     
      //5 price
      $arPrice = mysqli_real_escape_string($conn,$_POST['arPrice']);
      //6 price sm
      $arPriceSM = mysqli_real_escape_string($conn,$_POST['arPriceSM']);
      //7 square meters
      $arSM = mysqli_real_escape_string($conn,$_POST['arSM']);
      //8 floor
      $arFloor = mysqli_real_escape_string($conn,$_POST['arFloor']);
      //9 act 16
      $arAct16 = $row["act16"];
      //10 City
      $arCity = $row["city"];
      //11 location
      $arLoc = $row["location"];
      //12 address
      $arAddress = mysqli_real_escape_string($conn,$_POST['arAddress']);
      //13 sale/rent
      $arSaleRent = mysqli_real_escape_string($conn,$_POST['arSaleRent']);
      //14 main img

      $mainImgUrl = "images/";

     if(isset($_FILES['arMainImg'])){
        $errors= array();
        $file_name = $_FILES['arMainImg']['name'];
        
        $mainImgUrl.=$file_name;
        
        $file_size = $_FILES['arMainImg']['size'];
        
        $file_tmp = $_FILES['arMainImg']['tmp_name'];
        
        $file_type = $_FILES['arMainImg']['type'];
       
       // $file_ext=strtolower(end(explode('.',$_FILES['arMainImg']['name'])));
        $tmp = explode('.', $_FILES['arMainImg']['name']);
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

      //15 other img

      $otherImageIs=0;
      $otherImageUrl="images/";
 $total = count($_FILES['arOtherImg']['name']);
// Loop through each file
for( $i=0 ; $i < $total ; $i++ ) {

    $errors= array();
        $file_name = $_FILES['arOtherImg']['name'][$i];
        if($file_name!=null)
        {
                $otherImageIs+=1;
            $otherImageUrl.=$file_name;
            if(($i+1)!=$total)
            {
                $otherImageUrl.="*images/";
            }
            $file_size = $_FILES['arOtherImg']['size'][$i];
            $file_tmp = $_FILES['arOtherImg']['tmp_name'][$i];
            $file_type = $_FILES['arOtherImg']['type'][$i];
            //$file_ext=strtolower(end(explode('.',$_FILES['arOtherImg']['name'][$i])));
            $tmp = explode('.', $_FILES['arOtherImg']['name'][$i]);
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

      //16 description

      $arDescription = mysqli_real_escape_string($conn,$_POST['arDescription']);


      if($otherImageIs==1)
      {
        $sql = "INSERT INTO areas (bd_id,type,finishDate,addDate,price,price_sm,square_meters,floor,
                                    act16,city,location,address,sale_rent,mainImage,otherImages,description)
            VALUES ('$arBdId','$arType', '$dateFinish','$currDate','$arPrice','$arPriceSM', '$arSM','$arFloor',
                        '$arAct16','$arCity', 
                        '$arLoc','$arAddress', '$arSaleRent', '$mainImgUrl','$otherImageUrl', '$arDescription'); ";
            $conn->query($sql);
     
        }
        else
        {
            $sql = "INSERT INTO areas (bd_id,type,finishDate,addDate,price,price_sm,square_meters,floor,
            act16,city,location,address,sale_rent,mainImage,description)
            VALUES ('$arBdId','$arType', '$dateFinish','$currDate','$arPrice','$arPriceSM', '$arSM','$arFloor',
                '$arAct16','$arCity', 
                '$arLoc','$arAddress', '$arSaleRent', '$mainImgUrl', '$arDescription'); ";

        $conn->query($sql);
        }
    mysqli_close($conn);
    header("location: ../../adminArPage.php"); 
    }  
    
   
?>