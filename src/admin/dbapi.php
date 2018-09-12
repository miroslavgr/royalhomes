<?php 

$path = $_SERVER['DOCUMENT_ROOT'].'/project1/src/';
$path .= 'databaseConfig.php';
   include($path);


function users()
{
	echo ' <div>
				<h4 class="text-center">Брокери</h4>
				<th><button type="button" class="btn" data-toggle="modal" data-target="#userModalAdd" data-whatever="add">Нов Елемент</button></th>
					<th><button type="button" id="editModalBt" class="btn disabled" data-toggle="modal" data-target="#userModalEdit" data-whatever="edit">Редактиране</button> </th>
					<th><button type="button" id="deleteModalBt" class="btn disabled">Изтриване</button> </th>
					<table id="users-table" class="display" style="width:100%">
					<thead> 
							<tr>
							<th class="text-center">Id</th>
							<th class="text-center">Username</th>
							<th class="text-center">Password</th>   
							</tr>
						</thead>
						
					<tbody>	
					</tbody>
					</table>
						<!-- Admin table + add/update/delete form -->	
				</div>
					<!-- START MODDLE Add -->
					<div class="modal fade" id="userModalAdd" tabindex="-1" role="dialog" aria-labelledby="userModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="userModallLabelAdd">New message</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
							    </div>
 								<div class="modal-body">
									<form id="modalFormAdd" method="POST" action="/project1/src/admin/users/adminAdd.php">
										<div class="form-group">
											<label for="username" class="col-form-label">Username:</label>
											<input type="text" name="username" class="form-control" id="usernameAdd">
										</div>
										<div class="form-group">
											<label for="password" class="col-form-label">Password:</label>
											<input type="password" name="password" class="form-control" id="passwordAdd">
										</div>
										<div class="modal-footer">
											<button type="button" id="submitFormAdd" class="btn btn-primary" data-save="modal" >Запис</button>
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Отказ</button>
										</div>
									</form>
								</div>
						    </div>
							
					    </div>
					</div>
									<!-- END MOODLE Add -->
									<!-- START MODDLE Edit -->
					<div class="modal fade" id="userModalEdit" tabindex="-1" role="dialog" aria-labelledby="userModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="userModallLabelEdit">New message</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
							    </div>
 								<div class="modal-body">
									<form id="modalFormEdit" method="POST" action="/project1/src/admin/users/adminEdit.php">
									<div class="form-group">
										<label for="username" class="col-form-label">Id:</label>
										<input type="text" name="id" readonly class="form-control" id="idEdit">
									</div>
									<div class="form-group">
										<label for="username" class="col-form-label">Username:</label>
										<input type="text" name="username" class="form-control" id="usernameEdit">
									</div>
									<div class="form-group">
										<label for="password" class="col-form-label">Password:</label>
										<input type="password" name="password" class="form-control" id="passwordEdit">
									</div>
									<div class="modal-footer">
										<button type="button" id="submitFormEdit" class="btn btn-primary" data-save="modal" >Промяна</button>
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Отказ</button>
									</div>
									</form>
								</div>
						    </div>
							
					    </div>
					</div>
									<!-- END MOODLE edit -->';
            
            
}

