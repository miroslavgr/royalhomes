<?php 

$path = $_SERVER['DOCUMENT_ROOT'].'/project1/src/';
$path .= 'databaseConfig.php';
   include($path);

   
function getarFloor()
{
	
	$strBuild="<option selected value="."0".">"."Партер"."</option>";
	$strBuild.="<option value="."1".">"."1-ви"."</option>";
	$strBuild.="<option value="."2".">"."2-ри"."</option>";
	$strBuild.="<option value="."3".">"."3-ти"."</option>";
	$strBuild.="<option value="."4".">"."4-ти"."</option>";
	$strBuild.="<option value="."5".">"."5-ти"."</option>";
	$strBuild.="<option value="."6".">"."6-ти"."</option>";
	$strBuild.="<option value="."7".">"."7-ми"."</option>";
	$strBuild.="<option value="."8".">"."8-ми"."</option>";
	$strBuild.="<option value="."9".">"."9-ти"."</option>";
	$strBuild.="<option value="."10".">"."10-ти"."</option>";
	$strBuild.="<option value="."11".">"."11-ти"."</option>";
	$strBuild.="<option value="."12".">"."12-ти"."</option>";
	$strBuild.="<option value="."13".">"."13-ти"."</option>";
	$strBuild.="<option value="."14".">"."14-ти"."</option>";
	$strBuild.="<option value="."15".">"."15-ти"."</option>";
	$strBuild.="<option value="."16".">"."16-ти"."</option>";
	$strBuild.="<option value="."17".">"."17-ти"."</option>";
	$strBuild.="<option value="."18".">"."18-ти"."</option>";
	$strBuild.="<option value="."19".">"."19-ти"."</option>";
	$strBuild.="<option value="."20".">"."20-ти"."</option>";
	$strBuild.="<option value="."21".">"."21-ви"."</option>";
	$strBuild.="<option value="."22".">"."22-ри"."</option>";
	$strBuild.="<option value="."23".">"."23-ти"."</option>";
	$strBuild.="<option value="."24".">"."24-ти"."</option>";
	$strBuild.="<option value="."25".">"."25-ти"."</option>";
	$strBuild.="<option value="."26".">"."26-ти"."</option>";
	$strBuild.="<option value="."27".">"."27-ми"."</option>";
	$strBuild.="<option value="."28".">"."28-ми"."</option>";
	$strBuild.="<option value="."29".">"."29-ти"."</option>";
	$strBuild.="<option value="."30".">"."30-ти"."</option>";
	$strBuild.='</select>'; 
	return $strBuild;

}

function getAreaTypes()
{
    $conn = getConn();
	$sql = "SELECT * FROM area_type";   
	$result = $conn->query($sql);
	if (mysqli_num_rows($result) > 0)
	{
		// output data of each row
        $row = $result->fetch_assoc();
        $i=1;
        $n=1;
        $strBuild='<div class="col-2"><label>Вид на имот</label><div class="custom-control custom-checkbox">
        <input type="checkbox" name="'.$row["id"].'" class="custom-control-input" id="arType'.$i.'">
        <label class="custom-control-label" for="arType'.$i.'">'.$row["type"].'</label>
      </div>';
        $i++;
      
		while($row = $result->fetch_assoc()) {
            if($n==8)
            {
                $strBuild.='</div><div class="col-2"><br>';
                $n=0;
            }
            $strBuild.='<div class="custom-control custom-checkbox">
            <input type="checkbox" name="'.$row["id"].'" class="custom-control-input" id="arType'.$i.'">
            <label class="custom-control-label" for="arType'.$i.'">'.$row["type"].'</label>
          </div>';
            $i++;
            $n++;
        }
        //last col close
        $strBuild.='</div>';
	} 
	mysqli_close($conn);
	return $strBuild;
}
function getLocation()
{
    $conn = getConn();
    $sql = "SELECT * FROM building_location";   
    $result1 = $conn->query($sql);
	$strBuild=" ";
	if (mysqli_num_rows($result1) > 0)
	{
		// output data of each row
		$row1 = $result1->fetch_assoc();
		$strBuild.="<option selected value=".$row1["id"].">".$row1["location"]."</option>";
		while($row1 = $result1->fetch_assoc()) {
			$strBuild.="<option value=".$row1["id"].">".$row1["location"]."</option>";
		}
	}    
    $strBuild.='<option value="all">Всички</option>
    </select>';
    return $strBuild; 
}

