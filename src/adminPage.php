
<!DOCTYPE html>
<html>
	<head>
	<?php 
		$path = $_SERVER['DOCUMENT_ROOT'].'/project1/src/html/';
		$path .= 'htmlheader.php';
				include($path);
				include("admin/dbapi.php"); 
		?>
		<script src="admin/dbapijs.js"></script>
	</head>
	<body>
			<?php 
				$path1 = $_SERVER['DOCUMENT_ROOT'].'/project1/src/html/';
				$path1 .= 'navigation.php';
				   include($path1);
			?>
			<!-- Admin table + add/update/delete form -->
			<div>
			<div class="container">
			<h2 class="text-center">Номенклатури</h2>
			<div class="row">
			</div>
				<div class="row">
					<div class="col-sm">
					<?php users();?>
					</div>
					<div class="col-sm">
					<?php buildingType();?>
					</div>
				</div>
				<hr><hr>
				<div class="row">
					<div class="col-sm">
						<?php areaType();?>
					</div>
					<div class="col-sm">
						<?php buildingLocation();?>
					</div>
				</div>
			</div>
					 
			</div>
		<script>
			users();
			buildingType();			
			areaType();	
			buildingLocation();
		</script>
	</body>
</html>