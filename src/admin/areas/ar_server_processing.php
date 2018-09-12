<?php
 
$table = 'areas';
 
// Table's primary key
$primaryKey = 'id';

$columns = array(
    array( 'db' => 'id', 'dt' => 0 ),
    array( 'db' => 'bd_id',  'dt' => 1 ),
    array( 'db' => 'type',  'dt' => 2 ),
    array( 'db' => 'finishDate', 'dt' => 3 ),
    array( 'db' => 'addDate',  'dt' => 4 ),
    array( 'db' => 'price', 'dt' => 5 ),
    array( 'db' => 'price_sm',  'dt' => 6 ),
    array( 'db' => 'square_meters', 'dt' => 7 ),
    array( 'db' => 'floor', 'dt' => 8 ),
    array( 'db' => 'act16', 'dt' => 9),
    array( 'db' => 'city',  'dt' => 10 ),
    array( 'db' => 'location',  'dt' => 11 ),
    array( 'db' => 'address', 'dt' => 12 ),
    array( 'db' => 'sale_rent',  'dt' => 13,
                    'formatter' => function($d, $row)
                    {
                        if((strcmp("sale",$d))==0)
                        {
                            return "Продаване";
                        }
                    else
                    {
                        return "Под наем";
                    }
                    }),
    array( 'db' => 'mainImage',  'dt' => 14,
                    'formatter' => function($d, $row)
                    {
                        return "<a href='".$d."'><img src='".$d."' height='40' width='52'></a>";
                    } ),
    array( 'db' => 'otherImages',  'dt' => 15,
                    'formatter' => function($d, $row)
                    {
                        if($d!=null)
                        {
                        $imgArr = explode('*', $d);
                      
                        $count = count($imgArr);
                       
                        $strBuild = " ";
                        for($i=0;$i<$count;$i++)
                        {
                            $strBuild.="<a href='".$imgArr[$i]."'><img src='".$imgArr[$i]."' height='40' width='52'></a>".($i+1)."";
                        }
                        return $strBuild;
                    }
                    else
                    {
                        return "Няма";
                    }
                    }),
    array( 'db' => 'description',  'dt' => 16 )
);
 
// SQL server connection information
$sql_details = array(
    'user' => 'root',
    'pass' => 'admin',
    'db'   => 'royalhouse',
    'host' => 'localhost'
);
 
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
 
require( '../ssp.class.php' );
 
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);