function getBdTypes()
{
    $conn = getConn();
	$sql = "SELECT * FROM building_type";   
	$result = $conn->query($sql);
	if (mysqli_num_rows($result) > 0)
	{
		// output data of each row
        $row = $result->fetch_assoc();
        $i=1;
        $n=1;
        $strBuild='<div class="col-2"><label>Вид на Сграда</label><div class="custom-control custom-checkbox">
        <input type="checkbox" name="'.$row["id"].'" class="custom-control-input" id="bdType'.$i.'">
        <label class="custom-control-label" for="bdType'.$i.'">'.$row["type"].'</label>
      </div>';
        $i++;
      
		while($row = $result->fetch_assoc()) {
            if($n==4)
            {
                $strBuild.='</div><div class="col-2"><br>';
                $n=0;
            }
            $strBuild.='<div class="custom-control custom-checkbox">
            <input type="checkbox" name="'.$row["id"].'" class="custom-control-input" id="bdType'.$i.'">
            <label class="custom-control-label" for="bdType'.$i.'">'.$row["type"].'</label>
          </div>';
            $i++;
            $n++;
        }
        //last col close
        $strBuild.='</div>';
	} 
	mysqli_close($conn);
    return $strBuild;
    
}
function getAct()
{
    $strBuild=' <label class="col-form-label">Акт</label>';
    $strBuild.='<select style="width: 80px" id="bAct16Sale" class="form-control form-control-sm custom-select" name="bAct16Sale">';
    $strBuild.="<option value="."1".">"."1"."</option>";
    $strBuild.="<option value="."2".">"."2"."</option>";
    $strBuild.="<option value="."3".">"."3"."</option>";
    $strBuild.="<option value="."4".">"."4"."</option>";
    $strBuild.="<option value="."5".">"."5"."</option>";
    $strBuild.="<option value="."6".">"."6"."</option>";
    $strBuild.="<option value="."7".">"."7"."</option>";
    $strBuild.="<option value="."8".">"."8"."</option>";
    $strBuild.="<option value="."9".">"."9"."</option>";
    $strBuild.="<option value="."10".">"."10"."</option>";
    $strBuild.="<option value="."11".">"."11"."</option>";
    $strBuild.="<option value="."12".">"."12"."</option>";
    $strBuild.="<option value="."13".">"."13"."</option>";
    $strBuild.="<option value="."14".">"."14"."</option>";
    $strBuild.="<option value="."15".">"."15"."</option>";
    $strBuild.="<option selected value="."16".">"."16"."</option>";
    $strBuild.='</select><br>';
       return $strBuild;
}
function getBdFinishDate()
{
	$strYear;
	$strMonth;

	 $strBuild='<label class="col-form-label">Година</label>';
	 $strBuild.='<select style="width: 100px" class="form-control form-control-sm custom-select" name="bdYearFinish">';
	 $currYear =date("Y");
	 $currYear+=5;
	 $strBuild.="<option selected value=".$currYear.">".$currYear."</option>";
	 $i=0;
	 while($i!=20)
	 {
		$currYear-=1;
		$strBuild.="<option value=".$currYear.">".$currYear."</option>";
		 $i++;
	 }
	 $strBuild.='</select><br>'; 
	 $strBuild.=' <label class="col-form-label">Месец</label>';
	 $strBuild.='<select style="width: 100px" class="form-control form-control-sm custom-select" name="bdMonthFinish">';
	 $strBuild.="<option selected value="."1".">"."Януари"."</option>";
	 $strBuild.="<option value="."2".">"."Февруари"."</option>";
	 $strBuild.="<option value="."3".">"."Март"."</option>";
	 $strBuild.="<option value="."4".">"."Април"."</option>";
	 $strBuild.="<option value="."5".">"."Май"."</option>";
	 $strBuild.="<option value="."6".">"."Юни"."</option>";
	 $strBuild.="<option value="."7".">"."Юли"."</option>";
	 $strBuild.="<option value="."8".">"."Август"."</option>";
	 $strBuild.="<option value="."9".">"."Септември"."</option>";
	 $strBuild.="<option value="."10".">"."Октомври"."</option>";
	 $strBuild.="<option value="."11".">"."Ноември"."</option>";
	 $strBuild.="<option value="."12".">"."Декември"."</option>";
	 $strBuild.='</select>'; 
	 return $strBuild;

}
function saleForms()
{
    echo '
    <form id="areaForm">
    <div class="row">
           
            '.getAreaTypes().'

        <div class="col-3">
            <label>Цена на имота</label>
            <br>
            <label for="arpriceFrom">от</label>
            <input style="width: 80px" type="number" name="arpriceFrom" id="arpriceFrom">
            
            <label for="arpriceTo">до</label>
            <input style="width: 80px" type="number" name="arpriceTo" id="arpriceTo">
            <br>
            <label>Квадратура в кв. метра</label>
            <br>
            <label for="arSMFrom">от</label>
            <input style="width: 80px" type="number" name="arSMFrom" id="arSMFrom">
            
            <label for="arSMTo">до</label>
            <input style="width: 80px" type="number" name="arSMTo" id="arSMTo">
            <label>Местоположение на имота</label>
            <br>
            <label for="arCity">Град</label>
            <select style="width: 100px" id="arFloorFrom" class="form-control form-control-sm custom-select" name="arCity">
                    <option selected value="1">София</option>
            </select>
            <br>
            <label class="col-form-label">Квартал</label>
                <select style="width: 200px" class="form-control form-control-sm custom-select" name="arLocationSale">
            '.getLocation().'
            
        </div>
        <div class="col-3">
            <label>Цена на кв. метър площ</label>
            <br>
            <label for="arpriceSMFrom">от</label>
            <input style="width: 80px" type="number" name="arpriceSMFrom" id="arpriceSMFrom">
            
            <label for="arpriceSMTo">до</label>
            <input style="width: 80px" type="number" name="arpriceSMTo" id="arpriceSMTo">
            <br>
            <label>Етаж</label>
            <br>
            <label for="arFloorFrom">от</label>
            <select style="width: 100px" id="arFloorFrom" class="form-control form-control-sm custom-select" name="arFloorTo">
            '.getarFloor().'
            
            <label for="arFloorTo">до</label>
            <select style="width: 100px" id="arFloorTo" class="form-control form-control-sm custom-select" name="arFloorFrom">
            '.getarFloor().'
            <br><br>
            <label>Сортирай по:</label>

            <select style="width: 150px" id="arFilterBySale" class="form-control form-control-sm custom-select" name="arFilterBySale">
                    <option selected value="1">Най-нови</option>
                    <option value="2">Най-скъпи</option>
                    <option value="3">Най-евтини</option>
                    <option value="4">Най-голяма площ</option>
                    <option value="5">Най-малка площ</option>
            </select>
            <br><br>
            <input class="btn btn-lg btn-info btn-block " type="submit" value="Търсене на имоти">
            
        </div>
    </div>

    </form>
    <form id="buildingForm">
        
        <div class="row">
                
            '.getBdTypes().'

            <div class="col-3">
                <label>Цена на сградата</label>
                <br>
                <label for="bdpriceFrom">от</label>
                <input style="width: 80px" type="number" name="bdpriceFrom" id="bdpriceFrom">
                
                <label for="bdpriceTo">до</label>
                <input style="width: 80px" type="number" name="bdpriceTo" id="bdpriceTo">
                <br>
                <label>Квадратура в кв. метра</label>
                <br>
                <label for="bdSMFrom">от</label>
                <input style="width: 80px" type="number" name="bdSMFrom" id="bdSMFrom">
                
                <label for="bdSMTo">до</label>
                <input style="width: 80px" type="number" name="bdSMTo" id="bdSMTo">
                <label>Местоположение на сградата</label>
                <br>
                <label for="bdCity">Град</label>
                <select style="width: 100px" id="arFloorFrom" class="form-control form-control-sm custom-select" name="bdCity">
                        <option selected value="1">София</option>
                </select>
                <br>
                <label class="col-form-label">Квартал</label>
                  <select style="width: 200px" class="form-control form-control-sm custom-select" name="bdLocationSale">
                '.getLocation().'
            
             </div>
             <div class="col-3">
                <label>Цена на кв. метър площ</label>
                <br>
                <label for="bdpriceSMFrom">от</label>
                <input style="width: 80px" type="number" name="bdpriceSMFrom" id="bdpriceSMFrom">
                
                <label for="bdpriceSMTo">до</label>
                <input style="width: 80px" type="number" name="bdpriceSMTo" id="bdpriceSMTo">
                <br>
                '.getAct().'
                <label>Сортирай по:</label>
                <select style="width: 150px" id="bdFilterBySale" class="form-control form-control-sm custom-select" name="bdFilterBySale">
                        <option selected value="1">Най-нови</option>
                        <option value="2">Най-скъпи</option>
                        <option value="3">Най-евтини</option>
                        <option value="4">Най-голяма площ</option>
                        <option value="5">Най-малка площ</option>
                </select>
                <br>
                <label>Сгради завършени преди:</label><br>
                '.getBdFinishDate().'<br><br>
                <input class="btn btn-lg btn-info btn-block " type="submit" value="Търсене на сгради">
            </div>
        </div>	
   
    </form>';
}
?>