function buildingType()
{

	echo  '<div class="float-left">
				<h4 class="text-center">Вид на сграда</h4>
				<th><button type="button" class="btn" data-toggle="modal" data-target="#bdTypeModalAdd" data-whatever="add">Нов Елемент</button></th>
					<th><button type="button" id="bdTypeeditModalBt" class="btn disabled" data-toggle="modal" data-target="#bdTypeModalEdit" data-whatever="edit">Редактиране</button> </th>
					<th><button type="button" id="bdTypedeleteModalBt" class="btn disabled">Изтриване</button> </th>
					<table id="bdType-table" class="display" style="width:100%">
					<thead> 
							<tr>
							<th class="text-center">Номер</th>
							<th class="text-center">Тип на сграда</th>
							</tr>
						</thead>
						
					<tbody>	
					</tbody>
					</table>
						<!-- Admin table + add/update/delete form -->	
				</div>
					<!-- START MODDLE Add -->
					<div class="modal fade" id="bdTypeModalAdd" tabindex="-1" role="dialog" aria-labelledby="bdTypeModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="bdTypeModallLabelAdd">New message</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
							    </div>
 								<div class="modal-body">
									<form id="bdTypemodalFormAdd" method="POST" action="/project1/src/admin/buildingType/bdTypeAdd.php">
										<div class="form-group">
											<label for="bdTypeAdd" class="col-form-label">Тип на сграда:</label>
											<input type="text" name="bdType" class="form-control" id="bdTypeAdd">
										</div>
										<div class="modal-footer">
											<button type="button" id="bdTypesubmitFormAdd" class="btn btn-primary" data-save="modal" >Запис</button>
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Отказ</button>
										</div>
									</form>
								</div>
								
						    </div>
							
					    </div>
					</div>
									<!-- END MOODLE Add -->
									<!-- START MODDLE Edit -->
					<div class="modal fade" id="bdTypeModalEdit" tabindex="-1" role="dialog" aria-labelledby="bdTypeModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="bdTypeModallLabelEdit">New message</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
							    </div>
 								<div class="modal-body">
									<form id="bdTypemodalFormEdit" method="POST" action="/project1/src/admin/buildingType/bdTypeEdit.php">
										<div class="form-group">
											<label for="bdTypeidEdit" class="col-form-label">Номер:</label>
											<input type="text" name="id" readonly class="form-control" id="bdTypeidEdit">
										</div>
										<div class="form-group">
											<label for="bdTypeEdit" class="col-form-label">Тип на сграда:</label>
											<input type="text" name="bdType" class="form-control" id="bdTypeEdit">
										</div>
										<div class="modal-footer">
											<button type="button" id="bdTypesubmitFormEdit" class="btn btn-primary" data-save="modal" >Промяна</button>
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Отказ</button>
										</div>
									</form>
								</div>
							
						    </div>
							
					    </div>
					</div>
                                    <!-- END MOODLE edit --> ';
}

function areaType()
{

	echo  '<div class="float-left">
				<h4 class="text-center">Вид на имот</h4>
				<th><button type="button" class="btn" data-toggle="modal" data-target="#arTypeModalAdd" data-whatever="add">Нов Елемент</button></th>
					<th><button type="button" id="arTypeeditModalBt" class="btn disabled" data-toggle="modal" data-target="#arTypeModalEdit" data-whatever="edit">Редактиране</button> </th>
					<th><button type="button" id="arTypedeleteModalBt" class="btn disabled">Изтриване</button> </th>
					<table id="arType-table" class="display" style="width:100%">
					<thead> 
							<tr>
							<th class="text-center">Номер</th>
							<th class="text-center">Вид на имот</th>
							</tr>
						</thead>
						
					<tbody>	
					</tbody>
					</table>
						<!-- Admin table + add/update/delete form -->	
				</div>
					<!-- START MODDLE Add -->
					<div class="modal fade" id="arTypeModalAdd" tabindex="-1" role="dialog" aria-labelledby="arTypeModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="arTypeModallLabelAdd">New message</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
							    </div>
 								<div class="modal-body">
									<form id="arTypemodalFormAdd" method="POST" action="/project1/src/admin/areaType/arTypeAdd.php">
										<div class="form-group">
											<label for="arTypeAdd" class="col-form-label">Вид на имот:</label>
											<input type="text" name="arType" class="form-control" id="arTypeAdd">
										</div>
										<div class="modal-footer">
											<button type="button" id="arTypesubmitFormAdd" class="btn btn-primary" data-save="modal" >Запис</button>
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Отказ</button>
										</div>
									</form>
								</div>
						    </div>
							
					    </div>
					</div>
									<!-- END MOODLE Add -->
									<!-- START MODDLE Edit -->
					<div class="modal fade" id="arTypeModalEdit" tabindex="-1" role="dialog" aria-labelledby="arTypeModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="arTypeModallLabelEdit">New message</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
							    </div>
 								<div class="modal-body">
									<form id="arTypemodalFormEdit" method="POST" action="/project1/src/admin/areaType/arTypeEdit.php">
										<div class="form-group">
											<label for="arTypeidEdit" class="col-form-label">Номер:</label>
											<input type="text" name="id" readonly class="form-control" id="arTypeidEdit">
										</div>
										<div class="form-group">
											<label for="arTypeEdit" class="col-form-label">Вид на имот:</label>
											<input type="text" name="arType" class="form-control" id="arTypeEdit">
										</div>
										<div class="modal-footer">
											<button type="button" id="arTypesubmitFormEdit" class="btn btn-primary" data-save="modal" >Промяна</button>
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Отказ</button>
										</div>
									</form>
								</div>
						    </div>
							
					    </div>
					</div>
                                    <!-- END MOODLE edit --> ';
}

