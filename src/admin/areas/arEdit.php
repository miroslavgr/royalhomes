<?php
   $path = $_SERVER['DOCUMENT_ROOT'].'/project1/src/';
   $path .= 'databaseConfig.php';
      include($path);
      $conn = getConn();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
     // $action = $_POST['actionUser'];
     //0 ar id
      $id = mysqli_real_escape_string($conn,$_POST['id']);
      //1 bd id
      $arBdId = mysqli_real_escape_string($conn,$_POST['arBd']); 
        //2 ar type
      $arTypeId = mysqli_real_escape_string($conn,$_POST['arTp']); 

      $sql = "SELECT * FROM area_type
      WHERE id='$arTypeId'; ";

      $result = $conn->query($sql);
      $row = $result->fetch_assoc();
      $arType = $row["type"];

      //3 date finish
      $sql = "SELECT * FROM buildings
      WHERE id='$arBdId'; ";

        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
      $dateFinish = $row["finishDate"];

      //4 date current ! ! 

      //5 price
      $arPrice = mysqli_real_escape_string($conn,$_POST['arPriceEdit']);
      //6 pricesm
      $arPriceSM = mysqli_real_escape_string($conn,$_POST['arPriceSMEdit']); 
      //7 squre meters
      $arSM = mysqli_real_escape_string($conn,$_POST['arSMEdit']);
      //8 floor
      $arFloor = mysqli_real_escape_string($conn,$_POST['arFloor']); 
     //9 act 16
        $arAct16 = $row["act16"];
        //10 City
        $arCity = $row["city"];
        //11 location
        $arLoc = $row["location"];
      //12 arAddres
      $arAddress = mysqli_real_escape_string($conn,$_POST['arAddress']);
      //13 salerent
      $arSaleRent = mysqli_real_escape_string($conn,$_POST['arSaleRent']); 
      // 16 description
      $arDescription = mysqli_real_escape_string($conn,$_POST['arDescription']); 

      $mainImageIs=0;
      $mainImgUrl = "images/";
    
     if(isset($_FILES['arMainImgEdit'])){
        $errors= array();
        $file_name = $_FILES['arMainImgEdit']['name'];
        if($file_name!=null)
        {
            $mainImageIs+=1;
            $mainImgUrl.=$file_name;
       
            $file_size = $_FILES['arMainImgEdit']['size'];
            
            $file_tmp = $_FILES['arMainImgEdit']['tmp_name'];
            
            $file_type = $_FILES['arMainImgEdit']['type'];
           
           // $file_ext=strtolower(end(explode('.',$_FILES['arMainImgEdit']['name'])));
            $tmp = explode('.', $_FILES['arMainImgEdit']['name']);
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

      //15 other img

      $otherImageIs=0;
      $otherImageUrl="images/";
        $total = count($_FILES['arOtherImgEdit']['name']);
        // Loop through each file
        for( $i=0 ; $i < $total ; $i++ ) {

            $errors= array();
                $file_name = $_FILES['arOtherImgEdit']['name'][$i];
                if($file_name!=null)
                {
                    $otherImageIs+=1;

                    $otherImageUrl.=$file_name;
                if(($i+1)!=$total)
                {
                    $otherImageUrl.="*images/";
                }
                $file_size = $_FILES['arOtherImgEdit']['size'][$i];
                $file_tmp = $_FILES['arOtherImgEdit']['tmp_name'][$i];
                $file_type = $_FILES['arOtherImgEdit']['type'][$i];
                //$file_ext=strtolower(end(explode('.',$_FILES['arOtherImg']['name'][$i])));
                $tmp = explode('.', $_FILES['arOtherImgEdit']['name'][$i]);
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


    if(($mainImageIs==0)&&($otherImageIs==0))
    {
        $sql = "UPDATE areas
        SET bd_id = '$arBdId', type= '$arType', finishDate = '$dateFinish', price = '$arPrice', price_sm = '$arPriceSM', square_meters = '$arSM',
         floor = '$arFloor', act16 = '$arAct16', city = '$arCity', location = '$arLoc', address = '$arAddress', sale_rent = '$arSaleRent',
         description = '$arDescription'
        WHERE id = $id; ";
        $conn->query($sql);
    }
    elseif(($mainImageIs!=0)&&($otherImageIs==0))
    {
        $sql = "UPDATE areas
        SET bd_id = '$arBdId', type= '$arType', finishDate = '$dateFinish', price = '$arPrice', price_sm = '$arPriceSM', square_meters = '$arSM',
         floor = '$arFloor', act16 = '$arAct16', city = '$arCity', location = '$arLoc', address = '$arAddress', sale_rent = '$arSaleRent',
        mainImage = '$mainImgUrl', description = '$arDescription'
        WHERE id = $id; ";
        $conn->query($sql);
       // echo "Error operation record: " . $conn->error;
     
    }
    elseif(($mainImageIs==0)&&($otherImageIs!=0))
    {
        $sql = "UPDATE areas
        SET bd_id = '$arBdId', type= '$arType', finishDate = '$dateFinish', price = '$arPrice', price_sm = '$arPriceSM', square_meters = '$arSM',
         floor = '$arFloor', act16 = '$arAct16', city = '$arCity', location = '$arLoc', address = '$arAddress', sale_rent = '$arSaleRent',
        otherImages = '$otherImageUrl', description = '$arDescription'
        WHERE id = $id; ";
        $conn->query($sql);
    }
    elseif(($mainImageIs!=0)&&($otherImageIs!=0))
    {
        $sql = "UPDATE areas
        SET bd_id = '$arBdId', type= '$arType', finishDate = '$dateFinish', price = '$arPrice', price_sm = '$arPriceSM', square_meters = '$arSM',
         floor = '$arFloor', act16 = '$arAct16', city = '$arCity', location = '$arLoc', address = '$arAddress', sale_rent = '$arSaleRent',
         mainImage = '$mainImgUrl', otherImages = '$otherImageUrl', description = '$arDescription'
        WHERE id = $id; ";
        $conn->query($sql);
    
    }
    mysqli_close($conn);
    header("location: ../../adminArPage.php");      
    }  
 
   
?>