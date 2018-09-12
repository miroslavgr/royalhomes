<!DOCTYPE html>
<html>
	<head>
	<?php 
				$path = $_SERVER['DOCUMENT_ROOT'].'/project1/src/html/';
				$path .= 'htmlheader.php';
					 include($path);
		?>

	</head>
    <script src="admin/dbapijs.js"></script>
	<body>
		<div class="container" style="height:1800px">
			<?php 
				$path1 = $_SERVER['DOCUMENT_ROOT'].'/project1/src/html/';
				$path1 .= 'navigation.php';
                    include($path1);
                    include("admin/displayApi.php"); 
			?>
         <p> таблица за продажба</p>
       
            <label class="col-form-label">Имоти/Сгради</label>
            <select id="arOrBdSale" class="form-control form-control-sm custom-select" name="arOrBdSale">
                <option selected value="area">Имоти</option>
                <option value="building">Сгради</option>
            </select>
           <?php saleForms(); ?>
           <br><br>
         <table id="sale-table" class="display" style="width:100%">
					<thead> 	
					</thead>
						
					<tbody>	
					</tbody>
					</table>
			<?php 
				$path2 = $_SERVER['DOCUMENT_ROOT'].'/project1/src/html/';
				$path2 .= 'footer.php';
						include($path2);
			?>
            <script> saleTable(); </script>
		</div>
	</body>
</html>