function buildingLocation()
{

	echo ' <div class="float-left">
				<h4 class="text-center">Локация на сграда</h4>
				<th><button type="button" class="btn" data-toggle="modal" data-target="#bdLocModalAdd" data-whatever="add">Нов Елемент</button></th>
					<th><button type="button" id="bdLoceditModalBt" class="btn disabled" data-toggle="modal" data-target="#bdLocModalEdit" data-whatever="edit">Редактиране</button> </th>
					<th><button type="button" id="bdLocdeleteModalBt" class="btn disabled">Изтриване</button> </th>
					<table id="bdLoc-table" class="display" style="width:100%">
					<thead> 
							<tr>
							<th class="text-center">Номер</th>
							<th class="text-center">Град</th>
							<th class="text-center">Квартал</th>
							</tr>
						</thead>
						
					<tbody>	
					</tbody>
					</table>
						<!-- Admin table + add/update/delete form -->	
				</div>
					<!-- START MODDLE Add -->
					<div class="modal fade" id="bdLocModalAdd" tabindex="-1" role="dialog" aria-labelledby="bdLocModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="bdLocModallLabelAdd">New message</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
							    </div>
 								<div class="modal-body">
									<form id="bdLocmodalFormAdd" method="POST" action="/project1/src/admin/buildingLocation/bdLocAdd.php">
										<div class="form-group">
											<label for="bdCityAdd" class="col-form-label">Град:</label>
											<input type="text" name="bdCity" class="form-control" id="bdCityAdd">
										</div>
										<div class="form-group">
											<label for="bdLocAdd" class="col-form-label">Квартал:</label>
											<input type="text" name="bdLoc" class="form-control" id="bdLocAdd">
										</div>
										<div class="modal-footer">
											<button type="button" id="bdLocsubmitFormAdd" class="btn btn-primary" data-save="modal" >Запис</button>
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Отказ</button>
										</div>
									</form>
								</div>
						    </div>
							
					    </div>
					</div>
									<!-- END MOODLE Add -->
									<!-- START MODDLE Edit -->
					<div class="modal fade" id="bdLocModalEdit" tabindex="-1" role="dialog" aria-labelledby="bdLocModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="bdLocModallLabelEdit">New message</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
							    </div>
 								<div class="modal-body">
									<form id="bdLocmodalFormEdit" method="POST" action="/project1/src/admin/buildingLocation/bdLocEdit.php">
										<div class="form-group">
											<label for="bdLocidEdit" class="col-form-label">Номер:</label>
											<input type="text" name="id" readonly class="form-control" id="bdLocidEdit">
										</div>
										<div class="form-group">
											<label for="bdCityEdit" class="col-form-label">Град:</label>
											<input type="text" name="bdCity" class="form-control" id="bdCityEdit">
										</div>
										<div class="form-group">
											<label for="bdLocEdit" class="col-form-label">Квартал:</label>
											<input type="text" name="bdLoc" class="form-control" id="bdLocEdit">
										</div>
										<div class="modal-footer">
											<button type="button" id="bdLocsubmitFormEdit" class="btn btn-primary" data-save="modal" >Промяна</button>
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Отказ</button>
										</div>
									</form>
								</div>
						    </div>
							
					    </div>
					</div>
                                    <!-- END MOODLE edit --> ';
}
function getBdActSale()
{
	
  $strBuild='<div class="col"><label class="col-form-label">Продажба/Наем</label>
			  <select id="bSaleRent" class="form-control form-control-sm custom-select" name="bSaleRent">
			  <option selected value="sale">Продажба</option>
			  <option value="rent">Под наем</option>
			  </select></div>';
 $strBuild.='<div class="col"> <label class="col-form-label">Акт</label>';
 $strBuild.='<select id="bAct16" class="form-control form-control-sm custom-select" name="bAct16">';
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
 $strBuild.='</select></div>';
	return $strBuild;
}

