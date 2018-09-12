
<?php
 
 /*
   IF SESSION[isFilter]
   $data =  SESSION[isFilter];
   else
        load all areas and buildings for sale
        SESSION[arBdSale]

    
 */

$data;
 if(isset(SESSION[saleFilter])
 {
  $data = SESSION[saleFilter];
 }
 else
 {
  sql areas where sale_rent == sale
  $data=result_set;
 }
    
 $data = array(
    array('Name'=>'parvez', 'Empid'=>11, 'Salary'=>101),
    array('Name'=>'alam', 'Empid'=>1, 'Salary'=>102),
    array('Name'=>'phpflow', 'Empid'=>21, 'Salary'=>103) 
    );
                
    
    $results = array(
    "sEcho" => 1,
           "iTotalRecords" => count($data),
           "iTotalDisplayRecords" => count($data),
             "aaData"=>$data);

    
   echo json_encode($results);
 ?>
