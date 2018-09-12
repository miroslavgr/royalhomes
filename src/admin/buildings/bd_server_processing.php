<?php
 
$table = 'buildings';
 
// Table's primary key
$primaryKey = 'id';

$columns = array(
    array( 'db' => 'id', 'dt' => 0 ),
    array( 'db' => 'type',  'dt' => 1 ),
    array( 'db' => 'finishDate', 'dt' => 2 ),
    array( 'db' => 'addDate',  'dt' => 3 ),
    array( 'db' => 'price', 'dt' => 4),
    array( 'db' => 'price_sm',  'dt' => 5 ),
    array( 'db' => 'square_meters',  'dt' => 6 ),
    array( 'db' => 'act16', 'dt' => 7),
    array( 'db' => 'city',  'dt' => 8 ),
    array( 'db' => 'location',  'dt' => 9 ),
    array( 'db' => 'address', 'dt' => 10 ),
    array( 'db' => 'sale_rent',  'dt' => 11,
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
    array( 'db' => 'mainImage',  'dt' => 12,
                    'formatter' => function($d, $row)
                    {
                        if($d!=null)
                        {
                        return "<a href='".$d."'><img src='".$d."' height='40' width='52'></a>";
                        }
                        else
                        {
                            return "Няма";
                        }
                    } ),
    array( 'db' => 'otherImages',  'dt' => 13,
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
    array( 'db' => 'description',  'dt' => 14 )
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