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
			<div class="container">	
				<?php  buildings();?>
			</div>
			<script> buildings(); </script>
	
	</body>
</html>