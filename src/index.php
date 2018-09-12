<!DOCTYPE html>
<html>
	<head>
	<?php 
				$path = $_SERVER['DOCUMENT_ROOT'].'/project1/src/html/';
				$path .= 'htmlheader.php';
					 include($path);
		?>

	</head>
	<body>
		<div class="container" style="height:1800px">
			<?php 
				$path1 = $_SERVER['DOCUMENT_ROOT'].'/project1/src/html/';
				$path1 .= 'navigation.php';
					include($path1);
			?>

			<?php 
				$path2 = $_SERVER['DOCUMENT_ROOT'].'/project1/src/html/';
				$path2 .= 'footer.php';
						include($path2);
			?>
		</div>
	</body>
</html>