function getBdLocation()
{
	$conn = getConn();
	$sql = "SELECT * FROM building_location";   
	$result = $conn->query($sql);
	$strBuild = '<div class="col"><label class="col-form-label">Град</label>';
	$strBuild.='<select id="bCityEdit" class="form-control form-control-sm custom-select" name="bCity">';
	if (mysqli_num_rows($result) > 0)
	{
		// output data of each row
		$row = $result->fetch_assoc();
		$strBuild.="<option selected value=".$row["id"].">".$row["city"]."</option>";
		while($row = $result->fetch_assoc()) {
			$strBuild.="<option value=".$row["id"].">".$row["city"]."</option>";
		}
	}    
	$strBuild.='</select></div>'; 

	mysqli_close($conn);
	$conn1 = getConn();
	$result1 = $conn1->query($sql);
	$strBuild.= '<div class="col"><label class="col-form-label">Квартал</label>';
	$strBuild.='<select id="bLocEdit" class="form-control form-control-sm custom-select" name="bLocation">';
	if (mysqli_num_rows($result1) > 0)
	{
		// output data of each row
		$row1 = $result1->fetch_assoc();
		$strBuild.="<option selected value=".$row1["id"].">".$row1["location"]."</option>";
		while($row1 = $result1->fetch_assoc()) {
			$strBuild.="<option value=".$row1["id"].">".$row1["location"]."</option>";
		}
	}    
	$strBuild.='</select></div>'; 
	$strBuild.='<div class="col"><label for="bAddressAdd" class="col-form-label">Aдрес:</label>
	<input type="text" name="bAddress" class="form-control" id="bAddressAdd"></div>'; 
	mysqli_close($conn1);
	return $strBuild;
}

function getBdFinishDate()
{
	$strYear;
	$strMonth;

	 $strBuild='<div class="col"> <label class="col-form-label">Година</label>';
	 $strBuild.='<select id="bdYear" class="form-control form-control-sm custom-select" name="bYearFinish">';
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
	 $strBuild.='</select> </div>'; 
	 $strBuild.='<div class="col"> <label class="col-form-label">Месец</label>';
	 $strBuild.='<select id="bdMonth" class="form-control form-control-sm custom-select" name="bMonthFinish">';
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
	 $strBuild.='</select></div>'; 
	 return $strBuild;

}
function getBuildingType()
{
	$conn = getConn();
	$sql = "SELECT * FROM building_type";   
	$result = $conn->query($sql);
	$strBuild = '<label class="col-form-label">Тип на сграда</label>';
	$strBuild.='<select id="bdType" class="form-control form-control-sm custom-select" name="bType">';
	if (mysqli_num_rows($result) > 0)
	{
		// output data of each row
		$row = $result->fetch_assoc();
		$strBuild.="<option selected value=".$row["id"].">".$row["type"]."</option>";
		while($row = $result->fetch_assoc()) {
			$strBuild.="<option value=".$row["id"].">".$row["type"]."</option>";
		}
	} 
	$strBuild.='</select>'; 
	mysqli_close($conn);
	return $strBuild;
}
function getBdImage()
{
	$strBuild = '	<div class="form-group">
						<label for="bMainImg">Заглавна Снимка</label>
						<input type="file" name="bMainImg" class="form-control-file" id="bMainImg">
					</div>
					<div class="form-group">
						<label for="bOtherImg">Други снимки</label>
						<input type="file" name="bOtherImg[]" multiple class="form-control-file" id="bOtherImg">
					</div>
				';
	return $strBuild;

}
function getBdImageEdit()
{
	$strBuild = '		<div class="form-group">
						<label for="bMainImg">Заглавна Снимка</label>
						<p id="bMainImageEdit"></p>
						<input type="file" name="bMainImg" class="form-control-file" id="bMainImg">
					</div>
					<div class="form-group">
						<label for="bOtherImg">Други снимки</label>
						<p id="bOtherImageEdit"></p>
						<input type="file" name="bOtherImg[]" multiple class="form-control-file" id="bOtherImg">
					</div>
				';
	return $strBuild;

}

function buildings()
{

	echo ' <div>
				<h4 class="text-center">Сгради</h4>
				<th><button type="button" class="btn" data-toggle="modal" data-target="#bdModalAdd" data-whatever="add">Нов Елемент</button></th>
					<th><button type="button" id="bdeditModalBt" class="btn disabled" data-toggle="modal" data-target="#bdModalEdit" data-whatever="edit">Редактиране</button> </th>
					<th><button type="button" id="bddeleteModalBt" class="btn disabled">Изтриване</button> </th>
					<table id="bd-table" class="display" style="width:100%">
					<thead> 
							<tr>
							<th class="text-center">Номер</th>
							<th class="text-center">Тип</th>
							<th class="text-center">Дата на завършване</th>
							<th class="text-center">Дата на добавяне</th>
							<th class="text-center">Цена</th> 
							<th class="text-center">Цена на кв.м</th>  
							<th class="text-center">Квадратура</th> 
							<th class="text-center">Акт 16</th>
							<th class="text-center">Град</th>
							<th class="text-center">Квартал</th>
							<th class="text-center">Адрес</th>
							<th class="text-center">Продаване/Под наем</th>
							<th class="text-center">Главна снимка</th>
							<th class="text-center">Други снимки</th>
							<th class="text-center">Описание</th>
							</tr>
						</thead>
						
					<tbody>	
					</tbody>
					</table>
						<!-- Admin table + add/update/delete form -->	
				</div>
					<!-- START MODDLE Add -->
					<div class="modal fade" id="bdModalAdd" tabindex="-1" role="dialog" aria-labelledby="bdModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="bdModallLabelAdd">New message</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
							    </div>
 								<div class="modal-body">
									<form id="bdmodalFormAdd" enctype="multipart/form-data" method="POST" action="/project1/src/admin/buildings/bdAdd.php">
									<div class="form-group">
										'.getBuildingType().'
									</div>	
									<label>Дата на завършване</label>
									<div class="row">
										'.getBdFinishDate().'
									</div>	
									<div class="row">	
										<div class="col form-group">
											<label for="bdPrice">Цена</label>
											<input type="number" name="bdPrice" id="bdPrice">
										</div>	
										<div class="col form-group">
											<label for="bdPriceSM">Цена на квадратен метър</label>
											<input type="number" name="bdPriceSM" id="bdPriceSM">
										</div>	
										<div class="col form-group">
											<label for="bdSM">Квадратни метра</label>
											<input type="number" name="bdSM" id="bdSM">
										</div>	
									</div>
									<label>Локация</label>
									<div class="row">
										'.getBdLocation().'
									</div>	
									<div class="row">
										'.getBdActSale().'
									</div>	
										'.getBdImage().'
									<div class="form-group">
										<label for="bDescription">Описание:</label>
										<textarea name="bDescription" class="form-control" id="bDescription" rows="5"></textarea>
									</div>
										
										<div class="modal-footer">
											<button type="button" id="bdsubmitFormAdd" class="btn btn-primary" data-save="modal" >Запис</button>
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Отказ</button>
										</div>
									</form>
								</div>
						    </div>
							
					    </div>
					</div>
									<!-- END MOODLE Add -->
									<!-- START MODDLE Edit -->
					<div class="modal fade" id="bdModalEdit" tabindex="-1" role="dialog" aria-labelledby="bdModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="bdModallLabelEdit">New message</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
							    </div>
 								<div class="modal-body">
									<form id="bdmodalFormEdit" enctype="multipart/form-data" method="POST" action="/project1/src/admin/buildings/bdEdit.php">
										<div class="form-group">
											<label for="bdidEdit" class="col-form-label">Номер:</label>
											<input type="text" name="id" readonly class="form-control" id="bdidEdit">
										</div>
										<div class="form-group">
											'.getBuildingType().'
										</div>	
										<label>Дата на завършване</label>
										<div class="row">
											'.getBdFinishDate().'
										</div>
										<div class="form-group">
											<label for="bdAddDateEdit" class="col-form-label">Дата на добавяне:</label>
											<input type="text" name="bdAddDateEdit" readonly class="form-control" id="bdAddDateEdit">
										</div>
										<div class="row">	
											<div class="col form-group">
												<label for="bdPriceEdit">Цена</label>
												<input type="number" name="bdPrice" id="bdPriceEdit">
											</div>	
											<div class="col form-group">
												<label for="bdPriceSMEdit">Цена на квадратен метър</label>
												<input type="number" name="bdPriceSM" id="bdPriceSMEdit">
											</div>	
											<div class="col form-group">
												<label for="bdSMEdit">Квадратни метра</label>
												<input type="number" name="bdSM" id="bdSMEdit">
											</div>	
										</div>
										<label>Локация</label>
										<div class="row">
											'.getBdLocation().'
										</div>	
										<div class="row">
											'.getBdActSale().'
										</div>	
											'.getBdImageEdit().'
										<div class="form-group">
											<label for="bDescription">Описание:</label>
											<textarea name="bDescription" class="form-control" id="bDescription" rows="5"></textarea>
										</div>
										<div class="modal-footer">
											<button type="button" id="bdsubmitFormEdit" class="btn btn-primary" data-save="modal" >Промяна</button>
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Отказ</button>
										</div>
									</form>
								</div>
						    </div>
							
					    </div>
					</div>
                                    <!-- END MOODLE edit --> ';
}

function getarBuilding()
{
	$conn = getConn();
	$sql = "SELECT * FROM buildings";   
	$result = $conn->query($sql);
	$strBuild = '<label class="col-form-label">Сграда</label>';
	$strBuild.='<select id="arBd" class="form-control form-control-sm custom-select" name="arBd">';
	if (mysqli_num_rows($result) > 0)
	{
		// output data of each row
		$row = $result->fetch_assoc();
		$strBuild.="<option selected value=".$row["id"].">".$row["id"]."</option>";
		while($row = $result->fetch_assoc()) {
			$strBuild.="<option value=".$row["id"].">".$row["id"]."</option>";
		}
	} 
	$strBuild.='</select>'; 
	mysqli_close($conn);
	return $strBuild;
}

function getarType()
{
	$conn = getConn();
	$sql = "SELECT * FROM area_type";   
	$result = $conn->query($sql);
	$strBuild = '<label class="col-form-label">Тип на имот</label>';
	$strBuild.='<select id="arTp" class="form-control form-control-sm custom-select" name="arTp">';
	if (mysqli_num_rows($result) > 0)
	{
		// output data of each row
		$row = $result->fetch_assoc();
		$strBuild.="<option selected value=".$row["id"].">".$row["type"]."</option>";
		while($row = $result->fetch_assoc()) {
			$strBuild.="<option value=".$row["id"].">".$row["type"]."</option>";
		}
	} 
	$strBuild.='</select>'; 
	mysqli_close($conn);
	return $strBuild;
}


function getarFloor()
{
	$strBuild='<label class="col-form-label">Етаж</label>';
	$strBuild.='<select id="arFloor" class="form-control form-control-sm custom-select" name="arFloor">';
	$strBuild.="<option selected value="."0".">"."Партер"."</option>";
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

function getarActSale()
{
	$strBuild='<div class="col"><label class="col-form-label">Продажба/Наем</label>
	<select id="arSaleRent" class="form-control form-control-sm custom-select" name="arSaleRent">
	<option selected value="sale">Продажба</option>
	<option value="rent">Под наем</option>
	</select></div>';	
	return $strBuild;
}

function getarImage()
{
		$strBuild = '	<div class="form-group">
				<label for="arMainImg">Заглавна Снимка</label>
				<input type="file" name="arMainImg" class="form-control-file" id="arMainImg">
			</div>
			<div class="form-group">
				<label for="arOtherImg">Други снимки</label>
				<input type="file" name="arOtherImg[]" multiple class="form-control-file" id="arOtherImg">
			</div>
			';
	return $strBuild;
}


function getarImageEdit()
{
		$strBuild = '	<div class="form-group">
		<label for="arMainImg">Заглавна Снимка</label>
			<p id="arMainImageEdit"></p>
			<input type="file" name="arMainImgEdit" class="form-control-file" id="arMainImg">
		</div>
		<div class="form-group">
			<label for="arOtherImg">Други снимки</label>
			<p id="arOtherImageEdit"></p>
			<input type="file" name="arOtherImgEdit[]" multiple class="form-control-file" id="arOtherImg">
		</div>
		';
	return $strBuild;
}

function areas()
{

	echo ' <div>
				<h4 class="text-center">Имоти</h4>
				<th><button type="button" class="btn" data-toggle="modal" data-target="#arModalAdd" data-whatever="add">Нов Елемент</button></th>
					<th><button type="button" id="areditModalBt" class="btn disabled" data-toggle="modal" data-target="#arModalEdit" data-whatever="edit">Редактиране</button> </th>
					<th><button type="button" id="ardeleteModalBt" class="btn disabled">Изтриване</button> </th>
					<table id="ar-table" class="display" style="width:100%">
					<thead> 
							<tr>
							<th class="text-center">Номер</th>
							<th class="text-center">Номер на сграда</th> 
							<th class="text-center">Тип</th> 
							<th class="text-center">Дата на завършване</th>
							<th class="text-center">Дата на добавяне</th>
							<th class="text-center">Цена</th> 
							<th class="text-center">Цена на кв.м</th>  
							<th class="text-center">Квадратура</th> 
							<th class="text-center">Етаж</th> 
							<th class="text-center">Акт 16</th>
							<th class="text-center">Град</th>
							<th class="text-center">Квартал</th>
							<th class="text-center">Адрес</th> 
							<th class="text-center">Продаване/Под наем</th> 
							<th class="text-center">Главна снимка</th> 
							<th class="text-center">Други снимки</th> 
							<th class="text-center">Описание</th> 
							</tr>
						</thead>
						
					<tbody>	
					</tbody>
					</table>
						<!-- Admin table + add/update/delete form -->	
				</div>
					<!-- START MODDLE Add -->
					<div class="modal fade" id="arModalAdd" tabindex="-1" role="dialog" aria-labelledby="arModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="arModallLabelAdd">New message</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
							    </div>
 								<div class="modal-body">
									<form id="armodalFormAdd" enctype="multipart/form-data" method="POST" action="/project1/src/admin/areas/arAdd.php">
									<div class="form-group">
										'.getarBuilding().'
									</div>	
									<div class="form-group">
										'.getarType().'
									</div>
									<div class="row">	
										<div class="col form-group">
											<label for="arPrice">Цена</label>
											<input type="number" name="arPrice" id="arPrice">
										</div>	
										<div class="col form-group">
											<label for="arPriceSM">Цена на квадратен метър</label>
											<input type="number" name="arPriceSM" id="arPriceSM">
										</div>	
										<div class="col form-group">
											<label for="arSM">Квадратни метра</label>
											<input type="number" name="arSM" id="arSM">
										</div>	
									</div>	
									<div class="form-group">
										'.getarFloor().'
									</div>	
									<div class="row">
									<div class="col form-group">
										<label for="arAddressAdd" class="col-form-label">Aдрес:</label>
										<input type="text" name="arAddress" class="form-control" id="arAddressAdd">
									</div>
										'.getarActSale().'
									</div>	
										'.getarImage().'
									<div class="form-group">
										<label for="arDescription">Описание:</label>
										<textarea name="arDescription" class="form-control" id="arDescription" rows="5"></textarea>
									</div>
										
										<div class="modal-footer">
											<button type="button" id="arsubmitFormAdd" class="btn btn-primary" data-save="modal" >Запис</button>
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Отказ</button>
										</div>
									</form>
								</div>
						    </div>
							
					    </div>
					</div>
									<!-- END MOODLE Add -->
									<!-- START MODDLE Edit -->
					<div class="modal fade" id="arModalEdit" tabindex="-1" role="dialog" aria-labelledby="arModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="arModallLabelEdit">New message</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
							    </div>
 								<div class="modal-body">
									<form id="armodalFormEdit" enctype="multipart/form-data" method="POST" action="/project1/src/admin/areas/arEdit.php">
										<div class="form-group">
											<label for="aridEdit" class="col-form-label">Номер:</label>
											<input type="text" name="id" readonly class="form-control" id="aridEdit">
										</div>
										<div class="form-group">
											'.getarBuilding().'
										</div>	
										<div class="form-group">
											'.getarType().'
										</div>	
										<div class="row">	
											<div class="col form-group">
												<label for="arPriceEdit">Цена</label>
												<input type="number" name="arPriceEdit" id="arPriceEdit">
											</div>	
											<div class="col form-group">
												<label for="arPriceSMEdit">Цена на квадратен метър</label>
												<input type="number" name="arPriceSMEdit" id="arPriceSMEdit">
											</div>	
											<div class="col form-group">
												<label for="arSMEdit">Квадратни метра</label>
												<input type="number" name="arSMEdit" id="arSMEdit">
											</div>	
										</div>	
										<div class="form-group">
											'.getarFloor().'
										</div>	
										<div class="row">
										<div class="col form-group">
											<label for="arAddressEdot" class="col-form-label">Aдрес:</label>
											<input type="text" name="arAddress" class="form-control" id="arAddressEdit">
										</div>
											'.getarActSale().'
										</div>	
											'.getarImageEdit().'
										<div class="form-group">
											<label for="arDescriptionEdit">Описание:</label>
											<textarea name="arDescription" class="form-control" id="arDescriptionEdit" rows="5"></textarea>
										</div>
										<div class="modal-footer">
											<button type="button" id="arsubmitFormEdit" class="btn btn-primary" data-save="modal" >Промяна</button>
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Отказ</button>
										</div>
									</form>
								</div>
						    </div>
							
					    </div>
					</div>
                                    <!-- END MOODLE edit --> ';
}






?>